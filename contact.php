<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<title>Talk to an Expert | HarbourFundingSolutions — Business Funding Support</title>
<meta name="description" content="Connect with our business funding specialists. Get expert advice on financing options, merchant cash advances, and business loans.">
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
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
</style>
</head>
<body class="bg-ink text-white font-body overflow-x-hidden">

<?php include('header.php'); ?>

<!-- HERO SECTION -->
<section class="hero-pattern relative overflow-hidden min-h-[40vh] sm:min-h-[50vh] flex items-center pt-16">
  <div class="absolute inset-0 z-0">
    <picture>
      <source media="(min-width: 1024px)" srcset="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=1920&q=85&auto=format&fit=crop">
      <source media="(min-width: 768px)" srcset="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=1200&q=80&auto=format&fit=crop">
      <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&q=75&auto=format&fit=crop" alt="Business funding background" class="w-full h-full object-cover">
    </picture>
    <div class="absolute inset-0 bg-gradient-to-br from-[#0a0a0a]/80 via-[#0a0a0a]/60 to-[#0a0a0a]/85"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-lime/8 via-transparent to-transparent"></div>
  </div>
  <div class="absolute inset-0 z-0 opacity-15">
    <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(204,255,0,0.2) 1px, transparent 1px); background-size: 40px 40px;"></div>
  </div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 py-12 sm:py-16 md:py-20 w-full relative z-10">
    <div class="text-center max-w-3xl mx-auto">
      <p class="eyebrow inline-flex items-center text-[11px] font-semibold tracking-[0.16em] uppercase text-lime/80 mb-5 sm:mb-7">Talk to an Expert</p>
      <h1 class="hero-hl text-white mb-4 sm:mb-6 font-display text-5xl sm:text-6xl md:text-7xl tracking-tight">
        Let's <span class="text-lime">Connect</span>
      </h1>
      <p class="text-[14px] sm:text-[16px] leading-[1.6] sm:leading-[1.75] text-white/70 font-light max-w-[600px] mx-auto px-4">
        Have questions? Our funding specialists are ready to help. Fill out the form and your email client will open with your message pre-filled.
      </p>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-lime via-lime to-lime opacity-80 z-10"></div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="px-4 sm:px-6 md:px-12 py-16 sm:py-20 md:py-24">
  <div class="max-w-6xl mx-auto">
    <div class="flex items-center gap-4 text-[11px] font-semibold tracking-[0.18em] uppercase text-white/28 mb-8 sm:mb-12">
      Get In Touch <div class="flex-1 h-px bg-white/[0.07]"></div>
    </div>
    <div class="grid md:grid-cols-2 gap-8 md:gap-12">
      
      <!-- Left Side - Contact Info -->
      <div class="reveal text-center md:text-left">
        <h2 class="font-display text-white text-4xl sm:text-5xl md:text-6xl tracking-tight mb-4 sm:mb-6">Talk to a<br/><span class="text-lime">Funding Expert</span></h2>
        <p class="text-white/40 text-sm sm:text-base leading-relaxed mb-6 sm:mb-8 px-4 md:px-0">Our specialists are here to answer your questions, discuss your business needs, and help you find the right funding solution — completely free.</p>
        
        <div class="space-y-5 sm:space-y-6 max-w-md mx-auto md:mx-0">
          <div class="flex items-center justify-center md:justify-start gap-4 group cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/25 transition-colors">
              <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div class="text-left">
              <h4 class="font-semibold text-white mb-1">Email Our Experts</h4>
              <p class="text-white/50 text-sm">info@harbour.com</p>
              <p class="text-white/40 text-xs mt-1">Response within 24 hours</p>
            </div>
          </div>
          
          <div class="flex items-center justify-center md:justify-start gap-4 group cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/25 transition-colors">
              <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <div class="text-left">
              <h4 class="font-semibold text-white mb-1">Call Our Team</h4>
              <p class="text-white/50 text-sm">+1 716 391 4908</p>
              <p class="text-white/40 text-xs mt-1">Mon-Fri, 9am - 6pm EST</p>
            </div>
          </div>
          
          <div class="flex items-center justify-center md:justify-start gap-4 group cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/25 transition-colors">
              <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div class="text-left">
              <h4 class="font-semibold text-white mb-1">Visit Our Office</h4>
              <p class="text-white/50 text-sm">200 Park Avenue</p>
              <p class="text-white/40 text-xs">New York, NY 10166</p>
            </div>
          </div>
        </div>

      </div>
      
      <!-- Right Side - Contact Form (Talk to Expert) -->
      <div class="reveal" style="transition-delay: 0.1s">
        <div class="bg-[#0d0d0d]/95 backdrop-blur-sm border border-white/[0.07] rounded-2xl p-6 sm:p-8">
          <h3 class="font-display text-2xl text-white mb-6 text-center md:text-left">Send us a message</h3>
          
          <form id="contactForm" class="space-y-5">
            <div>
              <label class="block text-white/60 text-sm mb-2">Full Name <span class="text-lime">*</span></label>
              <input type="text" id="contact_name" name="name" required class="w-full bg-ink/80 border border-white/[0.1] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-lime transition-colors" placeholder="John Smith">
            </div>
            
            <div>
              <label class="block text-white/60 text-sm mb-2">Email Address <span class="text-lime">*</span></label>
              <input type="email" id="contact_email" name="email" required class="w-full bg-ink/80 border border-white/[0.1] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-lime transition-colors" placeholder="john@company.com">
            </div>
            
            <div>
              <label class="block text-white/60 text-sm mb-2">Phone Number</label>
              <input type="tel" id="contact_phone" name="phone" class="w-full bg-ink/80 border border-white/[0.1] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-lime transition-colors" placeholder="(555) 123-4567">
            </div>
            
            <div>
              <label class="block text-white/60 text-sm mb-2">Best Time to Reach You</label>
              <select id="contact_best_time" name="best_time" class="w-full bg-ink/80 border border-white/[0.1] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-lime transition-colors">
                <option value="">Select preferred time</option>
                <option>Morning (9am - 12pm EST)</option>
                <option>Early Afternoon (12pm - 3pm EST)</option>
                <option>Late Afternoon (3pm - 6pm EST)</option>
                <option>Anytime</option>
              </select>
            </div>
            
            <div>
              <label class="block text-white/60 text-sm mb-2">Your Question / Message <span class="text-lime">*</span></label>
              <textarea id="contact_message" name="message" rows="4" required class="w-full bg-ink/80 border border-white/[0.1] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-lime transition-colors" placeholder="What would you like to discuss with our funding expert?"></textarea>
            </div>
            
            <button type="button" id="submitContactBtn" class="btn-gold w-full text-center">Talk to an Expert →</button>
            
            <p class="text-white/25 text-xs text-center mt-4">
              Free consultation. No obligation. Click Send — your email client will open with the message pre-filled.
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section class="px-4 sm:px-6 md:px-12 py-16 sm:py-20 lg:py-24 border-t border-white/[0.07] relative overflow-hidden">
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] rounded-full bg-lime/5 blur-3xl pointer-events-none"></div>
  <div class="max-w-4xl mx-auto relative z-10">
    <div class="text-center mb-12 sm:mb-16 reveal">
      <div class="inline-flex items-center gap-2 bg-lime/10 border border-lime/20 rounded-full px-3 sm:px-4 py-1.5 sm:py-2 mb-4 sm:mb-6">
        <svg class="w-3 h-3 sm:w-4 sm:h-4 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span class="text-lime text-[10px] sm:text-[11px] font-bold tracking-[0.15em] sm:tracking-[0.2em] uppercase">Knowledge Base</span>
      </div>
      <h2 class="font-display text-3xl sm:text-4xl md:text-5xl text-white mb-3 sm:mb-4">
        Frequently Asked <span class="text-lime">Questions</span>
      </h2>
      <p class="text-white/40 text-sm sm:text-base max-w-2xl mx-auto px-4">Quick answers to common questions. Can't find what you're looking for? <a href="#contact" class="text-lime hover:underline">Talk to an expert</a></p>
    </div>
    
    <div class="space-y-3 sm:space-y-4" x-data="{ openFaq: null }">
      <div class="bg-[#0d0d0d] border border-white/[0.07] rounded-xl sm:rounded-2xl overflow-hidden hover:border-lime/20 transition-all duration-300">
        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full flex items-center justify-between p-4 sm:p-6 text-left hover:bg-white/[0.02] transition-colors group">
          <div class="flex items-center gap-3 sm:gap-4">
            <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-lime/10 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/20 transition-colors">
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h3 class="font-semibold text-white text-sm sm:text-base md:text-lg">How fast can I get funded?</h3>
          </div>
          <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white/40 transition-transform duration-300" :class="openFaq === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </button>
        <div x-show="openFaq === 1" x-collapse class="border-t border-white/[0.05]">
          <div class="p-4 sm:p-6 pt-3 sm:pt-5">
            <p class="text-white/60 text-sm sm:text-base leading-relaxed">Most business owners receive funding within <span class="text-lime font-semibold">24-48 hours</span> after approval.</p>
          </div>
        </div>
      </div>
      
      <div class="bg-[#0d0d0d] border border-white/[0.07] rounded-xl sm:rounded-2xl overflow-hidden hover:border-lime/20 transition-all duration-300">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full flex items-center justify-between p-4 sm:p-6 text-left hover:bg-white/[0.02] transition-colors group">
          <div class="flex items-center gap-3 sm:gap-4">
            <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-lime/10 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/20 transition-colors">
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <h3 class="font-semibold text-white text-sm sm:text-base md:text-lg">What credit score do I need?</h3>
          </div>
          <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white/40 transition-transform duration-300" :class="openFaq === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </button>
        <div x-show="openFaq === 2" x-collapse class="border-t border-white/[0.05]">
          <div class="p-4 sm:p-6 pt-3 sm:pt-5">
            <p class="text-white/60 text-sm sm:text-base leading-relaxed">We work with a <span class="text-lime font-semibold">wide range of credit profiles</span>. Even with less-than-perfect credit, we may still be able to help.</p>
          </div>
        </div>
      </div>
      
      <div class="bg-[#0d0d0d] border border-white/[0.07] rounded-xl sm:rounded-2xl overflow-hidden hover:border-lime/20 transition-all duration-300">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full flex items-center justify-between p-4 sm:p-6 text-left hover:bg-white/[0.02] transition-colors group">
          <div class="flex items-center gap-3 sm:gap-4">
            <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-lime/10 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/20 transition-colors">
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h3 class="font-semibold text-white text-sm sm:text-base md:text-lg">Are there any upfront fees?</h3>
          </div>
          <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white/40 transition-transform duration-300" :class="openFaq === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </button>
        <div x-show="openFaq === 3" x-collapse class="border-t border-white/[0.05]">
          <div class="p-4 sm:p-6 pt-3 sm:pt-5">
            <p class="text-white/60 text-sm sm:text-base leading-relaxed"><span class="text-lime font-semibold">No, absolutely no upfront fees</span> to apply or get matched with lenders. We only get paid when you secure funding.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php @include('footer.php'); ?>

<script>
  const ro = new IntersectionObserver(entries => entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); }), { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => ro.observe(el));
  
  function validateContactForm() {
    const name = document.getElementById('contact_name').value.trim();
    const email = document.getElementById('contact_email').value.trim();
    const message = document.getElementById('contact_message').value.trim();
    let isValid = true;
    if (!name) { document.getElementById('contact_name').style.borderColor = '#ff4444'; setTimeout(() => document.getElementById('contact_name').style.borderColor = '', 2000); isValid = false; }
    if (!email) { document.getElementById('contact_email').style.borderColor = '#ff4444'; setTimeout(() => document.getElementById('contact_email').style.borderColor = '', 2000); isValid = false; }
    if (!message) { document.getElementById('contact_message').style.borderColor = '#ff4444'; setTimeout(() => document.getElementById('contact_message').style.borderColor = '', 2000); isValid = false; }
    return isValid;
  }
  
  // Submit — opens default mail client with pre-filled data (NO TOAST MESSAGES)
  document.getElementById('submitContactBtn').addEventListener('click', () => {
    if (!validateContactForm()) {
      // Visual feedback only — highlight missing fields
      return;
    }
    
    const name = document.getElementById('contact_name').value;
    const email = document.getElementById('contact_email').value;
    const phone = document.getElementById('contact_phone').value || 'Not provided';
    const bestTime = document.getElementById('contact_best_time').value || 'Not specified';
    const message = document.getElementById('contact_message').value;
    const currentDate = new Date().toLocaleString();
    const recipient = 'info@harbour.com';
    const subject = `Expert Consultation Request - ${name}`;
    
    const emailBody = `
========================================
EXPERT CONSULTATION REQUEST
========================================
Date: ${currentDate}

========================================
CONTACT INFORMATION
========================================
Name: ${name}
Email: ${email}
Phone: ${phone}
Best Time to Reach: ${bestTime}

========================================
MESSAGE / QUESTION
========================================
${message}

========================================
SUBMITTED VIA: HarbourFundingSolutions - Talk to Expert Page
========================================
Please respond to this consultation request within 24 hours.

---
HarbourFundingSolutions
Empowering Business Growth
    `;
    
    const mailtoLink = `mailto:${recipient}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(emailBody)}`;
    window.location.href = mailtoLink;
    
    // Reset form after sending
    document.getElementById('contactForm').reset();
  });
</script>
</body>
</html>