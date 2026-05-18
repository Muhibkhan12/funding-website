<?php
// Auto-detect base path for assets and links
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$baseURL = $protocol . $host;
?>

<header class="fixed top-0 inset-x-0 z-50 bg-ink/95 backdrop-blur-md border-b border-white/[0.07]">
  <div class="flex items-center justify-between px-4 sm:px-6 md:px-8 lg:px-12 h-14 sm:h-16">

    <!-- Logo - Responsive font size -->
    <a href="/index.php" class="font-display text-[18px] xs:text-[20px] sm:text-[22px] tracking-[0.1em] sm:tracking-[0.12em] hover:text-lime transition-colors cursor-pointer z-20 whitespace-nowrap">
      Harbour<span class="text-lime">Funding</span>Solutions
    </a>

    <!-- Desktop Navigation - Hidden on mobile/tablet, visible on large screens -->
    <ul class="hidden lg:flex gap-5 xl:gap-8 2xl:gap-9 list-none items-center">

      <!-- Dropdown 1: Loan Programs -->
      <li class="relative group">
        <a href="/loans/loan.php" class="text-[12px] xl:text-[13px] font-medium tracking-[0.06em] uppercase text-white/55 hover:text-white transition-colors flex items-center gap-1 whitespace-nowrap">
          Loan Programs
          <svg class="w-3 h-3 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </a>
        <div class="absolute top-full left-0 mt-2 w-56 xl:w-64 bg-[#0d0d0d] border border-white/[0.1] rounded-xl shadow-2xl py-2 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200">
          <a href="/loans/business-loans.php" class="block px-4 xl:px-5 py-2.5 xl:py-3 text-[13px] xl:text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Business Loans</a>
          <a href="/loans/commercial-loans.php" class="block px-4 xl:px-5 py-2.5 xl:py-3 text-[13px] xl:text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Commercial Financing</a>
          <a href="/loans/sba-loans.php" class="block px-4 xl:px-5 py-2.5 xl:py-3 text-[13px] xl:text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">SBA Loan Assistance</a>
          <a href="/loans/construction-financing.php" class="block px-4 xl:px-5 py-2.5 xl:py-3 text-[13px] xl:text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Construction Financing</a>
          <a href="/loans/bridge-loans.php" class="block px-4 xl:px-5 py-2.5 xl:py-3 text-[13px] xl:text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Bridge Loans</a>
        </div>
      </li>

      <!-- Dropdown 2: Industry -->
      <li class="relative group">
        <a href="/industry/industry.php" class="text-[12px] xl:text-[13px] font-medium tracking-[0.06em] uppercase text-white/55 hover:text-white transition-colors flex items-center gap-1 whitespace-nowrap">
          Industry
          <svg class="w-3 h-3 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </a>
        <div class="absolute top-full left-0 mt-2 w-52 xl:w-56 bg-[#0d0d0d] border border-white/[0.1] rounded-xl shadow-2xl py-2 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200">
          <a href="/industry/auto-repair.php" class="block px-4 xl:px-5 py-2.5 xl:py-3 text-[13px] xl:text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Auto Repair</a>
          <a href="/industry/attorney.php" class="block px-4 xl:px-5 py-2.5 xl:py-3 text-[13px] xl:text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Attorney</a>
          <a href="/industry/cleaning-business.php" class="block px-4 xl:px-5 py-2.5 xl:py-3 text-[13px] xl:text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Cleaning Business</a>
          <a href="/industry/construction.php" class="block px-4 xl:px-5 py-2.5 xl:py-3 text-[13px] xl:text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Construction</a>
          <a href="/industry/Convenience-store.php" class="block px-4 xl:px-5 py-2.5 xl:py-3 text-[13px] xl:text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Convenience Store</a>
          <a href="/industry/day-care.php" class="block px-4 xl:px-5 py-2.5 xl:py-3 text-[13px] xl:text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Day Care</a>
          <a href="/industry/beauty-saloon.php" class="block px-4 xl:px-5 py-2.5 xl:py-3 text-[13px] xl:text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Beauty Saloon</a>
          <a href="/industry/accounting.php" class="block px-4 xl:px-5 py-2.5 xl:py-3 text-[13px] xl:text-[14px] text-white/70 hover:text-lime hover:bg-white/5 transition-colors">Accounting</a>
        </div>
      </li>

    </ul>

    <!-- Desktop Buttons - Responsive sizing -->
    <div class="hidden lg:flex items-center gap-3 xl:gap-4">
      <a href="/apply-now.php" class="bg-lime text-ink px-4 xl:px-5 py-1.5 xl:py-2 text-[12px] xl:text-[13px] font-bold tracking-[0.06em] uppercase rounded-md hover:bg-lime/90 transition-all duration-200 cursor-pointer z-20 whitespace-nowrap">
        Apply Now
      </a>
      <a href="/contact.php" class="border border-white/45 bg-transparent text-white px-4 xl:px-5 py-1.5 xl:py-2 text-[12px] xl:text-[13px] font-medium tracking-[0.06em] uppercase rounded-md hover:bg-white hover:text-ink transition-all duration-200 cursor-pointer z-20 whitespace-nowrap">
        Contact
      </a>
    </div>

    <!-- Mobile Menu Button -->
    <button id="mobileMenuButton" class="lg:hidden relative w-8 h-8 sm:w-9 sm:h-9 rounded-lg border border-white/20 bg-white/5 flex items-center justify-center cursor-pointer z-50 hover:bg-white/10 transition-colors active:scale-95">
      <span class="sr-only">Open menu</span>
      <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white absolute transition-all duration-200" id="menuIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
      <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white absolute transition-all duration-200 opacity-0 scale-95" id="closeIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>
  </div>

  <!-- Mobile Menu Overlay -->
  <div id="mobileMenu" class="fixed inset-0 z-40 bg-[#0a0a0a] translate-x-full transition-transform duration-300 ease-out lg:hidden" style="width: 100vw; height: 100vh;">
    <div class="flex flex-col h-full pt-16 sm:pt-20 pb-6 sm:pb-8 px-5 sm:px-6 overflow-y-auto">

      <div class="flex flex-col gap-1 sm:gap-2 mb-6 sm:mb-8">

        <!-- Mobile Dropdown 1: Loan Programs -->
        <div class="border-b border-white/[0.08] pb-1">
          <button onclick="toggleMobileDropdown(this)" class="w-full flex items-center justify-between py-3 sm:py-3.5 text-white/80 hover:text-lime transition-colors">
            <span class="text-[14px] sm:text-[15px] font-medium tracking-[0.06em] uppercase">Loan Programs</span>
            <svg class="w-4 h-4 transition-transform duration-200 dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="dropdown-content hidden mt-2 ml-3 sm:ml-4 space-y-1.5 sm:space-y-2">
            <a href="/loans/business-loans.php" class="block py-2 text-[13px] sm:text-[14px] text-white/60 hover:text-lime transition-colors">Business Loans</a>
            <a href="/loans/commercial-loans.php" class="block py-2 text-[13px] sm:text-[14px] text-white/60 hover:text-lime transition-colors">Commercial Financing</a>
            <a href="/loans/sba-loans.php" class="block py-2 text-[13px] sm:text-[14px] text-white/60 hover:text-lime transition-colors">SBA Loan</a>
            <a href="/loans/construction-financing.php" class="block py-2 text-[13px] sm:text-[14px] text-white/60 hover:text-lime transition-colors">Construction Financing</a>
            <a href="/loans/bridge-loans.php" class="block py-2 text-[13px] sm:text-[14px] text-white/60 hover:text-lime transition-colors">Bridge Loans</a>
          </div>
        </div>

        <!-- Mobile Dropdown 2: Industry -->
        <div class="border-b border-white/[0.08] pb-1">
          <button onclick="toggleMobileDropdown(this)" class="w-full flex items-center justify-between py-3 sm:py-3.5 text-white/80 hover:text-lime transition-colors">
            <span class="text-[14px] sm:text-[15px] font-medium tracking-[0.06em] uppercase">Industry</span>
            <svg class="w-4 h-4 transition-transform duration-200 dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="dropdown-content hidden mt-2 ml-3 sm:ml-4 space-y-1.5 sm:space-y-2">
            <a href="/industry/auto-repair.php" class="block py-2 text-[13px] sm:text-[14px] text-white/60 hover:text-lime transition-colors">Auto Repair</a>
            <a href="/industry/attorney.php" class="block py-2 text-[13px] sm:text-[14px] text-white/60 hover:text-lime transition-colors">Attorney</a>
            <a href="/industry/cleaning-business.php" class="block py-2 text-[13px] sm:text-[14px] text-white/60 hover:text-lime transition-colors">Cleaning Business</a>
            <a href="/industry/construction.php" class="block py-2 text-[13px] sm:text-[14px] text-white/60 hover:text-lime transition-colors">Construction</a>
            <a href="/industry/Convenience-store.php" class="block py-2 text-[13px] sm:text-[14px] text-white/60 hover:text-lime transition-colors">Convenience Store</a>
            <a href="/industry/day-care.php" class="block py-2 text-[13px] sm:text-[14px] text-white/60 hover:text-lime transition-colors">Day care</a>
            <a href="/industry/beauty-saloon.php" class="block py-2 text-[13px] sm:text-[14px] text-white/60 hover:text-lime transition-colors">Beauty Saloon</a>
            <a href="/industry/accounting.php" class="block py-2 text-[13px] sm:text-[14px] text-white/60 hover:text-lime transition-colors">Accounting</a>
          </div>
        </div>
        
        <a href="/contact.php" class="block py-3 sm:py-3.5 text-white/80 hover:text-lime transition-colors text-[14px] sm:text-[15px] font-medium tracking-[0.06em] uppercase border-b border-white/[0.08]">Contact Us</a>

      </div>

      <div class="mt-auto pt-4 sm:pt-6">
        <a href="/apply-now.php" class="block w-full text-center bg-lime text-ink px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg font-semibold text-[13px] sm:text-[14px] tracking-[0.06em] uppercase hover:bg-lime/90 transition-colors mb-2 sm:mb-3 active:scale-98">
          Apply Now
        </a>
        <a href="/contact.php" class="block w-full text-center border border-white/30 bg-transparent text-white px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg font-semibold text-[13px] sm:text-[14px] tracking-[0.06em] uppercase hover:bg-white hover:text-ink transition-colors active:scale-98">
          Get Funded
        </a>
        <p class="text-center text-white/30 text-[10px] sm:text-[11px] mt-3 sm:mt-4">© <?php echo date('Y'); ?> HarbourFundingSolutions</p>
      </div>

    </div>
  </div>

</header>

<script>
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
        mobileMenu.classList.remove('translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        if (menuIcon && closeIcon) {
          menuIcon.style.opacity = '0';
          menuIcon.style.transform = 'scale(0.95)';
          closeIcon.style.opacity = '1';
          closeIcon.style.transform = 'scale(1)';
        }
        scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        document.body.style.overflow = 'hidden';
        document.body.style.position = 'fixed';
        document.body.style.top = `-${scrollPosition}px`;
        document.body.style.width = '100%';
      } else {
        mobileMenu.classList.remove('translate-x-0');
        mobileMenu.classList.add('translate-x-full');
        if (menuIcon && closeIcon) {
          menuIcon.style.opacity = '1';
          menuIcon.style.transform = 'scale(1)';
          closeIcon.style.opacity = '0';
          closeIcon.style.transform = 'scale(0.95)';
        }
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

    if (mobileMenu) {
      const mobileLinks = mobileMenu.querySelectorAll('a');
      mobileLinks.forEach(link => {
        link.addEventListener('click', (e) => {
          if (!link.closest('.dropdown-content')) {
            if (isMenuOpen) toggleMenu();
          } else {
            if (isMenuOpen) setTimeout(toggleMenu, 100);
          }
        });
      });
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && isMenuOpen) toggleMenu();
    });

    if (menuIcon && closeIcon) {
      menuIcon.style.transition = 'all 0.2s ease';
      closeIcon.style.transition = 'all 0.2s ease';
      menuIcon.style.opacity = '1';
      menuIcon.style.transform = 'scale(1)';
      closeIcon.style.opacity = '0';
      closeIcon.style.transform = 'scale(0.95)';
    }

    let resizeTimer;
    window.addEventListener('resize', function() {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function() {
        if (window.innerWidth >= 1024 && isMenuOpen) {
          toggleMenu();
        }
      }, 250);
    });
  })();

  function toggleMobileDropdown(button) {
    const content = button.nextElementSibling;
    const arrow = button.querySelector('.dropdown-arrow');
    if (content && arrow) {
      if (content.classList.contains('hidden')) {
        document.querySelectorAll('.dropdown-content').forEach(drop => {
          if (drop !== content && !drop.classList.contains('hidden')) {
            drop.classList.add('hidden');
            const prevBtn = drop.previousElementSibling;
            if (prevBtn) {
              const prevArrow = prevBtn.querySelector('.dropdown-arrow');
              if (prevArrow) prevArrow.style.transform = 'rotate(0deg)';
            }
          }
        });
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
  #mobileMenu {
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    background: #0a0a0a;
    overflow-y: auto;
  }
  #mobileMenu::-webkit-scrollbar { width: 4px; }
  #mobileMenu::-webkit-scrollbar-track { background: rgba(255,255,255,0.05); }
  #mobileMenu::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.2); border-radius: 4px; }
  .dropdown-arrow { transition: transform 0.2s ease; }
  @media (min-width: 1024px) {
    .group:hover .group-hover\:opacity-100 {
      opacity: 1 !important;
      visibility: visible !important;
      transform: translateY(0) !important;
    }
  }
  @media (max-width: 1023px) {
    #mobileMenu a, #mobileMenu button { cursor: pointer; -webkit-tap-highlight-color: transparent; }
    #mobileMenu button:active { transform: scale(0.98); }
    #mobileMenu a { padding-top: 12px; padding-bottom: 12px; display: block; }
  }
  .active\:scale-98:active { transform: scale(0.98); }
  @media (max-width: 480px) { .logo-text { font-size: 16px; } }
</style>