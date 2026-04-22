<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Our Loan Programs | BizCashAndCapital — SBA, Business, Commercial, Construction, Bridge Loans</title>
<meta name="description" content="Explore BizCashAndCapital's comprehensive loan programs: SBA Loans, Business Loans, Commercial Loans, Construction Loans, and Bridge Loans. Find the perfect financing solution for your business needs.">
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet" />
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: { 
          lime: '#CCFF00', 
          ink: '#0A0A0A' 
        },
        fontFamily: {
          display: ['Space Grotesk', 'sans-serif'],
          body: ['Inter', 'sans-serif'],
        },
        keyframes: {
          floatUp: { '0%': { opacity: '0', transform: 'translateY(24px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
        },
        animation: {
          floatUp1: 'floatUp 0.7s cubic-bezier(0.22,1,0.36,1) 0.65s both',
          floatUp2: 'floatUp 0.7s cubic-bezier(0.22,1,0.36,1) 1.05s both',
        },
      },
    },
  }
</script>
<style>
  :root { --lime: #CCFF00; --ink: #0A0A0A; }

  /* Grain texture overlay */
  body::after {
    content:''; position:fixed; inset:0; pointer-events:none; z-index:9999; opacity:0.028;
    background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
    background-size:128px;
  }

  * { margin:0; padding:0; box-sizing:border-box; }
  html { scroll-behavior: smooth; }
  body { background: var(--ink); color: white; font-family: 'Inter', sans-serif; overflow-x: hidden; }

  /* Reveal animation */
  .reveal { opacity: 0; transform: translateY(22px); transition: opacity 0.65s ease, transform 0.65s cubic-bezier(0.22,1,0.36,1); }
  .reveal.visible { opacity: 1; transform: translateY(0); }

  /* Lime underline heading */
  .lime-underline { position: relative; display: inline-block; }
  .lime-underline::after { content:''; position:absolute; bottom:-6px; left:0; width:60px; height:3px; background: var(--lime); border-radius:2px; }

  /* Loan card hover */
  .loan-card { transition: transform 0.28s ease, box-shadow 0.28s ease; background: #0d0d0d; border: 1px solid rgba(255,255,255,0.07); }
  .loan-card:hover { transform: translateY(-5px); box-shadow: 0 16px 48px rgba(204,255,0,0.12); border-color: rgba(204,255,0,0.3); }

  /* Buttons */
  .btn-gold {
    background: var(--lime); color: var(--ink);
    padding:14px 32px; font-weight:700; font-size:14px; letter-spacing:0.04em;
    border-radius:4px; display:inline-block; text-decoration:none; cursor:pointer;
    transition: background 0.2s, transform 0.2s;
    border: none;
  }
  .btn-gold:hover { background: #b0e02a; transform: translateY(-1px); }

  .btn-outline {
    background: transparent; color: white;
    padding:13px 32px; font-weight:600; font-size:14px; letter-spacing:0.04em;
    border-radius:4px; display:inline-block; text-decoration:none; cursor:pointer;
    transition: all 0.2s; border: 2px solid rgba(255,255,255,0.3);
  }
  .btn-outline:hover { background: white; color: var(--ink); border-color: white; }

  /* Icon circle */
  .icon-circle { width:56px; height:56px; border-radius:50%; background: rgba(204,255,0,0.15); display:flex; align-items:center; justify-content:center; flex-shrink:0; }

  /* Hero pattern */
  .hero-pattern {
    background-color: var(--ink);
    background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  }

  /* Chip / tag */
  .chip { display:inline-block; background:rgba(204,255,0,0.15); color: var(--lime); font-size:11px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; padding:4px 12px; border-radius:20px; }

  .cta-band { background: #0d0d0d; border: 1px solid rgba(204,255,0,0.15); }

  /* Feature list styling */
  .feature-list { list-style: none; padding: 0; }
  .feature-list li { display: flex; align-items: center; gap: 8px; margin-bottom: 8px; font-size: 13px; color: rgba(255,255,255,0.6); }
  .feature-list li::before { content: "✓"; color: var(--lime); font-weight: bold; }

  /* Custom scrollbar */
  ::-webkit-scrollbar { width: 8px; }
  ::-webkit-scrollbar-track { background: #1a1a1a; }
  ::-webkit-scrollbar-thumb { background: #CCFF00; border-radius: 4px; }
  ::-webkit-scrollbar-thumb:hover { background: #b0e02a; }
</style>
</head>
<body class="bg-ink text-white font-body overflow-x-hidden">

<!-- Include header -->
<?php include('../header.php'); ?>

<!-- ═══════════ HERO SECTION (Loan Programs) ═══════════ -->
<section class="relative overflow-hidden min-h-[55vh] flex items-center justify-center pt-16">
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=1600&q=80'); opacity: 0.3;"></div>
  <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
  
  <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-12 py-20 w-full text-center">
    <div class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/10">
      <span class="w-2 h-2 bg-lime rounded-full animate-pulse"></span>
      <span class="text-[11px] font-medium tracking-[0.1em] uppercase text-white/70">Comprehensive Financing Solutions</span>
    </div>
    <h1 class="font-display text-white text-6xl md:text-7xl lg:text-8xl tracking-tight leading-[1.1]">
      Our <span class="text-lime">Loan Programs</span>
    </h1>
    <p class="text-white/50 text-base max-w-2xl mx-auto mt-6 font-light">From government-backed SBA loans to fast bridge financing — we have the right solution for your business journey.</p>
    <div class="mt-8 flex flex-wrap gap-4 justify-center">
      <a href="#loan-programs" class="btn-gold">Explore Loans →</a>
      <a href="#compare" class="btn-outline">Compare Options</a>
    </div>
  </div>
</section>

<!-- ═══════════ INTRODUCTION SECTION ═══════════ -->
<div class="reveal max-w-7xl mx-auto px-6 py-16">
  <div class="text-center max-w-3xl mx-auto">
    <p class="text-white/60 text-lg leading-relaxed">
      At BizCashAndCapital, we believe every business deserves access to capital that fuels growth. Whether you're a startup seeking working capital, an established company expanding operations, or a developer breaking ground on a new project — our diverse loan programs are designed to meet you where you are.
    </p>
    <div class="pull-quote my-8 max-w-2xl mx-auto" style="border-left-color: #CCFF00;">
      <p class="font-display text-[22px] md:text-[26px] text-white leading-snug">
        "The right loan isn't just about money — it's about momentum. We help you move forward with confidence."
      </p>
    </div>
  </div>
</div>

<div class="border-t border-white/[0.1] max-w-7xl mx-auto"></div>

<!-- ═══════════ LOAN PROGRAMS SECTION (5 Loans with Background Images) ═══════════ -->
<div id="loan-programs" class="max-w-7xl mx-auto px-6 py-16">
  <div class="text-center mb-12 reveal">
    <p class="chip mb-4 inline-block">Our Lending Portfolio</p>
    <h2 class="font-display text-4xl md:text-5xl text-white mb-3 lime-underline">Loan Programs We Offer</h2>
    <p class="text-white/40 text-[15px] mt-6 leading-relaxed max-w-2xl mx-auto">Each program is tailored to specific business needs — from short-term gaps to long-term investments.</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    
    <!-- Card 1: SBA Loan -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&h=600&fit=crop" alt="SBA Loan" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[380px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">SBA Loan</h3>
        <p class="text-[14px] text-white/60 leading-relaxed font-light mb-3">Government-backed financing with competitive rates and flexible terms for small businesses.</p>
        <ul class="feature-list space-y-1 mb-4">
          <li>Up to $5 million in funding</li>
          <li>Low down payments (10-20%)</li>
          <li>Long repayment terms up to 25 years</li>
          <li>Ideal for startups and expansions</li>
        </ul>
        <div class="mt-auto pt-4 border-t border-white/10 flex justify-between items-center">
          <span class="text-[11px] text-lime font-semibold bg-lime/10 px-3 py-1 rounded-full">From 4.5% APR</span>
          <a href="#" class="text-[13px] text-lime hover:underline font-medium">Learn more →</a>
        </div>
      </div>
    </div>
    
    <!-- Card 2: Business Loan -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1556745757-8d76bdb6984b?w=800&h=600&fit=crop" alt="Business Loan" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[380px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6h1.5m-1.5 3h1.5m-1.5 3h1.5M9 21v-3.75c0-.621.504-1.125 1.125-1.125h1.5c.621 0 1.125.504 1.125 1.125V21"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Business Loan</h3>
        <p class="text-[14px] text-white/60 leading-relaxed font-light mb-3">Fast, flexible financing for working capital, equipment, inventory, and operational expenses.</p>
        <ul class="feature-list space-y-1 mb-4">
          <li>$5,000 to $2 million available</li>
          <li>Quick approval (24-48 hours)</li>
          <li>No collateral required for qualified borrowers</li>
          <li>Fixed or variable rate options</li>
        </ul>
        <div class="mt-auto pt-4 border-t border-white/10 flex justify-between items-center">
          <span class="text-[11px] text-lime font-semibold bg-lime/10 px-3 py-1 rounded-full">From 5.99% APR</span>
          <a href="#" class="text-[13px] text-lime hover:underline font-medium">Learn more →</a>
        </div>
      </div>
    </div>
    
    <!-- Card 3: Commercial Loan -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&h=600&fit=crop" alt="Commercial Loan" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[380px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Commercial Loan</h3>
        <p class="text-[14px] text-white/60 leading-relaxed font-light mb-3">Real estate acquisition, refinancing, and commercial property development funding.</p>
        <ul class="feature-list space-y-1 mb-4">
          <li>Up to $10 million for commercial property</li>
          <li>Terms from 5 to 20 years</li>
          <li>Owner-occupied or investment properties</li>
          <li>Competitive fixed interest rates</li>
        </ul>
        <div class="mt-auto pt-4 border-t border-white/10 flex justify-between items-center">
          <span class="text-[11px] text-lime font-semibold bg-lime/10 px-3 py-1 rounded-full">From 6.25% APR</span>
          <a href="#" class="text-[13px] text-lime hover:underline font-medium">Learn more →</a>
        </div>
      </div>
    </div>
    
    <!-- Card 4: Construction Loan -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1503387762-592b1451e3f1?w=800&h=600&fit=crop" alt="Construction Loan" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[380px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Construction Loan</h3>
        <p class="text-[14px] text-white/60 leading-relaxed font-light mb-3">Short-term financing for new construction, renovations, or commercial property development.</p>
        <ul class="feature-list space-y-1 mb-4">
          <li>Interest-only payments during construction</li>
          <li>Draw schedule based on project milestones</li>
          <li>Construction-to-permanent conversion available</li>
          <li>Fast approval for qualified builders</li>
        </ul>
        <div class="mt-auto pt-4 border-t border-white/10 flex justify-between items-center">
          <span class="text-[11px] text-lime font-semibold bg-lime/10 px-3 py-1 rounded-full">From 7.5% APR</span>
          <a href="#" class="text-[13px] text-lime hover:underline font-medium">Learn more →</a>
        </div>
      </div>
    </div>
    
    <!-- Card 5: Bridge Loan -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1556742031-c6961e8560b0?w=800&h=600&fit=crop" alt="Bridge Loan" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[380px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Bridge Loan</h3>
        <p class="text-[14px] text-white/60 leading-relaxed font-light mb-3">Short-term financing to bridge the gap between immediate capital needs and long-term funding.</p>
        <ul class="feature-list space-y-1 mb-4">
          <li>Fast closing in as little as 5-7 days</li>
          <li>Flexible repayment with balloon payment</li>
          <li>Ideal for time-sensitive opportunities</li>
          <li>Property acquisition or business transition</li>
        </ul>
        <div class="mt-auto pt-4 border-t border-white/10 flex justify-between items-center">
          <span class="text-[11px] text-lime font-semibold bg-lime/10 px-3 py-1 rounded-full">From 8.99% APR</span>
          <a href="#" class="text-[13px] text-lime hover:underline font-medium">Learn more →</a>
        </div>
      </div>
    </div>

    <!-- Card 6: Why Choose Us (Bonus Card) -->
    <div class="group relative rounded-2xl overflow-hidden bg-gradient-to-br from-lime/10 to-transparent border border-lime/20 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1556741533-6e6a62bd8b49?w=800&h=600&fit=crop" alt="Why Choose Us" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/90 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[380px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Why Choose BizCash&Capital?</h3>
        <p class="text-[14px] text-white/60 leading-relaxed font-light mb-3">We're more than lenders — we're partners in your success.</p>
        <ul class="feature-list space-y-1 mb-4">
          <li>✓ 500+ businesses funded</li>
          <li>✓ 4.9★ customer satisfaction rating</li>
          <li>✓ Dedicated loan specialists</li>
          <li>✓ Fast approvals & funding</li>
          <li>✓ Transparent terms, no hidden fees</li>
        </ul>
        <div class="mt-auto pt-4 border-t border-white/10">
          <a href="#contact" class="text-[13px] text-lime hover:underline font-medium">Talk to an advisor →</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════ COMPARISON TABLE SECTION ═══════════ -->
<div id="compare" class="max-w-7xl mx-auto px-6 py-16 border-t border-white/[0.1]">
  <div class="text-center mb-12 reveal">
    <p class="chip mb-4 inline-block">Compare Options</p>
    <h2 class="font-display text-4xl md:text-5xl text-white mb-3 lime-underline">Find Your Perfect Match</h2>
    <p class="text-white/40 text-[15px] mt-6 leading-relaxed max-w-2xl mx-auto">Not sure which loan is right for you? Compare key features side by side.</p>
  </div>

  <div class="overflow-x-auto reveal">
    <table class="w-full border-collapse">
      <thead>
        <tr class="border-b border-white/10">
          <th class="text-left py-4 px-4 text-white font-display text-lg">Loan Type</th>
          <th class="text-left py-4 px-4 text-white/70 font-medium">Best For</th>
          <th class="text-left py-4 px-4 text-white/70 font-medium">Loan Amount</th>
          <th class="text-left py-4 px-4 text-white/70 font-medium">Term Length</th>
          <th class="text-left py-4 px-4 text-white/70 font-medium">Speed</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b border-white/5 hover:bg-white/5 transition">
          <td class="py-4 px-4 text-lime font-semibold">SBA Loan</td>
          <td class="py-4 px-4 text-white/60">Startups & long-term growth</td>
          <td class="py-4 px-4 text-white/60">Up to $5M</td>
          <td class="py-4 px-4 text-white/60">10-25 years</td>
          <td class="py-4 px-4 text-white/60">Moderate</td>
        </tr>
        <tr class="border-b border-white/5 hover:bg-white/5 transition">
          <td class="py-4 px-4 text-lime font-semibold">Business Loan</td>
          <td class="py-4 px-4 text-white/60">Working capital & equipment</td>
          <td class="py-4 px-4 text-white/60">$5K - $2M</td>
          <td class="py-4 px-4 text-white/60">1-7 years</td>
          <td class="py-4 px-4 text-white/60">Fast (24-48h)</td>
        </tr>
        <tr class="border-b border-white/5 hover:bg-white/5 transition">
          <td class="py-4 px-4 text-lime font-semibold">Commercial Loan</td>
          <td class="py-4 px-4 text-white/60">Real estate & property</td>
          <td class="py-4 px-4 text-white/60">Up to $10M</td>
          <td class="py-4 px-4 text-white/60">5-20 years</td>
          <td class="py-4 px-4 text-white/60">Standard</td>
        </tr>
        <tr class="border-b border-white/5 hover:bg-white/5 transition">
          <td class="py-4 px-4 text-lime font-semibold">Construction Loan</td>
          <td class="py-4 px-4 text-white/60">New builds & renovations</td>
          <td class="py-4 px-4 text-white/60">Varies by project</td>
          <td class="py-4 px-4 text-white/60">6-24 months (draw period)</td>
          <td class="py-4 px-4 text-white/60">Project-dependent</td>
        </tr>
        <tr class="hover:bg-white/5 transition">
          <td class="py-4 px-4 text-lime font-semibold">Bridge Loan</td>
          <td class="py-4 px-4 text-white/60">Short-term gaps & opportunities</td>
          <td class="py-4 px-4 text-white/60">Up to $3M</td>
          <td class="py-4 px-4 text-white/60">6-18 months</td>
          <td class="py-4 px-4 text-white/60">Very Fast (5-7 days)</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- ═══════════ CTA BANNER ═══════════ -->
<div id="contact" class="max-w-7xl mx-auto px-6 pb-16">
  <div class="reveal cta-band rounded-2xl p-8 md:p-10 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 bg-lime"></div>
    <div class="relative flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
      <div>
        <p class="text-lime text-[12px] font-bold tracking-[0.12em] uppercase mb-2">Ready to Get Started?</p>
        <h3 class="font-display text-3xl md:text-4xl text-white leading-snug">Let's Find Your <span class="text-lime">Perfect Loan</span></h3>
        <p class="text-white/40 text-sm mt-2 max-w-md">Our loan specialists are ready to help you compare options and find the best fit.</p>
      </div>
      <div class="flex flex-col sm:flex-row gap-4">
        <a href="#" class="btn-gold">Apply Now →</a>
        <a href="tel:+12166470007" class="btn-outline">Call (216) 647-0007</a>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════ FOOTER ═══════════ -->
<footer class="bg-ink mt-6 border-t border-white/[0.07]">
  <div class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-4 gap-10">
    <div class="md:col-span-2">
      <p class="font-display text-[28px] text-white mb-3">BizCash<span class="text-lime">&amp;</span>Capital</p>
      <p class="text-white/45 text-[14px] font-light leading-relaxed max-w-[320px]">Comprehensive loan programs designed to help businesses grow, expand, and thrive.</p>
    </div>
    <div>
      <h5 class="text-[11px] font-bold tracking-[0.12em] uppercase text-white/30 mb-4">Loan Programs</h5>
      <ul class="space-y-2 list-none">
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">SBA Loan</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Business Loan</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Commercial Loan</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Construction Loan</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Bridge Loan</a></li>
      </ul>
    </div>
    <div>
      <h5 class="text-[11px] font-bold tracking-[0.12em] uppercase text-white/30 mb-4">Company</h5>
      <ul class="space-y-2 list-none">
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">About Us</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Contact</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Privacy Policy</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Terms of Service</a></li>
      </ul>
    </div>
  </div>
  <div class="border-t border-white/[0.07] px-6 py-5 max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-2">
    <p class="text-[12px] text-white/25">© 2025 BizCashAndCapital. All rights reserved.</p>
    <p class="text-[12px] text-white/18">Your Partner in Business Growth</p>
  </div>
</footer>

<script>
  // Reveal on scroll (Intersection Observer)
  const ro = new IntersectionObserver(entries => entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); }), { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => ro.observe(el));
  
  // Smooth anchor scrolling
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });
</script>
</body>
</html>