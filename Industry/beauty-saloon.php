<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Beauty Salon Funding | BizCashAndCapital — Tailored Financing for Salons & Spas</title>
<meta name="description" content="BizCashAndCapital provides specialized funding solutions for beauty salons — Business Loans, Lines of Credit, Equipment Financing, Merchant Cash Advances, SBA Loans, and more. Bring your glamorous vision to life.">
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

  /* Card hover */
  .funding-card { transition: transform 0.28s ease, box-shadow 0.28s ease; background: #0d0d0d; border: 1px solid rgba(255,255,255,0.07); }
  .funding-card:hover { transform: translateY(-5px); box-shadow: 0 16px 48px rgba(204,255,0,0.12); border-color: rgba(204,255,0,0.3); }

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

  .pull-quote { border-left: 4px solid var(--lime); padding-left:24px; }

  /* Feedback link styling */
  .feedback-link { color: var(--lime); font-size: 12px; font-weight: 500; text-decoration: none; transition: opacity 0.2s; }
  .feedback-link:hover { opacity: 0.7; }

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

<!-- ═══════════ HERO SECTION (Beauty Salon Funding) ═══════════ -->
<section class=" relative overflow-hidden min-h-[55vh] flex items-center justify-center pt-16">
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1560066984-138dadb4c035?w=1600&q=80'); opacity: 0.3;"></div>
  <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
  
  <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-12 py-20 w-full text-center">
    <div class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/10">
      <span class="w-2 h-2 bg-lime rounded-full animate-pulse"></span>
      <span class="text-[11px] font-medium tracking-[0.1em] uppercase text-white/70">Salon & Spa Financing</span>
    </div>
    <h1 class="font-display text-white text-6xl md:text-7xl lg:text-8xl tracking-tight leading-[1.1]">
      Beauty <span class="text-lime">Salon Funding</span>
    </h1>
    <p class="text-white/50 text-base max-w-2xl mx-auto mt-6 font-light">Tailored financing solutions for beauty salon owners — bringing your glamorous vision to life with the right capital.</p>
  </div>
</section>

<!-- ═══════════ INTRODUCTION SECTION ═══════════ -->
<div class="reveal max-w-7xl mx-auto px-6 py-16">
  <div class="text-center max-w-4xl mx-auto">
    <p class="text-white/60 text-lg leading-relaxed">
      At BizCashAndCapital, we understand that beauty salons are not just places for beauty treatments — they are spaces where individuals enhance their confidence and express their unique style. To support the beauty industry's growth, we specialize in providing tailored financing solutions for beauty salon owners. Our mission is to ensure that every beauty salon has the financial foundation required to bring their glamorous vision to life.
    </p>
    
    <div class="pull-quote my-8 max-w-2xl mx-auto">
      <p class="font-display text-[22px] md:text-[26px] text-white leading-snug">
        "Beauty salons play a vital role in people's lives — securing reasonable funding is crucial for maintaining high-quality services and creating a relaxing ambiance for clients."
      </p>
    </div>
    
    <!-- Importance banner -->
    <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-lime/10 via-lime/5 to-transparent border border-lime/20 p-6 md:p-8 mt-6">
      <div class="absolute top-0 right-0 w-64 h-64 bg-lime/5 rounded-full blur-3xl"></div>
      <div class="flex flex-col md:flex-row justify-between items-center gap-6 relative z-10">
        <div>
          <span class="text-lime text-[11px] font-bold tracking-[0.2em] uppercase mb-2 block">Why It Matters</span>
          <h2 class="font-display text-2xl md:text-3xl font-bold text-white">The Significance of Funding for Beauty Salons</h2>
          <p class="text-white/60 text-sm mt-2 max-w-xl">Whether you're looking to remodel your salon, expand your services, upgrade equipment, hire skilled staff, or simply manage day-to-day operations, having access to funds is essential for sustainable growth.</p>
        </div>
        <div class="flex-shrink-0">
          <a href="#funding-options" class="btn-gold inline-block">Get Start Now →</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="border-t border-white/[0.1] max-w-7xl mx-auto"></div>

<!-- ═══════════ BEAUTY SALON FUNDING OPTIONS (6 Cards) ═══════════ -->
<div id="funding-options" class="max-w-7xl mx-auto px-6 py-16">
  <div class="text-center mb-12 reveal">
    <p class="chip mb-4 inline-block">Funding Solutions</p>
    <h2 class="font-display text-4xl md:text-5xl text-white mb-3 lime-underline">Beauty Salon Funding Options</h2>
    <p class="text-white/40 text-[15px] mt-6 leading-relaxed max-w-2xl mx-auto">There are various options for you to get the best loans that suit your needs — at BizCashAndCapital we're here to cater to you.</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    
    <!-- Card 1: Business Loans -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=800&h=600&fit=crop" alt="Business Loans" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[340px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6h1.5m-1.5 3h1.5m-1.5 3h1.5M9 21v-3.75c0-.621.504-1.125 1.125-1.125h1.5c.621 0 1.125.504 1.125 1.125V21"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Business Loans</h3>
        <p class="text-[14px] text-white/60 leading-relaxed font-light flex-1">Traditional business loans provide a lump sum amount that can be used for various salon needs, from purchasing new equipment to hiring staff or renovating your salon.</p>
        <div class="mt-4 pt-4 border-t border-white/10 flex justify-between items-center">
          <a href="#" class="feedback-link text-[11px]">Leave a Feedback →</a>
          <a href="#contact" class="text-[11px] text-white/40 hover:text-lime transition">Contact Experts</a>
        </div>
      </div>
    </div>
    
    <!-- Card 2: Lines of Credit -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&h=600&fit=crop" alt="Lines of Credit" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[340px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Lines of Credit</h3>
        <p class="text-[14px] text-white/60 leading-relaxed font-light flex-1">A revolving line of credit offers flexibility in managing cash flow. You can draw funds as needed, making it ideal for ongoing expenses and unexpected investments.</p>
        <div class="mt-4 pt-4 border-t border-white/10 flex justify-between items-center">
          <a href="#" class="feedback-link text-[11px]">Leave a Feedback →</a>
          <a href="#contact" class="text-[11px] text-white/40 hover:text-lime transition">Contact Experts</a>
        </div>
      </div>
    </div>
    
    <!-- Card 3: Equipment Financing -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=800&h=600&fit=crop" alt="Equipment Financing" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[340px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Equipment Financing</h3>
        <p class="text-[14px] text-white/60 leading-relaxed font-light flex-1">This financing option allows you to acquire the latest salon equipment without a significant upfront payment. The equipment itself often serves as collateral for the loan.</p>
        <div class="mt-4 pt-4 border-t border-white/10 flex justify-between items-center">
          <a href="#" class="feedback-link text-[11px]">Leave a Feedback →</a>
          <a href="#contact" class="text-[11px] text-white/40 hover:text-lime transition">Contact Experts</a>
        </div>
      </div>
    </div>
    
    <!-- Card 4: Merchant Cash Advances -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&h=600&fit=crop" alt="Merchant Cash Advances" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[340px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Merchant Cash Advances</h3>
        <p class="text-[14px] text-white/60 leading-relaxed font-light flex-1">Merchant cash advances provide quick access to funds based on your salon's credit card sales. A swift solution for managing immediate financial needs and ensuring smooth operations.</p>
        <div class="mt-4 pt-4 border-t border-white/10 flex justify-between items-center">
          <a href="#" class="feedback-link text-[11px]">Leave a Feedback →</a>
          <a href="#contact" class="text-[11px] text-white/40 hover:text-lime transition">Contact Experts</a>
        </div>
      </div>
    </div>
    
    <!-- Card 5: SBA Loans -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=800&h=600&fit=crop" alt="SBA Loans" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[340px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Small Business Administration (SBA) Loans</h3>
        <p class="text-[14px] text-white/60 leading-relaxed font-light flex-1">SBA loans offer attractive terms and rates for eligible salons. They provide funds for various business purposes, including expansions, equipment purchases, and working capital.</p>
        <div class="mt-4 pt-4 border-t border-white/10 flex justify-between items-center">
          <a href="#" class="feedback-link text-[11px]">Leave a Feedback →</a>
          <a href="#contact" class="text-[11px] text-white/40 hover:text-lime transition">Contact Experts</a>
        </div>
      </div>
    </div>
    
    <!-- Card 6: Peer-to-Peer Lending -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=800&h=600&fit=crop" alt="Peer to Peer Lending" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[340px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Peer-to-Peer Lending</h3>
        <p class="text-[14px] text-white/60 leading-relaxed font-light flex-1">Peer-to-peer lending platforms connect salon owners with individual lenders willing to fund their businesses. An alternative to traditional loans with competitive interest rates.</p>
        <div class="mt-4 pt-4 border-t border-white/10 flex justify-between items-center">
          <a href="#" class="feedback-link text-[11px]">Leave a Feedback →</a>
          <a href="#contact" class="text-[11px] text-white/40 hover:text-lime transition">Contact Experts</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════ CTA BANNER (Contact & Phone) ═══════════ -->
<div id="contact" class="max-w-7xl mx-auto px-6 pb-16">
  <div class="reveal cta-band rounded-2xl p-8 md:p-10 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 bg-lime"></div>
    <div class="relative flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
      <div>
        <p class="text-lime text-[12px] font-bold tracking-[0.12em] uppercase mb-2">Support Your Beauty Salon</p>
        <h3 class="font-display text-3xl md:text-4xl text-white leading-snug">Talk to Our Trusted<br/>Financial Advisors</h3>
        <p class="text-white/40 text-sm mt-2 max-w-md">Our team of expert advisors has a deep understanding of the beauty industry's unique requirements and challenges. We tailor financing solutions that align with your specific goals.</p>
      </div>
      <div class="flex flex-col items-center gap-3">
        <a href="tel:+12166470007" class="btn-gold flex-shrink-0 text-[16px] px-8 py-4 flex items-center gap-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
          +1 (216) 647-0007
        </a>
        <a href="#funding-options" class="text-white/50 text-sm hover:text-lime transition">Explore Funding Options →</a>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════ CLOSING STATEMENT ═══════════ -->
<div class="max-w-7xl mx-auto px-6 pb-16">
  <div class="reveal bg-[#0d0d0d] rounded-2xl p-8 md:p-10 border border-white/[0.07] max-w-4xl mx-auto text-center">
    <div class="flex justify-center mb-4">
      <svg class="w-10 h-10 text-lime/40" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15 8.5L22 9.5L17 14L18.5 21L12 17.5L5.5 21L7 14L2 9.5L9 8.5L12 2z"></path></svg>
    </div>
    <h3 class="font-display text-3xl text-white mb-4">BizCashAndCapital Commitment</h3>
    <p class="text-[16px] text-white/50 font-light leading-[1.85] mb-4">
      Our team of expert advisors has a deep understanding of the beauty industry's unique requirements and challenges. We work closely with beauty salon owners to tailor financing solutions that align with their specific goals and financial situations. At BizCashAndCapital, we're committed to empowering beauty salons with the financial resources required to thrive and provide exceptional services.
    </p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center mt-6">
      <a href="#funding-options" class="btn-gold inline-flex items-center justify-center gap-2 px-8 py-3">Explore Funding →</a>
      <a href="tel:+12166470007" class="btn-outline inline-flex items-center justify-center gap-2 px-8 py-3">Call Now</a>
    </div>
  </div>
</div>

<!-- ═══════════ FOOTER ═══════════ -->
<footer class="bg-ink mt-6 border-t border-white/[0.07]">
  <div class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-4 gap-10">
    <div class="md:col-span-2">
      <p class="font-display text-[28px] text-white mb-3">BizCash<span class="text-lime">&amp;</span>Capital</p>
      <p class="text-white/45 text-[14px] font-light leading-relaxed max-w-[320px]">Tailored financing solutions for beauty salons — bringing your glamorous vision to life with the right capital.</p>
    </div>
    <div>
      <h5 class="text-[11px] font-bold tracking-[0.12em] uppercase text-white/30 mb-4">Funding Types</h5>
      <ul class="space-y-2 list-none">
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Business Loans</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Lines of Credit</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Equipment Financing</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">SBA Loans</a></li>
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
    <p class="text-[12px] text-white/18">Empowering Beauty Salons | Industry-Specific Financing</p>
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