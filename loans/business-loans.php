<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Business Loans — BizCash&Capital</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          navy: '#0B1E3D',
          gold: '#C8922A',
          'gold-light': '#F0B84A',
          cream: '#FAF7F2',
          'card-bg': '#FFFFFF',
          muted: '#6B7280',
          lime: '#C4FF33',
        },
        fontFamily: {
          serif: ['Playfair Display', 'Georgia', 'serif'],
          sans: ['Plus Jakarta Sans', 'sans-serif'],
        },
      }
    }
  }
</script>
<style>
  :root {
    --navy: #0B1E3D;
    --gold: #C8922A;
    --gold-light: #F0B84A;
    --cream: #FAF7F2;
    --lime: #C4FF33;
  }

  * { margin:0; padding:0; box-sizing:border-box; }
  html { scroll-behavior: smooth; }
  body { background: var(--cream); color: var(--navy); font-family: 'Plus Jakarta Sans', sans-serif; }

  /* Reveal animation */
  .reveal { opacity: 0; transform: translateY(22px); transition: opacity 0.65s ease, transform 0.65s cubic-bezier(0.22,1,0.36,1); }
  .reveal.visible { opacity: 1; transform: translateY(0); }

  /* Gold underline heading */
  .gold-underline { position: relative; display: inline-block; }
  .gold-underline::after { content:''; position:absolute; bottom:-6px; left:0; width:60px; height:3px; background: var(--gold); border-radius:2px; }

  /* Loan type card hover */
  .loan-card { transition: transform 0.28s ease, box-shadow 0.28s ease; }
  .loan-card:hover { transform: translateY(-5px); box-shadow: 0 16px 48px rgba(11,30,61,0.12); }

  /* Step number circle */
  .step-circle { width:40px; height:40px; border-radius:50%; background: var(--gold); color:#fff; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:15px; flex-shrink:0; }

  /* Sticky nav shadow on scroll */
  .nav-scrolled { box-shadow: 0 2px 20px rgba(11,30,61,0.1); }

  /* CTA button - updated with lime/gold theme */
  .btn-gold {
    background: var(--lime); color: #0B1E3D;
    padding:14px 32px; font-weight:700; font-size:14px; letter-spacing:0.04em;
    border-radius:4px; display:inline-block; text-decoration:none; cursor:pointer;
    transition: background 0.2s, transform 0.2s;
    border: none;
  }
  .btn-gold:hover { background: #b0e02a; transform: translateY(-1px); }

  .btn-outline {
    background: transparent; color: var(--navy);
    padding:13px 32px; font-weight:600; font-size:14px; letter-spacing:0.04em;
    border-radius:4px; display:inline-block; text-decoration:none; cursor:pointer;
    transition: all 0.2s; border: 2px solid var(--navy);
  }
  .btn-outline:hover { background: var(--navy); color:#fff; }

  /* Quote block */
  .pull-quote { border-left: 4px solid var(--lime); padding-left:24px; }

  /* Loan icon circle */
  .icon-circle { width:52px; height:52px; border-radius:50%; background: rgba(196,255,51,0.15); display:flex; align-items:center; justify-content:center; flex-shrink:0; }

  /* Hero pattern */
  .hero-pattern {
    background-color: var(--navy);
    background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  }

  /* Tag chip - updated with lime */
  .chip { display:inline-block; background:rgba(196,255,51,0.15); color:var(--lime); font-size:11px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; padding:4px 12px; border-radius:20px; }

  /* Blockquote CTA band */
  .cta-band { background: var(--navy); }

  /* Table of contents */
  .toc-link { display:flex; align-items:center; gap:8px; font-size:14px; color:#374151; text-decoration:none; padding:6px 0; border-bottom:1px solid #E5E7EB; transition:color 0.2s; }
  .toc-link:hover { color:var(--lime); }
  .toc-link::before { content:''; width:6px; height:6px; border-radius:50%; background:var(--lime); opacity:0.5; flex-shrink:0; }

  /* Financing card styling from previous section */
  .fin-card {
    background: rgba(255,255,255,0.02);
    backdrop-filter: blur(2px);
    border: 1px solid rgba(255,255,255,0.07);
    transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
  }
  .fin-card:hover {
    border-color: rgba(196,255,51,0.4);
    background: rgba(255,255,255,0.05);
    transform: translateY(-4px);
  }

  @media(max-width:768px) {
    .blog-layout { grid-template-columns: 1fr !important; }
    .sidebar { display: none; }
  }
</style>
</head>
<body>

<!-- ═══════════ INCLUDE HEADER.PHP ═══════════ -->
<?php
include('../funding-website/header.php')?>

<!-- ═══════════ HERO ═══════════ -->
<header class="hero-pattern relative overflow-hidden">

  <!-- Decorative gold bar -->
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-lime via-lime to-lime opacity-80"></div>

  <!-- Floating stat cards -->
  <div class="hidden lg:flex absolute right-12 top-1/2 -translate-y-1/2 flex-col gap-4">
    <div class="bg-white/[0.08] backdrop-blur border border-white/[0.12] rounded-xl p-5 w-[190px]">
      <p class="text-white/45 text-[11px] font-semibold tracking-[0.1em] uppercase mb-1">Interest Rates From</p>
      <p class="font-serif text-[32px] font-bold text-lime leading-none">3.9%</p>
      <p class="text-white/40 text-[12px] mt-1">APR annually</p>
    </div>
    <div class="bg-white/[0.08] backdrop-blur border border-white/[0.12] rounded-xl p-5 w-[190px]">
      <p class="text-white/45 text-[11px] font-semibold tracking-[0.1em] uppercase mb-1">Funding In</p>
      <p class="font-serif text-[32px] font-bold text-lime leading-none">24hrs</p>
      <p class="text-white/40 text-[12px] mt-1">Fast approvals</p>
    </div>
    <div class="bg-white/[0.08] backdrop-blur border border-white/[0.12] rounded-xl p-5 w-[190px]">
      <p class="text-white/45 text-[11px] font-semibold tracking-[0.1em] uppercase mb-1">Loans Up To</p>
      <p class="font-serif text-[32px] font-bold text-lime leading-none">$5M</p>
      <p class="text-white/40 text-[12px] mt-1">Flexible amounts</p>
    </div>
  </div>
</header>

<!-- ═══════════ BREADCRUMB ═══════════ -->
<div class="bg-white border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-6 py-3 flex items-center gap-2 text-[13px] text-gray-400">
    <a href="#" class="hover:text-lime transition-colors">Home</a>
    <span>›</span>
    <a href="#" class="hover:text-lime transition-colors">Resources</a>
    <span>›</span>
    <span class="text-navy font-medium">Business Loans 2023</span>
  </div>
</div>

<!-- ═══════════ MAIN BLOG LAYOUT ═══════════ -->
<main class="max-w-7xl mx-auto px-6 py-16">
  <div class="blog-layout grid gap-12" style="grid-template-columns: 1fr 320px;">

    <!-- ── Article Body ── -->
    <article>

      <!-- Intro -->
      <div class="reveal mb-14">
        <p class="text-[18px] leading-[1.85] text-gray-700 font-light mb-5">
          At <strong class="text-navy font-semibold">BizCash&amp;Capital</strong>, we offer tailored loans to adjust your unique specifications, with <strong class="text-lime font-semibold">low interest rates</strong> and flexible repayment terms. We understand the difficulties that businesses face and are committed to offering successful and dependable financial support.
        </p>
        <div class="pull-quote my-8">
          <p class="font-serif text-[22px] text-navy font-semibold leading-snug italic">
            "Whether you are a small startup or a large company — our specialists will help you secure the loans you need for development, equipment, or operations."
          </p>
        </div>
        <p class="text-[16px] leading-[1.85] text-gray-600 font-light">
          Our team of specialists will guide you through the application process and help you gain the funding you need. To get a free consultation with our experienced financial advisors, <a href="#apply" class="text-lime font-semibold hover:underline">apply now</a>.
        </p>
      </div>

      <!-- Divider -->
      <div class="border-t border-gray-200 mb-14"></div>

      <!-- Loan Types -->
      <div id="loan-types" class="reveal mb-14">
        <p class="chip mb-4">Loan Products</p>
        <h2 class="font-serif text-3xl md:text-4xl font-bold text-navy mb-3 gold-underline">Types of Business Loans</h2>
        <p class="text-gray-500 text-[15px] mt-6 mb-10 leading-relaxed">We offer a comprehensive range of financing options designed to match the specific needs of your business at every stage of growth.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

          <!-- Term Loans -->
          <div class="loan-card bg-white border border-gray-100 rounded-xl p-6 shadow-sm">
            <div class="icon-circle mb-4">
              <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 11h.01M12 11h.01M15 11h.01M4 19h16a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <h3 class="font-serif text-[20px] font-bold text-navy mb-2">Term Loans</h3>
            <p class="text-[14px] text-gray-500 leading-relaxed font-light">Term loans provide a lump sum amount with fixed monthly payments over a set term. They are suitable for larger investments and long-term business needs.</p>
            <div class="mt-4 pt-4 border-t border-gray-100 flex items-center gap-2">
              <span class="text-[12px] font-semibold text-lime bg-lime/10 px-3 py-1 rounded-full">Best for: Expansion</span>
            </div>
          </div>

          <!-- Lines of Credit -->
          <div class="loan-card bg-white border border-gray-100 rounded-xl p-6 shadow-sm">
            <div class="icon-circle mb-4">
              <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
            </div>
            <h3 class="font-serif text-[20px] font-bold text-navy mb-2">Lines of Credit</h3>
            <p class="text-[14px] text-gray-500 leading-relaxed font-light">A revolving line of credit gives you access to funds up to a predetermined credit limit. You only pay interest on the amount you use, providing flexibility in managing cash flow.</p>
            <div class="mt-4 pt-4 border-t border-gray-100">
              <span class="text-[12px] font-semibold text-lime bg-lime/10 px-3 py-1 rounded-full">Best for: Cash Flow</span>
            </div>
          </div>

          <!-- Equipment Financing -->
          <div class="loan-card bg-white border border-gray-100 rounded-xl p-6 shadow-sm">
            <div class="icon-circle mb-4">
              <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <h3 class="font-serif text-[20px] font-bold text-navy mb-2">Equipment Financing</h3>
            <p class="text-[14px] text-gray-500 leading-relaxed font-light">This type of loan allows you to purchase necessary business equipment without a large upfront payment. The equipment itself often serves as collateral for the loan.</p>
            <div class="mt-4 pt-4 border-t border-gray-100">
              <span class="text-[12px] font-semibold text-lime bg-lime/10 px-3 py-1 rounded-full">Best for: Equipment</span>
            </div>
          </div>

          <!-- Invoice Financing -->
          <div class="loan-card bg-white border border-gray-100 rounded-xl p-6 shadow-sm">
            <div class="icon-circle mb-4">
              <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <h3 class="font-serif text-[20px] font-bold text-navy mb-2">Invoice Financing</h3>
            <p class="text-[14px] text-gray-500 leading-relaxed font-light">Invoice financing, or accounts receivable financing, provides a way to bridge the gap between invoicing and receiving payments, improving cash flow.</p>
            <div class="mt-4 pt-4 border-t border-gray-100">
              <span class="text-[12px] font-semibold text-lime bg-lime/10 px-3 py-1 rounded-full">Best for: Receivables</span>
            </div>
          </div>

          <!-- Merchant Cash Advances — full width -->
          <div class="loan-card bg-navy rounded-xl p-6 shadow-sm md:col-span-2 flex flex-col md:flex-row gap-6 items-start">
            <div class="w-[52px] h-[52px] rounded-full bg-lime/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
            </div>
            <div>
              <div class="flex items-center gap-3 mb-2">
                <h3 class="font-serif text-[20px] font-bold text-white">Merchant Cash Advances</h3>
                <span class="text-[11px] font-bold text-navy bg-lime px-3 py-1 rounded-full tracking-wide">Popular</span>
              </div>
              <p class="text-[14px] text-white/60 leading-relaxed font-light max-w-[600px]">Merchant cash advances involve receiving a lump sum payment in exchange for a percentage of your daily credit card sales. It's an ideal solution for businesses with consistent credit card transactions, providing quick access to funds for various business needs.</p>
              <div class="mt-4">
                <a href="#apply" class="inline-block text-[13px] font-semibold text-lime hover:text-white transition-colors">Learn more about MCAs →</a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- CTA Banner inline -->
      <div class="reveal cta-band rounded-2xl p-8 md:p-10 mb-14 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5" style="background-image:url('data:image/svg+xml,%3Csvg width=\'40\' height=\'40\' viewBox=\'0 0 40 40\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M0 40L40 0H20L0 20M40 40V20L20 40\'/%3E%3C/g%3E%3C/svg%3E');"></div>
        <div class="relative flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
          <div>
            <p class="text-lime text-[12px] font-bold tracking-[0.12em] uppercase mb-2">Free Consultation</p>
            <h3 class="font-serif text-2xl md:text-3xl font-bold text-white leading-snug">Talk to Our Trusted<br/>Financial Advisors</h3>
          </div>
          <a href="#apply" class="btn-gold flex-shrink-0 text-[14px] px-8 py-4">Get Free Consultation →</a>
        </div>
      </div>

      <!-- How to Apply -->
      <div id="apply" class="reveal mb-14">
        <p class="chip mb-4">Simple Process</p>
        <h2 class="font-serif text-3xl md:text-4xl font-bold text-navy mb-3 gold-underline">How to Apply for a Business Loan</h2>
        <p class="text-gray-500 text-[15px] mt-6 mb-10 leading-relaxed max-w-[560px]">Getting funded is simpler than you think. Follow these steps to put your best foot forward in the application process.</p>

        <div class="flex flex-col gap-5">

          <div class="flex items-start gap-5 bg-white rounded-xl p-5 border border-gray-100 shadow-sm reveal">
            <div class="step-circle">1</div>
            <div>
              <h4 class="font-semibold text-navy text-[16px] mb-1">Meet the Eligibility Criteria</h4>
              <p class="text-[14px] text-gray-500 font-light leading-relaxed">Verify that you meet the eligibility criteria for the specific loan you are applying for. Each loan type has different requirements.</p>
            </div>
          </div>

          <div class="flex items-start gap-5 bg-white rounded-xl p-5 border border-gray-100 shadow-sm reveal" style="transition-delay:0.08s">
            <div class="step-circle">2</div>
            <div>
              <h4 class="font-semibold text-navy text-[16px] mb-1">Have a Solid Business Plan</h4>
              <p class="text-[14px] text-gray-500 font-light leading-relaxed">Lenders want to see a clear vision. A well-prepared business plan demonstrates your ability to repay and grow.</p>
            </div>
          </div>

          <div class="flex items-start gap-5 bg-white rounded-xl p-5 border border-gray-100 shadow-sm reveal" style="transition-delay:0.16s">
            <div class="step-circle">3</div>
            <div>
              <h4 class="font-semibold text-navy text-[16px] mb-1">Complete the Necessary Paperwork</h4>
              <p class="text-[14px] text-gray-500 font-light leading-relaxed">Gather all required documents in advance to speed up the process and avoid delays.</p>
            </div>
          </div>

          <div class="flex items-start gap-5 bg-white rounded-xl p-5 border border-gray-100 shadow-sm reveal" style="transition-delay:0.24s">
            <div class="step-circle">4</div>
            <div>
              <h4 class="font-semibold text-navy text-[16px] mb-1">Be Ready to Answer Questions</h4>
              <p class="text-[14px] text-gray-500 font-light leading-relaxed">Be prepared to respond to queries about your business operations, revenue, and financial history.</p>
            </div>
          </div>

          <div class="flex items-start gap-5 bg-lime/10 border border-lime/20 rounded-xl p-5 reveal" style="transition-delay:0.32s">
            <div class="step-circle" style="background:#C4FF33; color:#0B1E3D;">5</div>
            <div>
              <h4 class="font-semibold text-navy text-[16px] mb-1">Be Patient — But Expect Speed From Us</h4>
              <p class="text-[14px] text-gray-600 font-light leading-relaxed">Application for a traditional SBA loan can take weeks or even months. But here at <strong class="text-navy">BizCash&amp;Capital</strong>, we get you funding as soon as possible!</p>
            </div>
          </div>

        </div>
      </div>

      <!-- Second CTA Banner -->
      <div class="reveal mb-14">
        <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm text-center">
          <p class="chip mb-4 mx-auto inline-block">Trusted Advisors</p>
          <h3 class="font-serif text-2xl md:text-3xl font-bold text-navy mb-3">Talk to Our Trusted Financial Advisors</h3>
          <p class="text-[15px] text-gray-500 font-light max-w-[500px] mx-auto leading-relaxed mb-6">Navigating the world of business loans and merchant cash advances can be overwhelming, but our team of expert advisors is here to guide you.</p>
          <div class="flex flex-wrap gap-3 justify-center">
            <a href="tel:+18005551234" class="btn-gold">Call Us Today</a>
            <a href="#" class="btn-outline">Schedule Online</a>
          </div>
        </div>
      </div>

      <!-- Closing -->
      <div class="reveal bg-white rounded-2xl p-8 md:p-10 border border-gray-100 shadow-sm">
        <h3 class="font-serif text-2xl font-bold text-navy mb-4">About BizCash&amp;Capital</h3>
        <p class="text-[16px] text-gray-600 font-light leading-[1.85] mb-4">
          We take the time to understand your business objectives, financial situation, and growth aspirations, tailoring our guidance to ensure you secure the most suitable financing option.
        </p>
        <p class="text-[16px] text-gray-600 font-light leading-[1.85] mb-8">
          At BizCash&amp;Capital, we are committed to empowering entrepreneurs with the financial resources required to achieve business success. Contact us today to begin your journey towards harnessing the benefits of business loans and merchant cash advances and unlocking the potential of your enterprise.
        </p>
        <a href="#apply" class="btn-gold">Start Your Application</a>
      </div>

    </article>

    <!-- ── Sidebar ── -->
    <aside class="sidebar">
      <div class="sticky top-24 flex flex-col gap-6">

        <!-- Apply CTA card -->
        <div class="bg-navy rounded-2xl p-6 text-center">
          <p class="text-lime text-[11px] font-bold tracking-[0.12em] uppercase mb-2">Free Consultation</p>
          <h3 class="font-serif text-[22px] font-bold text-white mb-3">Ready to Get Funded?</h3>
          <p class="text-white/55 text-[13px] font-light leading-relaxed mb-5">Talk to a specialist and get a customized financing plan for your business.</p>
          <a href="#" class="btn-gold w-full block text-center text-[14px]">Apply Now →</a>
          <p class="text-white/30 text-[12px] mt-3">No credit impact. Free to apply.</p>
        </div>

        <!-- Table of Contents -->
        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
          <h4 class="font-semibold text-navy text-[14px] mb-4">In This Article</h4>
          <nav class="flex flex-col">
            <a href="#loan-types" class="toc-link">Types of Business Loans</a>
            <a href="#apply" class="toc-link">How to Apply</a>
            <a href="#" class="toc-link">Eligibility Requirements</a>
            <a href="#" class="toc-link border-b-0">About BizCash&amp;Capital</a>
          </nav>
        </div>

        <!-- Trust badges -->
        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
          <h4 class="font-semibold text-navy text-[14px] mb-4">Why Choose Us</h4>
          <div class="flex flex-col gap-4">
            <div class="flex items-center gap-3">
              <div class="w-9 h-9 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              </div>
              <p class="text-[13px] text-gray-600 font-medium">Rates from 3.9% APR</p>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-9 h-9 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              </div>
              <p class="text-[13px] text-gray-600 font-medium">Funds in as little as 24hrs</p>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-9 h-9 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              </div>
              <p class="text-[13px] text-gray-600 font-medium">Dedicated loan specialist</p>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-9 h-9 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              </div>
              <p class="text-[13px] text-gray-600 font-medium">Flexible repayment terms</p>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-9 h-9 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              </div>
              <p class="text-[13px] text-gray-600 font-medium">Loans up to $5 million</p>
            </div>
          </div>
        </div>

        <!-- Disclaimer -->
        <p class="text-[11px] text-gray-400 leading-relaxed px-1">* Rates and terms subject to credit approval. Not all applicants qualify. BizCash&amp;Capital is not a lender; we connect businesses with funding solutions.</p>

      </div>
    </aside>

  </div>
</main>

<!-- ═══════════ FINANCING SOLUTIONS SECTION (Image Cards from previous section) ═══════════ -->
<section class="px-6 md:px-12 py-24 border-t border-white/[0.07] bg-navy">
  <div class="flex items-center gap-4 text-[11px] font-semibold tracking-[0.18em] uppercase text-white/28 mb-12">
    Funding Solutions <div class="flex-1 h-px bg-white/[0.07]"></div>
  </div>
  <div class="flex flex-col md:flex-row items-end justify-between gap-6 mb-14">
    <h2 class="font-serif text-white text-4xl md:text-5xl font-bold">Our Financing<br/>Solutions</h2>
    <p class="text-[14px] font-light text-white/38 max-w-[320px] md:text-right leading-relaxed">From working capital to large investments — flexible options tailored for your business.</p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
    <div class="group relative rounded-2xl overflow-hidden min-h-[280px] flex items-end cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500">
      <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=800&q=80');"></div>
      <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-black/20 group-hover:from-black/70 group-hover:via-black/40 transition-all duration-500"></div>
      <div class="relative z-10 p-6 w-full transform transition-transform duration-500 group-hover:translate-y-[-4px]">
        <span class="text-4xl mb-3 block drop-shadow-lg">💼</span>
        <h3 class="font-serif text-2xl text-lime mb-2 group-hover:text-lime-300 transition-colors">Business Loans</h3>
        <p class="text-white/70 text-sm leading-relaxed group-hover:text-white/90 transition-colors">Flexible funding to manage operations, expand, or improve cash flow. Fast approval and competitive terms.</p>
      </div>
    </div>
    <div class="group relative rounded-2xl overflow-hidden min-h-[280px] flex items-end cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500">
      <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&q=80');"></div>
      <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-black/20 group-hover:from-black/70 group-hover:via-black/40 transition-all duration-500"></div>
      <div class="relative z-10 p-6 w-full transform transition-transform duration-500 group-hover:translate-y-[-4px]">
        <span class="text-4xl mb-3 block drop-shadow-lg">🏢</span>
        <h3 class="font-serif text-2xl text-lime mb-2 group-hover:text-lime-300 transition-colors">Commercial Financing</h3>
        <p class="text-white/70 text-sm leading-relaxed group-hover:text-white/90 transition-colors">Capital solutions for real estate, equipment purchases, and large business investments.</p>
      </div>
    </div>
    <div class="group relative rounded-2xl overflow-hidden min-h-[280px] flex items-end cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500">
      <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?w=800&q=80');"></div>
      <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-black/20 group-hover:from-black/70 group-hover:via-black/40 transition-all duration-500"></div>
      <div class="relative z-10 p-6 w-full transform transition-transform duration-500 group-hover:translate-y-[-4px]">
        <span class="text-4xl mb-3 block drop-shadow-lg">🏛️</span>
        <h3 class="font-serif text-2xl text-lime mb-2 group-hover:text-lime-300 transition-colors">SBA Loan Assistance</h3>
        <p class="text-white/70 text-sm leading-relaxed group-hover:text-white/90 transition-colors">Access to government-backed loan programs designed to support small business growth.</p>
      </div>
    </div>
    <div class="group relative rounded-2xl overflow-hidden min-h-[280px] flex items-end cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500">
      <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800&q=80');"></div>
      <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-black/20 group-hover:from-black/70 group-hover:via-black/40 transition-all duration-500"></div>
      <div class="relative z-10 p-6 w-full transform transition-transform duration-500 group-hover:translate-y-[-4px]">
        <span class="text-4xl mb-3 block drop-shadow-lg">🏗️</span>
        <h3 class="font-serif text-2xl text-lime mb-2 group-hover:text-lime-300 transition-colors">Construction Financing</h3>
        <p class="text-white/70 text-sm leading-relaxed group-hover:text-white/90 transition-colors">Funding solutions tailored for construction projects and development needs.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════ FOOTER ═══════════ -->
<footer class="bg-navy mt-10">
  <div class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-4 gap-10">
    <div class="md:col-span-2">
      <p class="font-serif text-[24px] font-bold text-white mb-3">BizCash<span class="text-lime">&amp;</span>Capital</p>
      <p class="text-white/45 text-[14px] font-light leading-relaxed max-w-[320px]">Empowering entrepreneurs with the financial resources required to achieve business success. Contact us today.</p>
    </div>
    <div>
      <h5 class="text-[11px] font-bold tracking-[0.12em] uppercase text-white/30 mb-4">Loan Types</h5>
      <ul class="space-y-2 list-none">
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Term Loans</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Lines of Credit</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Equipment Financing</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Invoice Financing</a></li>
        <li><a href="#" class="text-[14px] text-white/50 hover:text-lime transition-colors font-light">Merchant Cash Advances</a></li>
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
    <p class="text-[12px] text-white/25">© 2023 BizCash&amp;Capital. All rights reserved.</p>
    <p class="text-[12px] text-white/18">Equal Opportunity Lender</p>
  </div>
</footer>

<script>
  // Reveal on scroll
  const ro = new IntersectionObserver(entries => entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); }), { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => ro.observe(el));

  // Nav shadow on scroll
  const nav = document.getElementById('navbar');
  window.addEventListener('scroll', () => { if(nav) nav.classList.toggle('nav-scrolled', window.scrollY > 20); });
</script>
</body>
</html>