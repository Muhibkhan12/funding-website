<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>VaultEdge — Flexible Business Financing for Growth</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet" />
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: { lime: '#CCFF00', ink: '#1a1a1a' },
        fontFamily: {
          display: ['Bebas Neue', 'sans-serif'],
          body: ['DM Sans', 'sans-serif'],
        },
        keyframes: {
          marquee: { '0%': { transform: 'translateX(0)' }, '100%': { transform: 'translateX(-50%)' } },
          badgePulse: { '0%,100%': { transform: 'scale(1)' }, '50%': { transform: 'scale(1.06)' } },
          floatUp: { '0%': { opacity: '0', transform: 'translateY(24px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
        },
        animation: {
          marquee: 'marquee 22s linear infinite',
          badgePulse: 'badgePulse 3s ease-in-out infinite',
          floatUp1: 'floatUp 0.7s cubic-bezier(0.22,1,0.36,1) 0.65s both',
          floatUp2: 'floatUp 0.7s cubic-bezier(0.22,1,0.36,1) 1.05s both',
        },
      },
    },
  }
</script>
<style>
  :root { --lime: #CCFF00; --ink: #1a1a1a; }

  /* Grain texture */
  body::after {
    content:''; position:fixed; inset:0; pointer-events:none; z-index:9999; opacity:0.028;
    background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
    background-size:128px;
  }

  /* Reveal */
  .reveal { opacity:0; transform:translateY(28px); transition:opacity 0.7s ease, transform 0.75s cubic-bezier(0.22,1,0.36,1); }
  .reveal.visible { opacity:1; transform:translateY(0); }

  /* Eyebrow line */
  .eyebrow::before { content:''; display:inline-block; width:28px; height:1px; background:var(--lime); margin-right:10px; vertical-align:middle; }

  /* CTA sweep */
  .btn-sweep { position:relative; overflow:hidden; }
  .btn-sweep::after { content:''; position:absolute; inset:0; background:#fff; transform:translateX(-101%); transition:transform 0.32s cubic-bezier(0.77,0,0.18,1); }
  .btn-sweep:hover::after { transform:translateX(0); }
  .btn-sweep span { position:relative; z-index:1; }

  /* Step hover */
  .step-card { transition: transform 0.3s cubic-bezier(0.22,1,0.36,1), box-shadow 0.3s; }
  .step-card:hover { transform:translateY(-7px); box-shadow:0 20px 64px rgba(204,255,0,0.13); }

  /* Stat num */
  .stat-num { font-family:'Bebas Neue',sans-serif; font-size:clamp(78px,9.5vw,130px); color:var(--lime); line-height:0.85; letter-spacing:-0.01em; }

  /* Step decorative bg number */
  .step-bg-num { font-family:'Bebas Neue',sans-serif; font-size:clamp(160px,16vw,230px); color:rgba(204,255,0,0.055); line-height:1; user-select:none; transition:color 0.3s; }
  .step-card:hover .step-bg-num { color:rgba(204,255,0,0.11); }

  /* Hero headline */
  .hero-hl { font-family:'Bebas Neue',sans-serif; font-size:clamp(66px,8vw,110px); line-height:0.88; letter-spacing:0.01em; }
  .how-hl  { font-family:'Bebas Neue',sans-serif; font-size:clamp(52px,6vw,84px); line-height:0.9; }
  .cta-hl  { font-family:'Bebas Neue',sans-serif; font-size:clamp(48px,6vw,86px); line-height:0.9; }
  .financing-hl { font-family:'Bebas Neue',sans-serif; font-size:clamp(48px,5vw,72px); line-height:1; }

  /* Hero glow */
  #hero::before { content:''; position:absolute; inset:0; pointer-events:none; background:radial-gradient(ellipse 58% 70% at 80% 50%, rgba(204,255,0,0.04) 0%, transparent 70%); }

  /* Scrollbar */
  ::-webkit-scrollbar { width:4px; } ::-webkit-scrollbar-track { background:#2a2a2a; } ::-webkit-scrollbar-thumb { background:#444; }

  /* financing cards */
  .fin-card { background: #222; border:1px solid rgba(255,255,255,0.055); transition: all 0.25s ease; }
  .fin-card:hover { border-color: rgba(204,255,0,0.3); transform: translateY(-4px); background: #2a2a2a; }
</style>
</head>
<body class="bg-[#1a1a1a] text-white font-body overflow-x-hidden">

<?php
@include('header.php')
?>

<!-- ══ HERO (original content preserved but messaging tuned to financing) ══ -->
<section id="hero" class="relative min-h-screen grid grid-cols-1 md:grid-cols-2 items-center pt-16 px-6 md:px-12 overflow-hidden">
  <div class="pr-0 md:pr-14 py-20 md:py-0 z-10">
    <p class="eyebrow inline-flex items-center text-[11px] font-semibold tracking-[0.16em] uppercase text-white/38 mb-7">Flexible Business Financing</p>
    <h1 class="hero-hl text-white mb-8">
      Fast Capital<br/>
      to Help Your<br/>
      <span class="text-lime">Business Grow</span>
    </h1>
    <p class="text-[15px] leading-[1.75] text-white/48 font-light max-w-[440px] mb-10">
      Access fast and reliable funding solutions designed to support your business at every stage of growth — expand, manage cash flow, or invest in new opportunities.
    </p>
    <div class="flex flex-wrap gap-4">
      <a href="#" class="btn-sweep inline-block bg-lime text-ink border-2 border-lime px-9 py-[14px] text-[13px] font-bold tracking-[0.1em] uppercase cursor-pointer">
        <span>Apply in Minutes →</span>
      </a>
      <a href="#" class="inline-block bg-transparent text-white border border-white/22 px-9 py-[14px] text-[13px] font-medium tracking-[0.1em] uppercase hover:border-white/70 transition-colors cursor-pointer">
        Talk to an Expert
      </a>
    </div>
  </div>

  <!-- Right photo + cards (unchanged layout) -->
  <div class="relative hidden md:flex items-center justify-center h-full min-h-[82vh]">
    <div class="relative w-full max-w-[500px]">
      <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=900&q=80&auto=format&fit=crop&crop=top" alt="Financial professional" class="w-full h-[580px] object-cover object-top block" style="filter:grayscale(100%) contrast(1.1) brightness(0.88);" />
      <div class="absolute bottom-0 left-0 w-[3px] h-[65%] bg-lime opacity-60"></div>
      <div class="absolute top-0 right-0 w-[3px] h-[30%] bg-lime opacity-35"></div>
      <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-[#1a1a1a]/80 to-transparent pointer-events-none"></div>
      <div class="animate-floatUp1 absolute top-[68px] -right-10 bg-[rgba(26,26,26,0.88)] backdrop-blur-2xl border border-white/[0.09] rounded-xl p-4 min-w-[215px] shadow-2xl">
        <p class="text-[10px] font-semibold tracking-[0.14em] uppercase text-white/32 mb-3">Why VaultEdge</p>
        <div class="flex flex-col gap-[7px]">
          <div class="flex items-center gap-2 text-[13px] text-white/78 font-light"><span class="w-[6px] h-[6px] rounded-full bg-lime flex-shrink-0"></span>Fast & simple process</div>
          <div class="flex items-center gap-2 text-[13px] text-white/78 font-light"><span class="w-[6px] h-[6px] rounded-full bg-lime flex-shrink-0"></span>Flexible loan options</div>
          <div class="flex items-center gap-2 text-[13px] text-white/78 font-light"><span class="w-[6px] h-[6px] rounded-full bg-lime flex-shrink-0"></span>Support all credit profiles</div>
          <div class="flex items-center gap-2 text-[13px] text-white/78 font-light"><span class="w-[6px] h-[6px] rounded-full bg-lime flex-shrink-0"></span>Clear terms, transparent</div>
        </div>
      </div>
      <div class="animate-floatUp2 absolute bottom-24 -left-14 bg-[rgba(26,26,26,0.88)] backdrop-blur-2xl border border-white/[0.09] rounded-xl p-4 min-w-[195px] shadow-2xl">
        <p class="text-[10px] font-semibold tracking-[0.14em] uppercase text-white/32 mb-2">Avg. Funding Speed</p>
        <p class="font-display text-[32px] text-white leading-none">24-48h</p>
        <p class="text-[11px] text-white/32 mt-1 tracking-[0.06em] uppercase">Approval to funding</p>
      </div>
      <div class="animate-badgePulse absolute top-[30%] -right-8 w-[92px] h-[92px] bg-lime rounded-full flex flex-col items-center justify-center z-20 shadow-lg">
        <span class="font-display text-[22px] text-ink leading-none">$10K+</span>
        <span class="text-[8px] font-bold tracking-[0.08em] uppercase text-black/55 mt-[2px]">Min Loan</span>
      </div>
    </div>
  </div>
</section>

<!-- ══ MARQUEE (original untouched) ══ -->
<div class="border-t border-b border-white/[0.07] overflow-hidden py-5">
  <div class="flex whitespace-nowrap animate-marquee">
    <span class="inline-flex items-center gap-10 px-10 font-display text-[30px] text-white/[0.1] tracking-[0.04em] uppercase shrink-0">Business Loans <span class="w-2 h-2 rounded-full bg-lime opacity-45 inline-block"></span></span>
    <span class="inline-flex items-center gap-10 px-10 font-display text-[30px] text-white/[0.1] tracking-[0.04em] uppercase shrink-0">SBA Financing <span class="w-2 h-2 rounded-full bg-lime opacity-45 inline-block"></span></span>
    <span class="inline-flex items-center gap-10 px-10 font-display text-[30px] text-white/[0.1] tracking-[0.04em] uppercase shrink-0">Commercial Real Estate <span class="w-2 h-2 rounded-full bg-lime opacity-45 inline-block"></span></span>
    <span class="inline-flex items-center gap-10 px-10 font-display text-[30px] text-white/[0.1] tracking-[0.04em] uppercase shrink-0">Equipment Financing <span class="w-2 h-2 rounded-full bg-lime opacity-45 inline-block"></span></span>
    <span class="inline-flex items-center gap-10 px-10 font-display text-[30px] text-white/[0.1] tracking-[0.04em] uppercase shrink-0">Construction Loans <span class="w-2 h-2 rounded-full bg-lime opacity-45 inline-block"></span></span>
    <span class="inline-flex items-center gap-10 px-10 font-display text-[30px] text-white/[0.1] tracking-[0.04em] uppercase shrink-0">Cash Flow Solutions <span class="w-2 h-2 rounded-full bg-lime opacity-45 inline-block"></span></span>
    <span class="inline-flex items-center gap-10 px-10 font-display text-[30px] text-white/[0.1] tracking-[0.04em] uppercase shrink-0">Business Loans <span class="w-2 h-2 rounded-full bg-lime opacity-45 inline-block"></span></span>
    <span class="inline-flex items-center gap-10 px-10 font-display text-[30px] text-white/[0.1] tracking-[0.04em] uppercase shrink-0">SBA Financing <span class="w-2 h-2 rounded-full bg-lime opacity-45 inline-block"></span></span>
    <span class="inline-flex items-center gap-10 px-10 font-display text-[30px] text-white/[0.1] tracking-[0.04em] uppercase shrink-0">Commercial Real Estate <span class="w-2 h-2 rounded-full bg-lime opacity-45 inline-block"></span></span>
    <span class="inline-flex items-center gap-10 px-10 font-display text-[30px] text-white/[0.1] tracking-[0.04em] uppercase shrink-0">Equipment Financing <span class="w-2 h-2 rounded-full bg-lime opacity-45 inline-block"></span></span>
    <span class="inline-flex items-center gap-10 px-10 font-display text-[30px] text-white/[0.1] tracking-[0.04em] uppercase shrink-0">Construction Loans <span class="w-2 h-2 rounded-full bg-lime opacity-45 inline-block"></span></span>
    <span class="inline-flex items-center gap-10 px-10 font-display text-[30px] text-white/[0.1] tracking-[0.04em] uppercase shrink-0">Cash Flow Solutions <span class="w-2 h-2 rounded-full bg-lime opacity-45 inline-block"></span></span>
  </div>
</div>

<section class="px-6 md:px-12 py-24 border-t border-white/[0.07]">
  <div class="flex items-center gap-4 text-[11px] font-semibold tracking-[0.18em] uppercase text-white/28 mb-12">
    Funding Solutions <div class="flex-1 h-px bg-white/[0.07]"></div>
  </div>
  <div class="flex flex-col md:flex-row items-end justify-between gap-6 mb-14">
    <h2 class="financing-hl text-white">Our Financing<br/>Solutions</h2>
    <p class="text-[14px] font-light text-white/38 max-w-[320px] md:text-right leading-relaxed">From working capital to large investments — flexible options tailored for your business.</p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
    <div class="relative rounded-2xl overflow-hidden min-h-[280px] flex items-end group cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500">
      <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=800&q=80');"></div>
      <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a]/90 via-[#1a1a1a]/50 to-black/20 group-hover:from-[#1a1a1a]/70 group-hover:via-[#1a1a1a]/40 transition-all duration-500"></div>
      <div class="relative z-10 p-6 w-full transform transition-transform duration-500 group-hover:translate-y-[-4px]">
        <h3 class="font-display text-2xl text-lime mb-2 group-hover:text-lime-300 transition-colors">Business Loans</h3>
        <p class="text-white/70 text-sm leading-relaxed group-hover:text-white/90 transition-colors">Flexible funding to manage operations, expand, or improve cash flow. Fast approval and competitive terms.</p>
      </div>
    </div>
    <div class="relative rounded-2xl overflow-hidden min-h-[280px] flex items-end group cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500">
      <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&q=80');"></div>
      <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a]/90 via-[#1a1a1a]/50 to-black/20 group-hover:from-[#1a1a1a]/70 group-hover:via-[#1a1a1a]/40 transition-all duration-500"></div>
      <div class="relative z-10 p-6 w-full transform transition-transform duration-500 group-hover:translate-y-[-4px]">
        <h3 class="font-display text-2xl text-lime mb-2 group-hover:text-lime-300 transition-colors">Commercial Financing</h3>
        <p class="text-white/70 text-sm leading-relaxed group-hover:text-white/90 transition-colors">Capital solutions for real estate, equipment purchases, and large business investments.</p>
      </div>
    </div>
    <div class="relative rounded-2xl overflow-hidden min-h-[280px] flex items-end group cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500">
      <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?w=800&q=80');"></div>
      <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a]/90 via-[#1a1a1a]/50 to-black/20 group-hover:from-[#1a1a1a]/70 group-hover:via-[#1a1a1a]/40 transition-all duration-500"></div>
      <div class="relative z-10 p-6 w-full transform transition-transform duration-500 group-hover:translate-y-[-4px]">
        <h3 class="font-display text-2xl text-lime mb-2 group-hover:text-lime-300 transition-colors">SBA Loan Assistance</h3>
        <p class="text-white/70 text-sm leading-relaxed group-hover:text-white/90 transition-colors">Access to government-backed loan programs designed to support small business growth.</p>
      </div>
    </div>
    <div class="relative rounded-2xl overflow-hidden min-h-[280px] flex items-end group cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500">
      <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800&q=80');"></div>
      <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a1a]/90 via-[#1a1a1a]/50 to-black/20 group-hover:from-[#1a1a1a]/70 group-hover:via-[#1a1a1a]/40 transition-all duration-500"></div>
      <div class="relative z-10 p-6 w-full transform transition-transform duration-500 group-hover:translate-y-[-4px]">
        <h3 class="font-display text-2xl text-lime mb-2 group-hover:text-lime-300 transition-colors">Construction Financing</h3>
        <p class="text-white/70 text-sm leading-relaxed group-hover:text-white/90 transition-colors">Funding solutions tailored for construction projects and development needs.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ WHY CHOOSE US (new section mirroring original brief) ══ -->
<section class="px-6 md:px-12 py-16 border-t border-white/[0.07] bg-[#222]/60">
  <div class="grid md:grid-cols-2 gap-12 items-center">
    <div>
      <p class="text-[11px] font-bold tracking-[0.18em] uppercase text-lime mb-4">Why VaultEdge</p>
      <h2 class="how-hl text-white mb-6">Financing that <br/><span class="text-lime">Fits Your Business</span></h2>
      <p class="text-white/40 text-sm leading-relaxed mb-8">We focus on finding the right funding solution based on your business needs—not just a one-size-fits-all loan. Our transparent process and dedicated support set you up for success.</p>
      <ul class="space-y-3">
        <li class="flex items-center gap-3 text-white/70 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-lime"></span> Fast and simple application process</li>
        <li class="flex items-center gap-3 text-white/70 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-lime"></span> Flexible financing options tailored to your business</li>
        <li class="flex items-center gap-3 text-white/70 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-lime"></span> Transparent process with clear terms</li>
        <li class="flex items-center gap-3 text-white/70 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-lime"></span> Support for a wide range of credit profiles</li>
        <li class="flex items-center gap-3 text-white/70 text-sm"><span class="w-1.5 h-1.5 rounded-full bg-lime"></span> Dedicated customer support team</li>
      </ul>
    </div>
    <div class="bg-[#222] border border-white/[0.07] rounded-2xl p-8">
      <p class="text-lime text-sm font-semibold uppercase tracking-wider mb-2">Our goal</p>
      <p class="text-white/80 text-base leading-relaxed italic">"Simplify the funding process by connecting business owners with flexible loan options through a network of trusted financial partners. Every business deserves the opportunity to grow with the right financial support."</p>
      <div class="mt-6 pt-4 border-t border-white/[0.08] flex justify-between items-center">
        <span class="text-white/30 text-xs uppercase tracking-wider">VaultEdge Team</span>
        <span class="text-lime text-lg">⚡</span>
      </div>
    </div>
  </div>
</section>

<!-- ══ STATS (preserved original, numbers updated to reflect financing context) ══ -->
<section id="stats" class="px-6 md:px-12 py-24 border-t border-white/[0.07]">
  <p class="font-display text-[13px] tracking-[0.22em] uppercase text-white/28 mb-14">Our impact in numbers</p>
  <div class="stat-row reveal grid grid-cols-[56px_1fr] md:grid-cols-[80px_1fr_300px] items-center gap-8 md:gap-10 py-12 border-t border-white/[0.07]">
    <span class="text-[11px] font-medium tracking-[0.1em] text-white/18">01</span>
    <span class="stat-num" data-target="1200" data-suffix="+">0</span>
    <div class="hidden md:block"><p class="text-[15px] font-medium text-white mb-1">Businesses Funded</p><p class="text-[13px] font-light text-white/38 leading-relaxed">From startups to established enterprises — we've powered growth nationwide.</p></div>
  </div>
  <div class="stat-row reveal grid grid-cols-[56px_1fr] md:grid-cols-[80px_1fr_300px] items-center gap-8 md:gap-10 py-12 border-t border-white/[0.07]">
    <span class="text-[11px] font-medium tracking-[0.1em] text-white/18">02</span>
    <span class="stat-num" data-target="98" data-suffix="%">0</span>
    <div class="hidden md:block"><p class="text-[15px] font-medium text-white mb-1">Client Satisfaction</p><p class="text-[13px] font-light text-white/38 leading-relaxed">Rated excellent for fast approvals and transparent loan matching.</p></div>
  </div>
  <div class="stat-row reveal grid grid-cols-[56px_1fr] md:grid-cols-[80px_1fr_300px] items-center gap-8 md:gap-10 py-12 border-t border-b border-white/[0.07]">
    <span class="text-[11px] font-medium tracking-[0.1em] text-white/18">03</span>
    <span class="stat-num" data-target="75" data-prefix="$" data-suffix="M">0</span>
    <div class="hidden md:block"><p class="text-[15px] font-medium text-white mb-1">Capital Deployed (YTD)</p><p class="text-[13px] font-light text-white/38 leading-relaxed">Empowering SMEs with working capital, commercial loans, and SBA funding.</p></div>
  </div>
</section>

<!-- ══ HOW IT WORKS (original step cards but content tailored to financing application flow) ══ -->
<section id="how" class="px-6 md:px-12 py-24">
  <div class="flex items-center gap-4 text-[11px] font-semibold tracking-[0.18em] uppercase text-white/28 mb-12">
    Simple Process <div class="flex-1 h-px bg-white/[0.07]"></div>
  </div>
  <div class="flex flex-col md:flex-row items-start md:items-end justify-between gap-6 mb-14">
    <h2 class="how-hl text-white">How It<br/>Works</h2>
    <p class="text-[14px] font-light text-white/38 max-w-[280px] md:text-right leading-relaxed">Apply in minutes, get matched, and receive funding quickly.</p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-[2px]">
    <div class="step-card reveal relative bg-[#222] border border-white/[0.055] rounded-sm p-10 min-h-[300px] flex flex-col justify-end overflow-hidden">
      <div class="step-bg-num absolute top-[-18px] left-4 pointer-events-none">01</div>
      <p class="text-[10px] font-bold tracking-[0.18em] uppercase text-lime mb-2">Step 01</p>
      <p class="text-[18px] font-medium text-white leading-snug">Apply Online</p>
      <p class="text-[13px] font-light text-white/32 mt-2 leading-relaxed">Submit a simple application with your business details — only basic info required.</p>
    </div>
    <div class="step-card reveal relative bg-[#222] border border-white/[0.055] rounded-sm p-10 min-h-[300px] flex flex-col justify-end overflow-hidden" style="transition-delay:0.1s">
      <div class="step-bg-num absolute top-[-18px] left-4 pointer-events-none">02</div>
      <p class="text-[10px] font-bold tracking-[0.18em] uppercase text-lime mb-2">Step 02</p>
      <p class="text-[18px] font-medium text-white leading-snug">Get Matched</p>
      <p class="text-[13px] font-light text-white/32 mt-2 leading-relaxed">We review your information and connect you with suitable financing options from our partner network.</p>
    </div>
    <div class="step-card reveal relative bg-[#222] border border-white/[0.055] rounded-sm p-10 min-h-[300px] flex flex-col justify-end overflow-hidden" style="transition-delay:0.2s">
      <div class="step-bg-num absolute top-[-18px] left-4 pointer-events-none">03</div>
      <p class="text-[10px] font-bold tracking-[0.18em] uppercase text-lime mb-2">Step 03</p>
      <p class="text-[18px] font-medium text-white leading-snug">Receive Funding</p>
      <p class="text-[13px] font-light text-white/32 mt-2 leading-relaxed">Once approved, funding is processed quickly through our lending partners. Capital in your account.</p>
    </div>
    <div class="step-card reveal relative bg-[#222] border border-white/[0.055] rounded-sm p-10 min-h-[300px] flex flex-col justify-end overflow-hidden" style="transition-delay:0.3s">
      <div class="step-bg-num absolute top-[-18px] left-4 pointer-events-none">04</div>
      <p class="text-[10px] font-bold tracking-[0.18em] uppercase text-lime mb-2">Step 04</p>
      <p class="text-[18px] font-medium text-white leading-snug">Grow Your Business</p>
      <p class="text-[13px] font-light text-white/32 mt-2 leading-relaxed">Use the capital to expand, manage cash flow, or invest — we're with you at every stage.</p>
    </div>
  </div>
</section>

<!-- ══ ABOUT US (new but preserving design, adds "About Us" content from brief) ══ -->
<section class="px-6 md:px-12 py-20 border-t border-white/[0.07]">
  <div class="max-w-3xl mx-auto text-center reveal">
    <p class="text-[11px] font-bold tracking-[0.2em] uppercase text-lime mb-3">About VaultEdge</p>
    <h2 class="financing-hl text-white mb-6">We help SMEs access<br/>the capital they need</h2>
    <p class="text-white/40 text-base leading-relaxed mb-6">We are a business financing solutions provider focused on helping small and medium-sized businesses access the capital they need to grow and succeed. Our mission is to simplify the funding process by connecting business owners with flexible loan options through a network of trusted financial partners. We believe every business deserves the opportunity to grow with the right financial support.</p>
    <div class="flex justify-center gap-5 pt-4">
      <span class="text-white/20 text-sm uppercase tracking-wider border-r border-white/10 pr-4">Trusted partners</span>
      <span class="text-white/20 text-sm uppercase tracking-wider">0% hidden fees</span>
    </div>
  </div>
</section>

<!-- ══ CTA BAND (updated with "Get Started" and "Talk to Expert") ══ -->
<section class="reveal px-6 md:px-12 py-28 border-t border-white/[0.07] flex flex-col md:flex-row items-start md:items-center justify-between gap-10">
  <div>
    <p class="text-[11px] font-bold tracking-[0.18em] uppercase text-white/22 mb-4">Ready to Grow?</p>
    <h2 class="cta-hl text-white">Take the Next<br/><span class="text-lime">Step Today</span></h2>
  </div>
  <div class="flex flex-col items-start md:items-end gap-5">
    <p class="text-[14px] font-light text-white/38 max-w-[300px] md:text-right leading-relaxed">Explore financing options designed to help your business move forward. Apply now or speak with a funding specialist.</p>
    <div class="flex flex-wrap gap-4">
      <a href="#" class="btn-sweep inline-block bg-lime text-ink border-2 border-lime px-9 py-[14px] text-[13px] font-bold tracking-[0.1em] uppercase cursor-pointer">
        <span>Apply Now →</span>
      </a>
      <a href="#" class="inline-block bg-transparent text-white border border-white/22 px-9 py-[14px] text-[13px] font-medium tracking-[0.1em] uppercase hover:border-white/70 transition-colors cursor-pointer">
        Talk to Expert
      </a>
    </div>
  </div>
</section>

<!-- ══ FOOTER (original structure intact) ══ -->
<?php
@include('footer.php')?>

<script>
  // reveal on scroll
  const ro = new IntersectionObserver(entries => entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); }), { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(el => ro.observe(el));

  // count-up
  function countUp(el) {
    const target = +el.dataset.target;
    const prefix = el.dataset.prefix || '';
    const suffix = el.dataset.suffix || '';
    const dur = 1700, t0 = performance.now();
    (function tick(now) {
      const p = Math.min((now - t0) / dur, 1);
      const ease = 1 - Math.pow(2, -10 * p);
      el.textContent = prefix + Math.floor(ease * target).toLocaleString() + suffix;
      if (p < 1) requestAnimationFrame(tick);
    })(t0);
  }
  const co = new IntersectionObserver(entries => entries.forEach(e => {
    if(e.isIntersecting && !e.target.dataset.done) { e.target.dataset.done = 1; countUp(e.target); }
  }), { threshold: 0.4 });
  document.querySelectorAll('.stat-num').forEach(el => co.observe(el));
</script>
</body>
</html>