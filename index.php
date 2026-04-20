<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>VaultEdge — Fintech Capital</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
<style>
  :root {
    --lime: #CCFF00;
    --black: #0A0A0A;
    --white: #FFFFFF;
  }

  * { margin: 0; padding: 0; box-sizing: border-box; }
  html { scroll-behavior: smooth; }
  body { background: var(--black); color: var(--white); font-family: 'DM Sans', sans-serif; overflow-x: hidden; }

  .bebas { font-family: 'Bebas Neue', sans-serif; }

  /* NAV */
  nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 100;
    background: var(--black);
    border-bottom: 1px solid rgba(255,255,255,0.08);
    display: flex; align-items: center; justify-content: space-between;
    padding: 0 48px; height: 64px;
  }
  .nav-logo { font-family: 'Bebas Neue', sans-serif; font-size: 22px; letter-spacing: 0.12em; color: var(--white); }
  .nav-logo span { color: var(--lime); }
  .nav-links { display: flex; gap: 36px; list-style: none; }
  .nav-links a { font-size: 13px; font-weight: 500; letter-spacing: 0.06em; color: rgba(255,255,255,0.65); text-decoration: none; text-transform: uppercase; transition: color 0.2s; }
  .nav-links a:hover { color: var(--white); }
  .nav-cta {
    border: 1px solid rgba(255,255,255,0.6); background: transparent; color: var(--white);
    padding: 9px 22px; font-size: 13px; font-weight: 500; letter-spacing: 0.06em; text-transform: uppercase;
    cursor: pointer; transition: all 0.25s; font-family: 'DM Sans', sans-serif;
  }
  .nav-cta:hover { background: var(--white); color: var(--black); }

  /* HERO */
  #hero {
    min-height: 100vh; padding: 0 48px;
    display: grid; grid-template-columns: 1fr 1fr; gap: 0; align-items: center;
    padding-top: 64px; position: relative; overflow: hidden;
  }
  #hero::before {
    content: ''; position: absolute; inset: 0;
    background: radial-gradient(ellipse 60% 70% at 80% 50%, rgba(204,255,0,0.04) 0%, transparent 70%);
    pointer-events: none;
  }
  .hero-left { padding-right: 60px; }
  .hero-eyebrow {
    display: inline-flex; align-items: center; gap: 10px;
    font-size: 11px; font-weight: 600; letter-spacing: 0.15em; text-transform: uppercase;
    color: rgba(255,255,255,0.45); margin-bottom: 28px;
  }
  .hero-eyebrow::before { content: ''; width: 28px; height: 1px; background: var(--lime); }
  .hero-h1 { font-family: 'Bebas Neue', sans-serif; line-height: 0.9; letter-spacing: 0.01em; margin-bottom: 32px; }
  .hero-h1 .line1 { font-size: clamp(72px, 8vw, 108px); color: var(--white); display: block; }
  .hero-h1 .line2 { font-size: clamp(72px, 8vw, 108px); color: var(--white); display: block; }
  .hero-h1 .accent { color: var(--lime); }
  .hero-sub { font-size: 15px; line-height: 1.7; color: rgba(255,255,255,0.55); max-width: 440px; margin-bottom: 40px; font-weight: 300; }
  .btn-primary {
    display: inline-block; background: var(--lime); color: var(--black);
    padding: 16px 36px; font-size: 13px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
    cursor: pointer; border: 2px solid var(--lime); text-decoration: none;
    position: relative; overflow: hidden; transition: all 0.3s; font-family: 'DM Sans', sans-serif;
  }
  .btn-primary::after {
    content: ''; position: absolute; inset: 0;
    background: var(--white); transform: translateX(-101%); transition: transform 0.3s cubic-bezier(0.77, 0, 0.18, 1);
  }
  .btn-primary:hover::after { transform: translateX(0); }
  .btn-primary span { position: relative; z-index: 1; }
  .btn-ghost {
    display: inline-block; background: transparent; color: var(--white);
    padding: 15px 36px; font-size: 13px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase;
    cursor: pointer; border: 1px solid rgba(255,255,255,0.25); text-decoration: none;
    transition: border-color 0.2s, color 0.2s; font-family: 'DM Sans', sans-serif; margin-left: 14px;
  }
  .btn-ghost:hover { border-color: var(--white); }

  /* HERO RIGHT */
  .hero-right { position: relative; display: flex; align-items: center; justify-content: center; height: 100%; min-height: 80vh; }
  .hero-img-wrap {
    position: relative; width: 100%; max-width: 520px;
    background: #111; overflow: visible;
  }
  .hero-img {
    width: 100%; height: 580px; object-fit: cover;
    filter: grayscale(100%) contrast(1.1);
    display: block;
    background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 30%, #111 70%, #1a1a1a 100%);
  }
  /* Placeholder person silhouette */
  .hero-img-placeholder {
    width: 100%; height: 580px;
    background: linear-gradient(180deg, #1c1c1c 0%, #141414 100%);
    position: relative; overflow: hidden;
    display: flex; align-items: flex-end; justify-content: center;
  }
  .hero-img-placeholder::before {
    content: '';
    position: absolute;
    bottom: 0; left: 50%; transform: translateX(-50%);
    width: 260px; height: 480px;
    background: linear-gradient(180deg, #2a2a2a 0%, #1a1a1a 100%);
    border-radius: 130px 130px 0 0;
    box-shadow: 0 0 60px rgba(0,0,0,0.8);
  }
  .hero-img-placeholder::after {
    content: '';
    position: absolute;
    bottom: 440px; left: 50%; transform: translateX(-50%);
    width: 100px; height: 100px;
    background: #2a2a2a;
    border-radius: 50%;
  }

  /* Floating cards */
  .float-card {
    position: absolute;
    background: rgba(15,15,15,0.85);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 12px;
    padding: 16px 20px;
    min-width: 200px;
    opacity: 0; transform: translateY(20px);
    transition: all 0.6s cubic-bezier(0.22, 1, 0.36, 1);
  }
  .float-card.visible { opacity: 1; transform: translateY(0); }
  .float-card-1 { top: 80px; right: -40px; }
  .float-card-2 { bottom: 120px; left: -60px; }
  .float-card-label { font-size: 10px; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; color: rgba(255,255,255,0.4); margin-bottom: 10px; }
  .float-card-item { display: flex; align-items: center; gap: 8px; font-size: 13px; color: rgba(255,255,255,0.8); margin-bottom: 6px; font-weight: 300; }
  .float-card-item::before { content: ''; width: 6px; height: 6px; background: var(--lime); border-radius: 50%; flex-shrink: 0; }
  .float-card-metric { font-family: 'Bebas Neue', sans-serif; font-size: 28px; color: var(--white); line-height: 1; }
  .float-card-sub { font-size: 11px; color: rgba(255,255,255,0.4); margin-top: 2px; letter-spacing: 0.06em; text-transform: uppercase; }

  /* Circular badge */
  .lime-badge {
    position: absolute; top: 30%; right: -28px;
    width: 90px; height: 90px; background: var(--lime);
    border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center;
    z-index: 10;
    animation: badgePulse 3s ease-in-out infinite;
  }
  .lime-badge .val { font-family: 'Bebas Neue', sans-serif; font-size: 22px; color: var(--black); line-height: 1; }
  .lime-badge .lab { font-size: 8px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; color: rgba(0,0,0,0.65); }
  @keyframes badgePulse { 0%,100%{transform:scale(1)} 50%{transform:scale(1.05)} }

  /* STATS SECTION */
  #stats { padding: 120px 48px; border-top: 1px solid rgba(255,255,255,0.08); }
  .stats-header { display: flex; align-items: baseline; justify-content: space-between; margin-bottom: 60px; }
  .stats-title { font-family: 'Bebas Neue', sans-serif; font-size: 13px; letter-spacing: 0.2em; text-transform: uppercase; color: rgba(255,255,255,0.35); }
  .stat-row {
    display: grid; grid-template-columns: 80px 1fr 320px;
    align-items: center; padding: 48px 0; border-top: 1px solid rgba(255,255,255,0.08);
    gap: 40px;
  }
  .stat-row:last-child { border-bottom: 1px solid rgba(255,255,255,0.08); }
  .stat-index { font-size: 11px; font-weight: 500; letter-spacing: 0.1em; color: rgba(255,255,255,0.2); font-family: 'DM Sans', sans-serif; }
  .stat-num {
    font-family: 'Bebas Neue', sans-serif; font-size: clamp(80px, 9vw, 130px);
    color: var(--lime); line-height: 0.85; letter-spacing: -0.01em;
    transition: all 0.1s;
  }
  .stat-desc-title { font-size: 15px; font-weight: 500; color: var(--white); margin-bottom: 6px; }
  .stat-desc-body { font-size: 13px; font-weight: 300; color: rgba(255,255,255,0.4); line-height: 1.6; }

  /* HOW IT WORKS */
  #how { padding: 120px 48px; }
  .section-label {
    display: flex; align-items: center; gap: 14px;
    font-size: 11px; font-weight: 600; letter-spacing: 0.18em; text-transform: uppercase;
    color: rgba(255,255,255,0.35); margin-bottom: 48px;
  }
  .section-label::after { content: ''; flex: 1; height: 1px; background: rgba(255,255,255,0.08); }
  .how-header { display: flex; align-items: flex-end; justify-content: space-between; margin-bottom: 56px; }
  .how-title { font-family: 'Bebas Neue', sans-serif; font-size: clamp(48px, 6vw, 80px); line-height: 0.9; color: var(--white); }
  .how-sub { font-size: 14px; color: rgba(255,255,255,0.4); max-width: 280px; line-height: 1.65; font-weight: 300; text-align: right; }
  .steps-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2px; }
  .step-card {
    background: #0e0e0e;
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 4px;
    padding: 40px;
    position: relative; overflow: hidden;
    min-height: 320px;
    display: flex; flex-direction: column; justify-content: flex-end;
    cursor: pointer;
    transition: transform 0.3s cubic-bezier(0.22,1,0.36,1), box-shadow 0.3s;
  }
  .step-card:hover { transform: translateY(-6px); box-shadow: 0 20px 60px rgba(204,255,0,0.12); }
  .step-bg-num {
    position: absolute; top: -20px; left: 20px;
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(160px, 14vw, 220px);
    color: rgba(204,255,0,0.06);
    line-height: 1; user-select: none;
    transition: color 0.3s;
  }
  .step-card:hover .step-bg-num { color: rgba(204,255,0,0.1); }
  .step-num-label {
    font-size: 10px; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase;
    color: var(--lime); margin-bottom: 10px;
  }
  .step-title { font-size: 18px; font-weight: 500; color: var(--white); line-height: 1.3; letter-spacing: 0.01em; }
  .step-desc { font-size: 13px; color: rgba(255,255,255,0.35); margin-top: 8px; line-height: 1.6; font-weight: 300; }

  /* MARQUEE */
  #marquee { border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08); overflow: hidden; padding: 20px 0; }
  .marquee-track { display: flex; gap: 0; white-space: nowrap; animation: marquee 18s linear infinite; }
  .marquee-item {
    display: inline-flex; align-items: center; gap: 40px; padding: 0 40px;
    font-family: 'Bebas Neue', sans-serif; font-size: 32px; color: rgba(255,255,255,0.12);
    letter-spacing: 0.04em; text-transform: uppercase; flex-shrink: 0;
  }
  .marquee-item .dot { width: 8px; height: 8px; background: var(--lime); border-radius: 50%; opacity: 0.6; }
  @keyframes marquee { from{transform:translateX(0)} to{transform:translateX(-50%)} }

  /* FOOTER */
  footer {
    padding: 80px 48px 48px; border-top: 1px solid rgba(255,255,255,0.08);
    display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 40px;
  }
  .footer-brand .logo { font-family: 'Bebas Neue', sans-serif; font-size: 28px; letter-spacing: 0.1em; }
  .footer-brand .logo span { color: var(--lime); }
  .footer-brand p { font-size: 13px; color: rgba(255,255,255,0.35); margin-top: 14px; line-height: 1.65; font-weight: 300; max-width: 220px; }
  .footer-col h4 { font-size: 10px; font-weight: 700; letter-spacing: 0.16em; text-transform: uppercase; color: rgba(255,255,255,0.25); margin-bottom: 20px; }
  .footer-col ul { list-style: none; }
  .footer-col li { margin-bottom: 12px; }
  .footer-col a { font-size: 14px; color: rgba(255,255,255,0.55); text-decoration: none; font-weight: 300; transition: color 0.2s; }
  .footer-col a:hover { color: var(--white); }
  .footer-bottom { padding: 28px 48px; border-top: 1px solid rgba(255,255,255,0.06); display: flex; justify-content: space-between; align-items: center; }
  .footer-bottom p { font-size: 12px; color: rgba(255,255,255,0.2); font-weight: 300; }

  /* Scroll animation helpers */
  .reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.7s ease, transform 0.7s ease; }
  .reveal.visible { opacity: 1; transform: translateY(0); }

  /* Noise overlay */
  body::after {
    content: ''; position: fixed; inset: 0; pointer-events: none; z-index: 9999;
    opacity: 0.025;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
    background-repeat: repeat;
    background-size: 128px;
  }

  @media (max-width: 900px) {
    #hero { grid-template-columns: 1fr; padding: 120px 24px 60px; }
    .hero-right { display: none; }
    nav { padding: 0 24px; }
    .nav-links { display: none; }
    #stats { padding: 80px 24px; }
    .stat-row { grid-template-columns: 60px 1fr; }
    .stat-desc { display: none; }
    #how { padding: 80px 24px; }
    .steps-grid { grid-template-columns: 1fr; }
    footer { grid-template-columns: 1fr 1fr; padding: 60px 24px 40px; }
    .footer-bottom { padding: 24px; flex-direction: column; gap: 8px; }
  }
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-logo">Vault<span>Edge</span></div>
  <ul class="nav-links">
    <li><a href="#">Services</a></li>
    <li><a href="#">Portfolio</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Insights</a></li>
  </ul>
  <button class="nav-cta">Contact us</button>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="hero-left">
    <div class="hero-eyebrow">Institutional Capital Solutions</div>
    <h1 class="hero-h1">
      <span class="line1">Deploy Capital</span>
      <span class="line2">at <span class="accent">$1.3M+</span></span>
      <span class="line2">Scale.</span>
    </h1>
    <p class="hero-sub">We architect precision financial strategies for emerging and mid-market operators — turning complex capital structures into measurable growth outcomes.</p>
    <div>
      <a href="#" class="btn-primary"><span>Get Started →</span></a>
      <a href="#" class="btn-ghost">View Portfolio</a>
    </div>
  </div>

  <div class="hero-right">
    <div class="hero-img-wrap">
      <div class="hero-img-placeholder"></div>

      <!-- Floating card 1 -->
      <div class="float-card float-card-1" id="card1">
        <div class="float-card-label">Portfolio Highlights</div>
        <div class="float-card-item">Series A placement secured</div>
        <div class="float-card-item">$26K+ avg client ROI</div>
        <div class="float-card-item">200+ active engagements</div>
        <div class="float-card-item">Exits in 3 continents</div>
      </div>

      <!-- Floating card 2 -->
      <div class="float-card float-card-2" id="card2">
        <div class="float-card-label">YTD Performance</div>
        <div class="float-card-metric">$4.7M</div>
        <div class="float-card-sub">Capital Deployed Q1 2026</div>
      </div>

      <!-- Lime badge -->
      <div class="lime-badge">
        <span class="val">$1.3M</span>
        <span class="lab">Avg Deal</span>
      </div>
    </div>
  </div>
</section>

<!-- MARQUEE -->
<div id="marquee">
  <div class="marquee-track">
    <span class="marquee-item">Capital Markets <span class="dot"></span></span>
    <span class="marquee-item">Private Equity <span class="dot"></span></span>
    <span class="marquee-item">Venture Debt <span class="dot"></span></span>
    <span class="marquee-item">Portfolio Strategy <span class="dot"></span></span>
    <span class="marquee-item">M&A Advisory <span class="dot"></span></span>
    <span class="marquee-item">Fund Formation <span class="dot"></span></span>
    <span class="marquee-item">Capital Markets <span class="dot"></span></span>
    <span class="marquee-item">Private Equity <span class="dot"></span></span>
    <span class="marquee-item">Venture Debt <span class="dot"></span></span>
    <span class="marquee-item">Portfolio Strategy <span class="dot"></span></span>
    <span class="marquee-item">M&A Advisory <span class="dot"></span></span>
    <span class="marquee-item">Fund Formation <span class="dot"></span></span>
  </div>
</div>

<!-- STATS -->
<section id="stats">
  <div class="stats-header">
    <span class="stats-title">About Us in Numbers</span>
  </div>

  <div class="stat-row reveal">
    <span class="stat-index">01</span>
    <span class="stat-num" data-target="847" data-suffix="CPA's">0</span>
    <div class="stat-desc">
      <div class="stat-desc-title">Certified Partners Worldwide</div>
      <div class="stat-desc-body">A global network of accredited financial advisors embedded across 34 markets and 6 continents.</div>
    </div>
  </div>

  <div class="stat-row reveal">
    <span class="stat-index">02</span>
    <span class="stat-num" data-target="26" data-prefix="$" data-suffix="K+" data-decimals="0">0</span>
    <div class="stat-desc">
      <div class="stat-desc-title">Average Client Return</div>
      <div class="stat-desc-body">Median ROI per engagement across our structured capital deployment programs over the last 24 months.</div>
    </div>
  </div>

  <div class="stat-row reveal">
    <span class="stat-index">03</span>
    <span class="stat-num" data-target="200" data-prefix="$" data-suffix="K">0</span>
    <div class="stat-desc">
      <div class="stat-desc-title">Minimum Deployment Threshold</div>
      <div class="stat-desc-body">We work exclusively with operators positioned to scale. Entry capital starts at $200K for structured advisory.</div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section id="how">
  <div class="section-label">Process</div>
  <div class="how-header">
    <h2 class="how-title">How It<br/>Works</h2>
    <p class="how-sub">From initial assessment to capital deployment in four decisive steps.</p>
  </div>

  <div class="steps-grid">
    <div class="step-card reveal">
      <div class="step-bg-num">01</div>
      <div>
        <div class="step-num-label">Step 01</div>
        <div class="step-title">Capital Assessment</div>
        <div class="step-desc">We audit your current structure, exposure profile, and growth trajectory to identify optimal capital pathways.</div>
      </div>
    </div>
    <div class="step-card reveal" style="transition-delay:0.1s">
      <div class="step-bg-num">02</div>
      <div>
        <div class="step-num-label">Step 02</div>
        <div class="step-title">Strategy Architecture</div>
        <div class="step-desc">Our team crafts a bespoke deployment strategy aligned with your risk threshold and 24-month performance targets.</div>
      </div>
    </div>
    <div class="step-card reveal" style="transition-delay:0.2s">
      <div class="step-bg-num">03</div>
      <div>
        <div class="step-num-label">Step 03</div>
        <div class="step-title">Partner Matching</div>
        <div class="step-desc">We connect you to our verified network of 847+ CPAs and institutional lenders for structured deal execution.</div>
      </div>
    </div>
    <div class="step-card reveal" style="transition-delay:0.3s">
      <div class="step-bg-num">04</div>
      <div>
        <div class="step-num-label">Step 04</div>
        <div class="step-title">Deploy & Scale</div>
        <div class="step-desc">Capital is deployed with real-time monitoring, quarterly reporting, and active portfolio management built in.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section style="padding: 120px 48px; border-top: 1px solid rgba(255,255,255,0.08); display:flex; align-items:center; justify-content:space-between; gap: 40px;" class="reveal">
  <div>
    <div style="font-size:11px;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:rgba(255,255,255,0.3);margin-bottom:16px;">Ready to Deploy?</div>
    <h2 style="font-family:'Bebas Neue',sans-serif;font-size:clamp(48px,6vw,84px);line-height:0.9;color:var(--white);">Start Your<br/><span style="color:var(--lime);">Capital Journey</span></h2>
  </div>
  <div style="display:flex;flex-direction:column;align-items:flex-end;gap:16px;">
    <p style="font-size:14px;color:rgba(255,255,255,0.4);max-width:300px;text-align:right;line-height:1.65;font-weight:300;">Book a 30-minute strategy call with a VaultEdge advisor. No commitment. Pure signal.</p>
    <a href="#" class="btn-primary"><span>Book a Call →</span></a>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-brand">
    <div class="logo">Vault<span>Edge</span></div>
    <p>Institutional-grade capital strategies for ambitious operators. We move with precision.</p>
  </div>
  <div class="footer-col">
    <h4>Services</h4>
    <ul>
      <li><a href="#">Capital Structuring</a></li>
      <li><a href="#">M&A Advisory</a></li>
      <li><a href="#">Fund Formation</a></li>
      <li><a href="#">Portfolio Management</a></li>
    </ul>
  </div>
  <div class="footer-col">
    <h4>Company</h4>
    <ul>
      <li><a href="#">About</a></li>
      <li><a href="#">Team</a></li>
      <li><a href="#">Insights</a></li>
      <li><a href="#">Careers</a></li>
    </ul>
  </div>
  <div class="footer-col">
    <h4>Legal</h4>
    <ul>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Terms of Service</a></li>
      <li><a href="#">Disclosures</a></li>
      <li><a href="#">Compliance</a></li>
    </ul>
  </div>
</footer>
<div class="footer-bottom">
  <p>© 2026 VaultEdge Capital Advisors LLC. All rights reserved.</p>
  <p style="color:rgba(255,255,255,0.15);font-size:12px;">Not an investment advisor. For institutional clients only.</p>
</div>

<script>
// ---- Intersection Observer for reveal ----
const revealEls = document.querySelectorAll('.reveal');
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.12 });
revealEls.forEach(el => revealObserver.observe(el));

// ---- Hero cards stagger ----
setTimeout(() => { document.getElementById('card1').classList.add('visible'); }, 600);
setTimeout(() => { document.getElementById('card2').classList.add('visible'); }, 950);

// ---- Count-up animation ----
function animateCount(el) {
  const target = parseFloat(el.dataset.target);
  const prefix = el.dataset.prefix || '';
  const suffix = el.dataset.suffix || '';
  const duration = 1600;
  const start = performance.now();

  function update(now) {
    const elapsed = now - start;
    const progress = Math.min(elapsed / duration, 1);
    // Ease out expo
    const ease = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
    const current = Math.floor(ease * target);
    el.textContent = prefix + current.toLocaleString() + suffix;
    if (progress < 1) requestAnimationFrame(update);
  }
  requestAnimationFrame(update);
}

const statNums = document.querySelectorAll('.stat-num');
const countObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if(e.isIntersecting && !e.target.dataset.animated) {
      e.target.dataset.animated = true;
      animateCount(e.target);
    }
  });
}, { threshold: 0.4 });
statNums.forEach(el => countObserver.observe(el));
</script>
</body>
</html>