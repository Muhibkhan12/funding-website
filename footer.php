<footer class="px-6 md:px-12 pt-20 pb-12 border-t border-white/[0.07]">
  <!-- Responsive grid with better spacing for mobile -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">
    
    <!-- Brand Column - now takes full width on mobile, auto on desktop -->
    <div class="sm:col-span-2 lg:col-span-1">
      <p class="font-display text-[24px] sm:text-[28px] tracking-[0.08em] sm:tracking-[0.1em] leading-tight">
        Harbour<span class="text-lime">Funding</span>
      </p>
      <p class="text-[13px] font-light text-white/32 mt-4 leading-relaxed max-w-[260px]">
        Flexible business financing — fast, transparent, tailored for growth.
      </p>
    </div>
    
    <!-- Solutions Column -->
    <div>
      <h4 class="text-[10px] font-bold tracking-[0.16em] uppercase text-white/20 mb-5">Solutions</h4>
      <ul class="space-y-3 list-none">
        <li><a href="<?php echo $pathPrefix; ?>loans/business-loans.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Business Loans</a></li>
        <li><a href="<?php echo $pathPrefix; ?>loans/sba-loans.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">SBA Loans</a></li>
        <li><a href="<?php echo $pathPrefix; ?>loans/commercial-loans.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Commercial Financing</a></li>
        <li><a href="<?php echo $pathPrefix; ?>loans/construction-financing.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Construction Loans</a></li>
        <li><a href="<?php echo $pathPrefix; ?>loans/bridge-loans.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Bridge Loans</a></li>
      </ul>
    </div>
    
    <!-- Industries Column -->
    <div>
      <h4 class="text-[10px] font-bold tracking-[0.16em] uppercase text-white/20 mb-5">Industries</h4>
      <ul class="space-y-3 list-none">
        <li><a href="<?php echo $pathPrefix; ?>industry/auto-repair.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Auto Repair</a></li>
        <li><a href="<?php echo $pathPrefix; ?>industry/attorney.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Attorney</a></li>
        <li><a href="<?php echo $pathPrefix; ?>industry/cleaning-business.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Cleaning Business</a></li>
        <li><a href="<?php echo $pathPrefix; ?>industry/construction.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Construction</a></li>
        <li><a href="<?php echo $pathPrefix; ?>industry/Convenience-store.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Convenience Store</a></li>
        <li><a href="<?php echo $pathPrefix; ?>industry/day-care.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Daycare</a></li>
        <li><a href="<?php echo $pathPrefix; ?>industry/beauty-saloon.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Beauty Salon</a></li>
        <li><a href="<?php echo $pathPrefix; ?>industry/accounting.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Accounting</a></li>
      </ul>
    </div>
    
    <!-- Company Column -->
    <div>
      <h4 class="text-[10px] font-bold tracking-[0.16em] uppercase text-white/20 mb-5">Company</h4>
      <ul class="space-y-3 list-none">
        <li><a href="<?php echo $pathPrefix; ?>about.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">About Us</a></li>
        <li><a href="<?php echo $pathPrefix; ?>contact.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Contact</a></li>
        <li><a href="<?php echo $pathPrefix; ?>privacy-policy.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Privacy Policy</a></li>
        <li><a href="<?php echo $pathPrefix; ?>terms-of-service.php" class="text-[14px] font-light text-white/52 hover:text-white transition-colors">Terms of Service</a></li>
      </ul>
    </div>
  </div>
  
  <!-- Copyright Bar - separate from main grid to avoid crowding -->
  <div class="mt-16 pt-6 border-t border-white/[0.05] text-center">
    <p class="text-[11px] font-light text-white/25 tracking-wide">
      © <?php echo date('Y'); ?> HarbourFundingSolutions. All rights reserved.
    </p>
  </div>
</footer>