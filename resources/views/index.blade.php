{{--
    resources/views/home.blade.php
    RR Technologies — Home Page
    Self-contained page (no layout dependency assumed). If you already
    have a resources/views/layouts/app.blade.php, swap the <head>/<body>
    wrapper below for @extends('layouts.app') + @section('content').
--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


     {{-- ⬇️ YEH NAYA BLOCK — theme FOUC fix ⬇️ --}}
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

    {{-- ===================== SEO ===================== --}}
    <title>RR Technologies | Web Design, Development & Digital Marketing Agency</title>
    <meta name="description" content="RR Technologies is a web design, web development and digital marketing agency. We build fast, custom websites, e-commerce stores and SEO strategies that grow your traffic.">
    <meta name="keywords" content="web design, web development, e-commerce solutions, SEO, digital marketing, custom application development">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph / social sharing --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="RR Technologies | Web Design, Development & Digital Marketing Agency">
    <meta property="og:description" content="Custom websites, e-commerce solutions and digital marketing that get your business found.">
    <meta property="og:image" content="{{ asset('images/og-cover.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">

    {{-- ===================== Performance ===================== --}}
    {{-- Preconnect before the font request so the DNS/TLS handshake overlaps other loading --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- Only the weights actually used, swap avoids invisible-text flash --}}
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Inter:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Inter:wght@400;500;600&display=swap">

    {{-- External stylesheet -> cached by the browser across pages, unlike inline <style> --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    {{-- 3D model viewer — sirf hero ke liye, lazy-loaded --}}
<script type="module"
        src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
        
    {{-- Structured data for SEO --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "RR Technologies",
        "url": "{{ url('/') }}",
        "description": "Web design, web development, e-commerce and digital marketing agency."
    }
    </script>
</head>
<!-- <body data-theme="dark"> -->
    <body>
<script>document.body.setAttribute('data-theme', document.documentElement.getAttribute('data-theme') || 'dark');</script>

@include('layouts.header')

    {{-- ===================== Header ===================== --}}
    
  

    <main>
        {{-- ===================== Hero ===================== --}}

        {{-- ===================== Hero ===================== --}}
<section class="hero" id="home">

    {{-- corner planet hints (reference jaisa) --}}
    <span class="hero__planet hero__planet--tl" aria-hidden="true"></span>
    <span class="hero__planet hero__planet--tr" aria-hidden="true"></span>
    <span class="hero__planet hero__planet--bl" aria-hidden="true"></span>

    <div class="container">
        <div class="hero__grid">

            {{-- LEFT — text side --}}
            <div class="hero__copy">

                <span class="hero__badge">
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
                        <path d="M12 2l1.9 6.1L20 10l-6.1 1.9L12 18l-1.9-6.1L4 10l6.1-1.9z"/>
                    </svg>
                    Innovative Solutions for a Smarter Tomorrow
                </span>

                <h1 class="hero__title">
                    Welcome To
                    <span class="hero__title-grad">Global Tech&nbsp;Technologies</span>
                </h1>

                <p class="hero__lead">
                    Are You Facing Difficulties With Your Website? Do You Have A Website But Lack Traffic? No Need To Worry.
                </p>

                <div class="hero__cta">
                    <!-- <a href="#contact" class="btn btn--primary"> -->
                        <a href="{{ url('/contact') }}" class="btn btn--primary">
                        Get Started
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none"
                             stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </a>

                    <a href="#portfolio" class="hero__play">
                        <span class="hero__play-btn" aria-hidden="true">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><polygon points="7 5 19 12 7 19"/></svg>
                        </span>
                        <span>Watch Our Work</span>
                    </a>
                </div>
            </div>

            {{-- RIGHT — globe + orbit rings --}}
            <div class="hero__visual">

               <div class="hero__globe-slot">

               <model-viewer id="heroGlobe"
              src="{{ asset('models/globe.glb') }}"
              data-dark-src="{{ asset('models/globe.glb') }}"
              data-light-src="{{ asset('models/globe-white.glb') }}"
              alt="Interactive 3D globe"
              camera-controls
              disable-zoom
              interaction-prompt="none"
              shadow-intensity="0"
              exposure="1"
              loading="eager"
              reveal="auto"
              draco-decoder-location="https://www.gstatic.com/draco/versioned/decoders/1.5.6/"
              style="width:100%;height:100%;">
</model-viewer>
    
</div>

{{-- SVG orbit rings — globe ke around wrap-around effect --}}
<svg class="orbits" viewBox="0 0 400 400" aria-hidden="true" preserveAspectRatio="xMidYMid meet">
    <defs>
        {{-- Blue ring gradient: upar halka (peeche), neeche gehra (aage) --}}
        <linearGradient id="orbBlue" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%"   stop-color="#7aa2ff" stop-opacity="0.10"/>
            <stop offset="35%"  stop-color="#7aa2ff" stop-opacity="0.35"/>
            <stop offset="65%"  stop-color="#7aa2ff" stop-opacity="0.85"/>
            <stop offset="100%" stop-color="#4d6cfa" stop-opacity="1"/>
        </linearGradient>

        {{-- Gold ring gradient --}}
        <linearGradient id="orbGold" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%"   stop-color="#ffab1e" stop-opacity="0.08"/>
            <stop offset="40%"  stop-color="#ffab1e" stop-opacity="0.28"/>
            <stop offset="70%"  stop-color="#ffab1e" stop-opacity="0.80"/>
            <stop offset="100%" stop-color="#ffab1e" stop-opacity="1"/>
        </linearGradient>

        {{-- Soft glow filter --}}
        <filter id="orbGlow" x="-20%" y="-20%" width="140%" height="140%">
            <feGaussianBlur stdDeviation="1.4" result="blur"/>
            <feMerge>
                <feMergeNode in="blur"/>
                <feMergeNode in="SourceGraphic"/>
            </feMerge>
        </filter>
    </defs>

    {{-- Blue ring (ek taraf tilt) --}}

    <ellipse cx="200" cy="200" rx="190" ry="60"
         transform="rotate(-9 200 200)"
         fill="none" stroke="url(#orbBlue)" stroke-width="2.8"
         filter="url(#orbGlow)"/>

<ellipse cx="200" cy="200" rx="196" ry="68"
         transform="rotate(14 200 200)"
         fill="none" stroke="url(#orbGold)" stroke-width="2.4"/>
   
</svg>

<span class="hero__sat hero__sat--blue"   aria-hidden="true"></span>
<span class="hero__sat hero__sat--orange" aria-hidden="true"></span>


                  
            </div>

        </div>
    </div>
</section>
        

        {{-- ===================== About / Why Choose Us #1 ===================== --}}
        <section class="section section--navy" id="about">

            <div class="about__bg" id="aboutBg" aria-hidden="true"></div>


            <div class="container">
                <div class="about__intro">
                    <span class="eyebrow">Why Choose Us?</span>
                    <h2>Our Skilled <b>Team Of Developers</b>, Designers, And Strategists Brings Years Of Hands-On <b>Experience In Building</b> Cutting-Edge Web And Mobile Solutions.</h2>
                    <p>Technology And Business Fused Together Can Bear Fruitful Results Talking In Terms Of Business Flourishment And Success. And This Is What Exactly We Aim To Deliver To Our Esteemed Clients, Offering Our Mix Of Reliability, Capability, And Longevity To Get Your Website Blossoming. We At RR Technologies Excel In The Area Of Digital Marketing, Web Software, Web Development, Web Designing, And Other Web Solutions That You May Consider Availing For Your Website Growth.</p>
                </div>

                <div class="about__body">
                    <div class="about__copy">
                        <p>Are You Facing Difficulties With Your Website? Do You Have A Website But Lack Traffic? No Need To Worry. We At RR Technologies Use Our Technological Expertise Amalgamated With Our Experience To Scoop Out The Right Potion Of Success For Your Firm. We Are Highly Passionate About Our Work And Leave No Stones Unturned To Delight Our Customers With High-Quality Work And Efficient Project Management That Comes As A Surprise Bearing Bounteous Outcomes.</p>
                        <p class="is-clamped">Owing To The Years Of Expertise In Web Development And Web Designing, Our In-House Professionals Have Been Highly Successful In Catering Projects. May It Be Your Small Size Or Large-Scale Business; We Excel In Providing You With The Best Interactive Surfaces.</p>
                        <button type="button" class="show-more">Show More..</button>
                    </div>
                    <div class="about__art">
                        <img src="{{ asset('images/about-section-img.png') }}" alt="Illustration of a workstation with development and design tools" width="560" height="480" loading="lazy" decoding="async">
                    </div>
                </div>

                <div class="stats">
                    <div>
                        <svg class="stats__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 2 3 7v10l9 5 9-5V7l-9-5Z"/><path d="M12 12 3 7m9 5 9-5m-9 5v10"/></svg>
                        <h3>65+</h3>
                        <span>Projects</span>
                    </div>
                    <div>
                        <svg class="stats__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M9 12 5 8l-3 3v3l3 3 4-4Zm6 0 4-4 3 3v3l-3 3-4-4Z"/><path d="M9 12h6"/></svg>
                        <h3>30+</h3>
                        <span>Clients</span>
                    </div>
                    <div>
                        <svg class="stats__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                        <h3>7years+</h3>
                        <span>Experience</span>
                    </div>
                    <div>
                        <svg class="stats__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 21V9l6-4v16M14 21V4l6 3v14"/><path d="M8 12h0M8 16h0M18 10h0M18 14h0M18 18h0"/></svg>
                        <h3>15+</h3>
                        <span>Company</span>
                    </div>
                </div>
            </div>
        </section>

       
        {{-- ===================== Services (Circular Cards v2) ===================== --}}
<section class="section section--black services-new" id="services">
    <div class="container">

        <div class="services-new__heading">
            <span class="eyebrow">Services We Offer</span>
            <h2>We Believe In True Partnership And Thus Get Our <b>Customers</b> A Bang For Their Bucks. There Are Various Areas In Which We Function, Here Are A Few Of Them:</h2>
        </div>

        <div class="services-new__grid">

            {{-- Card 1 — Blue --}}
            <div class="svc-circle-card svc-circle-card--blue">
                <div class="svc-circle-card__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 7h13l3 4v9H4z"/><path d="M4 7l3-4h10"/>
                    </svg>
                </div>
                <div class="svc-circle-card__body">
                    <div class="svc-circle-card__curve"></div>
                    <div class="svc-circle-card__content">
                        <h3>Web Design &amp; Web Development</h3>
                        <p>Custom, responsive websites built for speed, clarity and conversion.</p>
                    </div>
                </div>

                <a class="svc-circle-card__arrow" href="{{ url('/services') }}" aria-label="Explore this service">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
        <line x1="5" y1="12" x2="19" y2="12"/>
        <polyline points="12 5 19 12 12 19"/>
    </svg>
</a>
               
            </div>

            {{-- Card 2 — White --}}
            <div class="svc-circle-card svc-circle-card--white">
                <div class="svc-circle-card__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"/><circle cx="18" cy="21" r="1"/>
                        <path d="M2 2h3l2.4 12.4a2 2 0 0 0 2 1.6h7.2a2 2 0 0 0 2-1.6L21 6H6"/>
                    </svg>
                </div>
                <div class="svc-circle-card__body">
                    <div class="svc-circle-card__curve"></div>
                    <div class="svc-circle-card__content">
                        <h3>E-Commerce Solutions</h3>
                        <p>Scalable online stores with secure payments and live inventory sync.</p>
                    </div>
                </div>



                <a class="svc-circle-card__arrow" href="{{ url('/services') }}" aria-label="Explore this service">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
        <line x1="5" y1="12" x2="19" y2="12"/>
        <polyline points="12 5 19 12 12 19"/>
    </svg>
</a>
             
            </div>

            {{-- Card 3 — Blue --}}
            <div class="svc-circle-card svc-circle-card--blue">
                <div class="svc-circle-card__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7" rx="1.5"/>
                        <rect x="14" y="3" width="7" height="7" rx="1.5"/>
                        <rect x="3" y="14" width="7" height="7" rx="1.5"/>
                        <rect x="14" y="14" width="7" height="7" rx="1.5"/>
                    </svg>
                </div>
                <div class="svc-circle-card__body">
                    <div class="svc-circle-card__curve"></div>
                    <div class="svc-circle-card__content">
                        <h3>Application Development</h3>
                        <p>Tailored software solutions engineered around your unique workflows.</p>
                    </div>
                </div>


                <a class="svc-circle-card__arrow" href="{{ url('/services') }}" aria-label="Explore this service">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
        <line x1="5" y1="12" x2="19" y2="12"/>
        <polyline points="12 5 19 12 12 19"/>
    </svg>
</a>
                
            </div>

            {{-- Card 4 — White --}}
            <div class="svc-circle-card svc-circle-card--white">
                <div class="svc-circle-card__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="7"/>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                    </svg>
                </div>
                <div class="svc-circle-card__body">
                    <div class="svc-circle-card__curve"></div>
                    <div class="svc-circle-card__content">
                        <h3>Search Engine Optimization &amp; Digital Marketing</h3>
                        <p>Data-driven strategies that grow traffic, leads and revenue.</p>
                    </div>
                </div>



                <a class="svc-circle-card__arrow" href="{{ url('/services') }}" aria-label="Explore this service">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
        <line x1="5" y1="12" x2="19" y2="12"/>
        <polyline points="12 5 19 12 12 19"/>
    </svg>
</a>

            </div>

        </div>
    </div>
</section>

        

        {{-- ===================== Why Choose Us #2 — capability cards ===================== --}}
        <section class="section why2">
            <div class="container">
                <div class="why2__intro">
                    <span class="eyebrow">Why Choose Us?</span>
                    <h2>For Your Web Development Needs?</h2>
                    <p>We Have Passion And Love For What We Do &amp; We Don't Believe In Cutting Corners And Setting Wrong Expectations. We Aim At Improving With Each Passing Day And Showcase What We Actually Are In Reality, And We Do Not Pretend In Any Circumstances. There Are Multiple Reasons That Will Make You Fall For Us For Availing Top-Notch Web Development Services. Here Are A Few Of Them</p>
                </div>


                <div class="why2__grid">
    <article class="capability-card">
        <span class="capability-card__icon-wrap">
            <svg class="capability-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="12" cy="8" r="5.5"/>
    <path d="M9.2 12.8 7.5 21l4.5-2.3 4.5 2.3-1.7-8.2"/>
    <path d="M9.7 8 11 9.3 14.3 6"/>
</svg>

        </span>
        <div class="capability-card__body">
            <h3>Experience</h3>
            <p>Experience Counts Is A Common Saying, And Hiring Us Means Hiring Professionals Who Have Years Of Experience To Add On To Their Kitty To Get Your Projects Falling At The Right Place. Also, We Have A Streamlined Project Management System To Cater To Your Project Requisites.</p>
        </div>
    </article>
    <article class="capability-card">
        <span class="capability-card__icon-wrap">
            <svg class="capability-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="9" cy="7.5" r="3.2"/>
    <path d="M3 20v-1.2A4.8 4.8 0 0 1 7.8 14h2.4A4.8 4.8 0 0 1 15 18.8V20"/>
    <path d="M16.5 5.2a3.2 3.2 0 0 1 0 6.2"/>
    <path d="M17.5 14.3a4.8 4.8 0 0 1 3.5 4.6V20"/>
</svg>

        </span>
        <div class="capability-card__body">
            <h3>Dedicated Team</h3>
            <p>Everyone Has Their Own Cup Of Tea To Drink, And Thus We Do Not Mix Up The Different Areas Of Functionality. We Have Dedicated Teams For Designing And Graphics, While Our Web Developers Get The Designing Part Done.</p>
        </div>
    </article>
    <article class="capability-card">
        <span class="capability-card__icon-wrap">
            <svg class="capability-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
    <path d="M10 2h4"/>
    <path d="M12 6v0"/>
    <circle cx="12" cy="14" r="8"/>
    <path d="M12 10v4l3 2"/>
    <path d="m18.5 6.5 1.4-1.4"/>
</svg>

        </span>
        <div class="capability-card__body">
            <h3>Rapid Turnaround Time</h3>
            <p>We Aim At Delivering Quality Work Within Fixed Deadlines And Thus Are Committed To Delivering Solutions When Our Clients Need Them Without Making Them Wait For It And Extend Beyond The Fixed Time Frame.</p>
        </div>
    </article>
    <article class="capability-card">
        <span class="capability-card__icon-wrap">
            <svg class="capability-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
    <path d="M12.6 3.4 20 10.8a2 2 0 0 1 0 2.8l-6.4 6.4a2 2 0 0 1-2.8 0L3.4 12.6V4a.6.6 0 0 1 .6-.6h8.6Z"/>
    <circle cx="8" cy="8" r="1.3" fill="currentColor" stroke="none"/>
</svg>

        </span>
        <div class="capability-card__body">
            <h3>Competitive Pricing</h3>
            <p>Pricing Is One Crucial Factor That Every Business Owner Considers While Hiring A Web Development Company. We Are The Best In The Market And Offer Competitive Pricing Without Cutting Down On Quality.</p>
        </div>
    </article>
</div>
              
            </div>
        </section>

        {{-- ===================== Portfolio ===================== --}}

<section class="section portfolio" id="portfolio">
    <div class="container">

        <div class="portfolio-bento__head">
            <div class="portfolio-bento__head-left">
                <div class="portfolio-bento__eyebrow">Our Portfolio</div>
                <h2>Work That's Moved The <span>Needle</span></h2>
                <p>A selection of platforms, apps and brands we've engineered end-to-end — from first wireframe to production launch.</p>
            </div>
            <div class="portfolio-bento__count">Selected Work — <b>06</b> Projects</div>
        </div>


        {{-- Portfolio filter tabs --}}
<div class="portfolio-filter" role="tablist" aria-label="Portfolio categories">
    <button type="button" class="is-active" data-target="all">
        All Work
        <span class="portfolio-filter__count">06</span>
    </button>
    <button type="button" data-target="ecommerce">
        Ecommerce
        <span class="portfolio-filter__count">01</span>
    </button>
    <button type="button" data-target="wordpress">
        WordPress
        <span class="portfolio-filter__count">01</span>
    </button>
    <button type="button" data-target="logos">
        Logos
        <span class="portfolio-filter__count">01</span>
    </button>
    <button type="button" data-target="graphics">
        Graphics
        <span class="portfolio-filter__count">01</span>
    </button>
    <button type="button" data-target="custom">
        Custom Apps
        <span class="portfolio-filter__count">02</span>
    </button>
</div>

        <div class="portfolio-bento">

            {{-- 1: Featured — Custom E-Commerce --}}
            <!-- <div class="pb-tile pb-tile--big"> -->
                <div class="pb-tile pb-tile--big" data-category="ecommerce">
                <div class="pb-frame" data-tilt>
                    <div class="pb-photo">

                     <img src="{{ asset('images/ecommerce.jpg') }}"
                 alt="Custom E-Commerce storefront project"
                 loading="lazy"
                 decoding="async">
                        
                    </div>
                    <div class="pb-badge">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M4 7h16l-1.5 11.2A2 2 0 0116.5 20h-9a2 2 0 01-2-1.8L4 7z" stroke="#FF9F1C" stroke-width="1.6" stroke-linejoin="round"/><path d="M8 7V5a4 4 0 018 0v2" stroke="#FF9F1C" stroke-width="1.6"/></svg>
                    </div>
                    <div class="pb-dock">
                        <div class="pb-cat">Web Development</div>
                        <h3>Custom E-Commerce</h3>
                        <p>Warehouse-integrated storefront with live stock sync across three fulfilment centres.</p>
                        <div class="pb-row">
                            <span class="pb-view">Read More <span class="pb-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 19L19 5M19 5H9M19 5V15" stroke="#080B1E" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span></span>
                            <span class="pb-year">2025</span>
                        </div>
                    </div>
                    <a class="pb-hitbox" href="#" aria-label="Custom E-Commerce case study"></a>
                </div>
            </div>

            {{-- 2: Play Ground (Esports) — wide --}}
            <!-- <div class="pb-tile pb-tile--wide"> -->
                <div class="pb-tile pb-tile--wide" data-category="graphics">
                <div class="pb-frame" data-tilt>
                    <div class="pb-photo">

                     <img src="{{ asset('images/esports.jpg') }}"
                 alt="Play Ground Esports branding"
                 loading="lazy"
                 decoding="async">
                       
                    </div>
                    <div class="pb-badge">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M6 9h12l1.5 6a3 3 0 01-3 3.5H7.5A3 3 0 014.5 15L6 9z" stroke="#3D7BFF" stroke-width="1.6" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="pb-dock">
                        <div class="pb-cat">Brand &amp; Experience</div>
                        <h3>Play Ground (Esports)</h3>
                        <p>Stage identity and broadcast graphics for a national esports championship series.</p>
                        <div class="pb-row">
                            <span class="pb-view">Read More <span class="pb-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 19L19 5M19 5H9M19 5V15" stroke="#080B1E" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span></span>
                            <span class="pb-year">2025</span>
                        </div>
                    </div>
                    <a class="pb-hitbox" href="#" aria-label="Play Ground case study"></a>
                </div>
            </div>

            {{-- 3: Native E-Donation App — tall --}}
            <!-- <div class="pb-tile pb-tile--tall"> -->
<div class="pb-tile pb-tile--tall" data-category="custom">
            <div class="pb-frame" data-tilt>
                    <div class="pb-photo">

                     <img src="{{ asset('images/donation-app.png') }}"
                 alt="Native E-Donation mobile app screens"
                 loading="lazy"
                 decoding="async">
                        
                    </div>
                    <div class="pb-badge">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M12 21s-7.5-4.6-10-9.2C.5 8 2.4 4.5 6 4.5c2 0 3.4 1.1 4.2 2.2.8-1.1 2.2-2.2 4.2-2.2 3.6 0 5.5 3.5 4 7.3-2.5 4.6-10 9.2-10 9.2z" stroke="#FF9F1C" stroke-width="1.6" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="pb-dock">
                        <div class="pb-cat">Mobile App</div>
                        <h3>Native E-Donation App</h3>
                        <p>Cross-platform giving app with instant checkout and campaign tracking.</p>
                        <div class="pb-row">
                            <span class="pb-view">Read More <span class="pb-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 19L19 5M19 5H9M19 5V15" stroke="#080B1E" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span></span>
                            <span class="pb-year">2025</span>
                        </div>
                    </div>
                    <a class="pb-hitbox" href="#" aria-label="Native E-Donation App case study"></a>
                </div>
            </div>

            {{-- 4: Vantra — small --}}
            <!-- <div class="pb-tile pb-tile--small"> -->
                <div class="pb-tile pb-tile--small" data-category="logos">
                <div class="pb-frame" data-tilt>
                    <div class="pb-photo">


                     <img src="{{ asset('images/portfolio-2.avif') }}"
                 alt="Vantra brand logo design"
                 loading="lazy"
                 decoding="async">
                       
                    </div>
                    <div class="pb-badge">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M12 3l2.4 6.2 6.6.5-5 4.3 1.6 6.4L12 16.9 6.4 20.4 8 14 3 9.7l6.6-.5L12 3z" stroke="#FF9F1C" stroke-width="1.5" stroke-linejoin="round"/></svg>
                    </div>
                    <div class="pb-dock">
                        <div class="pb-cat">Brand Identity</div>
                        <h3>Vantra</h3>
                        <p>A mark built to read as trustworthy at app-icon size.</p>
                        <div class="pb-row">
                            <span class="pb-view">Read More <span class="pb-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 19L19 5M19 5H9M19 5V15" stroke="#080B1E" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span></span>
                            <span class="pb-year">2024</span>
                        </div>
                    </div>
                    <a class="pb-hitbox" href="#" aria-label="Vantra case study"></a>
                </div>
            </div>

            {{-- 5: WordPress — small --}}
            <!-- <div class="pb-tile pb-tile--small"> -->
                <div class="pb-tile pb-tile--small" data-category="wordpress">
                <div class="pb-frame" data-tilt>
                    <div class="pb-photo">


                     <img src="{{ asset('images/portfolio-3.avif') }}"
                 alt="Vantra brand logo design"
                 loading="lazy"
                 decoding="async">
                        
                    </div>
                    <div class="pb-badge">
                        <svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="#3D7BFF" stroke-width="1.6"/><path d="M8 9l4 8 4-8M9 9h6" stroke="#3D7BFF" stroke-width="1.4" stroke-linecap="round"/></svg>
                    </div>
                    <div class="pb-dock">
                        <div class="pb-cat">WordPress</div>
                        <h3>Northfield Realty</h3>
                        <p>Listings site with CRM sync and sub-2s load times.</p>
                        <div class="pb-row">
                            <span class="pb-view">Read More <span class="pb-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 19L19 5M19 5H9M19 5V15" stroke="#080B1E" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span></span>
                            <span class="pb-year">2024</span>
                        </div>
                    </div>
                    <a class="pb-hitbox" href="#" aria-label="Northfield Realty case study"></a>
                </div>
            </div>

            {{-- 6: OpsFlow — wide --}}
            <!-- <div class="pb-tile pb-tile--wide"> -->
                <div class="pb-tile pb-tile--wide" data-category="custom">
                <div class="pb-frame" data-tilt>
                    <div class="pb-photo">


                     <img src="{{ asset('images/portfolio-5.avif') }}"
                 alt="Vantra brand logo design"
                 loading="lazy"
                 decoding="async">
                      
                    </div>
                    <div class="pb-badge">
                        <svg viewBox="0 0 24 24" fill="none"><rect x="4" y="4" width="7" height="7" rx="1.5" stroke="#3D7BFF" stroke-width="1.6"/><rect x="13" y="4" width="7" height="7" rx="1.5" stroke="#3D7BFF" stroke-width="1.6"/><rect x="4" y="13" width="7" height="7" rx="1.5" stroke="#3D7BFF" stroke-width="1.6"/><rect x="13" y="13" width="7" height="7" rx="1.5" stroke="#3D7BFF" stroke-width="1.6"/></svg>
                    </div>
                    <div class="pb-dock">
                        <div class="pb-cat">SaaS Dashboard</div>
                        <h3>OpsFlow Operations Suite</h3>
                        <p>Role-based dashboard replacing four spreadsheets with one live view.</p>
                        <div class="pb-row">
                            <span class="pb-view">Read More <span class="pb-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 19L19 5M19 5H9M19 5V15" stroke="#080B1E" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span></span>
                            <span class="pb-year">2024</span>
                        </div>
                    </div>
                    <a class="pb-hitbox" href="#" aria-label="OpsFlow case study"></a>
                </div>
            </div>

        </div>
    </div>
</section>
       

      
        {{-- ===================== Testimonial ===================== --}}
<section class="section testimonial">
    <span class="testimonial__blob testimonial__blob--left" aria-hidden="true"></span>
    <span class="testimonial__blob testimonial__blob--right" aria-hidden="true"></span>

    {{-- Big background quote marks --}}
    <span class="testimonial__bgquote testimonial__bgquote--left" aria-hidden="true">&ldquo;</span>
    <span class="testimonial__bgquote testimonial__bgquote--right" aria-hidden="true">&rdquo;</span>

    <div class="container">

        {{-- Intro --}}
        <div class="testimonial__intro">
            <span class="testimonial__eyebrow">
                <span class="testimonial__eyebrow-line"></span>
                TESTIMONIALS
                <span class="testimonial__eyebrow-line"></span>
            </span>
            <h2>What Our <span class="accent">Clients Say</span></h2>
            <p>Trusted by leading companies worldwide for reliable manpower solutions and professional recruitment services.</p>
        </div>

        {{-- Cards --}}
        <div class="testimonial__grid">

            <article class="testimonial-card testimonial-card--orange">
                <div class="testimonial-card__head">
                    <span class="testimonial-card__avatar">
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg>
                    </span>
                    <div class="testimonial-card__meta">
                        <h3>Ayesha Khan</h3>
                        <span class="testimonial-card__role">Operations Manager</span>
                        <span class="testimonial-card__divider"></span>
                    </div>
                    <div class="testimonial-card__stars" aria-label="5 out of 5 stars">
                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                    </div>
                </div>
                <p class="testimonial-card__quote">
                    <span class="testimonial-card__qmark testimonial-card__qmark--open" aria-hidden="true">&ldquo;</span>
                    RR Technologies Rebuilt Our Website From Scratch And Our Organic Traffic Doubled Within Three Months. Communication Was Clear And Deadlines Were Always Met.
                    <span class="testimonial-card__qmark testimonial-card__qmark--close" aria-hidden="true">&rdquo;</span>
                </p>
            </article>

            <article class="testimonial-card testimonial-card--blue">
                <div class="testimonial-card__head">
                    <span class="testimonial-card__avatar">
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg>
                    </span>
                    <div class="testimonial-card__meta">
                        <h3>Bilal Ahmed</h3>
                        <span class="testimonial-card__role">Procurement Director</span>
                        <span class="testimonial-card__divider"></span>
                    </div>
                    <div class="testimonial-card__stars" aria-label="5 out of 5 stars">
                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                    </div>
                </div>
                <p class="testimonial-card__quote">
                    <span class="testimonial-card__qmark testimonial-card__qmark--open" aria-hidden="true">&ldquo;</span>
                    The Team Handled Our E-Commerce Migration Smoothly With Zero Downtime. Their Attention To Detail And Post-Launch Support Have Been Excellent.
                    <span class="testimonial-card__qmark testimonial-card__qmark--close" aria-hidden="true">&rdquo;</span>
                </p>
            </article>

        </div>

        {{-- Dots --}}
        <div class="testimonial__dots" aria-hidden="true">
            <span class="is-active"></span>
            <span></span>
            <span></span>
        </div>

    </div>
</section>
       

        {{-- ===================== Contact ===================== --}}
       
<section class="section contact" id="contact">
    <div class="container">

       {{-- ⬇️ YEH NAYA BLOCK — heading ⬇️ --}}
        <div class="contact__intro">
            <span class="eyebrow">Get In Touch</span>
            <h2>Let's Build Something <b>Meaningful</b> Together</h2>
            <p>Have A Project In Mind Or Want To Discuss A Partnership? Our Team Is Here To Help You Turn Ideas Into Real Solutions.</p>
        </div>
        {{-- ⬆️ YEH NAYA BLOCK ⬆️ --}}

        
        <div class="contact__layout">

            {{-- LEFT — office image with blue rotated panel --}}
            <div class="contact__art">
                <div class="cp-office-image">
                    <img src="{{ asset('images/meeting-room.jpg') }}" alt="Our office meeting room">
                </div>
            </div>

            {{-- RIGHT — white contact form (same as contact page) --}}
            <form class="cp-form-card" method="POST" action="#">
                @csrf
                <h3>Let's get <span class="hi">in touch</span></h3>
                <p class="sub">Fill out the form and we will get back to you shortly.</p>

                <div class="cp-form-row">
                    <div class="cp-field">
                        <label>First Name<span class="req">*</span></label>
                        <input type="text" name="first_name" placeholder="Your Name" required>
                    </div>
                    <div class="cp-field">
                        <label>Last Name<span class="req">*</span></label>
                        <input type="text" name="last_name" placeholder="Last Name" required>
                    </div>
                </div>

                <div class="cp-form-row">
                    <div class="cp-field">
                        <label>Company</label>
                        <input type="text" name="company" placeholder="Your Company">
                    </div>
                    <div class="cp-field">
                        <label>Phone Number</label>
                        <input type="text" name="phone" placeholder="+92 333 0000000">
                    </div>
                </div>

                <div class="cp-field" style="margin-bottom:14px;">
                    <label>Email<span class="req">*</span></label>
                    <input type="email" name="email" placeholder="you@example.com" required>
                </div>

                <div class="cp-field" style="margin-bottom:14px;">
                    <label>Interested In<span class="req">*</span></label>
                    <input type="text" name="interested_in" placeholder="Select a service" required>
                </div>

                <div class="cp-field" style="margin-bottom:6px;">
                    <label>Message<span class="req">*</span></label>
                    <textarea name="message" placeholder="Tell us about your project" required></textarea>
                </div>

                <button type="submit" class="cp-submit">Send Message</button>
                <p class="cp-privacy">🔒 Your request stays private. Your information is safe with us.</p>
            </form>

        </div>
    </div>
</section>

       



    </main>

    {{-- ===================== Footer ===================== --}}
    @include('layouts.footer')

    {{-- Script loaded with defer so it never blocks rendering --}}
    <script src="{{ asset('js/home.js') }}" defer></script>
    <script src="{{ asset('js/about-cubes-new.js') }}" defer></script>
    
</body>
</html>
