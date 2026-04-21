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
<title>Contact Us — BizCash&Capital</title>
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

  /* Hero headline */
  .hero-hl { font-family: 'Bebas Neue', sans-serif; font-size: clamp(66px, 8vw, 110px); line-height: 0.88; letter-spacing: 0.01em; }

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
</style>
</head>
<body class="bg-ink text-white font-body overflow-x-hidden">

<!-- ═══════════ HEADER ═══════════ -->
<?php include $pathPrefix . 'header.php'; ?>

<!-- ═══════════ HERO SECTION WITH BACKGROUND IMAGE ═══════════ -->
<section class="hero-pattern relative overflow-hidden min-h-[50vh] flex items-center pt-16">
  <div class="max-w-7xl mx-auto px-6 md:px-12 py-20 w-full">
    <div class="text-center max-w-3xl mx-auto">
      <p class="eyebrow inline-flex items-center text-[11px] font-semibold tracking-[0.16em] uppercase text-lime/80 mb-7">Get In Touch</p>
      <h1 class="hero-hl text-white mb-6">
        Contact <span class="text-lime">Us</span>
      </h1>
      <p class="text-[16px] leading-[1.75] text-white/70 font-light max-w-[600px] mx-auto">
        Have questions about our financing solutions? Our team is ready to help you find the right funding for your business.
      </p>
    </div>
  </div>

  <!-- Decorative lime bar -->
  <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-lime via-lime to-lime opacity-80 z-10"></div>
</section>

<!-- ═══════════ CONTACT SECTION ═══════════ -->
<section id="contact" class="px-6 md:px-12 py-24">
  <div class="max-w-6xl mx-auto">
    <div class="flex items-center gap-4 text-[11px] font-semibold tracking-[0.18em] uppercase text-white/28 mb-12">
      Get In Touch <div class="flex-1 h-px bg-white/[0.07]"></div>
    </div>
    <div class="grid md:grid-cols-2 gap-12">
      
      <!-- Left Side - Contact Info -->
      <div class="reveal">
        <h2 class="font-display text-white text-5xl md:text-6xl tracking-tight mb-6">Let's Talk<br/>About Your<br/><span class="text-lime">Business Goals</span></h2>
        <p class="text-white/40 text-base leading-relaxed mb-8">Whether you have a question about our loan programs, need guidance on which financing option fits your business, or want to start an application — our team is here to help.</p>
        
        <div class="space-y-6">
          <div class="flex items-start gap-4 group cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/25 transition-colors">
              <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div>
              <h4 class="font-semibold text-white mb-1">Email Us</h4>
              <p class="text-white/50 text-sm">hello@bizcashcapital.com</p>
              <p class="text-white/40 text-xs mt-1">Response within 24 hours</p>
            </div>
          </div>
          
          <div class="flex items-start gap-4 group cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/25 transition-colors">
              <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <div>
              <h4 class="font-semibold text-white mb-1">Call Us</h4>
              <p class="text-white/50 text-sm">+1 (800) 555-1234</p>
              <p class="text-white/40 text-xs mt-1">Mon-Fri, 9am - 6pm EST</p>
            </div>
          </div>
          
          <div class="flex items-start gap-4 group cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-lime/15 flex items-center justify-center flex-shrink-0 group-hover:bg-lime/25 transition-colors">
              <svg class="w-5 h-5 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div>
              <h4 class="font-semibold text-white mb-1">Visit Us</h4>
              <p class="text-white/50 text-sm">200 Park Avenue, Suite 1700</p>
              <p class="text-white/40 text-xs">New York, NY 10166</p>
            </div>
          </div>
        </div>

        <!-- Business Hours -->
        <div class="mt-10 pt-6 border-t border-white/[0.07]">
          <h4 class="font-semibold text-white mb-3">Business Hours</h4>
          <div class="space-y-2 text-white/40 text-sm">
            <p>Monday - Friday: 9:00 AM - 6:00 PM EST</p>
            <p>Saturday: 10:00 AM - 2:00 PM EST</p>
            <p>Sunday: Closed</p>
          </div>
        </div>
      </div>
      
      <!-- Right Side - Contact Form -->
      <div class="reveal" style="transition-delay: 0.1s">
        <div class="bg-[#0d0d0d]/95 backdrop-blur-sm border border-white/[0.07] rounded-2xl p-8">
          <h3 class="font-display text-2xl text-white mb-6">Send us a message</h3>
          
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

<!-- ═══════════ FAQ SECTION ═══════════ -->
<section class="px-6 md:px-12 py-24 border-t border-white/[0.07]">
  <div class="max-w-4xl mx-auto">
    <div class="flex items-center gap-4 text-[11px] font-semibold tracking-[0.18em] uppercase text-white/28 mb-12">
      FAQ <div class="flex-1 h-px bg-white/[0.07]"></div>
    </div>
    <div class="text-center mb-12">
      <h2 class="font-display text-white text-4xl md:text-5xl tracking-tight mb-4">Frequently Asked <span class="text-lime">Questions</span></h2>
      <p class="text-white/40 text-base">Quick answers to common questions about our financing process.</p>
    </div>
    
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-[#0d0d0d] border border-white/[0.07] rounded-xl p-6 hover:border-lime/30 transition-all duration-300">
        <h3 class="font-semibold text-white mb-2">How fast can I get funding?</h3>
        <p class="text-white/50 text-sm leading-relaxed">Most applicants receive funding within 24-48 hours after approval. The exact timeline depends on your business profile and documentation.</p>
      </div>
      <div class="bg-[#0d0d0d] border border-white/[0.07] rounded-xl p-6 hover:border-lime/30 transition-all duration-300">
        <h3 class="font-semibold text-white mb-2">What credit score do I need?</h3>
        <p class="text-white/50 text-sm leading-relaxed">We work with a wide range of credit profiles. Even if you have less-than-perfect credit, we may still be able to help you find financing.</p>
      </div>
      <div class="bg-[#0d0d0d] border border-white/[0.07] rounded-xl p-6 hover:border-lime/30 transition-all duration-300">
        <h3 class="font-semibold text-white mb-2">Is there any upfront fee?</h3>
        <p class="text-white/50 text-sm leading-relaxed">No, there are no upfront fees to apply. We only get paid when you successfully secure funding through our partners.</p>
      </div>
      <div class="bg-[#0d0d0d] border border-white/[0.07] rounded-xl p-6 hover:border-lime/30 transition-all duration-300">
        <h3 class="font-semibold text-white mb-2">What documents do I need?</h3>
        <p class="text-white/50 text-sm leading-relaxed">Basic requirements include business bank statements, proof of revenue, and identification. Your specialist will guide you through the process.</p>
      </div>
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