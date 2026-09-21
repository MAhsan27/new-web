(function () {
        'use strict';

        // =========================================================
        // 1. HERO SLIDER (Auto image change)
        // =========================================================
        function initHeroSlider() {
            const slides = document.querySelectorAll('.hero-slide');
            if (slides.length < 2) return;

            let currentSlide = 0;
            setInterval(() => {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }, 4000);
        }

        // =========================================================
        // 2. AWARDS SLIDER (Infinite scroll)
        // =========================================================
        function initAwardsSlider() {
            const track = document.getElementById('awardsTrack');
            if (!track) return;

            const originalSet = track.querySelector('.awards-set');
            if (!originalSet) return;

            // ---- Clone the set 2 times (total 3 sets) ----
            // 3 sets ensure karte hain ke loop kabhi khaali na dikhe
            for (let i = 0; i < 2; i++) {
                const clone = originalSet.cloneNode(true);
                clone.setAttribute('aria-hidden', 'true');
                track.appendChild(clone);
            }

            // ---- Start animation function ----
            function startAnimation() {
                let offset = 0;
                let setWidth = originalSet.getBoundingClientRect().width;
                const SPEED = 0.6;   // pixels per frame (adjust: 0.3 slow, 1.0 fast)
                let paused = false;
                let lastTime = performance.now();

                // Recalculate on resize
                window.addEventListener('resize', function () {
                    setWidth = originalSet.getBoundingClientRect().width;
                });

                // Pause on hover
                const slider = document.querySelector('.awards-slider');
                if (slider) {
                    slider.addEventListener('mouseenter', function () { paused = true; });
                    slider.addEventListener('mouseleave', function () { paused = false; });
                }

                function animate(time) {
                    const delta = Math.min(time - lastTime, 32);
                    lastTime = time;

                    if (!paused && setWidth > 0) {
                        offset -= SPEED * (delta / 16);

                        // Reset when first set fully scrolled out
                        if (Math.abs(offset) >= setWidth) {
                            offset += setWidth;
                        }

                        track.style.transform = 'translate3d(' + offset + 'px, 0, 0)';
                    }

                    requestAnimationFrame(animate);
                }

                requestAnimationFrame(animate);
            }

            // ---- Wait for images to load, phir start ----
            const images = track.querySelectorAll('img');
            if (images.length === 0) {
                startAnimation();
                return;
            }

            let loadedCount = 0;
            let started = false;
            const totalImages = images.length;

            function onImageReady() {
                loadedCount++;
                if (loadedCount >= totalImages && !started) {
                    started = true;
                    // Chhota delay taake layout settle ho jaye
                    setTimeout(startAnimation, 100);
                }
            }

            images.forEach(function (img) {
                if (img.complete && img.naturalWidth > 0) {
                    onImageReady();
                } else {
                    img.addEventListener('load', onImageReady, { once: true });
                    img.addEventListener('error', onImageReady, { once: true });
                }
            });

            // Safety timeout — agar koi image bohot slow hai
            setTimeout(function () {
                if (!started) {
                    started = true;
                    startAnimation();
                }
            }, 3000);
        }

        // =========================================================
        // INIT
        // =========================================================
        function initAll() {
            initHeroSlider();
            initAwardsSlider();
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initAll);
        } else {
            initAll();
        }
    })();




    (function () {
        'use strict';

        function initAboutTypewriter() {
            const el = document.querySelector('.about-hero-card h1');
            if (!el) return;

            const text = el.textContent.trim();
            if (!text) return;

            // Heading empty karke cursor add karein
            el.textContent = '';
            el.classList.add('typewriter-heading');

            const cursor = document.createElement('span');
            cursor.className = 'typewriter-cursor';
            cursor.textContent = '|';
            el.appendChild(cursor);

            const textNode = document.createTextNode('');
            el.insertBefore(textNode, cursor);

            // ---- Continuous Loop Typing ----
            let index = 0;
            let deleting = false;
            const TYPING_SPEED = 120;    // Type hone ki speed (ms)
            const DELETING_SPEED = 70;   // Delete hone ki speed (ms)
            const HOLD_TIME = 1500;      // Full text ke baad pause (ms)
            const RESTART_DELAY = 500;   // Delete ke baad pause (ms)

            function tick() {
                if (!deleting) {
                    // ---- Typing ----
                    if (index < text.length) {
                        textNode.textContent += text.charAt(index);
                        index++;
                        setTimeout(tick, TYPING_SPEED);
                    } else {
                        // Typing complete — pause, phir delete shuru
                        deleting = true;
                        setTimeout(tick, HOLD_TIME);
                    }
                } else {
                    // ---- Deleting ----
                    if (index > 0) {
                        textNode.textContent = text.substring(0, index - 1);
                        index--;
                        setTimeout(tick, DELETING_SPEED);
                    } else {
                        // Delete complete — pause, phir typing shuru
                        deleting = false;
                        setTimeout(tick, RESTART_DELAY);
                    }
                }
            }

            // Start the loop
            setTimeout(tick, 600);
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initAboutTypewriter);
        } else {
            initAboutTypewriter();
        }
    })();
 
(function () {
    'use strict';

    // Double initialization rokne ke liye flag
    if (window.__tenetCardsInitialized) return;
    window.__tenetCardsInitialized = true;

    // Detect touch device
    function isTouchDevice() {
        return ('ontouchstart' in window) || 
               (navigator.maxTouchPoints > 0) || 
               window.matchMedia('(hover: none)').matches;
    }

    let activeCard = null;

    function toggleCard(card) {
        if (activeCard === card) {
            card.classList.remove('mobile-active');
            activeCard = null;
            return;
        }
        if (activeCard) {
            activeCard.classList.remove('mobile-active');
        }
        card.classList.add('mobile-active');
        activeCard = card;
    }

    // Event Delegation - document par ek hi listener
    function handleTap(e) {
        if (!isTouchDevice()) return;

        const card = e.target.closest('.tenet-card');
        
        if (card) {
            e.preventDefault();
            toggleCard(card);
        } else if (activeCard) {
            // Bahar tap -> sab close
            activeCard.classList.remove('mobile-active');
            activeCard = null;
        }
    }

    // Ek hi listener document par (hamesha kaam karega)
    document.addEventListener('touchstart', handleTap, { passive: false });

    // Fallback: click event (agar touchstart fail ho)
    document.addEventListener('click', function(e) {
        if (!isTouchDevice()) return;
        if (e.detail === 0) return; // keyboard click skip
        const card = e.target.closest('.tenet-card');
        if (card) {
            // Agar touchstart ne already handle kiya, toh skip
            e.preventDefault();
        }
    });

    // Livewire/Inertia navigation ke baad bhi re-init karein
    document.addEventListener('livewire:navigated', function() {
        activeCard = null;
    });
    document.addEventListener('turbo:load', function() {
        activeCard = null;
    });
    window.addEventListener('popstate', function() {
        activeCard = null;
    });

})();
