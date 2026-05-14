<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<title>Apply Now | HarbourFundingSolutions — Fast Business Loan Application</title>
<meta name="description" content="Apply for a business loan online in minutes. Get funding from $5,000 to $5 million with fast approval and competitive rates.">
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet" />
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: { lime: '#CCFF00', ink: '#0A0A0A' },
        fontFamily: {
          display: ['Space Grotesk', 'sans-serif'],
          body: ['Inter', 'sans-serif'],
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

  .lime-underline { position: relative; display: inline-block; }
  .lime-underline::after { content:''; position:absolute; bottom:-6px; left:0; width:60px; height:3px; background: var(--lime); border-radius:2px; }

  /* Form styles */
  .form-input, .form-select, .form-textarea {
    width: 100%;
    padding: 12px 16px;
    background: #0d0d0d;
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 8px;
    color: white;
    font-size: 14px;
    transition: all 0.2s ease;
    outline: none;
  }
  .form-input:focus, .form-select:focus, .form-textarea:focus {
    border-color: var(--lime);
    box-shadow: 0 0 0 2px rgba(204,255,0,0.2);
  }
  .form-input::placeholder, .form-textarea::placeholder {
    color: rgba(255,255,255,0.3);
  }
  label {
    font-size: 13px;
    font-weight: 500;
    color: rgba(255,255,255,0.7);
    margin-bottom: 6px;
    display: block;
  }
  .required::after {
    content: '*';
    color: var(--lime);
    margin-left: 4px;
  }
  .btn-gold {
    background: var(--lime); color: var(--ink);
    padding: 14px 32px;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 0.04em;
    border-radius: 8px;
    display: inline-block;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.2s ease;
    border: none;
    width: 100%;
  }
  .btn-gold:hover { background: #b0e02a; transform: translateY(-1px); }
  .btn-outline {
    background: transparent; color: white;
    padding: 13px 32px;
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 0.04em;
    border-radius: 8px;
    display: inline-block;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.2s;
    border: 2px solid rgba(255,255,255,0.3);
  }
  .btn-outline:hover { background: white; color: var(--ink); border-color: white; }
  .chip { display:inline-block; background:rgba(204,255,0,0.15); color: var(--lime); font-size:11px; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; padding:4px 12px; border-radius:20px; }
  .step-circle { width:40px; height:40px; border-radius:50%; background: var(--lime); color: var(--ink); display:flex; align-items:center; justify-content:center; font-weight:700; font-size:15px; flex-shrink:0; }
  ::-webkit-scrollbar { width: 8px; }
  ::-webkit-scrollbar-track { background: #1a1a1a; }
  ::-webkit-scrollbar-thumb { background: #CCFF00; border-radius: 4px; }
</style>
</head>
<body class="bg-ink text-white font-body overflow-x-hidden">

<?php include('header.php'); ?>

<!-- Hero Section -->
<section class="relative overflow-hidden min-h-[40vh] flex items-center justify-center pt-16">
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=1600&q=80'); opacity: 0.25;"></div>
  <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/80 to-transparent"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-12 py-16 w-full text-center">
    <div class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/10">
      <span class="w-2 h-2 bg-lime rounded-full animate-pulse"></span>
      <span class="text-[11px] font-medium tracking-[0.1em] uppercase text-white/70">Fast & Secure Application</span>
    </div>
    <h1 class="font-display text-white text-5xl md:text-6xl lg:text-7xl tracking-tight leading-[1.1]">
      Apply for <span class="text-lime">Business Funding</span>
    </h1>
    <p class="text-white/50 text-base max-w-2xl mx-auto mt-6 font-light">Complete the form below and one of our loan specialists will contact you within 24 hours.</p>
  </div>
</section>

<main class="max-w-4xl mx-auto px-4 sm:px-6 py-12">
  
  <!-- Progress Steps -->
  <div class="reveal mb-12">
    <div class="flex items-center justify-between max-w-md mx-auto">
      <div class="text-center">
        <div class="step-circle mx-auto mb-2">1</div>
        <p class="text-[11px] text-white/40 uppercase tracking-wide">Information</p>
      </div>
      <div class="flex-1 h-px bg-white/10 mx-4"></div>
      <div class="text-center">
        <div class="step-circle mx-auto mb-2 bg-white/10 text-white/40">2</div>
        <p class="text-[11px] text-white/40 uppercase tracking-wide">Business</p>
      </div>
      <div class="flex-1 h-px bg-white/10 mx-4"></div>
      <div class="text-center">
        <div class="step-circle mx-auto mb-2 bg-white/10 text-white/40">3</div>
        <p class="text-[11px] text-white/40 uppercase tracking-wide">Loan</p>
      </div>
    </div>
    <p class="text-center text-white/30 text-[12px] mt-4">Step 1 of 3 — Tell us about yourself</p>
  </div>

  <!-- Application Form -->
  <div class="reveal bg-[#0d0d0d] rounded-2xl border border-white/[0.07] p-6 md:p-8">
    <div class="text-center mb-8">
      <p class="chip mb-4 inline-block">Start Your Application</p>
      <h2 class="font-display text-3xl md:text-4xl text-white">Get Funded in <span class="text-lime">24-48 Hours</span></h2>
      <p class="text-white/40 text-sm mt-3">All information is secure and confidential. No impact on your credit score.</p>
    </div>

    <form id="loanApplicationForm" method="POST" action="#">
      <!-- Step 1: Personal Information -->
      <div id="step1" class="form-step active">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <div>
            <label class="required">First Name</label>
            <input type="text" class="form-input" placeholder="John" required>
          </div>
          <div>
            <label class="required">Last Name</label>
            <input type="text" class="form-input" placeholder="Doe" required>
          </div>
          <div>
            <label class="required">Email Address</label>
            <input type="email" class="form-input" placeholder="john.doe@company.com" required>
          </div>
          <div>
            <label class="required">Phone Number</label>
            <input type="tel" class="form-input" placeholder="(555) 555-1234" required>
          </div>
          <div class="md:col-span-2">
            <label>Best Time to Call</label>
            <select class="form-select">
              <option value="">Select a time</option>
              <option>Morning (9am - 12pm)</option>
              <option>Afternoon (12pm - 4pm)</option>
              <option>Evening (4pm - 7pm)</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Step 2: Business Information -->
      <div id="step2" class="form-step hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <div class="md:col-span-2">
            <label class="required">Business Name</label>
            <input type="text" class="form-input" placeholder="Your Company LLC" required>
          </div>
          <div>
            <label class="required">Business Type</label>
            <select class="form-select" required>
              <option value="">Select business type</option>
              <option>Sole Proprietorship</option>
              <option>LLC</option>
              <option>Corporation (S-Corp/C-Corp)</option>
              <option>Partnership</option>
              <option>Non-Profit</option>
            </select>
          </div>
          <div>
            <label class="required">Years in Business</label>
            <select class="form-select" required>
              <option value="">Select</option>
              <option>Less than 6 months</option>
              <option>6 months - 1 year</option>
              <option>1 - 2 years</option>
              <option>2 - 5 years</option>
              <option>5+ years</option>
            </select>
          </div>
          <div>
            <label class="required">Annual Revenue</label>
            <select class="form-select" required>
              <option value="">Select revenue range</option>
              <option>Less than $50,000</option>
              <option>$50,000 - $100,000</option>
              <option>$100,000 - $250,000</option>
              <option>$250,000 - $500,000</option>
              <option>$500,000 - $1M</option>
              <option>$1M - $5M</option>
              <option>$5M+</option>
            </select>
          </div>
          <div>
            <label>Credit Score (if known)</label>
            <select class="form-select">
              <option value="">Select credit range</option>
              <option>Excellent (720+)</option>
              <option>Good (680-719)</option>
              <option>Fair (620-679)</option>
              <option>Below 620</option>
              <option>Not sure</option>
            </select>
          </div>
          <div class="md:col-span-2">
            <label>Business Address</label>
            <input type="text" class="form-input" placeholder="Street address">
          </div>
        </div>
      </div>

      <!-- Step 3: Loan Details -->
      <div id="step3" class="form-step hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <div>
            <label class="required">Loan Amount Needed</label>
            <select class="form-select" required>
              <option value="">Select amount</option>
              <option>$5,000 - $25,000</option>
              <option>$25,000 - $50,000</option>
              <option>$50,000 - $100,000</option>
              <option>$100,000 - $250,000</option>
              <option>$250,000 - $500,000</option>
              <option>$500,000 - $1,000,000</option>
              <option>$1,000,000+</option>
            </select>
          </div>
          <div>
            <label class="required">Loan Purpose</label>
            <select class="form-select" required>
              <option value="">Select purpose</option>
              <option>Working Capital</option>
              <option>Equipment Purchase</option>
              <option>Business Expansion</option>
              <option>Real Estate / Commercial Property</option>
              <option>Debt Consolidation</option>
              <option>Inventory / Stock</option>
              <option>Construction / Renovation</option>
              <option>Startup Funding</option>
            </select>
          </div>
          <div class="md:col-span-2">
            <label>Tell us more about your funding needs (optional)</label>
            <textarea rows="3" class="form-textarea" placeholder="Briefly describe how you plan to use the funds..."></textarea>
          </div>
        </div>
      </div>

      <!-- Form Navigation Buttons -->
      <div class="flex justify-between mt-8 pt-6 border-t border-white/10">
        <button type="button" id="prevBtn" class="btn-outline px-6 py-3 hidden">← Previous</button>
        <button type="button" id="nextBtn" class="btn-gold px-8 py-3 ml-auto">Next Step →</button>
        <button type="submit" id="submitBtn" class="btn-gold px-8 py-3 hidden">Submit Application →</button>
      </div>
    </form>

    <div class="mt-6 text-center">
      <p class="text-white/30 text-[11px]">Your information is protected by 256-bit SSL encryption</p>
    </div>
  </div>

  <!-- Why Apply With Us -->
  <div class="reveal mt-12 grid grid-cols-1 sm:grid-cols-3 gap-5">
    <div class="text-center p-5 bg-[#0d0d0d] rounded-xl border border-white/[0.07]">
      <svg class="w-8 h-8 text-lime mx-auto mb-3" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
      <h3 class="font-semibold text-white text-sm">Fast Approval</h3>
      <p class="text-white/40 text-[12px] mt-1">Get a decision in as little as 24 hours</p>
    </div>
    <div class="text-center p-5 bg-[#0d0d0d] rounded-xl border border-white/[0.07]">
      <svg class="w-8 h-8 text-lime mx-auto mb-3" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/></svg>
      <h3 class="font-semibold text-white text-sm">Competitive Rates</h3>
      <p class="text-white/40 text-[12px] mt-1">Rates as low as 4.5% APR for qualified borrowers</p>
    </div>
    <div class="text-center p-5 bg-[#0d0d0d] rounded-xl border border-white/[0.07]">
      <svg class="w-8 h-8 text-lime mx-auto mb-3" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
      <h3 class="font-semibold text-white text-sm">Dedicated Support</h3>
      <p class="text-white/40 text-[12px] mt-1">Personal loan specialist assigned to you</p>
    </div>
  </div>

  <!-- FAQ Section -->
  <div class="reveal mt-12 bg-[#0d0d0d] rounded-2xl border border-white/[0.07] p-6 md:p-8">
    <div class="text-center mb-6">
      <p class="chip mb-3 inline-block">FAQs</p>
      <h3 class="font-display text-2xl text-white">Frequently Asked Questions</h3>
    </div>
    <div class="space-y-4 max-w-2xl mx-auto">
      <div class="border-b border-white/10 pb-3">
        <button class="faq-question w-full text-left flex justify-between items-center text-white font-medium hover:text-lime transition-colors">
          <span>How long does it take to get funded?</span>
          <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </button>
        <div class="faq-answer hidden mt-2 text-white/50 text-sm">Most applicants receive funding within 24-48 hours after final approval. The application process itself takes less than 10 minutes.</div>
      </div>
      <div class="border-b border-white/10 pb-3">
        <button class="faq-question w-full text-left flex justify-between items-center text-white font-medium hover:text-lime transition-colors">
          <span>Will applying affect my credit score?</span>
          <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </button>
        <div class="faq-answer hidden mt-2 text-white/50 text-sm">No. Our initial application uses a soft credit pull that does not impact your credit score. A hard pull only occurs when you move forward with an offer.</div>
      </div>
      <div class="border-b border-white/10 pb-3">
        <button class="faq-question w-full text-left flex justify-between items-center text-white font-medium hover:text-lime transition-colors">
          <span>What are the minimum requirements?</span>
          <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </button>
        <div class="faq-answer hidden mt-2 text-white/50 text-sm">We work with businesses of all sizes. Generally, we look for 6+ months in business, minimum $50,000 annual revenue, and a personal credit score of 550+. However, we consider all applications.</div>
      </div>
      <div class="pb-3">
        <button class="faq-question w-full text-left flex justify-between items-center text-white font-medium hover:text-lime transition-colors">
          <span>What types of loans do you offer?</span>
          <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </button>
        <div class="faq-answer hidden mt-2 text-white/50 text-sm">SBA Loans, Business Term Loans, Commercial Real Estate, Construction Loans, Bridge Loans, Lines of Credit, and Equipment Financing.</div>
      </div>
    </div>
  </div>
</main>

<footer class="bg-ink mt-12 border-t border-white/[0.07] py-8 text-center text-white/40 text-xs">
  <p>© 2025 HarbourFundingSolutions. All rights reserved.</p>
</footer>

<script>
  // Reveal on scroll
  const ro = new IntersectionObserver(entries => entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); }), { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => ro.observe(el));

  // Multi-step form navigation
  let currentStep = 1;
  const totalSteps = 3;
  
  const step1 = document.getElementById('step1');
  const step2 = document.getElementById('step2');
  const step3 = document.getElementById('step3');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const submitBtn = document.getElementById('submitBtn');
  const stepCircles = document.querySelectorAll('.step-circle');
  
  function updateSteps() {
    // Hide all steps
    step1.classList.add('hidden');
    step2.classList.add('hidden');
    step3.classList.add('hidden');
    
    // Show current step
    if (currentStep === 1) step1.classList.remove('hidden');
    if (currentStep === 2) step2.classList.remove('hidden');
    if (currentStep === 3) step3.classList.remove('hidden');
    
    // Update buttons
    if (currentStep === 1) {
      prevBtn.classList.add('hidden');
      nextBtn.classList.remove('hidden');
      submitBtn.classList.add('hidden');
      nextBtn.classList.remove('ml-auto');
      nextBtn.classList.add('ml-auto');
    } else if (currentStep === totalSteps) {
      prevBtn.classList.remove('hidden');
      nextBtn.classList.add('hidden');
      submitBtn.classList.remove('hidden');
    } else {
      prevBtn.classList.remove('hidden');
      nextBtn.classList.remove('hidden');
      submitBtn.classList.add('hidden');
    }
    
    // Update step circles styling
    for (let i = 0; i < stepCircles.length; i++) {
      const circle = stepCircles[i];
      const stepNum = i + 1;
      if (stepNum < currentStep) {
        circle.style.background = 'var(--lime)';
        circle.style.color = 'var(--ink)';
      } else if (stepNum === currentStep) {
        circle.style.background = 'var(--lime)';
        circle.style.color = 'var(--ink)';
      } else {
        circle.style.background = 'rgba(255,255,255,0.1)';
        circle.style.color = 'rgba(255,255,255,0.4)';
      }
    }
  }
  
  nextBtn.addEventListener('click', () => {
    if (currentStep < totalSteps) {
      currentStep++;
      updateSteps();
    }
  });
  
  prevBtn.addEventListener('click', () => {
    if (currentStep > 1) {
      currentStep--;
      updateSteps();
    }
  });
  
  // Form submission
  const form = document.getElementById('loanApplicationForm');
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    // Simple validation check
    const requiredFields = form.querySelectorAll('[required]');
    let isValid = true;
    let currentStepFields = [];
    
    if (currentStep === 1) currentStepFields = step1.querySelectorAll('[required]');
    else if (currentStep === 2) currentStepFields = step2.querySelectorAll('[required]');
    else if (currentStep === 3) currentStepFields = step3.querySelectorAll('[required]');
    
    currentStepFields.forEach(field => {
      if (!field.value.trim()) {
        isValid = false;
        field.style.borderColor = '#ff4444';
        setTimeout(() => { field.style.borderColor = ''; }, 2000);
      }
    });
    
    if (isValid && currentStep === totalSteps) {
      alert('Thank you for your application! A loan specialist will contact you within 24 hours.');
      // In production, you would submit the form data via AJAX here
      form.reset();
      currentStep = 1;
      updateSteps();
    } else if (currentStep !== totalSteps) {
      currentStep++;
      updateSteps();
    }
  });
  
  // FAQ accordion
  const faqButtons = document.querySelectorAll('.faq-question');
  faqButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const answer = btn.nextElementSibling;
      const arrow = btn.querySelector('svg');
      answer.classList.toggle('hidden');
      arrow.style.transform = answer.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
    });
  });
</script>
</body>
</html>