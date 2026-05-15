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

  body::after {
    content:''; position:fixed; inset:0; pointer-events:none; z-index:9999; opacity:0.028;
    background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
    background-size:128px;
  }

  * { margin:0; padding:0; box-sizing:border-box; }
  html { scroll-behavior: smooth; }
  body { background: var(--ink); color: white; font-family: 'Inter', sans-serif; overflow-x: hidden; }

  .reveal { opacity: 0; transform: translateY(22px); transition: opacity 0.65s ease, transform 0.65s cubic-bezier(0.22,1,0.36,1); }
  .reveal.visible { opacity: 1; transform: translateY(0); }

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
  ::-webkit-scrollbar { width: 8px; }
  ::-webkit-scrollbar-track { background: #1a1a1a; }
  ::-webkit-scrollbar-thumb { background: #CCFF00; border-radius: 4px; }
  
  .form-section {
    margin-bottom: 24px;
    padding-bottom: 16px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }
  .section-title {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 18px;
    font-weight: 600;
    color: var(--lime);
    margin-bottom: 20px;
    letter-spacing: -0.02em;
  }

  .toast-notification {
    position: fixed;
    bottom: 30px;
    right: 30px;
    background: #1a1a1a;
    border-left: 4px solid #CCFF00;
    padding: 14px 20px;
    border-radius: 8px;
    color: white;
    font-size: 14px;
    z-index: 10000;
    box-shadow: 0 10px 25px -5px rgba(0,0,0,0.3);
    transform: translateX(400px);
    transition: transform 0.3s ease;
    font-family: 'Inter', sans-serif;
  }
  .toast-notification.show { transform: translateX(0); }
  
  .legal-text {
    font-size: 10px;
    line-height: 1.5;
    color: rgba(255,255,255,0.35);
    text-align: left;
    margin-top: 16px;
    padding-top: 16px;
    border-top: 1px solid rgba(255,255,255,0.08);
  }
  .legal-text a {
    color: var(--lime);
    text-decoration: none;
  }
  .legal-text a:hover {
    text-decoration: underline;
  }
</style>
</head>
<body class="bg-ink text-white font-body overflow-x-hidden">

<?php include('header.php'); ?>

<!-- Hero Section -->
<section class="relative overflow-hidden min-h-[35vh] flex items-center justify-center pt-16">
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
    <p class="text-white/50 text-base max-w-2xl mx-auto mt-6 font-light">Complete the form below. When you submit, your email client will open with the application pre-filled — just hit send!</p>
  </div>
</section>

<main class="max-w-4xl mx-auto px-4 sm:px-6 py-12">
  
  <!-- Application Form -->
  <div class="reveal bg-[#0d0d0d] rounded-2xl border border-white/[0.07] p-6 md:p-8">
    <div class="text-center mb-8">
      <p class="chip mb-4 inline-block">Start Your Application</p>
      <h2 class="font-display text-3xl md:text-4xl text-white">Get Funded in <span class="text-lime">24-48 Hours</span></h2>
      <p class="text-white/40 text-sm mt-3">All information is secure and confidential. No impact on your credit score.</p>
    </div>

    <form id="loanApplicationForm">
      <!-- Section 1: Business Information -->
      <div class="form-section">
        <h3 class="section-title">Business Information</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <div class="md:col-span-2">
            <label class="required">Legal Business Name</label>
            <input type="text" id="legal_business_name" class="form-input" placeholder="Enter legal business name" required>
          </div>
          <div>
            <label class="required">Entity Type</label>
            <select id="entity_type" class="form-select" required>
              <option value="">Select entity type</option>
              <option>LLC</option>
              <option>Sole Proprietorship</option>
              <option>S Corporation</option>
              <option>C Corporation</option>
              <option>Partnership</option>
              <option>Non-Profit</option>
            </select>
          </div>
          <div>
            <label class="required">Business EIN</label>
            <input type="text" id="business_ein" class="form-input" placeholder="XX-XXXXXXX" required>
          </div>
          <div>
            <label class="required">Business Start Date</label>
            <input type="text" id="business_start_date" class="form-input" placeholder="MM-DD-YYYY" required>
          </div>
          <div>
            <label class="required">Date</label>
            <input type="text" id="application_date" class="form-input" placeholder="MM-DD-YYYY" value="<?php echo date('m-d-Y'); ?>">
          </div>
          <div>
            <label class="required">Industry / Business Category</label>
            <select id="industry" class="form-select" required>
              <option value="">Select industry</option>
              <option>Auto Repair</option>
              <option>Attorney / Legal Services</option>
              <option>Cleaning Business</option>
              <option>Construction</option>
              <option>Convenience Store</option>
              <option>Daycare</option>
              <option>Beauty Salon / Spa</option>
              <option>Accounting / CPA</option>
              <option>Restaurant / Food Service</option>
              <option>Retail</option>
              <option>Wholesale / Distribution</option>
              <option>Medical / Healthcare</option>
              <option>Other</option>
            </select>
          </div>
          <div class="md:col-span-2">
            <label class="required">Business Address (Street, City, State, Zip Code)</label>
            <input type="text" id="business_address" class="form-input" placeholder="123 Main St, New York, NY 10001" required>
          </div>
        </div>
      </div>

      <!-- Section 2: Owner/Principal Information -->
      <div class="form-section">
        <h3 class="section-title">Owner / Principal Information</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <div>
            <label class="required">Merchant Full Name</label>
            <input type="text" id="merchant_full_name" class="form-input" placeholder="First and Last Name" required>
          </div>
          <div>
            <label class="required">Merchant Date of Birth</label>
            <input type="text" id="merchant_dob" class="form-input" placeholder="MM-DD-YYYY" required>
          </div>
          <div>
            <label class="required">Merchant SSN</label>
            <input type="text" id="merchant_ssn" class="form-input" placeholder="XXX-XX-XXXX" required>
          </div>
          <div>
            <label class="required">Ownership %</label>
            <input type="text" id="ownership_percent" class="form-input" placeholder="100%" required>
          </div>
          <div class="md:col-span-2">
            <label class="required">Home Address</label>
            <input type="text" id="home_address" class="form-input" placeholder="Street, City, State, Zip Code" required>
          </div>
          <div>
            <label class="required">Best Phone Number</label>
            <input type="tel" id="phone" class="form-input" placeholder="(000) 000-0000" required>
          </div>
          <div>
            <label class="required">Email Address</label>
            <input type="email" id="email" class="form-input" placeholder="example@company.com" required>
          </div>
        </div>
      </div>

      <!-- Section 3: Loan Details -->
      <div class="form-section">
        <h3 class="section-title">Loan Details</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <div>
            <label class="required">Purpose of Funding</label>
            <select id="purpose_of_funding" class="form-select" required>
              <option value="">Select purpose</option>
              <option>Working Capital</option>
              <option>Equipment Purchase</option>
              <option>Business Expansion</option>
              <option>Real Estate / Commercial Property</option>
              <option>Debt Consolidation</option>
              <option>Inventory / Stock</option>
              <option>Construction / Renovation</option>
              <option>Startup Funding</option>
              <option>Marketing / Advertising</option>
              <option>Hiring / Payroll</option>
            </select>
          </div>
          <div>
            <label class="required">Loan Amount Needed</label>
            <select id="loan_amount" class="form-select" required>
              <option value="">Select amount</option>
              <option>$5,000 - $25,000</option>
              <option>$25,000 - $50,000</option>
              <option>$50,000 - $100,000</option>
              <option>$100,000 - $250,000</option>
              <option>$250,000 - $500,000</option>
              <option>$500,000 - $1,000,000</option>
              <option>$1,000,000 - $2,500,000</option>
              <option>$2,500,000+</option>
            </select>
          </div>
          <div class="md:col-span-2">
            <label>Open Loans (If Yes - Please Mention Open Balance / Payments)</label>
            <textarea id="open_loans" rows="2" class="form-textarea" placeholder="List any existing loans, balances, and monthly payments..."></textarea>
          </div>
          <div class="md:col-span-2">
            <label>Additional Information (Optional)</label>
            <textarea id="additional_info" rows="3" class="form-textarea" placeholder="Any other details you'd like us to know about your business or funding needs..."></textarea>
          </div>
        </div>
      </div>

      <div class="mt-6 pt-4">
        <button type="button" id="submitBtn" class="btn-gold w-full">Send Application →</button>
      </div>
      
      <!-- Legal Disclosure Text -->
      <div class="legal-text text-white">
        <p>By signing & faxing or emailing us your application, you certify that (i) you are authorized to apply on behalf of the company whose full legal name appears above under the Company information portion of the Funding Application for a business loan from us and (ii) all information you provide within the Funding Application and other supporting documents is true and complete and that you will notify us of material changes to such information. You understand & agree that we and our agents and assigners are authorized to contact 3rd parties to make inquiries in evaluating your Funding Application (including requesting business & personal credit bureau reports from credit reporting agencies and other sources) or for any update, renewal, extension of credit. You understand and agree that we may provide credit & other information from the Funding Application and on the signing individual(s) & the company with 3rd parties who may use the information for any lawful purpose, including for the purpose of offering credit and/or other products & services to the signing individual(s) and/or the company.</p>
      </div>
    </form>

    <div class="mt-6 text-center ">
      <p class="text-white text-[11px]">Your information is secure. Click Send to open your email client.</p>
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
      <p class="text-white/40 text-[12px] mt-1">Rates as low as 10% APR for qualified borrowers</p>
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
      <div class="border-b border-white/10 pb-3"><button class="faq-question w-full text-left flex justify-between items-center text-white font-medium hover:text-lime transition-colors"><span>How long does it take to get funded?</span><svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button><div class="faq-answer hidden mt-2 text-white/50 text-sm">Most applicants receive funding within 24-48 hours after final approval.</div></div>
      <div class="border-b border-white/10 pb-3"><button class="faq-question w-full text-left flex justify-between items-center text-white font-medium hover:text-lime transition-colors"><span>Will applying affect my credit score?</span><svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button><div class="faq-answer hidden mt-2 text-white/50 text-sm">No. Our initial application uses a soft credit pull that does not impact your credit score.</div></div>
      <div class="border-b border-white/10 pb-3"><button class="faq-question w-full text-left flex justify-between items-center text-white font-medium hover:text-lime transition-colors"><span>What are the minimum requirements?</span><svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button><div class="faq-answer hidden mt-2 text-white/50 text-sm">We look for 6+ months in business, $50k+ annual revenue, and credit score 550+.</div></div>
      <div class="pb-3"><button class="faq-question w-full text-left flex justify-between items-center text-white font-medium hover:text-lime transition-colors"><span>What types of loans do you offer?</span><svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button><div class="faq-answer hidden mt-2 text-white/50 text-sm">SBA Loans, Business Term Loans, Commercial Real Estate, Construction Loans, Bridge Loans, and Equipment Financing.</div></div>
    </div>
  </div>
</main>

<?php @include('footer.php'); ?>

<script>
  // Reveal on scroll
  const ro = new IntersectionObserver(entries => entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); }), { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => ro.observe(el));
  
  // FAQ accordion
  document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
      const answer = btn.nextElementSibling;
      const arrow = btn.querySelector('svg');
      answer.classList.toggle('hidden');
      arrow.style.transform = answer.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
    });
  });

  function showToast(message) {
    const existingToast = document.querySelector('.toast-notification');
    if(existingToast) existingToast.remove();
    
    const toast = document.createElement('div');
    toast.className = 'toast-notification';
    toast.innerHTML = `
      <div class="flex items-center gap-2">
        <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <span>${message}</span>
      </div>
    `;
    document.body.appendChild(toast);
    setTimeout(() => toast.classList.add('show'), 10);
    setTimeout(() => {
      toast.classList.remove('show');
      setTimeout(() => toast.remove(), 300);
    }, 3000);
  }
  
  function getFormData() {
    return {
      legalBusinessName: document.getElementById('legal_business_name').value,
      entityType: document.getElementById('entity_type').value,
      businessEIN: document.getElementById('business_ein').value,
      businessStartDate: document.getElementById('business_start_date').value,
      applicationDate: document.getElementById('application_date').value,
      industry: document.getElementById('industry').value,
      businessAddress: document.getElementById('business_address').value,
      merchantFullName: document.getElementById('merchant_full_name').value,
      merchantDOB: document.getElementById('merchant_dob').value,
      merchantSSN: document.getElementById('merchant_ssn').value,
      ownershipPercent: document.getElementById('ownership_percent').value,
      homeAddress: document.getElementById('home_address').value,
      phone: document.getElementById('phone').value,
      email: document.getElementById('email').value,
      purposeOfFunding: document.getElementById('purpose_of_funding').value,
      loanAmount: document.getElementById('loan_amount').value,
      openLoans: document.getElementById('open_loans').value || 'None',
      additionalInfo: document.getElementById('additional_info').value || 'None'
    };
  }
  
  function validateForm() {
    const requiredFields = [
      'legal_business_name', 'entity_type', 'business_ein', 'business_start_date',
      'industry', 'business_address', 'merchant_full_name', 'merchant_dob',
      'merchant_ssn', 'ownership_percent', 'home_address', 'phone', 'email',
      'purpose_of_funding', 'loan_amount'
    ];
    let isValid = true;
    for (let fieldId of requiredFields) {
      const field = document.getElementById(fieldId);
      if (!field.value.trim()) {
        field.style.borderColor = '#ff4444';
        setTimeout(() => { field.style.borderColor = ''; }, 2000);
        isValid = false;
      }
    }
    return isValid;
  }
  
  // Submit — opens default mail client with pre-filled data
  document.getElementById('submitBtn').addEventListener('click', () => {
    if (!validateForm()) {
      showToast('⚠️ Please fill in all required fields');
      return;
    }
    
    const data = getFormData();
    const currentDate = new Date().toLocaleString();
    const recipient = 'info@harbour.com';
    const subject = `Loan Application - ${data.legalBusinessName} - ${data.merchantFullName}`;
    
    const emailBody = `
========================================
NEW BUSINESS LOAN APPLICATION
========================================
Application Date: ${currentDate}

========================================
BUSINESS INFORMATION
========================================
Legal Business Name: ${data.legalBusinessName}
Entity Type: ${data.entityType}
Business EIN: ${data.businessEIN}
Business Start Date: ${data.businessStartDate}
Industry / Category: ${data.industry}
Business Address: ${data.businessAddress}

========================================
OWNER / PRINCIPAL INFORMATION
========================================
Merchant Full Name: ${data.merchantFullName}
Date of Birth: ${data.merchantDOB}
SSN: ${data.merchantSSN}
Ownership %: ${data.ownershipPercent}
Home Address: ${data.homeAddress}
Phone Number: ${data.phone}
Email Address: ${data.email}

========================================
LOAN DETAILS
========================================
Purpose of Funding: ${data.purposeOfFunding}
Loan Amount Needed: ${data.loanAmount}
Open Loans (Balances/Payments): 
${data.openLoans}

Additional Information:
${data.additionalInfo}

========================================
SUBMITTED VIA: HarbourFundingSolutions Website
========================================
Please contact the applicant at ${data.phone} or ${data.email} within 24 hours.

---
HarbourFundingSolutions
Empowering Business Growth
    `;
    
    const mailtoLink = `mailto:${recipient}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(emailBody)}`;
    window.location.href = mailtoLink;
    
    showToast('✓ Email client opened — review and send your application');
    
    // Reset form after sending
    document.getElementById('loanApplicationForm').reset();
    document.getElementById('application_date').value = '<?php echo date('m-d-Y'); ?>';
  });
</script>
</body>
</html>