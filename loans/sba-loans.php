<?php
// Auto-detect base path for assets and links
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$baseURL = $protocol . $host;

// Get current directory depth to determine path prefix for assets
$currentDir = dirname($_SERVER['SCRIPT_NAME']);
$depth = substr_count($currentDir, '/') - 1;
$pathPrefix = str_repeat('../', max(0, $depth));
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>SBA Business Loans — BizCash&Capital</title>
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
      },
    },
  }
</script>
<style>
  :root { --lime: #CCFF00; --ink: #1a1a1a; }

  * { margin:0; padding:0; box-sizing:border-box; }
  html { scroll-behavior: smooth; }
  body { background: var(--ink); color: white; font-family: 'DM Sans', sans-serif; }

  /* Reveal animation */
  .reveal { opacity: 0; transform: translateY(22px); transition: opacity 0.65s ease, transform 0.65s cubic-bezier(0.22,1,0.36,1); }
  .reveal.visible { opacity: 1; transform: translateY(0); }

  /* CTA button */
  .btn-gold {
    background: var(--lime); color: var(--ink);
    padding: 14px 32px; font-weight: 700; font-size: 14px; letter-spacing: 0.04em;
    border-radius: 4px; display: inline-block; text-decoration: none; cursor: pointer;
    transition: background 0.2s, transform 0.2s;
    border: none;
  }
  .btn-gold:hover { background: #b0e02a; transform: translateY(-1px); }

  .btn-outline {
    background: transparent; color: white;
    padding: 13px 32px; font-weight: 600; font-size: 14px; letter-spacing: 0.04em;
    border-radius: 4px; display: inline-block; text-decoration: none; cursor: pointer;
    transition: all 0.2s; border: 2px solid rgba(255,255,255,0.3);
  }
  .btn-outline:hover { background: white; color: var(--ink); border-color: white; }

  /* Hero headline */
  .hero-hl { font-family: 'Bebas Neue', sans-serif; font-size: clamp(66px, 8vw, 110px); line-height: 0.88; letter-spacing: 0.01em; }
  .section-hl { font-family: 'Bebas Neue', sans-serif; font-size: clamp(42px, 5vw, 64px); line-height: 1; letter-spacing: 0.01em; }

  /* Eyebrow line */
  .eyebrow::before { content: ''; display: inline-block; width: 28px; height: 1px; background: var(--lime); margin-right: 10px; vertical-align: middle; }

  /* Hero pattern */
  .hero-pattern {
    position: relative;
    background-color: var(--ink);
    background-image: url('https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?w=1600&q=80');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  }
  
  .hero-pattern::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(10,10,10,0.85) 0%, rgba(26,26,26,0.75) 100%);
    z-index: 0;
  }
  
  .hero-pattern > * {
    position: relative;
    z-index: 1;
  }

  /* Loan type card */
  .loan-card { 
    transition: transform 0.28s ease, box-shadow 0.28s ease; 
    background: #0d0d0d; 
    border: 1px solid rgba(255,255,255,0.07); 
  }
  .loan-card:hover { 
    transform: translateY(-5px); 
    box-shadow: 0 16px 48px rgba(204,255,0,0.12); 
    border-color: rgba(204,255,0,0.3); 
  }

  /* Step number circle */
  .step-circle { 
    width: 40px; height: 40px; border-radius: 50%; 
    background: var(--lime); color: var(--ink); 
    display: flex; align-items: center; justify-content: center; 
    font-weight: 700; font-size: 15px; flex-shrink: 0; 
  }

  /* Tag chip */
  .chip { 
    display: inline-block; 
    background: rgba(204,255,0,0.15); 
    color: var(--lime); 
    font-size: 11px; font-weight: 700; 
    letter-spacing: 0.1em; text-transform: uppercase; 
    padding: 4px 12px; border-radius: 20px; 
  }

  /* CTA band */
  .cta-band { background: #0d0d0d; border: 1px solid rgba(204,255,0,0.15); }

  /* Pull quote */
  .pull-quote { border-left: 4px solid var(--lime); padding-left: 24px; }

  /* Form focus styles */
  input:focus, select:focus, textarea:focus {
    outline: none;
    border-color: var(--lime);
    box-shadow: 0 0 0 2px rgba(204, 255, 0, 0.1);
  }
</style>
</head>
<body class="bg-ink text-white font-body overflow-x-hidden">

<!-- ═══════════ HEADER ═══════════ -->
<?php include $pathPrefix . 'header.php'; ?>

<!-- ═══════════ HERO SECTION ═══════════ -->
<section class="hero-pattern relative overflow-hidden min-h-[50vh] flex items-center pt-16">
  <div class="max-w-7xl mx-auto px-6 md:px-12 py-20 w-full">
    <div class="text-center max-w-3xl mx-auto">
      <p class="eyebrow inline-flex items-center text-[11px] font-semibold tracking-[0.16em] uppercase text-lime/80 mb-7">Government-Backed Financing</p>
      <h1 class="hero-hl text-white mb-6">
        SBA <span class="text-lime">Business</span><br/>Loans
      </h1>
      <p class="text-[16px] leading-[1.75] text-white/70 font-light max-w-[600px] mx-auto">
        Get The Best SBA Business Loan For Low Credit Score — favorable conditions and low-interest rates for your business growth.
      </p>
    </div>
  </div>

  <!-- Decorative lime bar -->
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-lime via-lime to-lime opacity-80 z-10"></div>
</section>

<!-- ═══════════ INTRODUCTION SECTION ═══════════ -->
<section class="px-6 md:px-12 py-24">
  <div class="max-w-4xl mx-auto">
    <div class="reveal text-center mb-12">
      <p class="text-white/60 text-lg leading-relaxed">
        To assist small businesses in obtaining the funding they require for business growth, the U.S. Small Business Administration (SBA) operates several lending programs. Lenders will likely approve SBA loans since the U.S. government partially sponsored them.
      </p>
    </div>
    
    <div class="pull-quote my-8 max-w-3xl mx-auto reveal">
      <p class="font-display text-2xl text-white font-semibold leading-snug">
        "Here at BizCash&Capital, we offer fantastic lending choices for small businesses since we provide favorable conditions and low-interest rates."
      </p>
    </div>
    
    <div class="reveal text-center mt-8">
      <p class="text-white/50 text-base">
        To get a free consultation with our experienced financial advisors, 
        <a href="#contact" class="text-lime font-semibold hover:underline">Contact us</a>.
      </p>
    </div>
  </div>
</section>

<section class="px-6 md:px-12 py-24 border-t border-white/[0.07] relative overflow-hidden">
  <!-- Background Image -->
  <div class="absolute inset-0 z-0">
    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1600&q=80" alt="SBA Loans Background" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/70"></div>
  </div>
  
  <div class="max-w-6xl mx-auto relative z-10">
    <div class="text-center mb-12 reveal">
      <p class="chip mb-4 inline-block">SBA Loan Programs</p>
      <h2 class="section-hl text-white mb-4">Types of SBA <span class="text-lime">Business Loans</span></h2>
      <p class="text-white/70 text-base max-w-2xl mx-auto">For the benefit of small businesses, the Small Business Administration provides many financing options. SBA-supported loans that we offer include:</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      
      <!-- SBA 7(a) Loan -->
      <div class="loan-card rounded-2xl p-6 reveal bg-[#0d0d0d]/90 backdrop-blur-sm">
        <div class="w-14 h-14 rounded-full bg-lime/20 flex items-center justify-center mb-5">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
          </svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">SBA 7(a) Loan</h3>
        <p class="text-white/60 text-sm leading-relaxed mb-4">The most popular and versatile SBA loan provides funds for working capital, equipment purchase, debt consolidation, and more.</p>
        <div class="mt-4 pt-4 border-t border-white/[0.07] flex flex-wrap gap-2">
          <span class="text-[11px] font-semibold text-lime bg-lime/10 px-3 py-1 rounded-full">Up to $5M</span>
          <span class="text-[11px] font-semibold text-lime bg-lime/10 px-3 py-1 rounded-full">Flexible Terms</span>
        </div>
      </div>
      
      <!-- SBA 504 Loan -->
      <div class="loan-card rounded-2xl p-6 reveal bg-[#0d0d0d]/90 backdrop-blur-sm" style="transition-delay: 0.1s">
        <div class="w-14 h-14 rounded-full bg-lime/20 flex items-center justify-center mb-5">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6h1.5m-1.5 3h1.5m-1.5 3h1.5M9 21v-3.75c0-.621.504-1.125 1.125-1.125h1.5c.621 0 1.125.504 1.125 1.125V21"/>
          </svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">SBA 504 Loan</h3>
        <p class="text-white/60 text-sm leading-relaxed mb-4">Ideal for businesses requiring real estate or equipment financing, providing long-term, fixed-rate financing for major assets.</p>
        <div class="mt-4 pt-4 border-t border-white/[0.07] flex flex-wrap gap-2">
          <span class="text-[11px] font-semibold text-lime bg-lime/10 px-3 py-1 rounded-full">Real Estate</span>
          <span class="text-[11px] font-semibold text-lime bg-lime/10 px-3 py-1 rounded-full">Fixed-Rate</span>
        </div>
      </div>
      
      <!-- SBA Microloan -->
      <div class="loan-card rounded-2xl p-6 reveal bg-[#0d0d0d]/90 backdrop-blur-sm" style="transition-delay: 0.2s">
        <div class="w-14 h-14 rounded-full bg-lime/20 flex items-center justify-center mb-5">
          <svg class="w-7 h-7 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <h3 class="font-display text-2xl text-white mb-2">SBA Microloan</h3>
        <p class="text-white/60 text-sm leading-relaxed mb-4">For startups and small businesses, microloans offer up to $50,000 to cover working capital, equipment, or inventory expenses.</p>
        <div class="mt-4 pt-4 border-t border-white/[0.07] flex flex-wrap gap-2">
          <span class="text-[11px] font-semibold text-lime bg-lime/10 px-3 py-1 rounded-full">Up to $50K</span>
          <span class="text-[11px] font-semibold text-lime bg-lime/10 px-3 py-1 rounded-full">Startups Welcome</span>
        </div>
      </div>
      
    </div>
  </div>
</section>


<!-- ═══════════ HOW TO APPLY SECTION ═══════════ -->
<section id="apply" class="px-6 md:px-12 py-24 border-t border-white/[0.07]">
  <div class="max-w-4xl mx-auto">
    <div class="text-center mb-12 reveal">
      <p class="chip mb-4 inline-block">Simple Process</p>
      <h2 class="section-hl text-white mb-4">How to Apply for <span class="text-lime">SBA Business Loans</span></h2>
      <p class="text-white/40 text-base max-w-2xl mx-auto">Follow these steps to secure your SBA loan with our expert guidance.</p>
    </div>
    
    <div class="flex flex-col gap-5">
      
      <div class="flex items-start gap-5 bg-[#0d0d0d] rounded-xl p-5 border border-white/[0.07] reveal">
        <div class="step-circle">1</div>
        <div>
          <h4 class="font-semibold text-white text-[16px] mb-1">Verify Eligibility Criteria</h4>
          <p class="text-[14px] text-white/50 font-light leading-relaxed">Verify that you meet the eligibility criteria for the loan you are applying for.</p>
        </div>
      </div>
      
      <div class="flex items-start gap-5 bg-[#0d0d0d] rounded-xl p-5 border border-white/[0.07] reveal" style="transition-delay: 0.08s">
        <div class="step-circle">2</div>
        <div>
          <h4 class="font-semibold text-white text-[16px] mb-1">Have a Solid Business Plan</h4>
          <p class="text-[14px] text-white/50 font-light leading-relaxed">Have a solid business plan that demonstrates your ability to repay and grow.</p>
        </div>
      </div>
      
      <div class="flex items-start gap-5 bg-[#0d0d0d] rounded-xl p-5 border border-white/[0.07] reveal" style="transition-delay: 0.16s">
        <div class="step-circle">3</div>
        <div>
          <h4 class="font-semibold text-white text-[16px] mb-1">Complete Necessary Paperwork</h4>
          <p class="text-[14px] text-white/50 font-light leading-relaxed">Complete the necessary paperwork in advance to speed up the process.</p>
        </div>
      </div>
      
      <div class="flex items-start gap-5 bg-[#0d0d0d] rounded-xl p-5 border border-white/[0.07] reveal" style="transition-delay: 0.24s">
        <div class="step-circle">4</div>
        <div>
          <h4 class="font-semibold text-white text-[16px] mb-1">Be Ready to Answer Questions</h4>
          <p class="text-[14px] text-white/50 font-light leading-relaxed">Be ready to respond to queries about the business you run.</p>
        </div>
      </div>
      
      <div class="flex items-start gap-5 bg-lime/10 border border-lime/20 rounded-xl p-5 reveal" style="transition-delay: 0.32s">
        <div class="step-circle" style="background: #CCFF00; color: #0A0A0A;">5</div>
        <div>
          <h4 class="font-semibold text-white text-[16px] mb-1">Show Patience — But Expect Speed From Us</h4>
          <p class="text-[14px] text-white/60 font-light leading-relaxed">Application for an SBA loan can take weeks or even months. But here at <strong class="text-white">BizCash&Capital</strong>, we get you funding as soon as possible!</p>
        </div>
      </div>
      
    </div>
  </div>
</section>

<!-- ═══════════ TRUSTED ADVISORS SECTION ═══════════ -->
<section class="px-6 md:px-12 py-24 border-t border-white/[0.07] bg-[#0d0d0d]/30">
  <div class="max-w-4xl mx-auto text-center reveal">
    <div class="w-16 h-16 rounded-full bg-lime/20 flex items-center justify-center mx-auto mb-6">
      <svg class="w-8 h-8 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"/>
      </svg>
    </div>
    <h2 class="section-hl text-white mb-4">Talk to Our Trusted <span class="text-lime">Financial Advisors</span></h2>
    <p class="text-white/50 text-base leading-relaxed mb-6">
      Finding the landscape of SBA loans can be huge, but our team of expert advisors is here to simplify the process for you. We understand the unique needs of businesses and can guide you through the difficulty of SBA loans, helping you determine the most suitable loan type, assisting with the application process, and ensuring a smooth path to securing the funds you need.
    </p>
    <div class="flex flex-wrap gap-4 justify-center mt-8">
      <a href="#contact" class="btn-gold">Schedule a Consultation →</a>
      <a href="#contact" class="btn-outline">Contact an Advisor</a>
    </div>
  </div>
</section>

<!-- ═══════════ ABOUT SECTION ═══════════ -->
<section class="px-6 md:px-12 py-24 border-t border-white/[0.07]">
  <div class="max-w-3xl mx-auto text-center reveal">
    <p class="text-[11px] font-bold tracking-[0.2em] uppercase text-lime mb-3">About BizCash&Capital</p>
    <h2 class="section-hl text-white mb-6">Empowering Your <span class="text-lime">Business Growth</span></h2>
    <p class="text-white/40 text-base leading-relaxed mb-6">
      At BizCash&Capital, we are committed to empowering businesses with the financial resources required for growth and success. Contact us today to start your journey toward harnessing the benefits of SBA loans and taking your business to new heights.
    </p>
    <div class="flex justify-center gap-5 pt-4">
      <span class="text-white/20 text-sm uppercase tracking-wider border-r border-white/10 pr-4">Trusted Partners</span>
      <span class="text-white/20 text-sm uppercase tracking-wider">SBA Preferred Lenders</span>
    </div>
  </div>
</section>

<!-- ═══════════ FOOTER ═══════════ -->
<?php include $pathPrefix . 'footer.php'; ?>

<script>
  // Reveal on scroll
  const ro = new IntersectionObserver(entries => entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); }), { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => ro.observe(el));
</script>
</body>
</html>