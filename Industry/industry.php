<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Industries We Serve | BizCashAndCapital — Tailored Funding Solutions</title>
<meta name="description" content="BizCashAndCapital provides specialized funding for Auto Repair, Attorney, Cleaning Business, Construction, Convenience Store, Daycare, Beauty Salon, and Accounting. Get the financial freedom your industry needs.">
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

  /* Industry card hover */
  .industry-card { 
    transition: transform 0.28s ease, box-shadow 0.28s ease; 
    background: #0d0d0d; 
    border: 1px solid rgba(255,255,255,0.07);
  }
  .industry-card:hover { 
    transform: translateY(-5px); 
    box-shadow: 0 16px 48px rgba(204,255,0,0.12); 
    border-color: rgba(204,255,0,0.3); 
  }

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
  .icon-circle { width:52px; height:52px; border-radius:50%; background: rgba(204,255,0,0.15); display:flex; align-items:center; justify-content:center; flex-shrink:0; }

  /* Hero pattern */
  .hero-pattern {
    background-color: var(--ink);
    background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  }

  /* Chip / tag */
  .chip { display:inline-block; background:rgba(204,255,0,0.15); color: var(--lime); font-size:11px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; padding:4px 12px; border-radius:20px; }

  .cta-band { background: #0d0d0d; border: 1px solid rgba(204,255,0,0.15); }

  /* Custom scrollbar */
  ::-webkit-scrollbar { width: 8px; }
  ::-webkit-scrollbar-track { background: #1a1a1a; }
  ::-webkit-scrollbar-thumb { background: #CCFF00; border-radius: 4px; }
  ::-webkit-scrollbar-thumb:hover { background: #b0e02a; }
</style>
</head>
<body class="bg-ink text-white font-body overflow-x-hidden">

<!-- Include header -->
<?php include('../funding-website/header.php'); ?>

<!-- ═══════════ HERO SECTION (Industries) ═══════════ -->
<section class="hero-pattern relative overflow-hidden min-h-[55vh] flex items-center justify-center pt-16">
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1600&q=80'); opacity: 0.3;"></div>
  <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
  
  <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-12 py-20 w-full text-center">
    <div class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/10">
      <span class="w-2 h-2 bg-lime rounded-full animate-pulse"></span>
      <span class="text-[11px] font-medium tracking-[0.1em] uppercase text-white/70">Industry-Focused Lending</span>
    </div>
    <h1 class="font-display text-white text-6xl md:text-7xl lg:text-8xl tracking-tight leading-[1.1]">
      Industries <span class="text-lime">We Serve</span>
    </h1>
    <p class="text-white/50 text-base max-w-2xl mx-auto mt-6 font-light">Specialized funding solutions tailored to the unique needs of your business — from startups to established enterprises.</p>
    <div class="mt-8 flex flex-wrap gap-4 justify-center">
      <a href="#industries" class="btn-gold">Explore Industries →</a>
      <a href="#approach" class="btn-outline">Our Approach</a>
    </div>
  </div>

  <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-lime via-lime to-lime opacity-80"></div>
</section>

<!-- ═══════════ OUR TAILORED APPROACH SECTION ═══════════ -->
<div id="approach" class="reveal max-w-7xl mx-auto px-6 py-16">
  <div class="text-center mb-12">
    <p class="chip mb-4 inline-block">How We Work</p>
    <h2 class="font-display text-4xl md:text-5xl text-white mb-3 lime-underline">Our Tailored Approach to Funding</h2>
    <p class="text-white/40 text-[15px] mt-6 leading-relaxed max-w-2xl mx-auto">Every industry has unique financial challenges. We don't believe in one-size-fits-all — we build solutions around you.</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
    
    <!-- Step 1: Understand -->
    <div class="text-center reveal">
      <div class="icon-circle w-16 h-16 mx-auto mb-4 bg-lime/20 border border-lime/30">
        <svg class="w-8 h-8 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z"/></svg>
      </div>
      <h3 class="font-display text-2xl text-white mb-2">1. Understand Your Industry</h3>
      <p class="text-white/50 text-sm leading-relaxed">We dive deep into your specific market dynamics, seasonal trends, and operational pain points.</p>
    </div>
    
    <!-- Step 2: Customize -->
    <div class="text-center reveal" style="transition-delay: 0.1s">
      <div class="icon-circle w-16 h-16 mx-auto mb-4 bg-lime/20 border border-lime/30">
        <svg class="w-8 h-8 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.38.138.753.43.992l1.004.827c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.87l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.645-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.293-.24.438-.613.43-.992a6.932 6.932 0 010-.255c.007-.38-.138-.753-.43-.992l-1.004-.827a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.49l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.87l.214-1.281z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
      </div>
      <h3 class="font-display text-2xl text-white mb-2">2. Customize Your Solution</h3>
      <p class="text-white/50 text-sm leading-relaxed">Flexible terms, competitive rates, and repayment structures that align with your cash flow cycles.</p>
    </div>
    
    <!-- Step 3: Support -->
    <div class="text-center reveal" style="transition-delay: 0.2s">
      <div class="icon-circle w-16 h-16 mx-auto mb-4 bg-lime/20 border border-lime/30">
        <svg class="w-8 h-8 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/></svg>
      </div>
      <h3 class="font-display text-2xl text-white mb-2">3. Ongoing Partnership</h3>
      <p class="text-white/50 text-sm leading-relaxed">Dedicated advisor from application to funding and beyond — we grow with your business.</p>
    </div>
  </div>
  
  <div class="text-center mt-10">
    <a href="#industries" class="text-lime hover:underline text-sm font-medium">See industries we serve ↓</a>
  </div>
</div>

<div class="border-t border-white/[0.1] max-w-7xl mx-auto"></div>

<!-- ═══════════ INDUSTRIES SECTION (8 Industries with Background Images) ═══════════ -->
<div id="industries" class="max-w-7xl mx-auto px-6 py-16">
  <div class="text-center mb-12 reveal">
    <p class="chip mb-4 inline-block">Expertise Across Sectors</p>
    <h2 class="font-display text-4xl md:text-5xl text-white mb-3 lime-underline">Industries We Serve</h2>
    <p class="text-white/40 text-[15px] mt-6 leading-relaxed max-w-2xl mx-auto">From main street to commercial enterprises — we provide fast, flexible funding for a wide range of industries.</p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    
    <!-- Auto Repair -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1487754180451-c456f719a1fc?w=600&h=450&fit=crop" alt="Auto Repair" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[280px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.22-1.113-.615-1.53a15.822 15.822 0 00-2.427-1.928M6.75 12.75h3.75"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Auto Repair</h3>
        <p class="text-[13px] text-white/60 leading-relaxed font-light flex-1">Equipment financing, shop upgrades, and working capital for mechanics and collision centers.</p>
        <div class="mt-4 pt-4 border-t border-white/10">
          <a href="#" class="text-[12px] text-lime hover:underline">Learn more →</a>
        </div>
      </div>
    </div>
    
    <!-- Attorney -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=600&h=450&fit=crop" alt="Attorney Law Firm" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[280px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Attorney</h3>
        <p class="text-[13px] text-white/60 leading-relaxed font-light flex-1">Practice acquisition, case cost funding, technology upgrades, and working capital for law firms.</p>
        <div class="mt-4 pt-4 border-t border-white/10">
          <a href="#" class="text-[12px] text-lime hover:underline">Learn more →</a>
        </div>
      </div>
    </div>
    
    <!-- Cleaning Business -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=600&h=450&fit=crop" alt="Cleaning Business" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[280px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Cleaning Business</h3>
        <p class="text-[13px] text-white/60 leading-relaxed font-light flex-1">Equipment purchases, fleet expansion, payroll support, and seasonal cash flow solutions.</p>
        <div class="mt-4 pt-4 border-t border-white/10">
          <a href="#" class="text-[12px] text-lime hover:underline">Learn more →</a>
        </div>
      </div>
    </div>
    
    <!-- Construction -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1503387762-592b1451e3f1?w=600&h=450&fit=crop" alt="Construction" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[280px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Construction</h3>
        <p class="text-[13px] text-white/60 leading-relaxed font-light flex-1">Equipment financing, project-based loans, material purchasing, and contract bridge funding.</p>
        <div class="mt-4 pt-4 border-t border-white/10">
          <a href="#" class="text-[12px] text-lime hover:underline">Learn more →</a>
        </div>
      </div>
    </div>
    
    <!-- Convenience Store -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1594751543129-6701ad444259?w=600&h=450&fit=crop" alt="Convenience Store" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[280px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Convenience Store</h3>
        <p class="text-[13px] text-white/60 leading-relaxed font-light flex-1">Inventory financing, store renovations, equipment upgrades, and working capital for gas stations.</p>
        <div class="mt-4 pt-4 border-t border-white/10">
          <a href="#" class="text-[12px] text-lime hover:underline">Learn more →</a>
        </div>
      </div>
    </div>
    
    <!-- Daycare -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=600&h=450&fit=crop" alt="Daycare" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[280px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Daycare</h3>
        <p class="text-[13px] text-white/60 leading-relaxed font-light flex-1">Facility expansion, playground equipment, licensing costs, and operational bridge funding.</p>
        <div class="mt-4 pt-4 border-t border-white/10">
          <a href="#" class="text-[12px] text-lime hover:underline">Learn more →</a>
        </div>
      </div>
    </div>
    
    <!-- Beauty Salon -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?w=600&h=450&fit=crop" alt="Beauty Salon" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[280px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Beauty Salon</h3>
        <p class="text-[13px] text-white/60 leading-relaxed font-light flex-1">Salon equipment, product inventory, leasehold improvements, and marketing campaigns.</p>
        <div class="mt-4 pt-4 border-t border-white/10">
          <a href="#" class="text-[12px] text-lime hover:underline">Learn more →</a>
        </div>
      </div>
    </div>
    
    <!-- Accounting -->
    <div class="group relative rounded-2xl overflow-hidden bg-ink border border-white/10 hover:border-lime/40 transition-all duration-500 hover:-translate-y-2">
      <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&h=450&fit=crop" alt="Accounting" class="w-full h-full object-cover opacity-30 group-hover:opacity-40 transition-opacity duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
      </div>
      <div class="relative z-10 p-6 min-h-[280px] flex flex-col">
        <div class="icon-circle mb-4 bg-lime/20 backdrop-blur-sm border border-lime/30">
          <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/></svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">Accounting</h3>
        <p class="text-[13px] text-white/60 leading-relaxed font-light flex-1">Practice acquisition, software upgrades, seasonal staffing, and working capital for CPAs.</p>
        <div class="mt-4 pt-4 border-t border-white/10">
          <a href="#" class="text-[12px] text-lime hover:underline">Learn more →</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════ CTA BANNER (Get Started) ═══════════ -->
<div class="max-w-7xl mx-auto px-6 pb-16">
  <div class="reveal cta-band rounded-2xl p-8 md:p-10 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 bg-lime"></div>
    <div class="relative flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
      <div>
        <p class="text-lime text-[12px] font-bold tracking-[0.12em] uppercase mb-2">Ready to Grow?</p>
        <h3 class="font-display text-3xl md:text-4xl text-white leading-snug">Let's Find Your <span class="text-lime">Perfect Funding</span> Solution</h3>
        <p class="text-white/40 text-sm mt-2 max-w-md">Whether you need $5,000 or $5 million, we have an industry-specific program for you.</p>
      </div>
      <div class="flex flex-col sm:flex-row gap-4">
        <a href="#" class="btn-gold">Apply Now →</a>
        <a href="#" class="btn-outline">Talk to an Advisor</a>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════ FOOTER ═══════════ -->
<footer class="bg-ink mt-6 border-t border-white/[0.07]">
  <div class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-4 gap-10">
    <div class="md:col-span-2">
      <p class="font-display text-[28px] text-white mb-3">BizCash<span class="text-lime">&amp;</span>Capital</p>
      <p class="text-white/45 text-[14px] font-light leading-relaxed max-w-[320px]">Industry-focused funding solutions that help businesses thrive — from auto repair to accounting.</p>
    </div>
    <div>
      <h5 class="text-[11px] font-bold tracking-[0.12em] uppercase text-white/30 mb-4">Industries</h5>
      <ul class="space-y-2 list-none">
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Auto Repair</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Construction</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Daycare</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Beauty Salon</a></li>
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
    <p class="text-[12px] text-white/18">Tailored Funding for Every Industry</p>
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