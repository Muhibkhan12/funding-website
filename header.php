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

<header class="fixed top-0 inset-x-0 z-50 bg-ink/95 backdrop-blur-md border-b border-white/[0.07]">
  <div class="flex items-center justify-between px-4 sm:px-6 md:px-12 h-16">
    
    <!-- Logo -->
    <a href="<?php echo $pathPrefix; ?>index.php" class="font-display text-[20px] sm:text-[22px] tracking-[0.12em] hover:text-lime transition-colors cursor-pointer z-20">BizCash<span class="text-lime">&amp;</span>Capital</a>
    
    <!-- Desktop Navigation -->
    <ul class="hidden lg:flex gap-6 xl:gap-9 list-none items-center">
      
      <!-- Dropdown 1: Loan Programs -->
      <li class="relative group">
        <a href="loans/loan.php" class="text-[13px] font-medium tracking-[0.06em] uppercase text-white/55 hover:text-white transition-colors flex items-center gap-1">
          Loan Programs 
          <svg class="w-3 h-3 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </a>
        <div class="absolute top-full left-0 mt-2 w-64 bg-[#0d0d0d] border border-white/[0.1] rounded-xl shadow-2xl py-2 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200">
          <a href="<?php echo $pathPrefix; ?>loans/business-loans.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Business Loans</a>
          <a href="<?php echo $pathPrefix; ?>loans/commercial-loans.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Commercial Financing</a>
          <a href="<?php echo $pathPrefix; ?>loans/sba-loans.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">SBA Loan Assistance</a>
          <a href="<?php echo $pathPrefix; ?>loans/construction-financing.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Construction Financing</a>
        </div>
      </li>
      
      <!-- Dropdown 2: Industry -->
      <li class="relative group">
        <a href="Industry/industry.php" class="text-[13px] font-medium tracking-[0.06em] uppercase text-white/55 hover:text-white transition-colors flex items-center gap-1">
          Industry 
          <svg class="w-3 h-3 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </a>
        <div class="absolute top-full left-0 mt-2 w-56 bg-[#0d0d0d] border border-white/[0.1] rounded-xl shadow-2xl py-2 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200">
          <a href="<?php echo $pathPrefix; ?>industry/auto-repair.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Auto Repair</a>
          <a href="<?php echo $pathPrefix; ?>industries/construction.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Attorney</a>
          <a href="<?php echo $pathPrefix; ?>industries/retail.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Cleaning Business</a>
          <a href="<?php echo $pathPrefix; ?>industries/manufacturing.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Construction</a>
          <a href="<?php echo $pathPrefix; ?>industries/hospitality.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Convenience Store</a>
          <a href="<?php echo $pathPrefix; ?>industries/technology.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Day Care</a>
          <a href="<?php echo $pathPrefix; ?>industries/transportation.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Beauty Salon</a>
          <a href="<?php echo $pathPrefix; ?>industries/real-estate.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Accounting</a>
        </div>
      </li>
    
    </ul>
    
    <!-- Desktop Contact Button -->
    <a href="<?php echo $pathPrefix; ?>contact.php" class="hidden lg:inline-block border border-white/45 bg-transparent text-white px-5 py-2 text-[13px] font-medium tracking-[0.06em] uppercase hover:bg-white hover:text-ink transition-all duration-200 cursor-pointer z-20">Contact us</a>
    
    <!-- Mobile Menu Button -->
    <button id="mobileMenuButton" class="lg:hidden relative w-10 h-10 rounded-lg border border-white/20 bg-white/5 flex items-center justify-center cursor-pointer z-50 hover:bg-white/10 transition-colors">
      <span class="sr-only">Open menu</span>
      <svg class="w-5 h-5 text-white absolute transition-all duration-200" id="menuIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
      <svg class="w-5 h-5 text-white absolute transition-all duration-200 opacity-0 scale-95" id="closeIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>
  </div>
  
  <!-- Mobile Menu Overlay - Full screen -->
  <div id="mobileMenu" class="fixed inset-0 z-40 bg-[#0a0a0a] translate-x-full transition-transform duration-300 ease-out lg:hidden" style="width: 100vw; height: 100vh;">
    <div class="flex flex-col h-full pt-20 pb-8 px-6 overflow-y-auto">
      
      <!-- Mobile Navigation Links -->
      <div class="flex flex-col gap-2 mb-8">
        
        <!-- Mobile Dropdown 1: Loan Programs -->
        <div class="border-b border-white/[0.08] pb-2">
          <button onclick="toggleMobileDropdown(this)" class="w-full flex items-center justify-between py-3 text-white/80 hover:text-lime transition-colors">
            <span class="text-[15px] font-medium tracking-[0.06em] uppercase">Loan Programs</span>
            <svg class="w-4 h-4 transition-transform duration-200 dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="dropdown-content hidden mt-2 ml-4 space-y-2">
            <a href="<?php echo $pathPrefix; ?>loans/business-loans.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">Business Loans</a>
            <a href="<?php echo $pathPrefix; ?>loans/commercial-loans.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">Commercial Financing</a>
            <a href="<?php echo $pathPrefix; ?>loans/sba-loans.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">SBA Loan</a>
            <a href="<?php echo $pathPrefix; ?>loans/construction-financing.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">Construction Financing</a>
        </div>
        
        <!-- Mobile Dropdown 2: Industry -->
        <div class="border-b border-white/[0.08] pb-2">
          <button onclick="toggleMobileDropdown(this)" class="w-full flex items-center justify-between py-3 text-white/80 hover:text-lime transition-colors">
            <span class="text-[15px] font-medium tracking-[0.06em] uppercase">Industry</span>
            <svg class="w-4 h-4 transition-transform duration-200 dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="dropdown-content hidden mt-2 ml-4 space-y-2">
            <a href="<?php echo $pathPrefix; ?>industries/healthcare.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">Healthcare</a>
            <a href="<?php echo $pathPrefix; ?>industries/construction.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">Construction</a>
            <a href="<?php echo $pathPrefix; ?>industries/retail.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">Retail & E-commerce</a>
            <a href="<?php echo $pathPrefix; ?>industries/manufacturing.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">Manufacturing</a>
            <a href="<?php echo $pathPrefix; ?>industries/hospitality.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">Hospitality</a>
            <a href="<?php echo $pathPrefix; ?>industries/technology.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">Technology</a>
            <a href="<?php echo $pathPrefix; ?>industries/transportation.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">Transportation</a>
            <a href="<?php echo $pathPrefix; ?>industries/real-estate.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">Real Estate</a>
          </div>
        </div>
        
        <!-- Mobile Contact Link -->
        <a href="<?php echo $pathPrefix; ?>contact.php" class="block py-3 text-white/80 hover:text-lime transition-colors text-[15px] font-medium tracking-[0.06em] uppercase border-b border-white/[0.08]">Contact Us</a>
        
      </div>
      
      <!-- Mobile CTA Button -->
      <div class="mt-auto pt-6">
        <a href="<?php echo $pathPrefix; ?>contact.php" class="block w-full text-center bg-lime text-ink px-6 py-3 rounded-lg font-semibold text-[14px] tracking-[0.06em] uppercase hover:bg-lime/90 transition-colors">
          Get Funded 
        </a>
        <p class="text-center text-white/30 text-[11px] mt-4">© 2024 BizCash&amp;Capital</p>
      </div>
      
    </div>
  </div>
  
  <!-- Overlay backdrop - removed since menu is full screen -->
</header>

<!-- Mobile Menu Toggle JavaScript -->
<script>
  // Mobile menu toggle
  (function() {
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    let isMenuOpen = false;
    let scrollPosition = 0;
    
    function toggleMenu() {
      isMenuOpen = !isMenuOpen;
      
      if (isMenuOpen) {
        // Open menu
        mobileMenu.classList.remove('translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        
        // Change icons
        if (menuIcon && closeIcon) {
          menuIcon.style.opacity = '0';
          menuIcon.style.transform = 'scale(0.95)';
          closeIcon.style.opacity = '1';
          closeIcon.style.transform = 'scale(1)';
        }
        
        // Lock scroll - save current position
        scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        document.body.style.overflow = 'hidden';
        document.body.style.position = 'fixed';
        document.body.style.top = `-${scrollPosition}px`;
        document.body.style.width = '100%';
        
      } else {
        // Close menu
        mobileMenu.classList.remove('translate-x-0');
        mobileMenu.classList.add('translate-x-full');
        
        // Change icons
        if (menuIcon && closeIcon) {
          menuIcon.style.opacity = '1';
          menuIcon.style.transform = 'scale(1)';
          closeIcon.style.opacity = '0';
          closeIcon.style.transform = 'scale(0.95)';
        }
        
        // Unlock scroll - restore position
        document.body.style.overflow = '';
        document.body.style.position = '';
        document.body.style.top = '';
        document.body.style.width = '';
        window.scrollTo(0, scrollPosition);
      }
    }
    
    if (mobileMenuButton) {
      mobileMenuButton.addEventListener('click', toggleMenu);
    }
    
    // Close menu when clicking on a link inside mobile menu
    if (mobileMenu) {
      const mobileLinks = mobileMenu.querySelectorAll('a');
      mobileLinks.forEach(link => {
        link.addEventListener('click', (e) => {
          // Don't close if it's a dropdown toggle button's parent link
          if (!link.closest('.dropdown-content')) {
            if (isMenuOpen) toggleMenu();
          }
        });
      });
    }
    
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && isMenuOpen) toggleMenu();
    });
    
    // Initialize icon states
    if (menuIcon && closeIcon) {
      menuIcon.style.transition = 'all 0.2s ease';
      closeIcon.style.transition = 'all 0.2s ease';
      menuIcon.style.opacity = '1';
      menuIcon.style.transform = 'scale(1)';
      closeIcon.style.opacity = '0';
      closeIcon.style.transform = 'scale(0.95)';
    }
    
    // Handle window resize - close menu if resizing to desktop view
    window.addEventListener('resize', function() {
      if (window.innerWidth >= 1024 && isMenuOpen) {
        toggleMenu();
      }
    });
  })();
  
  // Mobile dropdown toggle function
  function toggleMobileDropdown(button) {
    const content = button.nextElementSibling;
    const arrow = button.querySelector('.dropdown-arrow');
    
    if (content && arrow) {
      if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        arrow.style.transform = 'rotate(180deg)';
      } else {
        content.classList.add('hidden');
        arrow.style.transform = 'rotate(0deg)';
      }
    }
  }
</script>

<style>
  /* Mobile menu styles - full screen */
  #mobileMenu {
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    background: #0a0a0a;
    overflow-y: auto;
  }
  
  /* Hide scrollbar on mobile menu but keep functionality */
  #mobileMenu::-webkit-scrollbar {
    width: 4px;
  }
  
  #mobileMenu::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.05);
  }
  
  #mobileMenu::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 4px;
  }
  
  /* Dropdown arrow transition */
  .dropdown-arrow {
    transition: transform 0.2s ease;
  }
  
  /* Ensure dropdown content is visible on desktop hover */
  @media (min-width: 1024px) {
    .group:hover .group-hover\:opacity-100 {
      opacity: 1 !important;
      visibility: visible !important;
      transform: translateY(0) !important;
    }
  }
  
  /* Improved touch targets for mobile */
  @media (max-width: 1023px) {
    #mobileMenu a, 
    #mobileMenu button {
      cursor: pointer;
      -webkit-tap-highlight-color: transparent;
    }
    
    #mobileMenu button:active {
      transform: scale(0.98);
    }
  }
  
  /* Body lock styles when menu is open */
  body.menu-open-fixed {
    overflow: hidden;
    position: fixed;
    width: 100%;
  }
</style>