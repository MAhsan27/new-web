/* =========================================================
   About section — background isometric cube grid (Three.js)
   Same visual effect as approved: black cube fill, purple→blue
   border glow, soft bottom halo, hover-lift with trailing fade.

   Optimization strategy:
   - Three.js (~600KB) loads ONLY when the About section is near
     the viewport (IntersectionObserver, not on initial page load)
   - Render loop pauses completely when the section scrolls off-
     screen (saves CPU/GPU/battery)
   - Skipped entirely on prefers-reduced-motion and small/mobile
     screens -> CSS-only static glow fallback instead
   ========================================================= */
(function () {
  'use strict';

  var container = document.getElementById('aboutBg');
  if (!container) return;

  var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var isNarrow = window.matchMedia('(max-width: 720px)').matches;

  if (prefersReduced || isNarrow) {
    container.classList.add('is-static');
    return;
  }

  var initialised = false;

  function loadThree(callback) {
    if (window.THREE) { callback(); return; }
    var script = document.createElement('script');
    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js';
    script.onload = callback;
    script.onerror = function () { container.classList.add('is-static'); };
    document.body.appendChild(script);
  }

  var loadObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting && !initialised) {
        initialised = true;
        loadObserver.disconnect();
        loadThree(initScene);
      }
    });
  }, { rootMargin: '400px' });
  loadObserver.observe(container);

  var running = false;

  function initScene() {
    var THREE = window.THREE;
    var scene = new THREE.Scene();

    var W = container.clientWidth, H = container.clientHeight;
    var frustumSize = 14;
    var aspect = W / H;
    var camera = new THREE.OrthographicCamera(
      frustumSize * aspect / -2, frustumSize * aspect / 2,
      frustumSize / 2, frustumSize / -2, 0.1, 100
    );
    camera.position.set(10, 10, 10);
    camera.lookAt(0, 0, 0);

    var renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true, powerPreference: 'low-power' });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 1.5));
    renderer.setSize(W, H);
    renderer.setClearColor(0x000000, 0);
    container.appendChild(renderer.domElement);

    // var cols = 18, rows = 11, spacing = 0.62;
    var cols = 20, rows = 18, spacing = 0.62;
    var count = cols * rows;

    var geometry = new THREE.BoxGeometry(0.46, 1, 0.46);
    var colorArray = new Float32Array(count * 3);
    var activArray = new Float32Array(count);
    geometry.setAttribute('instanceColor', new THREE.InstancedBufferAttribute(colorArray, 3));
    geometry.setAttribute('instanceActivation', new THREE.InstancedBufferAttribute(activArray, 1));

    var material = new THREE.ShaderMaterial({
      vertexShader: [
        'attribute vec3 instanceColor;',
        'attribute float instanceActivation;',
        'varying vec3 vColor; varying vec3 vNormal; varying float vActivation; varying vec2 vUv;',
        'void main() {',
        '  vColor = instanceColor; vNormal = normalize(normal); vActivation = instanceActivation; vUv = uv;',
        '  vec4 mvPosition = modelViewMatrix * instanceMatrix * vec4(position, 1.0);',
        '  gl_Position = projectionMatrix * mvPosition;',
        '}'
      ].join('\n'),
      
fragmentShader: [
  'varying vec3 vColor; varying vec3 vNormal; varying float vActivation; varying vec2 vUv;',
  'void main() {',
  '  vec3 lightDir = normalize(vec3(0.5, 1.0, 0.35));',
  '  float diff = clamp(dot(vNormal, lightDir), 0.0, 1.0);',
  '  vec3 baseColor = vec3(0.043, 0.059, 0.169);',                                       // ⬅️ naya
  '  vec3 blackBase = baseColor * (0.88 + 0.22 * diff);',                                // ⬅️ naya
  '  float edgeDist = min(min(vUv.x, 1.0 - vUv.x), min(vUv.y, 1.0 - vUv.y));',
  '  float borderGlow = 1.0 - smoothstep(0.0, 0.09, edgeDist);',
  '  vec3 edgeColor = vColor * borderGlow * vActivation * 1.8;',
  '  gl_FragColor = vec4(blackBase + edgeColor, 1.0);',
  '}'
].join('\n')
    
    });

    var mesh = new THREE.InstancedMesh(geometry, material, count);
    scene.add(mesh);

    function makeGlowTexture() {
      var size = 128;
      var c = document.createElement('canvas');
      c.width = c.height = size;
      var ctx = c.getContext('2d');
      var g = ctx.createRadialGradient(size / 2, size / 2, 0, size / 2, size / 2, size / 2);
      g.addColorStop(0, 'rgba(255,255,255,0.9)');
      g.addColorStop(0.5, 'rgba(255,255,255,0.35)');
      g.addColorStop(1, 'rgba(255,255,255,0)');
      ctx.fillStyle = g;
      ctx.fillRect(0, 0, size, size);
      return new THREE.CanvasTexture(c);
    }
    var glowTex = makeGlowTexture();
    var haloGeo = new THREE.PlaneGeometry(1, 1);
    haloGeo.rotateX(-Math.PI / 2);
    var haloColorArray = new Float32Array(count * 3);
    var haloActivArray = new Float32Array(count);
    haloGeo.setAttribute('instanceColor', new THREE.InstancedBufferAttribute(haloColorArray, 3));
    haloGeo.setAttribute('instanceActivation', new THREE.InstancedBufferAttribute(haloActivArray, 1));

    var haloMaterial = new THREE.ShaderMaterial({
      uniforms: { glowMap: { value: glowTex } },
      transparent: true, depthWrite: false, blending: THREE.AdditiveBlending,
      vertexShader: [
        'attribute vec3 instanceColor; attribute float instanceActivation;',
        'varying vec2 vUv; varying vec3 vColor; varying float vActivation;',
        'void main() {',
        '  vUv = uv; vColor = instanceColor; vActivation = instanceActivation;',
        '  vec4 mvPosition = modelViewMatrix * instanceMatrix * vec4(position, 1.0);',
        '  gl_Position = projectionMatrix * mvPosition;',
        '}'
      ].join('\n'),
      fragmentShader: [
        'uniform sampler2D glowMap;',
        'varying vec2 vUv; varying vec3 vColor; varying float vActivation;',
        'void main() {',
        '  float a = texture2D(glowMap, vUv).a;',
        '  gl_FragColor = vec4(vColor * (0.5 + vActivation * 0.6), a * vActivation * 0.5);',
        '}'
      ].join('\n')
    });
    var halo = new THREE.InstancedMesh(haloGeo, haloMaterial, count);
    scene.add(halo);


      

        // Theme-matched palette — ab swap ho gaya.
    // Primary = orange (theme --orange-*), Accent = blue (theme --blue-*).
    var orangeDeep = new THREE.Color(0xf59500); // --orange-600
    var orange     = new THREE.Color(0xffab1e); // --orange
    var orangeLite = new THREE.Color(0xffd488); // light orange
    var blue       = new THREE.Color(0x4d6cfa); // --blue-500
    var blueDeep   = new THREE.Color(0x2540c9); // --blue-700

    function blendPalette(t) {
      var col = new THREE.Color();
      if (t < 0.35) {
        // deep orange  ->  bright orange
        col.lerpColors(orangeDeep, orange, t / 0.35);
      } else if (t < 0.70) {
        // bright orange  ->  light orange
        col.lerpColors(orange, orangeLite, (t - 0.35) / 0.35);
      } else {
        // light orange  ->  blue (accent corner)
        col.lerpColors(orangeLite, blue, (t - 0.70) / 0.30);
      }
      return col;
    }
    

    var activation = new Float32Array(count).fill(0);
    var gridX = new Float32Array(count);
    var gridZ = new Float32Array(count);
    var regionColor = [];
    var dummy = new THREE.Object3D();

    
        var idx = 0;
    // Grid layout ko 45° Y-axis ke around rotate karo taake cubes
    // top-to-bottom ke bajaye left-to-right spread karein (width max cover).
    // Spacing / cube size same rehti hai — sirf pattern tilt hota hai.
    var rotY = Math.PI / 4;
    var cosR = Math.cos(rotY);
    var sinR = Math.sin(rotY);

    for (var j = 0; j < rows; j++) {
      for (var i = 0; i < cols; i++) {
        var xRaw = (i - (cols - 1) / 2) * spacing;
        var zRaw = (j - (rows - 1) / 2) * spacing;

        var x =  xRaw * cosR + zRaw * sinR;
        var z = -xRaw * sinR + zRaw * cosR;

        gridX[idx] = x; gridZ[idx] = z;

        var u = i / (cols - 1), v = j / (rows - 1);
        var rc = blendPalette((u + v) / 2);
        regionColor.push(rc.r, rc.g, rc.b);

        dummy.position.set(x, 0, z);
        dummy.scale.set(1, 0.03, 1);
        dummy.updateMatrix();
        mesh.setMatrixAt(idx, dummy.matrix);
        colorArray[idx * 3] = 0.05; colorArray[idx * 3 + 1] = 0.05; colorArray[idx * 3 + 2] = 0.06;

        dummy.position.set(x, 0.012, z);
        dummy.scale.set(0.001, 0.001, 0.001);
        dummy.updateMatrix();
        halo.setMatrixAt(idx, dummy.matrix);
        haloColorArray[idx * 3] = rc.r; haloColorArray[idx * 3 + 1] = rc.g; haloColorArray[idx * 3 + 2] = rc.b;
        idx++;
      }
    }
    mesh.instanceMatrix.needsUpdate = true;
    halo.instanceMatrix.needsUpdate = true;

    var raycaster = new THREE.Raycaster();
    var mouseNDC = new THREE.Vector2(9999, 9999);
    var groundPlane = new THREE.Plane(new THREE.Vector3(0, 1, 0), 0);
    var hitPoint = new THREE.Vector3();
    var hasHit = false;

    var aboutSection = document.getElementById('about');
    aboutSection.addEventListener('mousemove', function (e) {
      var rect = container.getBoundingClientRect();
      mouseNDC.x = ((e.clientX - rect.left) / rect.width) * 2 - 1;
      mouseNDC.y = -((e.clientY - rect.top) / rect.height) * 2 + 1;
      hasHit = true;
    });
    aboutSection.addEventListener('mouseleave', function () { hasHit = false; });

    var RADIUS = 2.0, RISE = 0.34, FALL = 0.05, maxHeight = 0.85;

    function tick() {
      if (!running) return;
      requestAnimationFrame(tick);

      if (hasHit) {
        raycaster.setFromCamera(mouseNDC, camera);
        raycaster.ray.intersectPlane(groundPlane, hitPoint);
      }

      for (var k = 0; k < count; k++) {
        var target = 0;
        if (hasHit) {
          var dx = gridX[k] - hitPoint.x, dz = gridZ[k] - hitPoint.z;
          var dist = Math.sqrt(dx * dx + dz * dz);
          if (dist < RADIUS) { var t = 1 - dist / RADIUS; target = t * t * (3 - 2 * t); }
        }
        var speed = target > activation[k] ? RISE : FALL;
        activation[k] += (target - activation[k]) * speed;
        if (activation[k] < 0.001) activation[k] = 0;

        var a = activation[k];
        var eased = a * a * (3 - 2 * a);
        var h = 0.03 + eased * (maxHeight - 0.03);

        dummy.position.set(gridX[k], h / 2, gridZ[k]);
        dummy.scale.set(1, h, 1);
        dummy.updateMatrix();
        mesh.setMatrixAt(k, dummy.matrix);
        activArray[k] = eased;

        var rr = regionColor[k * 3], rg = regionColor[k * 3 + 1], rb = regionColor[k * 3 + 2];
        var glow = 0.5 + eased * 1.3;
        colorArray[k * 3] = 0.05 + (rr * glow - 0.05) * eased;
        colorArray[k * 3 + 1] = 0.05 + (rg * glow - 0.05) * eased;
        colorArray[k * 3 + 2] = 0.06 + (rb * glow - 0.06) * eased;

        var haloScale = 0.3 + eased * 1.1;
        dummy.position.set(gridX[k], 0.012, gridZ[k]);
        dummy.scale.set(haloScale, 1, haloScale);
        dummy.updateMatrix();
        halo.setMatrixAt(k, dummy.matrix);
        haloActivArray[k] = eased;
      }
      mesh.instanceMatrix.needsUpdate = true;
      geometry.attributes.instanceColor.needsUpdate = true;
      geometry.attributes.instanceActivation.needsUpdate = true;
      halo.instanceMatrix.needsUpdate = true;
      haloGeo.attributes.instanceActivation.needsUpdate = true;

      renderer.render(scene, camera);
    }

    running = true;
    tick();

    // Pause the whole loop when the section is off-screen -> saves CPU/GPU/battery
    var visObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting && !running) { running = true; tick(); }
        else if (!entry.isIntersecting) { running = false; }
      });
    }, { threshold: 0.05 });
    visObserver.observe(container);

    window.addEventListener('resize', function () {
      var w = container.clientWidth, h = container.clientHeight;
      var asp = w / h;
      camera.left = frustumSize * asp / -2;
      camera.right = frustumSize * asp / 2;
      camera.top = frustumSize / 2;
      camera.bottom = frustumSize / -2;
      camera.updateProjectionMatrix();
      renderer.setSize(w, h);
    });
  }
})();