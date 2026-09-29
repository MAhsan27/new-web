<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- ⬇️ YEH NAYA BLOCK ⬇️ --}}
<script>
  (function () {
    try {
      var t = localStorage.getItem('rr-theme') || 'dark';
      document.documentElement.setAttribute('data-theme', t);
    } catch (e) {
      document.documentElement.setAttribute('data-theme', 'dark');
    }
  })();
</script>
{{-- ⬆️ YEH NAYA BLOCK ⬆️ --}}

<title>Our Portfolio | Global Tech</title>

 <link rel="stylesheet" href="{{ asset('css/home.css') }}">
 <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
 <link rel="stylesheet" href="{{ asset('css/header.css') }}">
 <link rel="stylesheet" href="{{ asset('css/footer.css') }}">


  <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<!-- <body data-theme="dark"> -->
  <body>
<script>document.body.setAttribute('data-theme', document.documentElement.getAttribute('data-theme') || 'dark');</script>

<!-- ================= HEADER ================= -->
@include('layouts.header')

<!-- ================= HERO ================= -->
<main>
            <div class="cp-hero">
                <div class="cp-hero-inner">
                    <div class="cp-hero-text">
                        <h1>Our  <span class="grad">Portfolio</span></h1>
                        <p>Explore Our Latest Software Development, Game Design, And Creative Branding Projects</p>
                    </div>
                </div>
            </div>


<!-- ================= INTRO ================= -->
<section class="intro">
  <h2>Innovating Digital Experiences</h2>
  <p>Global Tech Is A Premier Digital Product Development Partner Specializing In High-Performance Websites, Scalable SaaS Platforms, And Custom Mobile Applications. We Empower Startups And Growing Businesses Worldwide By Engineering Robust Automation Systems, Advanced Web Architectures, And Seamless User Experiences. Driven By A Commitment To Performance Optimization And Long-Term Scalability, Our Expert Team Transforms Complex Ideas Into Secure, Conversion-Driven Digital Solutions.</p>
</section>

<!-- ================= PORTFOLIO GRID + BANDS ================= -->
<section class="showcase">
  <div class="band band-a"><div class="track" data-text="EXPLORE OUR PORTFOLIO OF CUTTING-EDGE SOFTWARE SOLUTIONS, CUSTOM WEB APPLICATIONS,"></div></div>
  <div class="band band-b"><div class="track" data-text="DISCOVER HOW OUR SERVICES ARE BUILT FOR SPEED, SCALABLE PLATFORMS, SECURE SERVICES AND POWERFUL DIGITAL PRODUCTS,"></div></div>
  <div class="band band-d"><div class="track" data-text="EXPLORE OUR PORTFOLIO OF CUTTING-EDGE SOFTWARE SOLUTIONS, CUSTOM WEB APPLICATIONS,"></div></div>

  <div class="grid" id="grid"></div>
</section>

<!-- <span class="dot" aria-hidden="true"></span> -->

</main>

@include('layouts.footer')

<script>
  /* ---------- Projects ----------
     Apni images/links yahin badalni hain (img = image ka path, link = Read More ka page). */
     const base = [
    { title: 'Native E Donation App', category: 'Mobile App Development', img: 'images/donation-app.png', fit: 'contain', link: '#' },
    { title: 'Play Ground (Esports)', category: 'Design',                 img: 'images/esports.jpg',      link: '#' },
    { title: 'Custom E-Commerce',     category: 'Web Development',        img: 'images/ecommerce.jpg',    link: '#' }
];


  const projects = [...base, ...base, ...base];


    document.getElementById('grid').innerHTML = projects.map(p => `
    <article class="card">
      <div class="card-inner">
        <div class="media">
          <img src="${p.img}" alt="${p.title}" loading="lazy" class="${p.fit === 'contain' ? 'contain-img' : ''}">
        </div>
        <div class="badge">
          <svg viewBox="0 0 24 24" fill="none"><path d="M12 3l2.4 6.2 6.6.5-5 4.3 1.6 6.4L12 16.9 6.4 20.4 8 14 3 9.7l6.6-.5L12 3z" stroke="#FF9F1C" stroke-width="1.5" stroke-linejoin="round"/></svg>
        </div>
        <div class="content">
          <div class="cat">${p.category}</div>
          <h3>${p.title}</h3>
          <div class="foot">
            <a class="view" href="${p.link || '#'}">Read More
              <span class="arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 19L19 5M19 5H9M19 5V15" stroke="#EEF0FA" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            </a>
          </div>
        </div>
      </div>
    </article>`).join('');

  

  /* ---------- Marquee bands: repeat text so the loop is seamless ---------- */
  document.querySelectorAll('.track').forEach(t => {
    const s = `<span>${t.dataset.text}</span>`;
    t.innerHTML = s.repeat(6);
  });
</script>

 <script src="{{ asset('js/home.js') }}" defer></script>
</body>
</html>
