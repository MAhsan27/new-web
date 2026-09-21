<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="{{ asset('website-css/services.css') }}">
    
    <!-- Fonts for Hexagon Section -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Rock+Salt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

   <!-- ================= Hero / Breadcrumb Section ================= -->
<section class="services-hero">
    <img src="{{ asset('images/services.jpg') }}" alt="Services Background" class="hero-bg-image">
    
    <!-- Hero Content -->
    <div class="hero-content">
        <h1>Services</h1>
        <p class="hero-subtitle">Delivering End-to-End Digital Solutions To Scale Your Business And Bring Your Ideas To Life.</p>
    </div>
</section>
    <!-- ================= Core Services Section ================= -->
    <section class="core-services">
        <div class="section-header">
            <h2>Our Core Services</h2>
            <p>Delivering comprehensive, end-to-end digital solutions designed to help businesses build a strong online presence, streamline their operations, enhance customer experiences, and achieve sustainable growth. From innovative web development and modern digital experiences to tailored technology solutions, we transform your ideas into powerful, scalable, and user-focused digital products that are built to perform and grow with your business.</p>
        </div>

        <div class="cards-container">
            <div class="card card-1">
                <img src="images/img1.png" alt="Service 1">
            </div>
            <div class="card card-2">
                <img src="images/img2.png" alt="Service 2">
            </div>
            <div class="card card-3">
                <img src="images/img3.png" alt="Service 3">
            </div>
            <div class="card card-4">
                <img src="images/img4.jpg" alt="Service 4">
            </div>
        </div>
    </section>



    <!-- ================= CORNER DOODLE ================= -->
    <div class="corner-doodle">
        <span class="doodle-sparkle sparkle-1">✦</span>
        <span class="doodle-sparkle sparkle-2">✧</span>
        <span class="doodle-note">You're on</span>
        <div class="doodle-title-wrap">
            <span class="doodle-title">Service Page</span>
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


<!-- ===== HEXAGONAL TECH SECTION ===== -->
<section class="team-hex-section">
    <div class="hex-bg-glow glow-1"></div>
    <div class="hex-bg-glow glow-2"></div>
    <div class="hex-bg-glow glow-3"></div>

    <div class="hex-container">

        <!-- Section Header -->
        <div class="hex-header">
            <span class="hex-badge">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="16 18 22 12 16 6"></polyline>
                    <polyline points="8 6 2 12 8 18"></polyline>
                </svg>
                WHAT WE BUILD
            </span>
            <h2 class="hex-title">Our <span>Tech Stack</span></h2>
            <p class="hex-subtitle">We leverage modern, cutting-edge technologies to transform innovative ideas into powerful, scalable, and future-ready digital products. Our expertise across advanced tools and frameworks enables us to create seamless digital experiences that deliver exceptional performance, reliability, and long-term value for businesses.</p>
        </div>

        <!-- Honeycomb Grid -->
        <div class="hex-grid">

            <!-- ========== ROW 1 (3 Hexagons) ========== -->
            <div class="hex-row row-1">

                <!-- Web Development -->
                <div class="hex"
                     data-name="Web Development"
                     data-role="Frontend + Backend"
                     data-bio="We craft blazing-fast, responsive websites using React, Vue, Next.js, Laravel, and Node.js. From static sites to complex web apps — we build it all.">
                    <div class="hex-inner">
                        <div class="hex-icon-wrap">
                            <svg class="hex-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="16 18 22 12 16 6"></polyline>
                                <polyline points="8 6 2 12 8 18"></polyline>
                            </svg>
                        </div>
                        <div class="hex-content">
                            <h3>Web Dev</h3>
                            <span>Frontend + Backend</span>
                        </div>
                        <div class="hex-shine"></div>
                    </div>
                </div>

                <!-- SEO -->
                <div class="hex"
                     data-name="SEO Optimization"
                     data-role="Search &amp; Ranking"
                     data-bio="Data-driven SEO strategies — on-page optimization, technical SEO, keyword research, and content that ranks #1 on Google and drives organic traffic.">
                    <div class="hex-inner">
                        <div class="hex-icon-wrap">
                            <svg class="hex-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                <path d="M8 12l2 2 4-4"></path>
                            </svg>
                        </div>
                        <div class="hex-content">
                            <h3>SEO</h3>
                            <span>Search Optimization</span>
                        </div>
                        <div class="hex-shine"></div>
                    </div>
                </div>

                <!-- UI/UX Design -->
                <div class="hex"
                     data-name="UI/UX Design"
                     data-role="Figma &amp; Prototyping"
                     data-bio="Pixel-perfect designs that convert. We use Figma, Adobe XD, and modern design systems to craft interfaces users love.">
                    <div class="hex-inner">
                        <div class="hex-icon-wrap">
                            <svg class="hex-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                                <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                <path d="M2 2l7.586 7.586"></path>
                                <circle cx="11" cy="11" r="2"></circle>
                            </svg>
                        </div>
                        <div class="hex-content">
                            <h3>UI/UX Design</h3>
                            <span>Figma &amp; Prototyping</span>
                        </div>
                        <div class="hex-shine"></div>
                    </div>
                </div>

            </div>

            <!-- ========== ROW 2 (3 Hexagons) ========== -->
            <div class="hex-row row-2">

                <!-- Database -->
                <div class="hex"
                     data-name="Database"
                     data-role="SQL &amp; NoSQL"
                     data-bio="Robust data solutions with MySQL, PostgreSQL, MongoDB, Redis, and Firebase. Optimized queries, clean schemas, and reliable backups.">
                    <div class="hex-inner">
                        <div class="hex-icon-wrap">
                            <svg class="hex-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                            </svg>
                        </div>
                        <div class="hex-content">
                            <h3>Database</h3>
                            <span>SQL</span>
                        </div>
                        <div class="hex-shine"></div>
                    </div>
                </div>

                <!-- AI & ML -->
                <div class="hex"
                     data-name="AI &amp; ML"
                     data-role="Smart Solutions"
                     data-bio="Intelligent features powered by AI — chatbots, recommendation engines, image recognition, and predictive analytics using Python and TensorFlow.">
                    <div class="hex-inner">
                        <div class="hex-icon-wrap">
                            <svg class="hex-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24A2.5 2.5 0 0 1 9.5 2z"></path>
                                <path d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24A2.5 2.5 0 0 0 14.5 2z"></path>
                            </svg>
                        </div>
                        <div class="hex-content">
                            <h3>AI &amp; ML</h3>
                            <span>Smart Solutions</span>
                        </div>
                        <div class="hex-shine"></div>
                    </div>
                </div>

                <!-- E-Commerce -->
                <div class="hex"
                     data-name="E-Commerce"
                     data-role="Shopify &amp; Custom"
                     data-bio="Full-featured online stores with Shopify, WooCommerce, or custom solutions. Payment gateways, inventory, and seamless checkout experiences.">
                    <div class="hex-inner">
                        <div class="hex-icon-wrap">
                            <svg class="hex-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                        </div>
                        <div class="hex-content">
                            <h3>E-Commerce</h3>
                            <span>Online Stores</span>
                        </div>
                        <div class="hex-shine"></div>
                    </div>
                </div>

            </div>

            <!-- ========== ROW 3 (2 Hexagons - Centered) ========== -->
            <div class="hex-row row-3">

                <!-- Marketing -->
                <div class="hex"
                     data-name="Digital Marketing"
                     data-role="SEO &amp; Ads"
                     data-bio="Data-driven marketing campaigns — SEO, Google Ads, social media, and content strategy that grow your brand and drive real conversions.">
                    <div class="hex-inner">
                        <div class="hex-icon-wrap">
                            <svg class="hex-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 11l18-5v12L3 14v-3z"></path>
                                <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path>
                            </svg>
                        </div>
                        <div class="hex-content">
                            <h3>Marketing</h3>
                            <span>SEO &amp; Ads</span>
                        </div>
                        <div class="hex-shine"></div>
                    </div>
                </div>

                <!-- Support -->
                <div class="hex"
                     data-name="Maintenance"
                     data-role="24/7 Support"
                     data-bio="Round-the-clock support, regular updates, bug fixes, and performance monitoring. We keep your product healthy and secure long after launch.">
                    <div class="hex-inner">
                        <div class="hex-icon-wrap">
                            <svg class="hex-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 0-2-2v-3a2 2 0 0 0 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                            </svg>
                        </div>
                        <div class="hex-content">
                            <h3>Support</h3>
                            <span>24/7 Maintenance</span>
                        </div>
                        <div class="hex-shine"></div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- ===== PREMIUM TECH MODAL ===== -->
<div class="team-modal" id="teamModal" aria-hidden="true">
    <div class="team-modal-backdrop" data-close></div>
    <div class="team-modal-content">
        <button class="team-modal-close" data-close aria-label="Close">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>

        <div class="modal-icon-wrap">
            <div class="modal-icon-ring"></div>
            <div class="modal-icon" id="modalIcon"></div>
        </div>

        <h3 class="modal-name"></h3>
        <span class="modal-role"></span>
        <div class="modal-divider"></div>
        <p class="modal-bio"></p>

        <a href="#" class="modal-cta">
            Get Started
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </a>
    </div>
</div>

    



    <!-- ================= CTA SECTION ================= -->
    <section class="cta-banner">
        <div class="cta-content">
            <h2>Ready to bring your vision to life?</h2>
            <p>Let's talk about your project and find the right solution for your business.</p>
            <a href="{{ url('/contact') }}" class="get-quote-btn"> Contact Us <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>


        


    <script src="{{ asset('js/services.js') }}" defer></script>



    @include('layout.footer')


    
</body>
</html>