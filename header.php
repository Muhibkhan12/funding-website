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
        <a href="#" class="text-[13px] font-medium tracking-[0.06em] uppercase text-white/55 hover:text-white transition-colors flex items-center gap-1">
          Loan Programs 
          <svg class="w-3 h-3 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </a>
        <div class="absolute top-full left-0 mt-2 w-64 bg-[#0d0d0d] border border-white/[0.1] rounded-xl shadow-2xl py-2 z-50 opacity-0 invisible translate-y-[-10px] transition-all duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
          <a href="<?php echo $pathPrefix; ?>loans/business-loans.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Business Loans</a>
          <a href="<?php echo $pathPrefix; ?>loans/commercial-loans.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Commercial Financing</a>
          <a href="<?php echo $pathPrefix; ?>loans/sba-loans.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">SBA Loan Assistance</a>
          <a href="<?php echo $pathPrefix; ?>loans/construction-financing.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Construction Financing</a>
          <a href="<?php echo $pathPrefix; ?>loans/bridge-loan.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Bridge Loan</a>
        </div>
      </li>
      
      <!-- Dropdown 2: Industry -->
      <li class="relative group">
        <a href="#" class="text-[13px] font-medium tracking-[0.06em] uppercase text-white/55 hover:text-white transition-colors flex items-center gap-1">
          Industry 
          <svg class="w-3 h-3 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </a>
        <div class="absolute top-full left-0 mt-2 w-56 bg-[#0d0d0d] border border-white/[0.1] rounded-xl shadow-2xl py-2 z-50 opacity-0 invisible translate-y-[-10px] transition-all duration-200 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0">
          <a href="<?php echo $pathPrefix; ?>industries/healthcare.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Healthcare</a>
          <a href="<?php echo $pathPrefix; ?>industries/construction.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Construction</a>
          <a href="<?php echo $pathPrefix; ?>industries/retail.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Retail & E-commerce</a>
          <a href="<?php echo $pathPrefix; ?>industries/manufacturing.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Manufacturing</a>
          <a href="<?php echo $pathPrefix; ?>industries/hospitality.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Hospitality</a>
          <a href="<?php echo $pathPrefix; ?>industries/technology.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Technology</a>
          <a href="<?php echo $pathPrefix; ?>industries/transportation.php" class="block px-5 py-3 text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Transportation</a>
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
  
  <!-- Mobile Menu Overlay -->
  <div id="mobileMenu" class="fixed top-0 right-0 bottom-0 w-full max-w-sm z-40 bg-ink border-l border-white/[0.07] shadow-2xl translate-x-full transition-transform duration-300 ease-out lg:hidden">
    <div class="flex flex-col h-full pt-20 pb-8 px-6 overflow-y-auto">
      
      <!-- Mobile Navigation Links -->
      <div class="flex flex-col gap-2 mb-8">
        
        <!-- Mobile Dropdown 1: Loan Programs - Manual JavaScript version -->
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
            <a href="<?php echo $pathPrefix; ?>loans/sba-loans.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">SBA Loan Assistance</a>
            <a href="<?php echo $pathPrefix; ?>loans/construction-financing.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">Construction Financing</a>
            <a href="<?php echo $pathPrefix; ?>loans/bridge-loan.php" class="block py-2 text-[14px] text-white/60 hover:text-lime transition-colors">Bridge Loan</a>
          </div>
        </div>
        
        <!-- Mobile Dropdown 2: Industry - Manual JavaScript version -->
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
          </div>
        </div>
        
        <!-- Mobile Contact Link -->
        <a href="<?php echo $pathPrefix; ?>contact.php" class="block py-3 text-white/80 hover:text-lime transition-colors text-[15px] font-medium tracking-[0.06em] uppercase border-b border-white/[0.08]">Contact Us</a>
        
      </div>
      
      <!-- Mobile CTA Button -->
      <div class="mt-auto pt-6">
        <a href="<?php echo $pathPrefix; ?>contact.php" class="block w-full text-center bg-lime text-ink px-6 py-3 rounded-lg font-semibold text-[14px] tracking-[0.06em] uppercase hover:bg-lime/90 transition-colors">
          Get Funded Today
        </a>
        <p class="text-center text-white/30 text-[11px] mt-4">© 2024 BizCash&amp;Capital</p>
      </div>
      
    </div>
  </div>
  
  <!-- Overlay backdrop -->
  <div id="menuOverlay" class="fixed inset-0 bg-black/50 z-35 opacity-0 invisible transition-all duration-300 lg:hidden"></div>
</header>

<!-- Mobile Menu Toggle JavaScript -->
<script>
  // Mobile menu toggle
  (function() {
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuOverlay = document.getElementById('menuOverlay');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    let isMenuOpen = false;
    
    function toggleMenu() {
      isMenuOpen = !isMenuOpen;
      
      if (isMenuOpen) {
        mobileMenu.classList.remove('translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        if (menuOverlay) {
          menuOverlay.classList.remove('opacity-0', 'invisible');
          menuOverlay.classList.add('opacity-100', 'visible');
        }
        if (menuIcon && closeIcon) {
          menuIcon.style.opacity = '0';
          menuIcon.style.transform = 'scale(0.95)';
          closeIcon.style.opacity = '1';
          closeIcon.style.transform = 'scale(1)';
        }
        document.body.style.overflow = 'hidden';
      } else {
        mobileMenu.classList.remove('translate-x-0');
        mobileMenu.classList.add('translate-x-full');
        if (menuOverlay) {
          menuOverlay.classList.remove('opacity-100', 'visible');
          menuOverlay.classList.add('opacity-0', 'invisible');
        }
        if (menuIcon && closeIcon) {
          menuIcon.style.opacity = '1';
          menuIcon.style.transform = 'scale(1)';
          closeIcon.style.opacity = '0';
          closeIcon.style.transform = 'scale(0.95)';
        }
        document.body.style.overflow = '';
      }
    }
    
    if (mobileMenuButton) {
      mobileMenuButton.addEventListener('click', toggleMenu);
    }
    
    if (menuOverlay) {
      menuOverlay.addEventListener('click', toggleMenu);
    }
    
    // Close menu when clicking on a link inside mobile menu
    if (mobileMenu) {
      document.querySelectorAll('#mobileMenu a').forEach(link => {
        link.addEventListener('click', () => {
          if (isMenuOpen) toggleMenu();
        });
      });
    }
    
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && isMenuOpen) toggleMenu();
    });
    
    if (menuIcon && closeIcon) {
      menuIcon.style.transition = 'all 0.2s ease';
      closeIcon.style.transition = 'all 0.2s ease';
      closeIcon.style.opacity = '0';
      closeIcon.style.transform = 'scale(0.95)';
    }
  })();
  
  // Mobile dropdown toggle function
  function toggleMobileDropdown(button) {
    const content = button.nextElementSibling;
    const arrow = button.querySelector('.dropdown-arrow');
    
    if (content.classList.contains('hidden')) {
      content.classList.remove('hidden');
      if (arrow) arrow.style.transform = 'rotate(180deg)';
    } else {
      content.classList.add('hidden');
      if (arrow) arrow.style.transform = 'rotate(0deg)';
    }
  }
</script>

<style>
  /* Mobile menu styles */
  #mobileMenu {
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  }
  
  #menuOverlay {
    transition: opacity 0.3s ease, visibility 0.3s ease;
    z-index: 35;
  }
  
  /* Dropdown arrow transition */
  .dropdown-arrow {
    transition: transform 0.2s ease;
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
  
  /* Prevent body scroll when menu is open */
  body.menu-open {
    overflow: hidden;
  }
</style>