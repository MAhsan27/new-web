


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

</header>