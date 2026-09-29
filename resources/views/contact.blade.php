{{--
    resources/views/contact.blade.php
    RR Technologies — Contact Page
    Standalone page (matches home.blade.php's structure since there is
    no resources/views/layouts/*.blade.php in this project). Header and
    footer markup below are copied as-is from home.blade.php so both
    pages look identical outside the main content area.
--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



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

    <title>Contact Us | RR Technologies</title>
    <meta name="description" content="Get in touch with RR Technologies for web design, web development and digital marketing services.">
    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Inter:wght@400;500;600&display=swap">

    {{-- Same base stylesheet as home, so header/footer look identical --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    {{-- Page-specific styles for the contact layout --}}
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<!-- <body data-theme="dark"> -->
    <body>
<script>document.body.setAttribute('data-theme', document.documentElement.getAttribute('data-theme') || 'dark');</script>

    {{-- ===================== Header (same as home.blade.php) ===================== --}}
    @include('layouts.header')
    

    <main>
        {{-- ===================== Contact page content ===================== --}}
        <div class="contact-page">

            <!-- <div class="cp-eyebrow">Contact us</div> -->

            {{-- HERO --}}
            <div class="cp-hero">
                <div class="cp-hero-inner">
                    <div class="cp-hero-text">
                        <h1>Our  <span class="grad">Contact</span> Information</h1>
                        <p>How Can We Help? We Look Forward To Hearing From You.</p>
                    </div>
                </div>
            </div>

            {{-- MAIN --}}
            <div class="cp-main">

                {{-- LEFT --}}
                <div class="cp-left">
                    <h2>Let's Build Something<br><span class="accent">Meaningful.</span></h2>
                    <p>Have a project in mind or want to discuss a partnership? Our team is here to help you turn ideas into real solutions.</p>

                    <div class="cp-features">
                        <div class="cp-feature">
                             <div class="cp-feature-icon blue">
    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
        <path d="M3.4 20.4l17.45-7.48a1 1 0 000-1.84L3.4 3.6a1 1 0 00-1.4 1.1l1.9 6.6a1 1 0 00.9.7H14a.5.5 0 010 1H4.8a1 1 0 00-.9.7l-1.9 6.6a1 1 0 001.4 1.1z"/>
    </svg>
</div>
                            <div class="cp-feature-body">
                                <h4>Quick Response</h4>
                                <p>We typically reply within 24 hours</p>
                            </div>
                        </div>
                        <div class="cp-feature">
                             <div class="cp-feature-icon purple">
    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
    </svg>
</div>
                            <div class="cp-feature-body">
                                <h4>Expert Guidance</h4>
                                <p>Get advice from our experienced team</p>
                            </div>
                        </div>
                        <div class="cp-feature">
                             <div class="cp-feature-icon orange">
    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
        <path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7z"/>
    </svg>
</div>
                            <div class="cp-feature-body">
                                <h4>Tailored Solutions</h4>
                                <p>We create solutions fit for your goals</p>
                            </div>
                        </div>
                    </div>

                    <div class="cp-office-image">
                        <img src="{{ asset('images/meeting-room.jpg') }}" alt="Our office">
                    </div>
                </div>

                {{-- RIGHT --}}
                <div class="cp-right">
                    <p class="cp-right-label">Contact Us</p>


                    <form class="cp-form-card" method="POST" action="#">
                        {{-- TODO: change action back to {{ route('contact.store') }} once you add that route --}}
                        @csrf
                        <h3>Let's get <span class="hi">in touch</span></h3>
                        <p class="sub">Fill out the form and we will get back to you shortly.</p>

                        <div class="cp-form-row">
                            <div class="cp-field">
                                <label>First Name<span class="req">*</span></label>
                                <input type="text" name="first_name" placeholder="Your Name" required value="{{ old('first_name') }}">
                            </div>
                            <div class="cp-field">
                                <label>Last Name<span class="req">*</span></label>
                                <input type="text" name="last_name" placeholder="Last Name" required value="{{ old('last_name') }}">
                            </div>
                        </div>

                        <div class="cp-form-row">
                            <div class="cp-field">
                                <label>Company</label>
                                <input type="text" name="company" placeholder="Your Company" value="{{ old('company') }}">
                            </div>
                            <div class="cp-field">
                                <label>Phone Number</label>
                                <input type="text" name="phone" placeholder="+92 333 0000000" value="{{ old('phone') }}">
                            </div>
                        </div>

                        <div class="cp-field" style="margin-bottom:14px;">
                            <label>Email<span class="req">*</span></label>
                            <input type="email" name="email" placeholder="you@example.com" required value="{{ old('email') }}">
                        </div>

                        <div class="cp-field" style="margin-bottom:14px;">
                            <label>Interested In<span class="req">*</span></label>
                            <input type="text" name="interested_in" placeholder="Select a service" required value="{{ old('interested_in') }}">
                        </div>

                        <div class="cp-field" style="margin-bottom:6px;">
                            <label>Message<span class="req">*</span></label>
                            <textarea name="message" placeholder="Tell us about your project" required>{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="cp-submit">Send Message</button>
                        <p class="cp-privacy">🔒 Your request stays private. Your information is safe with us.</p>
                    </form>
                </div>
            </div>

            {{-- CONTACT STRIP --}}
            <div class="cp-strip">
                <div class="cp-strip-item">

                <div class="cp-strip-icon red">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <rect x="2.5" y="5" width="19" height="14" rx="2.5"/>
        <path d="M3 7l9 6 9-6"/>
    </svg>
</div>
                    <!-- <div class="cp-strip-icon red">✉️</div> -->


                    <div>
                        <h5>Email</h5>
                        <p>info@softwarehouse.com</p>
                    </div>
                </div>
                <div class="cp-strip-divider"></div>
                <div class="cp-strip-item">


                <div class="cp-strip-icon orange">
    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/>
    </svg>
</div>
                    <!-- <div class="cp-strip-icon orange">📍</div> -->


                    <div>
                        <h5>Address</h5>
                        <p>Karachi Head Office, DHA Phase 6, Karachi</p>
                    </div>
                </div>
                <div class="cp-strip-divider"></div>
                <div class="cp-strip-item">

<div class="cp-strip-icon green">
    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
        <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.4 11.4 0 003.57.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.4 11.4 0 00.57 3.57 1 1 0 01-.25 1.02l-2.2 2.2z"/>
    </svg>
</div>
                    <!-- <div class="cp-strip-icon green">📞</div> -->


                    <div>
                        <h5>Phone</h5>
                        <p>+92 333 0000000</p>
                    </div>
                </div>
            </div>

            {{-- BOTTOM CTA --}}
            <div class="cp-bottom">
                <h3>Start Your Project With Us</h3>
                <div class="cp-bottom-rule"></div>
                <p>Have a groundbreaking project in mind or looking to scale your business with cutting-edge software solutions? We'd love to hear from you. At our software house, our expert team of developers, designers, and strategists are always ready to transform your ideas into powerful digital realities. Whether you need custom web development, mobile apps, UI/UX design, or enterprise solutions, we are just a message away. Reach out to us today, and let's build something exceptional together.</p>
            </div>

        </div>
    </main>

    {{-- ===================== Footer (same as home.blade.php) ===================== --}}
    @include('layouts.footer')
   

    <script src="{{ asset('js/home.js') }}" defer></script>
</body>
</html>
