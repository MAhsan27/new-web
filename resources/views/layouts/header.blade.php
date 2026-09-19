

{{-- ============================================================
     HEAD
     ============================================================ --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

{{-- Tumhari existing header.css (jo pehle se hai) --}}
<link rel="stylesheet" href="{{ asset('css/header.css') }}">


{{-- ============================================================
     TOP BAR — Pill-shaped
     ============================================================ --}}
<div class="topbar">

    {{-- Email --}}
    <div class="seg navy email">
        <span class="mail-badge"><i class="fa-regular fa-envelope"></i></span>
        <span class="label">{{ config('mail.from.address', 'Info@Ayk.Global') }}</span>
    </div>

    {{-- WhatsApp CTA (orange pill) --}}
    <a href="https://wa.me/{{ $whatsappNumber ?? '000000000000' }}"
       class="seg orange whatsapp" target="_blank" rel="noopener">
        <span class="wa-badge"><i class="fa-brands fa-whatsapp"></i></span>
        <span>WhatsApp Us</span>
    </a>

    {{-- Social icons --}}
    <nav class="seg icons">
        <a href="{{ $links['linkedin']  ?? '#' }}" class="icon-linkedin"  aria-label="LinkedIn"  target="_blank" rel="noopener"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="{{ $links['whatsapp']  ?? '#' }}" class="icon-whatsapp"  aria-label="WhatsApp"  target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="{{ $links['facebook']  ?? '#' }}" class="icon-facebook"  aria-label="Facebook"  target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="{{ $links['instagram'] ?? '#' }}" class="icon-instagram" aria-label="Instagram" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a>
        <a href="{{ $links['youtube']   ?? '#' }}" class="icon-youtube"   aria-label="YouTube"   target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a>
    </nav>

    {{-- FAQ (orange pill) --}}
    <a href="{{ \Illuminate\Support\Facades\Route::has('faq') ? route('faq') : '#' }}" class="seg orange faq">
        <span>FAQ</span>
    </a>

    {{-- Get In Touch --}}
    <a href="{{ \Illuminate\Support\Facades\Route::has('contact') ? route('contact') : '#' }}" class="seg navy contact">
        <span>Get In Touch</span>
    </a>

</div>


{{-- ===================== Main Nav ===================== --}}
<header class="site-header">
    <div class="container site-header__inner">

        <form class="search-pill" role="search" onsubmit="return false;">
            <label for="site-search" class="sr-only" style="position:absolute;left:-9999px;">Search</label>
            <input type="search" id="site-search" name="q" placeholder="Search">
            <button type="submit" aria-label="Submit search">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            </button>
        </form>

        <nav class="main-nav" id="primaryNav" aria-label="Primary">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'is-active' : '' }}">Home</a>
            <a href="{{ route('home') }}#about">About</a>
            <a href="{{ route('home') }}#services">Services</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'is-active' : '' }}">Contact Us</a>
            <a href="{{ route('home') }}#portfolio" >Our Portfolio</a>
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
</header>