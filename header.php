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

<header class="fixed top-0 inset-x-0 z-50 bg-ink border-b border-white/[0.07] flex items-center justify-between px-6 md:px-12 h-16">
  <a href="<?php echo $pathPrefix; ?>index.php" class="font-display text-[22px] tracking-[0.12em] hover:text-lime transition-colors cursor-pointer">BizCash<span class="text-lime">&amp;</span>Capital</a>
  
  <ul class="hidden md:flex gap-9 list-none items-center">
    
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
  
  <a href="<?php echo $pathPrefix; ?>contact.php" class="border border-white/45 bg-transparent text-white px-5 py-2 text-[13px] font-medium tracking-[0.06em] uppercase hover:bg-white hover:text-ink transition-all duration-200 cursor-pointer inline-block">Contact us</a>
</header>