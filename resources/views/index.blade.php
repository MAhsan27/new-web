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
<body data-theme="dark">

@include('layouts.header')

    {{-- ===================== Header ===================== --}}
    <!-- <header class="site-header">
    <div class="container">
        <form class="search-pill" role="search" onsubmit="return false;">
            <label for="site-search" class="sr-only" style="position:absolute;left:-9999px;">Search</label>
            <input type="search" id="site-search" name="q" placeholder="Search">
            <button type="submit" aria-label="Submit search">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            </button>
        </form>

        <nav class="main-nav" id="primaryNav" aria-label="Primary">
            <a href="#home" class="is-active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="{{ url('/contact') }}">Contact Us</a>
        </nav>

        <div class="site-header__right">
            <button class="theme-toggle" aria-label="Toggle light / dark theme">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8Z"/></svg>
            </button>

            <button class="nav-toggle" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="primaryNav">
    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round">
        <line x1="4" y1="7" x2="20" y2="7"/>
        <line x1="4" y1="12" x2="20" y2="12"/>
        <line x1="4" y1="17" x2="20" y2="17"/>
    </svg>
</button>
            
        </div>
    </div>
</header> -->
  

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

        {{-- ===================== Services ===================== --}}
        <section class="section section--black" id="services">
            <div class="container">
                <div class="services__grid">
                    <div class="services__heading">
                        <span class="eyebrow">Services We Offer</span>
                        <h2>We Believe In True Partnership And Thus Get Our <b>Customers</b> A Bang For Their Bucks. There Are Various Areas In Which We Function, Here Are A Few Of Them:</h2>
                    </div>

                    <div class="services__cards">
                        <article class="service-card service-card--dark">
                            <svg class="service-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 7h13l3 4v9H4z"/><path d="M4 7l3-4h10"/></svg>
                            <h3>Web Design &amp; Web Development</h3>
                            <a href="#contact" class="service-card__link" aria-label="Learn more about Web Design and Web Development">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="19" x2="19" y2="5"/><polyline points="9 5 19 5 19 15"/></svg>
                            </a>
                        </article>
                        <article class="service-card service-card--light">
                            <svg class="service-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="9" cy="21" r="1"/><circle cx="18" cy="21" r="1"/><path d="M2 2h3l2.4 12.4a2 2 0 0 0 2 1.6h7.2a2 2 0 0 0 2-1.6L21 6H6"/></svg>
                            <h3>E-Commerce Solutions</h3>
                            <a href="#contact" class="service-card__link" aria-label="Learn more about E-Commerce Solutions">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="19" x2="19" y2="5"/><polyline points="9 5 19 5 19 15"/></svg>
                            </a>
                        </article>
                        <article class="service-card service-card--light">
                            <svg class="service-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/></svg>
                            <h3>Customized Application Development</h3>
                            <a href="#contact" class="service-card__link" aria-label="Learn more about Customized Application Development">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="19" x2="19" y2="5"/><polyline points="9 5 19 5 19 15"/></svg>
                            </a>
                        </article>
                        <article class="service-card service-card--light">
                            <svg class="service-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                            <h3>Search Engine Optimization &amp; Digital Marketing</h3>
                            <a href="#contact" class="service-card__link" aria-label="Learn more about SEO and Digital Marketing">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="19" x2="19" y2="5"/><polyline points="9 5 19 5 19 15"/></svg>
                            </a>
                        </article>
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
            <!-- <svg class="capability-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M9 18a3 3 0 0 0 3 3 3 3 0 0 0 3-3M8 10a4 4 0 1 1 8 0c0 2-1.5 2.5-1.5 5h-5c0-2.5-1.5-3-1.5-5Z"/><path d="M12 2v2M4 10H2m20 0h-2"/></svg> -->
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
            <!-- <svg class="capability-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><circle cx="12" cy="7" r="3"/><circle cx="5" cy="9" r="2.4"/><circle cx="19" cy="9" r="2.4"/><path d="M4 21v-2a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v2M1 21v-1a3 3 0 0 1 3-3m16 4v-1a3 3 0 0 0-3-3"/></svg> -->
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
            <!-- <svg class="capability-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg> -->
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
            <!-- <svg class="capability-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M12 2 3 6v6c0 5 4 8 9 10 5-2 9-5 9-10V6l-9-4Z"/><path d="M9 12l2 2 4-4"/></svg> -->
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
        <section class="section portfolio">
            <div class="container">
                <div class="portfolio__title">
                    <h2>Our Portfolio</h2>
                    <div class="rule"></div>
                </div>

                <div class="portfolio__layout">
                    <div class="portfolio__tabs" role="tablist" aria-label="Portfolio categories">
                        <button type="button" class="is-active" data-target="ecommerce">
                            Ecommerce Websites
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </button>
                        <button type="button" data-target="wordpress">Wordpress Websites</button>
                        <button type="button" data-target="logos">Logos Design</button>
                        <button type="button" data-target="graphics">Graphices Design</button>
                    </div>

                    <div class="portfolio__grid">
                        <img data-category="ecommerce" src="{{ asset('images/portfolio-1.avif') }}" alt="Audio brand e-commerce website design" width="340" height="255" loading="lazy" decoding="async">
                        <img data-category="ecommerce" src="{{ asset('images/portfolio-2.avif') }}" alt="Fragrance store e-commerce website design" width="340" height="255" loading="lazy" decoding="async">
                        <img data-category="ecommerce" src="{{ asset('images/portfolio-3.avif') }}" alt="Fashion brand e-commerce website design" width="340" height="255" loading="lazy" decoding="async">
                        <img data-category="ecommerce" src="{{ asset('images/portfolio-4.webp') }}" alt="Apparel store e-commerce website design" width="340" height="255" loading="lazy" decoding="async">
                        <img data-category="wordpress" src="{{ asset('images/portfolio-5.avif') }}" alt="Organic lifestyle WordPress website design" width="340" height="255" loading="lazy" decoding="async">
                        <img data-category="wordpress" src="{{ asset('images/portfolio-6.avif') }}" alt="Seasonal sale WordPress website design" width="340" height="255" loading="lazy" decoding="async">
                        <img data-category="logos" src="{{ asset('images/portfolio-7.avif') }}" alt="Wedding brand website design" width="340" height="255" loading="lazy" decoding="async">
                        <img data-category="graphics" src="{{ asset('images/portfolio-8.webp') }}" alt="Food brand website design" width="340" height="255" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================== Testimonial ===================== --}}
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
        <!-- <section class="section testimonial">
            <span class="testimonial__blob testimonial__blob--left" aria-hidden="true"></span>
            <span class="testimonial__blob testimonial__blob--right" aria-hidden="true"></span>
            <div class="container">
                <div class="portfolio__title">
                    <h2>&ldquo;Testimonial&rdquo;</h2>
                </div>

                {{-- NOTE: exact client names/quotes were too small to read in the screenshot —
                     placeholders below, swap in the real copy whenever you have it. --}}
                <div class="testimonial__grid">
                    <article class="testimonial-card">
                        <div class="testimonial-card__head">
                            <span class="testimonial-card__avatar">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg>
                            </span>
                            <h3>Ayesha Khan</h3>
                        </div>
                        <p>RR Technologies Rebuilt Our Website From Scratch And Our Organic Traffic Doubled Within Three Months. Communication Was Clear And Deadlines Were Always Met.</p>
                    </article>
                    <article class="testimonial-card">
                        <div class="testimonial-card__head">
                            <span class="testimonial-card__avatar">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg>
                            </span>
                            <h3>Bilal Ahmed</h3>
                        </div>
                        <p>The Team Handled Our E-Commerce Migration Smoothly With Zero Downtime. Their Attention To Detail And Post-Launch Support Have Been Excellent.</p>
                    </article>
                </div>
            </div>
        </section> -->

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
        <!-- <section class="section contact" id="contact">
            <div class="container">
                <div class="contact__layout">

                
                    <div class="contact__art">
                        <img src="{{ asset('images/contact-illustration.png') }}" alt="Illustration of a form and a verified user profile" width="500" height="330" loading="lazy" decoding="async">
                    </div>

                    <div class="contact__panel">
                        <h3>Register Interest</h3>
                        <p>Use The Form Below To Contact Us. Please Be As Detailed And Precise As Possible. Include Your Industry And Any Specific Requests. To Help Us Get To Know And Serve You Better, We Thank You For First Giving Us A Good Description Of Who You Are. You Can Also Send An Email, Call Us Or Send Us A WhatsApp To Make An Appointment.</p>

                        <form id="contact-form">
                            <div class="field">
                                <label for="name">Name <em>*</em></label>
                                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="field">
                                <label for="company">Company</label>
                                <input type="text" id="company" name="company" placeholder="Enter your company name">
                            </div>
                            <div class="field">
                                <label for="email">Email address <em>*</em></label>
                                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                            </div>
                            <div class="field">
                                <label for="message">Message <em>*</em></label>
                                <textarea id="message" name="message" placeholder="Your message here" required></textarea>
                            </div>
                            <button type="submit" class="btn btn--primary">Submit</button>
                        </form>
                    </div>


                </div>
            </div>
        </section> -->



    </main>

    {{-- ===================== Footer ===================== --}}
    <footer class="site-footer">
        <div class="container">
            <div class="site-footer__top">
                <div class="site-footer__brand">
                    <h4>RR Technologies</h4>
                    <p>We build fast, custom websites and digital marketing strategies that help small and large businesses grow online.</p>
                </div>
                <div>
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        <!-- <li><a href="#contact">Contact Us</a></li> -->
                    </ul>
                </div>
                <div>
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#services">Web Design &amp; Development</a></li>
                        <li><a href="#services">E-Commerce Solutions</a></li>
                        <li><a href="#services">Application Development</a></li>
                        <li><a href="#services">SEO &amp; Digital Marketing</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Get In Touch</h4>
                    <ul>
                        <li><a href="mailto:hello@rrtechnologies.com">hello@rrtechnologies.com</a></li>
                        <li><a href="tel:+10000000000">+1 000 000 0000</a></li>
                    </ul>
                </div>
            </div>
            <div class="site-footer__bottom">
                <span>&copy; {{ date('Y') }} RR Technologies. All rights reserved.</span>
                <span>Built with care by RR Technologies.</span>
            </div>
        </div>
    </footer>

    {{-- Script loaded with defer so it never blocks rendering --}}
    <script src="{{ asset('js/home.js') }}" defer></script>
    <script src="{{ asset('js/about-cubes-new.js') }}" defer></script>
    
</body>
</html>
