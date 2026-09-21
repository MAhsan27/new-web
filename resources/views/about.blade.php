<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    {{-- Google Font: Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Font Awesome for icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- Page specific CSS --}}
    <link rel="stylesheet" href="{{ asset('website-css/about.css') }}">
</head>
<body>

    
    <main class="about-page">

                {{-- ===== HERO SECTION WITH AUTO SLIDER ===== --}}
        <section class="about-hero">
            <div class="hero-slider">
                <img src="{{ asset('images/about.png') }}" class="hero-slide active" alt="Slide 1">
                <img src="{{ asset('images/about1.png') }}" class="hero-slide" alt="Slide 2">
                <img src="{{ asset('images/about2.jpg') }}" class="hero-slide" alt="Slide 3">
            </div>
        </section>

        <div class="about-hero-card">
            <h1>About Us</h1>
            <p>
                At Grow Tech Technologies, we turn complex challenges into simple digital
                solutions. As a full-service digital agency, we're dedicated to helping
                businesses of all sizes thrive in the fast-paced digital world by
                delivering cutting-edge technology, creative design, and strategic
                promotion that build products your customers love and drive real
                business growth.
            </p>
        </div>

               {{-- ===== INTRO / MISSION SECTION (UPDATED) ===== --}}
        <section class="about-mission">
            <div class="about-mission-inner">
                {{-- Left Side: Text --}}
                <div class="mission-text">
                    <h2 class="about-subhead">Our Approach</h2>
                    <p>
                        We are committed to delivering exceptional results for every client we
                        work with. From strategy to execution, our team combines creativity with
                        technical expertise to build websites, applications, and marketing
                        campaigns that truly perform. We believe in transparent communication,
                        honest pricing, and long-term partnerships rather than one-off projects.
                    </p>

                    <h2 class="about-subhead" id="goal">Our Goal</h2>
                    <p>
                        Our goal is simple — help businesses grow by providing affordable,
                        high-quality digital services. Whether you're a startup looking to
                        establish your first online presence or an established brand ready to
                        scale, we tailor every solution to match your unique needs and budget.
                    </p>
                </div>

               <div class="mission-image">
    <div class="image-border-wrap">
        <img src="{{ asset('images/about2.jpg') }}" alt="Our Team Working">
    </div>
</div>
        </section>


    <!DOCTYPE html>
<html lang="ur">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Features Section</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- ===== CORE TENETS SECTION (BENTO AURORA) ===== -->
<section class="core-tenets-section">
    
    <!-- Animated Aurora Blobs -->
    <div class="aurora-bg">
        <div class="aurora-blob blob-1"></div>
        <div class="aurora-blob blob-2"></div>
        <div class="aurora-blob blob-3"></div>
    </div>

    
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fa-solid fa-star"></i> WHY CHOOSE US</span>
            <h2 class="section-title">Our Core Tenets</h2>
            <p class="section-subtitle">We put our clients first in everything we design and build.</p>
        </div>

        <div class="tenets-grid">
            
            <!-- Card 1 -->
            <div class="tenet-card">
                <div class="card-number">01</div>
                <div class="card-icon-wrapper">
                    <div class="card-icon"><i class="fa-solid fa-tags"></i></div>
                </div>
                <div class="card-content">
                    <h3>Key Component<br>For Pricing</h3>
                    <p>We're affordable, flexible and always trustworthy</p>
                </div>
                <div class="card-shine"></div>
            </div>

            <!-- Card 2 -->
            <div class="tenet-card">
                <div class="card-number">02</div>
                <div class="card-icon-wrapper">
                    <div class="card-icon"><i class="fa-solid fa-handshake"></i></div>
                </div>
                <div class="card-content">
                    <h3>Dedicated<br>Partnership</h3>
                    <p>Providing transparent, helpful, and trusted collaboration at every step.</p>
                </div>
                <div class="card-shine"></div>
            </div>

            <!-- Card 3 -->
            <div class="tenet-card">
                <div class="card-number">03</div>
                <div class="card-icon-wrapper">
                    <div class="card-icon"><i class="fa-solid fa-gem"></i></div>
                </div>
                <div class="card-content">
                    <h3>Uncompromising<br>Quality</h3>
                    <p>Every project is held to the highest standard, from code to design.</p>
                </div>
                <div class="card-shine"></div>
            </div>

            <!-- Card 4 -->
            <div class="tenet-card">
                <div class="card-number">04</div>
                <div class="card-icon-wrapper">
                    <div class="card-icon"><i class="fa-solid fa-rocket"></i></div>
                </div>
                <div class="card-content">
                    <h3>Leading Services,<br>Affordable Rates</h3>
                    <p>Driving forward Quality work, top-notch service, and full support.</p>
                </div>
                <div class="card-shine"></div>
            </div>

        </div>
    </div>
</section>

</body>
</html>
        



                {{-- ===== NEW SECTION: VISION / WORK (Left Text, Right GIF) ===== --}}
        <section class="vision-section">
            <div class="vision-inner">
                {{-- Left Side: Content --}}
                <div class="vision-text">
                    <h2 class="section-title">Our Vision in Action</h2>
                    <p>
                        We don't just build websites; we create digital experiences that drive
                        real business results. Our process is transparent, agile, and tailored
                        to your unique goals. From the first sketch to the final launch, we
                        work closely with you to ensure every detail is perfect.
                    </p>
                    <p>
                        Whether it's a complex web application or a simple marketing campaign,
                        our team brings passion, precision, and creativity to the table.
                        Watch how we bring ideas to life.
                    </p>
                    <a href="{{ url('/contact') }}" class="get-quote-btn">Start Your Project <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                {{-- Right Side: GIF --}}
                <div class="vision-media">
                    {{-- Yahan apni GIF ka path daalein --}}
                    <img src="{{ asset('images/Gif.gif') }}" alt="Our Work Process">
                </div>
            </div>
        </section>


      

               {{-- ===== AWARDS SECTION — JS INFINITE SLIDER ===== --}}
        <section class="awards-section">
            <div class="awards-header">
                <span class="awards-badge-top"><i class="fa-solid fa-trophy"></i></span>
                <h2>Awards &amp; Recognitions</h2>
                <p class="awards-subtitle">Trusted by industry leaders and recognized for excellence</p>
            </div>

            <div class="awards-slider">
                <div class="awards-track" id="awardsTrack">
                    {{-- 🔥 Sirf 1 set — JS duplicate karega --}}
                    <div class="awards-set">
                        <div class="award-item">
                            <div class="award-circle"><img src="{{ asset('images/top rated.png') }}" alt="Top Rated"></div>
                            <h3>Top Rated</h3>
                        </div>
                        <div class="award-item">
                            <div class="award-circle"><img src="{{ asset('images/feautured.jpg') }}" alt="Featured Client"></div>
                            <h3>Featured Client</h3>
                        </div>
                        <div class="award-item">
                            <div class="award-circle"><img src="{{ asset('images/verified.png') }}" alt="Verified"></div>
                            <h3>Verified</h3>
                        </div>
                        <div class="award-item">
                            <div class="award-circle"><img src="{{ asset('images/premium.webp') }}" alt="Premium Quality"></div>
                            <h3>Premium Quality</h3>
                        </div>
                        <div class="award-item">
                            <div class="award-circle"><img src="{{ asset('images/trusted.jpg') }}" alt="Trusted Partner"></div>
                            <h3>Trusted Partner</h3>
                        </div>
                    </div>
                </div>

                <div class="slider-fade slider-fade-left"></div>
                <div class="slider-fade slider-fade-right"></div>
            </div>
        </section>

  {{-- ===== CTA SECTION (UPDATED WITH BACKGROUND) ===== --}}
        <section class="cta-banner">
            <div class="cta-content">
                <h2>Ready to bring your vision to life?</h2>
                <p>Let's talk about your project and find the right solution for your business.</p>
                <a href="{{ url('/contact') }}" class="get-quote-btn">Get A Quote <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </section>





        <!-- ===== CORNER DOODLE ===== -->
<div class="corner-doodle">
    <span class="doodle-sparkle sparkle-1">✦</span>
    <span class="doodle-sparkle sparkle-2">✧</span>

    <span class="doodle-note">You're on</span>

    <div class="doodle-title-wrap">
        <span class="doodle-title">About Page</span>
        <svg class="doodle-underline" viewBox="0 0 240 20" preserveAspectRatio="none">
            <path d="M5 12 Q 60 4, 120 10 T 235 8"
                  stroke="currentColor" stroke-width="3" fill="none" stroke-linecap="round"/>
        </svg>
    </div>

    <div class="doodle-arrow">
        <svg viewBox="0 0 80 80">
            <path d="M15 10 Q 40 25, 35 50 Q 32 65, 60 65"
                  stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round"/>
            <path d="M48 55 L 60 65 L 50 75"
                  stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
</div>



    </main>


    <script src="{{ asset('js/about.js') }}" defer></script>


        @include('layout.footer')



</body>
</html>