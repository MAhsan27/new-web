<!-- 


{{--
    Top Bar (pill-shaped, concave-curve style)
    Include in your layout like:  @include('partials.topbar')
--}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
    :root{
        --topbar-navy:#0B1E42;
        --topbar-orange:#F7A600;
        --topbar-height:56px;
    }
    .topbar{
        width:100%;
        max-width:1300px;
        margin:0 auto;
        height:var(--topbar-height);
        background:var(--topbar-navy);
        border-radius:999px;
        display:flex;
        align-items:stretch;
        overflow:hidden;
        box-shadow:0 6px 18px rgba(11,30,66,.18);
        font-family:'Poppins',sans-serif;
    }
    .topbar .seg{
        display:flex;
        align-items:center;
        white-space:nowrap;
    }
    .topbar .seg.navy{
        color:#fff;
        font-size:14px;
        font-weight:600;
        gap:10px;
        padding:0 22px;
        text-decoration:none;
    }
    .topbar .seg.navy.email{
        padding-left:26px;
        padding-right:40px;
        border-radius:999px 0 0 999px;
        position:relative;
        z-index:2;
    }
    .topbar .seg.navy.email::after{
        content:"";
        position:absolute;
        top:50%;
        right:-28px;
        width:56px;
        height:56px;
        background:var(--topbar-navy);
        border-radius:50%;
        transform:translateY(-50%);
        z-index:2;
    }
    .topbar .seg.navy.contact{
        padding-left:40px;
        padding-right:26px;
        border-radius:0 999px 999px 0;
        position:relative;
        z-index:2;
    }
    .topbar .seg.navy.contact::before{
        content:"";
        position:absolute;
        top:50%;
        left:-28px;
        width:56px;
        height:56px;
        background:var(--topbar-navy);
        border-radius:50%;
        transform:translateY(-50%);
        z-index:2;
    }
    .topbar .seg.orange.faq{
        padding-right:60px;
        border-radius:999px 0 0 999px;
    }
    .topbar .seg.orange{
        background:var(--topbar-orange);
        color:var(--topbar-navy);
        border-radius:999px;
        font-weight:700;
        font-size:14px;
        gap:10px;
        padding:0 26px;
        text-decoration:none;
        position:relative;
        z-index:1;
    }
    .topbar .seg.orange.whatsapp{
        padding-left:60px;
        border-radius:0 999px 999px 0;
    }
    .topbar .seg.icons{
        flex:1;
        justify-content:center;
        gap:18px;
        padding:0 24px;
    }
    .topbar .seg.icons a{
        color:#fff;
        display:flex;
        align-items:center;
        justify-content:center;
        width:30px;
        height:30px;
        border-radius:50%;
        text-decoration:none;
        font-size:15px;
        transition:transform .15s ease, opacity .15s ease;
    }
    .topbar .seg.icons a:hover{ transform:translateY(-2px); opacity:.85; }
    .topbar .icon-linkedin{ background:#0A66C2; }
    .topbar .icon-whatsapp{ background:#25D366; }
    .topbar .icon-facebook{ background:#1877F2; }
    .topbar .icon-instagram{ background:radial-gradient(circle at 30% 110%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); }
    .topbar .icon-youtube{ background:#FF0000; }

    .topbar .wa-badge{
        width:22px;height:22px;border-radius:50%;
        background:#fff;
        display:flex;align-items:center;justify-content:center;
        color:#25D366;font-size:12px;
        flex:none;
    }
    .topbar .mail-badge{
        width:20px;height:20px;
        display:flex;align-items:center;justify-content:center;
        font-size:15px;flex:none;
    }

    @media (max-width: 900px){
        .topbar .seg.navy.email span.label,
        .topbar .seg.orange.faq span{ display:none; }
        .topbar .seg.icons{ gap:12px; }
    }
    @media (max-width: 640px){
        .topbar{ height:50px; }
        .topbar .seg.orange, .topbar .seg.navy{ padding:0 14px; font-size:12.5px; }
        .topbar .seg.icons a{ width:26px; height:26px; font-size:13px; }
    }
</style>

<header class="topbar">

    {{-- Email --}}
    <div class="seg navy email">
        <span class="mail-badge"><i class="fa-regular fa-envelope"></i></span>
        <span class="label">{{ config('mail.from.address', 'info@Ayk.Global') }}</span>
    </div>

    {{-- WhatsApp CTA (orange pill) --}}
    <a href="https://wa.me/{{ $whatsappNumber ?? '000000000000' }}" class="seg orange whatsapp" target="_blank" rel="noopener">
        <span class="wa-badge"><i class="fa-brands fa-whatsapp"></i></span>
        <span>WhatsApp Us</span>
    </a>

    {{-- Social icons --}}
    <nav class="seg icons">
        <a href="{{ $links['linkedin'] ?? '#' }}" class="icon-linkedin" aria-label="LinkedIn" target="_blank" rel="noopener"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="{{ $links['whatsapp'] ?? '#' }}" class="icon-whatsapp" aria-label="WhatsApp" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="{{ $links['facebook'] ?? '#' }}" class="icon-facebook" aria-label="Facebook" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="{{ $links['instagram'] ?? '#' }}" class="icon-instagram" aria-label="Instagram" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a>
        <a href="{{ $links['youtube'] ?? '#' }}" class="icon-youtube" aria-label="YouTube" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a>
    </nav>

    {{-- FAQ (orange pill) --}}
    <a href="{{ \Illuminate\Support\Facades\Route::has('faq') ? route('faq') : '#' }}" class="seg orange faq">
        <span>FAQ</span>
    </a>

    {{-- Get In Touch --}}
    <a href="{{ \Illuminate\Support\Facades\Route::has('contact') ? route('contact') : '#' }}" class="seg navy contact">
        <span>Get In Touch</span>
    </a>

</header> -->



{{-- ===================== Neon Header ===================== --}}

<style>
    /* =========================================================
   NEON HEADER — Premium glow design
   ========================================================= */

/* =========================================================
   NEON HEADER — Waves + Curves + Glow
   ========================================================= */

.neon-header{
  position: sticky;
  top: 0;
  z-index: 60;
  width: 100%;
  padding: 30px 40px;
  background: #080b1f;
  overflow: hidden;
  isolation: isolate;
}

/* ---- Waves SVG behind everything ---- */
.neon-header__waves{
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  width: 100%;
  height: 120px;
  transform: translateY(-50%);
  pointer-events: none;
  z-index: 0;
}

/* ---- Glow orbs (golden left, blue right) ---- */
.neon-header__orb{
  position: absolute;
  top: 50%;
  width: 340px;
  height: 160px;
  border-radius: 50%;
  filter: blur(70px);
  pointer-events: none;
  z-index: 0;
  transform: translateY(-50%);
}
.neon-header__orb--left{
  left: -100px;
  background: radial-gradient(ellipse, rgba(255, 178, 54, 0.55) 0%, transparent 70%);
}
.neon-header__orb--right{
  right: -100px;
  background: radial-gradient(ellipse, rgba(77, 159, 255, 0.55) 0%, transparent 70%);
}

.neon-header__inner{
  position: relative;
  z-index: 2;
  display: flex;
  align-items: center;
  gap: 14px;
  max-width: 1600px;
  margin-inline: auto;
}

/* ---- Brand ---- */
.neon-brand{
  display: inline-flex;
  align-items: center;
  gap: 12px;
  padding: 14px 26px;
  border-radius: 999px;
  background: rgba(10, 18, 42, 0.85);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid rgba(77, 159, 255, 0.25);
  text-decoration: none;
  flex-shrink: 0;
  position: relative;
  box-shadow:
    0 0 30px -8px rgba(77, 159, 255, 0.35),
    inset 0 1px 0 rgba(255, 255, 255, 0.06);
}
.neon-brand__mark{
  display: inline-grid;
  place-items: center;
  filter: drop-shadow(0 0 10px rgba(77, 159, 255, 0.7));
}
.neon-brand__text{
  font-family: 'Poppins', sans-serif;
  font-weight: 700;
  font-size: 17px;
  color: #fff;
  letter-spacing: 0.2px;
  white-space: nowrap;
}
.neon-brand__text span{
  background: linear-gradient(90deg, #4d9fff 0%, #ffb236 100%);
  -webkit-background-clip: text;
          background-clip: text;
  color: transparent;
}

/* ---- Nav pill ---- */
.neon-nav{
  display: flex;
  align-items: center;
  gap: 4px;
  padding: 6px 8px;
  border-radius: 999px;
  background: rgba(10, 20, 48, 0.75);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border: 1px solid rgba(77, 159, 255, 0.25);
  box-shadow:
    0 0 24px -6px rgba(77, 159, 255, 0.4),
    inset 0 1px 0 rgba(255, 255, 255, 0.05);
  flex-shrink: 0;
}
.neon-nav a{
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 9px 18px;
  border-radius: 999px;
  font-family: 'Poppins', sans-serif;
  font-size: 13.5px;
  font-weight: 600;
  color: rgba(255, 255, 255, 0.85);
  text-decoration: none;
  white-space: nowrap;
  transition: color .2s ease, background .2s ease;
}
.neon-nav__dot{
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background: rgba(77, 159, 255, 0.55);
  box-shadow: 0 0 6px rgba(77, 159, 255, 0.8);
  flex-shrink: 0;
}
.neon-nav a:hover{
  color: #fff;
  background: rgba(77, 159, 255, 0.08);
}
.neon-nav a.is-active{
  color: #0b0f2b;
  background: linear-gradient(180deg, #ffc453 0%, #ffb236 100%);
  box-shadow:
    0 0 20px -4px rgba(255, 178, 54, 0.7),
    inset 0 1px 0 rgba(255, 255, 255, 0.4);
}
.neon-nav a.is-active .neon-nav__dot{
  background: #0b0f2b;
  box-shadow: none;
  width: 6px;
  height: 6px;
}

/* ---- Social pill ---- */
.neon-social{
  display: flex;
  align-items: center;
  gap: 6px;
  padding: 6px 10px;
  border-radius: 999px;
  background: rgba(10, 20, 48, 0.75);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border: 1px solid rgba(77, 159, 255, 0.25);
  box-shadow:
    0 0 24px -6px rgba(77, 159, 255, 0.4),
    inset 0 1px 0 rgba(255, 255, 255, 0.05);
  flex-shrink: 0;
}
.neon-social__btn{
  width: 30px;
  height: 30px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  color: #fff;
  text-decoration: none;
  transition: transform .2s ease, box-shadow .2s ease;
}
.neon-social__btn:hover{
  transform: translateY(-2px) scale(1.08);
}
.neon-social__btn--li{ background: #0A66C2; box-shadow: 0 0 14px -2px rgba(10,102,194,.9); }
.neon-social__btn--wa{ background: #25D366; box-shadow: 0 0 14px -2px rgba(37,211,102,.9); }
.neon-social__btn--ig{
  background: radial-gradient(circle at 30% 110%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  box-shadow: 0 0 14px -2px rgba(214,36,159,.8);
}
.neon-social__btn--yt{ background: #FF0000; box-shadow: 0 0 14px -2px rgba(255,0,0,.9); }

/* ---- Let's Talk CTA ---- */
.neon-cta{
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 14px 28px;
  border-radius: 999px;
  background: linear-gradient(180deg, #ffc453 0%, #ffb236 100%);
  color: #0b0f2b;
  font-family: 'Poppins', sans-serif;
  font-size: 13.5px;
  font-weight: 700;
  text-decoration: none;
  white-space: nowrap;
  position: relative;
  flex-shrink: 0;
  border: 1px solid rgba(255, 200, 100, 0.5);
  box-shadow:
    0 0 30px -4px rgba(255, 178, 54, 0.8),
    0 0 60px -12px rgba(255, 178, 54, 0.5),
    inset 0 1px 0 rgba(255, 255, 255, 0.5);
  transition: transform .2s ease, box-shadow .2s ease;
}
.neon-cta:hover{
  transform: translateY(-1px);
  box-shadow:
    0 0 40px -4px rgba(255, 178, 54, 1),
    0 0 80px -12px rgba(255, 178, 54, 0.65),
    inset 0 1px 0 rgba(255, 255, 255, 0.5);
}
.neon-cta__arrow{ transition: transform .25s ease; }
.neon-cta:hover .neon-cta__arrow{ transform: translateX(4px); }

/* ---- 24/7 Badge with CURVED shape ---- */
.neon-badge{
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 10px 26px 10px 20px;
  border-radius: 999px;
  background: rgba(10, 20, 48, 0.75);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  flex-shrink: 0;
  position: relative;
  overflow: hidden;
  isolation: isolate;
}

/* The curved glowing outline behind the badge */
.neon-badge__curve{
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 0;
}

/* Vertical glowing divider before badge */
.neon-badge__divider{
  width: 1px;
  height: 34px;
  background: linear-gradient(180deg,
    transparent 0%,
    rgba(77, 159, 255, 0.7) 50%,
    transparent 100%);
  box-shadow: 0 0 12px rgba(77, 159, 255, 0.8);
  flex-shrink: 0;
  margin-right: 4px;
}

.neon-badge__icon{
  color: #4d9fff;
  filter: drop-shadow(0 0 8px rgba(77, 159, 255, 0.9));
  position: relative;
  z-index: 1;
}
.neon-badge__text{
  display: flex;
  flex-direction: column;
  line-height: 1.1;
  font-family: 'Poppins', sans-serif;
  position: relative;
  z-index: 1;
}
.neon-badge__text strong{
  font-size: 14px;
  font-weight: 700;
  color: #fff;
}
.neon-badge__text span{
  font-size: 10.5px;
  font-weight: 500;
  color: rgba(255, 255, 255, 0.6);
}

/* ---- Mobile toggle ---- */
.neon-nav-toggle{
  display: none;
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: rgba(10, 20, 48, 0.85);
  border: 1px solid rgba(77, 159, 255, 0.3);
  color: #fff;
  place-items: center;
  cursor: pointer;
  flex-shrink: 0;
  transition: background .2s ease;
}
.neon-nav-toggle:hover{
  background: rgba(77, 159, 255, 0.15);
}

/* =========================================================
   RESPONSIVE
   ========================================================= */
@media (max-width: 1500px){
  .neon-header__inner{ gap: 12px; }
  .neon-nav a{ padding: 9px 14px; font-size: 12.5px; }
  .neon-brand{ padding: 12px 20px; }
  .neon-brand__text{ font-size: 15px; }
}
@media (max-width: 1300px){
  .neon-badge__text span{ display: none; }
  .neon-badge{ padding: 10px 18px 10px 14px; }
}
@media (max-width: 1180px){
  .neon-header{ padding: 22px 22px; }
  .neon-cta span{ display: none; }
  .neon-cta{ padding: 12px 14px; gap: 6px; }
  .neon-cta__send{ display: none; }
}
@media (max-width: 1024px){
  .neon-header{ padding: 16px 18px; }
  .neon-nav-toggle{ display: grid; }
  .neon-badge{ display: none; }

  .neon-nav{
    position: fixed;
    top: 86px;
    left: 16px;
    right: 16px;
    flex-direction: column;
    align-items: stretch;
    padding: 12px;
    border-radius: 20px;
    background: rgba(10, 20, 48, 0.97);
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
    transform: translateY(-16px);
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transition: transform .3s cubic-bezier(.2,.7,.2,1),
                opacity .25s ease,
                visibility 0s linear .3s;
    z-index: 70;
  }
  .neon-nav.is-open{
    transform: translateY(0);
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transition-delay: 0s;
  }
  .neon-nav a{
    padding: 14px 18px;
    border-radius: 12px;
    font-size: 15px;
    justify-content: flex-start;
  }
  .neon-social{ margin-left: auto; }
}
@media (max-width: 720px){
  .neon-header{ padding: 12px 14px; }
  .neon-brand{ padding: 10px 14px; gap: 8px; }
  .neon-brand__text{ font-size: 13px; }
  .neon-brand__mark svg{ width: 22px; height: 22px; }
  .neon-social{ display: none; }
  .neon-cta{ padding: 10px 12px; }
  .neon-cta__arrow{ width: 16px; height: 16px; }
  .neon-header__orb{ width: 220px; height: 120px; }
}
@media (max-width: 480px){
  .neon-header__waves{ height: 90px; }
}
</style>


{{-- ===================== Neon Header ===================== --}}
<header class="neon-header">

  {{-- ============ BACKGROUND WAVES (main hero of design) ============ --}}
  <svg class="neon-header__waves" viewBox="0 0 1600 120" preserveAspectRatio="none" aria-hidden="true">
    <defs>
      {{-- Golden gradient (left side) --}}
      <linearGradient id="waveGold" x1="0" y1="0" x2="1" y2="0">
        <stop offset="0%"   stop-color="#ffb236" stop-opacity="0"/>
        <stop offset="15%"  stop-color="#ffb236" stop-opacity="0.9"/>
        <stop offset="38%"  stop-color="#ffb236" stop-opacity="0.6"/>
        <stop offset="55%"  stop-color="#ffb236" stop-opacity="0"/>
      </linearGradient>
      {{-- Blue gradient (right side) --}}
      <linearGradient id="waveBlue" x1="0" y1="0" x2="1" y2="0">
        <stop offset="45%"  stop-color="#4d9fff" stop-opacity="0"/>
        <stop offset="65%"  stop-color="#4d9fff" stop-opacity="0.7"/>
        <stop offset="88%"  stop-color="#4d9fff" stop-opacity="0.9"/>
        <stop offset="100%" stop-color="#4d9fff" stop-opacity="0"/>
      </linearGradient>
      {{-- Blur filters for soft glow --}}
      <filter id="waveGlow" x="-10%" y="-50%" width="120%" height="200%">
        <feGaussianBlur stdDeviation="3" result="blur"/>
        <feMerge>
          <feMergeNode in="blur"/>
          <feMergeNode in="SourceGraphic"/>
        </feMerge>
      </filter>
      <filter id="waveGlowWide" x="-10%" y="-100%" width="120%" height="300%">
        <feGaussianBlur stdDeviation="10" result="blur"/>
      </filter>
    </defs>

    {{-- WIDE soft glow (background haze) --}}
    <path d="M0,90 Q200,20 400,40 Q600,60 800,55 Q1100,45 1400,50 Q1550,52 1600,60"
          fill="none" stroke="url(#waveGold)" stroke-width="30"
          filter="url(#waveGlowWide)" opacity="0.35"/>
    <path d="M0,90 Q200,20 400,40 Q600,60 800,55 Q1100,45 1400,50 Q1550,52 1600,60"
          fill="none" stroke="url(#waveBlue)" stroke-width="30"
          filter="url(#waveGlowWide)" opacity="0.35"/>

    {{-- NARROW bright core (the actual glowing line) --}}
    <path d="M0,75 Q200,15 400,35 Q600,55 800,50 Q1100,40 1400,45 Q1550,48 1600,55"
          fill="none" stroke="url(#waveGold)" stroke-width="2"
          filter="url(#waveGlow)"/>

    <path d="M0,80 Q200,20 400,40 Q600,60 800,55 Q1100,45 1400,50 Q1550,52 1600,60"
          fill="none" stroke="url(#waveBlue)" stroke-width="2"
          filter="url(#waveGlow)"/>

    {{-- Under-curve (second wave below) --}}
    <path d="M0,105 Q250,80 500,90 Q750,100 1000,95 Q1250,90 1600,100"
          fill="none" stroke="url(#waveBlue)" stroke-width="1"
          opacity="0.4"/>
  </svg>

  {{-- Left golden orb --}}
  <span class="neon-header__orb neon-header__orb--left" aria-hidden="true"></span>
  {{-- Right blue orb --}}
  <span class="neon-header__orb neon-header__orb--right" aria-hidden="true"></span>

  <div class="neon-header__inner">

    {{-- ============ Brand ============ --}}
    <a href="{{ route('home') }}" class="neon-brand">
      <span class="neon-brand__mark">
        <svg viewBox="0 0 32 32" width="30" height="30" fill="none">
          <circle cx="8" cy="6" r="2.4" fill="#4d9fff"/>
          <circle cx="22" cy="4" r="2" fill="#ffb236"/>
          <circle cx="25" cy="9" r="1.6" fill="#4d9fff"/>
          <path d="M7 10v16c0 1.6 1 2.2 2 2.2s2-.6 2-2.2V10" stroke="#4d9fff" stroke-width="2.6" stroke-linecap="round"/>
          <path d="M13 10h5c2.2 0 3.6 1.6 3.6 3.6S20.2 17 18 17h-5" stroke="#ffb236" stroke-width="2.6" stroke-linecap="round" fill="none"/>
          <path d="M13 17l5.5 6.5c.9 1 .5 2.7-.9 2.7-.7 0-1.2-.3-1.6-.8L10 18.5" stroke="#ffb236" stroke-width="2.6" stroke-linecap="round"/>
        </svg>
      </span>
      <span class="neon-brand__text">
        its<span>technologies</span>.com
      </span>
    </a>

    {{-- ============ Nav pill ============ --}}
    <nav class="neon-nav" id="primaryNav" aria-label="Primary">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'is-active' : '' }}">
        <span class="neon-nav__dot"></span>
        <span>Home</span>
      </a>
      <a href="{{ route('home') }}#about">
        <span class="neon-nav__dot"></span>
        <span>About</span>
      </a>
      <a href="{{ route('home') }}#services">
        <span class="neon-nav__dot"></span>
        <span>Services</span>
      </a>
      <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'is-active' : '' }}">
        <span class="neon-nav__dot"></span>
        <span>Contact Us</span>
      </a>
      <a href="{{ route('home') }}#portfolio">
        <span class="neon-nav__dot"></span>
        <span>Our Portfolio</span>
      </a>
    </nav>

    {{-- ============ Social pill ============ --}}
    <div class="neon-social">
      <a href="#" class="neon-social__btn neon-social__btn--li" aria-label="LinkedIn">
        <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3 9h4v12H3zM9 9h3.8v1.7h.05c.53-1 1.83-2.05 3.77-2.05 4.03 0 4.78 2.65 4.78 6.1V21h-4v-5.5c0-1.3-.02-3-1.83-3-1.83 0-2.1 1.43-2.1 2.9V21H9z"/></svg>
      </a>
      <a href="#" class="neon-social__btn neon-social__btn--wa" aria-label="WhatsApp">
        <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.5 15.3L2 22l4.8-1.5A10 10 0 1 0 12 2Zm5.6 14.2c-.2.6-1.3 1.2-1.9 1.3-.5.1-1.1.1-1.8-.1-.4-.1-1-.3-1.7-.6-3-1.3-4.9-4.3-5.1-4.5-.2-.2-1.2-1.6-1.2-3s.7-2.1 1-2.4c.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5.2.5.7 1.8.8 1.9.1.2.1.3 0 .5-.1.2-.1.3-.3.5l-.4.5c-.2.2-.3.4-.1.7.2.3.9 1.4 1.9 2.3 1.3 1.1 2.4 1.5 2.7 1.6.3.1.5.1.7-.1l.6-.7c.2-.3.4-.2.7-.1l1.7.8c.2.1.4.2.5.3.1.2.1.9-.1 1.5Z"/></svg>
      </a>
      <a href="#" class="neon-social__btn neon-social__btn--ig" aria-label="Instagram">
        <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M12 2c2.7 0 3.06.01 4.12.06 1.06.05 1.79.22 2.43.47.66.26 1.22.6 1.77 1.15.55.55.9 1.11 1.15 1.77.25.64.42 1.37.47 2.43.05 1.06.06 1.42.06 4.12s-.01 3.06-.06 4.12c-.05 1.06-.22 1.79-.47 2.43a4.9 4.9 0 0 1-1.15 1.77 4.9 4.9 0 0 1-1.77 1.15c-.64.25-1.37.42-2.43.47-1.06.05-1.42.06-4.12.06s-3.06-.01-4.12-.06c-1.06-.05-1.79-.22-2.43-.47a4.9 4.9 0 0 1-1.77-1.15 4.9 4.9 0 0 1-1.15-1.77c-.25-.64-.42-1.37-.47-2.43C2.01 15.06 2 14.7 2 12s.01-3.06.06-4.12c.05-1.06.22-1.79.47-2.43.26-.66.6-1.22 1.15-1.77A4.9 4.9 0 0 1 7.88.06C8.94.01 9.3 0 12 0Zm0 5.35a6.65 6.65 0 1 0 0 13.3 6.65 6.65 0 0 0 0-13.3Zm0 11a4.35 4.35 0 1 1 0-8.7 4.35 4.35 0 0 1 0 8.7ZM19 5.2a1.55 1.55 0 1 1-3.1 0 1.55 1.55 0 0 1 3.1 0Z"/></svg>
      </a>
      <a href="#" class="neon-social__btn neon-social__btn--yt" aria-label="YouTube">
        <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M22 12s0-3.2-.4-4.7a2.9 2.9 0 0 0-2-2C17.9 5 12 5 12 5s-5.9 0-7.6.3a2.9 2.9 0 0 0-2 2C2 8.8 2 12 2 12s0 3.2.4 4.7c.25 1 1 1.7 2 2C6.1 19 12 19 12 19s5.9 0 7.6-.3a2.9 2.9 0 0 0 2-2C22 15.2 22 12 22 12ZM10 15.5v-7l6 3.5Z"/></svg>
      </a>
    </div>

    {{-- ============ Let's Talk CTA ============ --}}
    <a href="{{ route('contact') }}" class="neon-cta">
      <svg class="neon-cta__send" viewBox="0 0 24 24" width="14" height="14" fill="currentColor">
        <path d="M3.4 20.4l17.45-7.48a1 1 0 000-1.84L3.4 3.6a1 1 0 00-1.4 1.1l1.9 6.6a1 1 0 00.9.7H14a.5.5 0 010 1H4.8a1 1 0 00-.9.7l-1.9 6.6a1 1 0 001.4 1.1z"/>
      </svg>
      <span>Let's Talk</span>
      <svg class="neon-cta__arrow" viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <line x1="5" y1="12" x2="19" y2="12"/>
        <polyline points="12 5 19 12 12 19"/>
      </svg>
    </a>

    {{-- ============ 24/7 Badge — CURVED shape ============ --}}
    <div class="neon-badge">
      {{-- Curved glowing outline behind the badge --}}
      <svg class="neon-badge__curve" viewBox="0 0 200 70" preserveAspectRatio="none" aria-hidden="true">
        <defs>
          <linearGradient id="badgeCurve" x1="0" y1="0" x2="1" y2="0">
            <stop offset="0%"   stop-color="#4d9fff" stop-opacity="0.2"/>
            <stop offset="50%"  stop-color="#4d9fff" stop-opacity="0.9"/>
            <stop offset="100%" stop-color="#4d9fff" stop-opacity="0.2"/>
          </linearGradient>
        </defs>
        <path d="M0,35 Q40,5 100,5 T200,35 Q160,65 100,65 T0,35 Z"
              fill="none" stroke="url(#badgeCurve)" stroke-width="1.8"/>
      </svg>
      <span class="neon-badge__divider" aria-hidden="true"></span>
      <svg class="neon-badge__icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 17v-5a9 9 0 0 1 18 0v5"/>
        <path d="M21 17a2 2 0 0 1-2 2h-1v-6h1a2 2 0 0 1 2 2v2z"/>
        <path d="M3 17a2 2 0 0 0 2 2h1v-6H5a2 2 0 0 0-2 2v2z"/>
      </svg>
      <div class="neon-badge__text">
        <strong>24/7</strong>
        <span>Quick Response</span>
      </div>
    </div>

    {{-- Mobile toggle --}}
    <button class="neon-nav-toggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="primaryNav">
      <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
        <line x1="4" y1="7" x2="20" y2="7"/>
        <line x1="4" y1="12" x2="20" y2="12"/>
        <line x1="4" y1="17" x2="20" y2="17"/>
      </svg>
    </button>

  </div>
</header>