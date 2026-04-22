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
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
<meta name="description" content="Contact BizCash&Capital for business financing solutions. Our team is ready to help you find the right funding for your business. Get a free consultation today." />
<meta name="keywords" content="contact business loans, business financing contact, SBA loan help, commercial financing, business funding consultation" />
<meta name="author" content="BizCash&Capital" />
<meta name="robots" content="index, follow" />
<meta name="language" content="English" />
<meta property="og:title" content="Contact Us — BizCash&Capital | Business Financing Solutions" />
<meta property="og:description" content="Get in touch with our financing experts. We're here to answer your questions and help you find the right funding for your business." />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?w=1200&q=80" />
<meta property="og:url" content="https://www.bizcashcapital.com/contact.php" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Contact Us — BizCash&Capital" />
<meta name="twitter:description" content="Ready to grow your business? Contact our financing experts for a free consultation." />
<link rel="canonical" href="https://www.bizcashcapital.com/contact.php" />
<title>Contact Us | BizCash&Capital — Business Financing Experts</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet" />
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: { lime: '#CCFF00', ink: '#1a1a1a' },
        fontFamily: {
          display: ['Space Grotesk', 'sans-serif'],
          body: ['Inter', 'sans-serif'],
        },
      },
    },
  }
</script>
<style>
  :root { --lime: #CCFF00; --ink: #1a1a1a; }

  * { margin:0; padding:0; box-sizing:border-box; }
  html { scroll-behavior: smooth; }
  body { background: var(--ink); color: white; font-family: 'Inter', sans-serif; }

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

  /* Hero headline */
  .hero-hl { font-family: 'Space Grotesk', sans-serif; font-size: clamp(42px, 8vw, 110px); line-height: 0.88; letter-spacing: -0.02em; font-weight: 700; }

  /* Eyebrow line */
  .eyebrow::before { content: ''; display: inline-block; width: 28px; height: 1px; background: var(--lime); margin-right: 10px; vertical-align: middle; }

  /* Hero pattern with background image */
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

  /* Dropdown styles */
  .dropdown-menu {
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.2s ease-out;
  }
  .dropdown-trigger:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

  /* Form focus styles */
  input:focus, select:focus, textarea:focus {
    outline: none;
    border-color: var(--lime);
    box-shadow: 0 0 0 2px rgba(204, 255, 0, 0.1);
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .btn-gold { padding: 10px 20px; font-size: 12px; }
  }
</style>
</head>
<body class="bg-ink text-white font-body overflow-x-hidden">

<!-- ═══════════ HEADER ═══════════ -->
<?php include $pathPrefix . 'header.php'; ?>

<!-- ═══════════ HERO SECTION WITH BACKGROUND IMAGE ═══════════ -->
<section class="hero-pattern relative overflow-hidden min-h-[40vh] sm:min-h-[50vh] flex items-center pt-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 py-12 sm:py-16 md:py-20 w-full">
    <div class="text-center max-w-3xl mx-auto">
      <p class="eyebrow inline-flex items-center text-[11px] font-semibold tracking-[0.16em] uppercase text-lime/80 mb-5 sm:mb-7">Get In Touch</p>
      <h1 class="hero-hl text-white mb-4 sm:mb-6">
        Contact <span class="text-lime">Us</span>
      </h1>
      <p class="text-[14px] sm:text-[16px] leading-[1.6] sm:leading-[1.75] text-white/70 font-light max-w-[600px] mx-auto px-4">
        Have questions about our financing solutions? Our team is ready to help you find the right funding for your business.
      </p>
    </div>
  </div>

  <!-- Decorative lime bar -->
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-lime via-lime to-lime opacity-80 z-10"></div>
</section>

<!-- ═══════════ CONTACT SECTION ═══════════ -->
<section id="contact" class="px-4 sm:px-6 md:px-12 py-16 sm:py-20 md:py-24">
  <div class="max-w-6xl mx-auto">
    <div class="flex items-center gap-4 text-[11px] font-semibold tracking-[0.18em] uppercase text-white/28 mb-8 sm:mb-12">
      Get In Touch <div class="flex-1 h-px bg-white/[0.07]"></div>
    </div>
    <div class="grid md:grid-cols-2 gap-8 md:gap-12">
      
      <!-- Left Side - Contact Info -->
      <div class="reveal text-center md:text-left">
        <h2 class="font-display text-white text-4xl sm:text-5xl md:text-6xl tracking-tight mb-4 sm:mb-6">Let's Talk<br/>About Your<br/><span class="text-lime">Business Goals</span></h2>
        <p class="text-white/40 text-sm sm:text-base leading-relaxed mb-6 sm:mb-8 px-4 md:px-0">Whether you have a question about our loan programs, need guidance on which financing option fits your business, or want to start an application — our team is here to help.</p>
        
        <div class="space-y-5 sm:space-y-6 max-w-md mx-auto md:mx-0">
          <div class="flex items-center justify-center md:justify-start gap-4 group cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/25 transition-colors">
              <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div class="text-left">
              <h4 class="font-semibold text-white mb-1">Email Us</h4>
              <p class="text-white/50 text-sm">hello@bizcashcapital.com</p>
              <p class="text-white/40 text-xs mt-1">Response within 24 hours</p>
            </div>
          </div>
          
          <div class="flex items-center justify-center md:justify-start gap-4 group cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/25 transition-colors">
              <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <div class="text-left">
              <h4 class="font-semibold text-white mb-1">Call Us</h4>
              <p class="text-white/50 text-sm">+1 (800) 555-1234</p>
              <p class="text-white/40 text-xs mt-1">Mon-Fri, 9am - 6pm EST</p>
            </div>
          </div>
          
          <div class="flex items-center justify-center md:justify-start gap-4 group cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/25 transition-colors">
              <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div class="text-left">
              <h4 class="font-semibold text-white mb-1">Visit Us</h4>
              <p class="text-white/50 text-sm">200 Park Avenue, Suite 1700</p>
              <p class="text-white/40 text-xs">New York, NY 10166</p>
            </div>
          </div>
        </div>

        <!-- Business Hours -->
        <div class="mt-8 sm:mt-10 pt-6 border-t border-white/[0.07] max-w-md mx-auto md:mx-0">
          <h4 class="font-semibold text-white mb-3 text-center md:text-left">Business Hours</h4>
          <div class="space-y-2 text-white/40 text-sm text-center md:text-left">
            <p>Monday - Friday: 9:00 AM - 6:00 PM EST</p>
            <p>Saturday: 10:00 AM - 2:00 PM EST</p>
            <p>Sunday: Closed</p>
          </div>
        </div>
      </div>
      
      <!-- Right Side - Contact Form -->
      <div class="reveal" style="transition-delay: 0.1s">
        <div class="bg-[#0d0d0d]/95 backdrop-blur-sm border border-white/[0.07] rounded-2xl p-6 sm:p-8">
          <h3 class="font-display text-2xl text-white mb-6 text-center md:text-left">Send us a message</h3>
          
          <form class="space-y-5" method="POST" action="<?php echo $pathPrefix; ?>submit-contact.php">
            <div>
              <label class="block text-white/60 text-sm mb-2">Full Name <span class="text-lime">*</span></label>
              <input type="text" name="name" required class="w-full bg-ink/80 border border-white/[0.1] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-lime transition-colors" placeholder="John Smith">
            </div>
            
            <div>
              <label class="block text-white/60 text-sm mb-2">Email Address <span class="text-lime">*</span></label>
              <input type="email" name="email" required class="w-full bg-ink/80 border border-white/[0.1] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-lime transition-colors" placeholder="john@company.com">
            </div>
            
            <div>
              <label class="block text-white/60 text-sm mb-2">Phone Number</label>
              <input type="tel" name="phone" class="w-full bg-ink/80 border border-white/[0.1] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-lime transition-colors" placeholder="(555) 123-4567">
            </div>
            
            <div>
              <label class="block text-white/60 text-sm mb-2">Loan Type Interested In</label>
              <select name="loan_type" class="w-full bg-ink/80 border border-white/[0.1] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-lime transition-colors">
                <option value="">Select a loan type</option>
                <option>Business Loan</option>
                <option>Commercial Financing</option>
                <option>SBA Loan</option>
                <option>Construction Financing</option>
                <option>Equipment Financing</option>
                <option>Line of Credit</option>
                <option>Bridge Loan</option>
              </select>
            </div>
            
            <div>
              <label class="block text-white/60 text-sm mb-2">Message <span class="text-lime">*</span></label>
              <textarea name="message" rows="4" required class="w-full bg-ink/80 border border-white/[0.1] rounded-lg px-4 py-3 text-white focus:outline-none focus:border-lime transition-colors" placeholder="Tell us about your business and funding needs..."></textarea>
            </div>
            
            <button type="submit" class="btn-gold w-full text-center">Send Message →</button>
            
            <p class="text-white/25 text-xs text-center mt-4">
              By submitting this form, you agree to our <a href="<?php echo $pathPrefix; ?>privacy-policy.php" class="text-lime hover:underline">Privacy Policy</a>.
              We'll get back to you within 24 hours. No obligation.
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════ FAQ SECTION (Modern Accordion Style) ═══════════ -->
<section class="px-4 sm:px-6 md:px-12 py-16 sm:py-20 lg:py-24 border-t border-white/[0.07] relative overflow-hidden">
  <!-- Background accent -->
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] rounded-full bg-lime/5 blur-3xl pointer-events-none"></div>
  
  <div class="max-w-4xl mx-auto relative z-10">
    <!-- Section Header -->
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
      <p class="text-white/40 text-sm sm:text-base max-w-2xl mx-auto px-4">Everything you need to know about our financing process. Can't find what you're looking for? <a href="#contact" class="text-lime hover:underline">Contact our team</a></p>
    </div>
    
    <!-- FAQ Accordion -->
    <div class="space-y-3 sm:space-y-4" x-data="{ openFaq: null }">
      
      <!-- FAQ 1 -->
      <div class="bg-[#0d0d0d] border border-white/[0.07] rounded-xl sm:rounded-2xl overflow-hidden hover:border-lime/20 transition-all duration-300">
        <button @click="openFaq = openFaq === 1 ? null : 1" class="w-full flex items-center justify-between p-4 sm:p-6 text-left hover:bg-white/[0.02] transition-colors group">
          <div class="flex items-center gap-3 sm:gap-4">
            <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-lime/10 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/20 transition-colors">
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <h3 class="font-semibold text-white text-sm sm:text-base md:text-lg">How fast can I get funding?</h3>
          </div>
          <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white/40 transition-transform duration-300" :class="openFaq === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="openFaq === 1" x-collapse class="border-t border-white/[0.05]">
          <div class="p-4 sm:p-6 pt-3 sm:pt-5">
            <p class="text-white/60 text-sm sm:text-base leading-relaxed">Most applicants receive funding within <span class="text-lime font-semibold">24-48 hours</span> after approval. The exact timeline depends on your business profile, documentation completeness, and the specific loan program. Our team works diligently to expedite the process and keep you informed every step of the way.</p>
            <div class="mt-4 flex items-center gap-2 text-xs text-white/40">
              <span class="w-1.5 h-1.5 rounded-full bg-lime"></span>
              <span>Fastest approval: As quick as 4 hours</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- FAQ 2 -->
      <div class="bg-[#0d0d0d] border border-white/[0.07] rounded-xl sm:rounded-2xl overflow-hidden hover:border-lime/20 transition-all duration-300">
        <button @click="openFaq = openFaq === 2 ? null : 2" class="w-full flex items-center justify-between p-4 sm:p-6 text-left hover:bg-white/[0.02] transition-colors group">
          <div class="flex items-center gap-3 sm:gap-4">
            <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-lime/10 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/20 transition-colors">
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
              </svg>
            </div>
            <h3 class="font-semibold text-white text-sm sm:text-base md:text-lg">What credit score do I need?</h3>
          </div>
          <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white/40 transition-transform duration-300" :class="openFaq === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="openFaq === 2" x-collapse class="border-t border-white/[0.05]">
          <div class="p-4 sm:p-6 pt-3 sm:pt-5">
            <p class="text-white/60 text-sm sm:text-base leading-relaxed">We work with a <span class="text-lime font-semibold">wide range of credit profiles</span>. Even if you have less-than-perfect credit, we may still be able to help you find financing. Minimum requirements vary by loan type, but our specialists will assess your unique situation and match you with the best available options.</p>
            <div class="mt-4 flex flex-wrap gap-2">
              <span class="text-[10px] sm:text-xs bg-lime/10 text-lime px-2 sm:px-3 py-1 rounded-full">Excellent Credit (720+)</span>
              <span class="text-[10px] sm:text-xs bg-lime/10 text-lime px-2 sm:px-3 py-1 rounded-full">Good Credit (680-719)</span>
              <span class="text-[10px] sm:text-xs bg-lime/10 text-lime px-2 sm:px-3 py-1 rounded-full">Fair Credit (620-679)</span>
              <span class="text-[10px] sm:text-xs bg-lime/10 text-lime px-2 sm:px-3 py-1 rounded-full">Building Credit (580-619)</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- FAQ 3 -->
      <div class="bg-[#0d0d0d] border border-white/[0.07] rounded-xl sm:rounded-2xl overflow-hidden hover:border-lime/20 transition-all duration-300">
        <button @click="openFaq = openFaq === 3 ? null : 3" class="w-full flex items-center justify-between p-4 sm:p-6 text-left hover:bg-white/[0.02] transition-colors group">
          <div class="flex items-center gap-3 sm:gap-4">
            <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-lime/10 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/20 transition-colors">
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <h3 class="font-semibold text-white text-sm sm:text-base md:text-lg">Is there any upfront fee?</h3>
          </div>
          <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white/40 transition-transform duration-300" :class="openFaq === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="openFaq === 3" x-collapse class="border-t border-white/[0.05]">
          <div class="p-4 sm:p-6 pt-3 sm:pt-5">
            <p class="text-white/60 text-sm sm:text-base leading-relaxed"><span class="text-lime font-semibold">No, there are absolutely no upfront fees</span> to apply or get matched with lenders. We only get paid when you successfully secure funding through our partner network. Our commitment is to provide transparent, honest service without hidden costs.</p>
            <div class="mt-4 flex items-center gap-2 text-xs text-white/40">
              <svg class="w-4 h-4 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <span>100% free consultation and application</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- FAQ 4 -->
      <div class="bg-[#0d0d0d] border border-white/[0.07] rounded-xl sm:rounded-2xl overflow-hidden hover:border-lime/20 transition-all duration-300">
        <button @click="openFaq = openFaq === 4 ? null : 4" class="w-full flex items-center justify-between p-4 sm:p-6 text-left hover:bg-white/[0.02] transition-colors group">
          <div class="flex items-center gap-3 sm:gap-4">
            <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-lime/10 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/20 transition-colors">
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
            </div>
            <h3 class="font-semibold text-white text-sm sm:text-base md:text-lg">What documents do I need?</h3>
          </div>
          <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white/40 transition-transform duration-300" :class="openFaq === 4 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="openFaq === 4" x-collapse class="border-t border-white/[0.05]">
          <div class="p-4 sm:p-6 pt-3 sm:pt-5">
            <p class="text-white/60 text-sm sm:text-base leading-relaxed mb-3">Basic requirements typically include:</p>
            <ul class="space-y-2 text-sm text-white/50">
              <li class="flex items-center gap-2 text-xs sm:text-sm"><svg class="w-3 h-3 sm:w-4 sm:h-4 text-lime flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span>Business bank statements (last 3-6 months)</span></li>
              <li class="flex items-center gap-2 text-xs sm:text-sm"><svg class="w-3 h-3 sm:w-4 sm:h-4 text-lime flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span>Proof of revenue (tax returns or profit & loss statements)</span></li>
              <li class="flex items-center gap-2 text-xs sm:text-sm"><svg class="w-3 h-3 sm:w-4 sm:h-4 text-lime flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span>Government-issued ID (driver's license or passport)</span></li>
              <li class="flex items-center gap-2 text-xs sm:text-sm"><svg class="w-3 h-3 sm:w-4 sm:h-4 text-lime flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span>Business license or formation documents</span></li>
            </ul>
            <p class="text-white/50 text-xs sm:text-sm mt-3">Your dedicated specialist will guide you through exactly what's needed for your specific loan type.</p>
          </div>
        </div>
      </div>
      
      <!-- FAQ 5 - Additional question -->
      <div class="bg-[#0d0d0d] border border-white/[0.07] rounded-xl sm:rounded-2xl overflow-hidden hover:border-lime/20 transition-all duration-300">
        <button @click="openFaq = openFaq === 5 ? null : 5" class="w-full flex items-center justify-between p-4 sm:p-6 text-left hover:bg-white/[0.02] transition-colors group">
          <div class="flex items-center gap-3 sm:gap-4">
            <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-full bg-lime/10 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/20 transition-colors">
              <svg class="w-3 h-3 sm:w-4 sm:h-4 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
              </svg>
            </div>
            <h3 class="font-semibold text-white text-sm sm:text-base md:text-lg">What types of businesses do you work with?</h3>
          </div>
          <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white/40 transition-transform duration-300" :class="openFaq === 5 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div x-show="openFaq === 5" x-collapse class="border-t border-white/[0.05]">
          <div class="p-4 sm:p-6 pt-3 sm:pt-5">
            <p class="text-white/60 text-sm sm:text-base leading-relaxed">We work with businesses across virtually all industries, including:</p>
            <div class="mt-3 flex flex-wrap gap-2">
              <span class="text-[10px] sm:text-xs bg-white/5 text-white/60 px-2 sm:px-3 py-1 rounded-full">Retail</span>
              <span class="text-[10px] sm:text-xs bg-white/5 text-white/60 px-2 sm:px-3 py-1 rounded-full">Construction</span>
              <span class="text-[10px] sm:text-xs bg-white/5 text-white/60 px-2 sm:px-3 py-1 rounded-full">Healthcare</span>
              <span class="text-[10px] sm:text-xs bg-white/5 text-white/60 px-2 sm:px-3 py-1 rounded-full">Manufacturing</span>
              <span class="text-[10px] sm:text-xs bg-white/5 text-white/60 px-2 sm:px-3 py-1 rounded-full">Restaurants</span>
              <span class="text-[10px] sm:text-xs bg-white/5 text-white/60 px-2 sm:px-3 py-1 rounded-full">Technology</span>
              <span class="text-[10px] sm:text-xs bg-white/5 text-white/60 px-2 sm:px-3 py-1 rounded-full">Transportation</span>
              <span class="text-[10px] sm:text-xs bg-white/5 text-white/60 px-2 sm:px-3 py-1 rounded-full">Professional Services</span>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
</section>

<!-- Add Alpine.js for accordion functionality -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- ═══════════ FOOTER ═══════════ -->
<?php include $pathPrefix . 'footer.php'; ?>

<!-- JSON-LD Schema Markup for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact Us - BizCash&Capital",
  "description": "Contact BizCash&Capital for business financing solutions and free consultation.",
  "url": "https://www.bizcashcapital.com/contact.php",
  "mainEntity": {
    "@type": "Organization",
    "name": "BizCash&Capital",
    "email": "hello@bizcashcapital.com",
    "telephone": "+1-800-555-1234",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "200 Park Avenue, Suite 1700",
      "addressLocality": "New York",
      "addressRegion": "NY",
      "postalCode": "10166",
      "addressCountry": "US"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+1-800-555-1234",
      "contactType": "customer service",
      "email": "hello@bizcashcapital.com",
      "availableLanguage": ["English"]
    }
  }
}
</script>

<script>
  // Reveal on scroll
  const ro = new IntersectionObserver(entries => entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); }), { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => ro.observe(el));
</script>
</body>
</html>