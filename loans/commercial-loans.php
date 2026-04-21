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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Commercial Loans | BizCash&Capital</title>
    <meta name="description" content="Secure commercial loans for your business with BizCash&Capital. Low-interest rates, flexible terms, and expert guidance for construction, real estate, and operating costs.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: #0a0a0a;
            color: #ffffff;
            overflow-x: hidden;
        }
        
        .font-display {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        
        /* Custom gradient backgrounds */
        .bg-gradient-primary {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
        }
        
        .bg-gradient-card {
            background: linear-gradient(135deg, rgba(18, 18, 18, 0.95) 0%, rgba(10, 10, 10, 0.95) 100%);
        }
        
        .bg-gradient-lime {
            background: linear-gradient(135deg, #c4ff00 0%, #a8e600 100%);
        }
        
        /* Card hover effects */
        .loan-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .loan-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.5);
        }
        
        /* Step circles */
        .step-number {
            transition: all 0.3s ease;
        }
        
        .step-item:hover .step-number {
            background: #c4ff00;
            color: #0a0a0a;
            transform: scale(1.1);
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        /* Image hover effects */
        .image-overlay {
            transition: all 0.3s ease;
        }
        
        .image-container:hover .image-overlay {
            opacity: 1;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #1a1a1a;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #c4ff00;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #a8e600;
        }
    </style>
</head>
<body class="bg-gradient-primary">

    <main class="pt-8 pb-20">
        
        <!-- Introduction Section with Image -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 md:pt-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-white/10">
                        <span class="w-2 h-2 bg-lime rounded-full animate-pulse"></span>
                        <span class="text-[11px] font-medium tracking-[0.1em] uppercase text-white/60">Commercial Financing Solutions</span>
                    </div>
                    <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-6 bg-gradient-to-r from-white via-white to-white/70 bg-clip-text text-transparent">
                        Commercial Loans
                    </h1>
                    <p class="text-base md:text-lg text-white/60 leading-relaxed">
                        Commercial loans are financing options that help businesses meet their financial freedom and accomplish certain goals. These loans can finance capital investments or buy merchandise, grow business operations, buy real estate, or expand business activities. BizCash&Capital offers an ultimate guide to help you understand the ins and outs of securing a commercial loan for your business.
                    </p>
                </div>
                <div class="relative image-container group">
                    <div class="absolute inset-0 bg-gradient-to-r from-lime/20 to-transparent rounded-2xl blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <img src="https://images.unsplash.com/photo-1556745757-8d76bdb6984b?w=600&h=450&fit=crop" alt="Business meeting discussing commercial loans" class="rounded-2xl shadow-2xl w-full h-auto object-cover border border-white/10 group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent rounded-2xl opacity-0 image-overlay flex items-end p-6">
                        <p class="text-white text-sm font-medium">Expert guidance for your business growth</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Low Interest Program Banner with Image -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-16">
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-lime/10 via-lime/5 to-transparent border border-lime/20 p-8 md:p-12">
                <div class="absolute top-0 right-0 w-64 h-64 bg-lime/5 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-lime/5 rounded-full blur-3xl"></div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center relative z-10">
                    <div class="text-center lg:text-left">
                        <span class="text-lime text-sm font-semibold tracking-[0.2em] uppercase mb-3 block">Limited Time Offer</span>
                        <h2 class="font-display text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                            Best Low-Interest Rate Commercial Loan Program For 2025
                        </h2>
                        <p class="text-white/70 text-base md:text-lg mb-8">
                            Whether you are a small startup or a major corporation, our team of experts can guide you through the application process and help you obtain the Commercial loans you require for construction, real-estate purchase, or operating costs.
                        </p>
                        <a href="#apply" class="inline-flex items-center gap-2 bg-lime text-ink px-8 py-3 rounded-lg font-semibold text-[14px] tracking-[0.06em] uppercase hover:bg-lime/90 transition-all duration-200 transform hover:scale-105">
                            Get Free Consultation
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=500&h=350&fit=crop" alt="Low interest rates concept" class="rounded-xl shadow-xl w-full h-auto object-cover border border-lime/20">
                        <div class="absolute -bottom-3 -right-3 bg-lime/20 backdrop-blur-sm rounded-lg px-3 py-1 border border-lime/30">
                            <span class="text-lime text-xs font-bold">As low as 4.5% APR</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Types of Business Loans Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-24">
            <div class="text-center mb-12">
                <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">Types of Business Loans</h2>
                <div class="w-20 h-1 bg-lime mx-auto rounded-full"></div>
                <p class="text-white/60 mt-4 max-w-2xl mx-auto">Choose the right financing option for your business needs</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Term Loans -->
                <div class="loan-card bg-gradient-card backdrop-blur-sm rounded-xl border border-white/10 p-6 hover:border-lime/30 transition-all duration-300">
                    <div class="w-12 h-12 bg-lime/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-2">Term Loans</h3>
                    <p class="text-white/60 text-sm leading-relaxed">
                        Term loans provide a lump sum amount with fixed monthly payments over a set term. They are suitable for larger investments and long-term business needs.
                    </p>
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=400&h=200&fit=crop" alt="Term loans" class="mt-4 rounded-lg w-full h-32 object-cover opacity-80 hover:opacity-100 transition-opacity">
                </div>
                
                <!-- Commercial Real Estate Loans -->
                <div class="loan-card bg-gradient-card backdrop-blur-sm rounded-xl border border-white/10 p-6 hover:border-lime/30 transition-all duration-300">
                    <div class="w-12 h-12 bg-lime/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-2">Commercial Real Estate Loans</h3>
                    <p class="text-white/60 text-sm leading-relaxed">
                        A revolving line of credit gives you access to funds up to a predetermined credit limit. You only pay interest on the amount you use, providing flexibility in managing cash flow.
                    </p>
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&h=200&fit=crop" alt="Commercial real estate" class="mt-4 rounded-lg w-full h-32 object-cover opacity-80 hover:opacity-100 transition-opacity">
                </div>
                
                <!-- Equipment Financing -->
                <div class="loan-card bg-gradient-card backdrop-blur-sm rounded-xl border border-white/10 p-6 hover:border-lime/30 transition-all duration-300">
                    <div class="w-12 h-12 bg-lime/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-2">Equipment Financing</h3>
                    <p class="text-white/60 text-sm leading-relaxed">
                        Enables businesses to acquire the necessary equipment and machinery vital for their operations. The equipment itself often serves as collateral for the loan.
                    </p>
                    <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=400&h=200&fit=crop" alt="Equipment financing" class="mt-4 rounded-lg w-full h-32 object-cover opacity-80 hover:opacity-100 transition-opacity">
                </div>
                
                <!-- Working Capital Loans -->
                <div class="loan-card bg-gradient-card backdrop-blur-sm rounded-xl border border-white/10 p-6 hover:border-lime/30 transition-all duration-300">
                    <div class="w-12 h-12 bg-lime/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-2">Working Capital Loans</h3>
                    <p class="text-white/60 text-sm leading-relaxed">
                        Enables businesses to acquire the necessary equipment and machinery vital for their operations. The equipment itself often serves as collateral for the loan.
                    </p>
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=400&h=200&fit=crop" alt="Working capital" class="mt-4 rounded-lg w-full h-32 object-cover opacity-80 hover:opacity-100 transition-opacity">
                </div>
                
                <!-- Merchant Cash Advances -->
                <div class="loan-card bg-gradient-card backdrop-blur-sm rounded-xl border border-white/10 p-6 hover:border-lime/30 transition-all duration-300">
                    <div class="w-12 h-12 bg-lime/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-2">Merchant Cash Advances</h3>
                    <p class="text-white/60 text-sm leading-relaxed">
                        Merchant cash advances involve receiving a lump sum payment in exchange for a percentage of your daily credit card sales. It's an ideal solution for businesses with consistent credit card transactions, providing quick access to funds for various business needs.
                    </p>
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=200&fit=crop" alt="Merchant cash advances" class="mt-4 rounded-lg w-full h-32 object-cover opacity-80 hover:opacity-100 transition-opacity">
                </div>
                
                <!-- Bridge Loans - Extra -->
                <div class="loan-card bg-gradient-card backdrop-blur-sm rounded-xl border border-white/10 p-6 hover:border-lime/30 transition-all duration-300">
                    <div class="w-12 h-12 bg-lime/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-2">Bridge Loans</h3>
                    <p class="text-white/60 text-sm leading-relaxed">
                        Short-term financing solutions to bridge the gap between immediate needs and long-term funding. Perfect for time-sensitive opportunities.
                    </p>
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&h=200&fit=crop" alt="Bridge loans" class="mt-4 rounded-lg w-full h-32 object-cover opacity-80 hover:opacity-100 transition-opacity">
                </div>
                
            </div>
        </div>

        <!-- How to Apply Section with Image -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Left Side - Steps -->
                <div>
                    <div class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <span class="w-2 h-2 bg-lime rounded-full"></span>
                        <span class="text-[11px] font-medium tracking-[0.1em] uppercase text-white/60">Simple Process</span>
                    </div>
                    <h2 class="font-display text-3xl md:text-4xl font-bold mb-4">How to Apply for Commercial Loan</h2>
                    <div class="w-20 h-1 bg-lime rounded-full mb-6"></div>
                    <p class="text-white/60 mb-8 leading-relaxed">
                        Finding the world of commercial loans can be complex, but our team of experienced advisors is here to simplify the process. We take the time to understand your business objectives and financial needs, tailoring our guidance to ensure you secure the most appropriate commercial loan for your unique situation.
                    </p>
                    
                    <div class="space-y-4">
                        <!-- Step 1 -->
                        <div class="step-item flex gap-4 p-4 rounded-xl hover:bg-white/5 transition-all duration-300">
                            <div class="step-number flex-shrink-0 w-10 h-10 rounded-full bg-white/10 text-lime flex items-center justify-center font-bold text-lg transition-all duration-300">1</div>
                            <div>
                                <h3 class="font-semibold text-white mb-1">Verify Eligibility</h3>
                                <p class="text-white/50 text-sm">Verify that you meet the eligibility criteria for the loan you are applying for</p>
                            </div>
                        </div>
                        
                        <!-- Step 2 -->
                        <div class="step-item flex gap-4 p-4 rounded-xl hover:bg-white/5 transition-all duration-300">
                            <div class="step-number flex-shrink-0 w-10 h-10 rounded-full bg-white/10 text-lime flex items-center justify-center font-bold text-lg transition-all duration-300">2</div>
                            <div>
                                <h3 class="font-semibold text-white mb-1">Solid Business Plan</h3>
                                <p class="text-white/50 text-sm">Have a solid business plan ready for review</p>
                            </div>
                        </div>
                        
                        <!-- Step 3 -->
                        <div class="step-item flex gap-4 p-4 rounded-xl hover:bg-white/5 transition-all duration-300">
                            <div class="step-number flex-shrink-0 w-10 h-10 rounded-full bg-white/10 text-lime flex items-center justify-center font-bold text-lg transition-all duration-300">3</div>
                            <div>
                                <h3 class="font-semibold text-white mb-1">Complete Paperwork</h3>
                                <p class="text-white/50 text-sm">Complete the necessary paperwork in advance</p>
                            </div>
                        </div>
                        
                        <!-- Step 4 -->
                        <div class="step-item flex gap-4 p-4 rounded-xl hover:bg-white/5 transition-all duration-300">
                            <div class="step-number flex-shrink-0 w-10 h-10 rounded-full bg-white/10 text-lime flex items-center justify-center font-bold text-lg transition-all duration-300">4</div>
                            <div>
                                <h3 class="font-semibold text-white mb-1">Be Prepared</h3>
                                <p class="text-white/50 text-sm">Be ready to respond to queries about the business you run</p>
                            </div>
                        </div>
                        
                        <!-- Step 5 -->
                        <div class="step-item flex gap-4 p-4 rounded-xl hover:bg-white/5 transition-all duration-300">
                            <div class="step-number flex-shrink-0 w-10 h-10 rounded-full bg-white/10 text-lime flex items-center justify-center font-bold text-lg transition-all duration-300">5</div>
                            <div>
                                <h3 class="font-semibold text-white mb-1">Show Patience</h3>
                                <p class="text-white/50 text-sm">Application for a Commercial loan can take weeks or even months. But here at BizCash&Capital, we get you fundings as soon as possible!</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side - Image and CTA -->
                <div>
                    <div class="relative mb-6">
                        <img src="https://images.unsplash.com/photo-1554224154-22dec7ec8818?w=600&h=400&fit=crop" alt="Financial advisors helping client" class="rounded-2xl shadow-xl w-full h-auto object-cover border border-white/10">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent rounded-2xl"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <p class="text-white text-sm font-medium">Expert advisors ready to guide you</p>
                        </div>
                    </div>
                    
                    <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-lime/5 via-lime/10 to-transparent border border-lime/20 p-8 md:p-10">
                        <div class="absolute top-0 right-0 w-40 h-40 bg-lime/10 rounded-full blur-2xl"></div>
                        <div class="absolute bottom-0 left-0 w-40 h-40 bg-lime/5 rounded-full blur-2xl"></div>
                        
                        <div class="relative z-10 text-center">
                            <div class="w-20 h-20 bg-lime/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10 text-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="font-display text-2xl font-bold mb-2">Talk to Our Trusted Financial Advisors</h3>
                            <p class="text-white/60 text-sm mb-6">
                                Get personalized guidance for your commercial loan needs. Our experts are here to help you every step of the way.
                            </p>
                            <a href="#apply" class="block w-full text-center bg-lime text-ink px-6 py-3 rounded-lg font-semibold text-[14px] tracking-[0.06em] uppercase hover:bg-lime/90 transition-all duration-200">
                                Schedule Consultation
                            </a>
                            <p class="text-white/30 text-xs mt-4">Free consultation • No obligation</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Closing Statement Section with Image -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-24">
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-white/5 via-transparent to-white/5 border border-white/10 p-8 md:p-12">
                <div class="absolute inset-0 bg-gradient-to-r from-lime/5 via-transparent to-lime/5"></div>
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div class="text-center lg:text-left">
                        <svg class="w-12 h-12 text-lime/30 mx-auto lg:mx-0 mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L15 8.5L22 9.5L17 14L18.5 21L12 17.5L5.5 21L7 14L2 9.5L9 8.5L12 2z"></path>
                        </svg>
                        <p class="text-white/80 text-lg md:text-xl leading-relaxed">
                            At BizCash&Capital, we are dedicated to empowering businesses with the financial resources required for ambitious projects and sustained growth. Contact us today to initiate your journey towards harnessing the benefits of commercial loans and propelling your business to greater heights.
                        </p>
                        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <a href="#apply" class="inline-flex items-center justify-center gap-2 bg-lime text-ink px-8 py-3 rounded-lg font-semibold text-[14px] tracking-[0.06em] uppercase hover:bg-lime/90 transition-all duration-200">
                                Apply Now
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                            <a href="#learn-more" class="inline-flex items-center justify-center gap-2 border border-white/20 text-white px-8 py-3 rounded-lg font-semibold text-[14px] tracking-[0.06em] uppercase hover:bg-white/10 transition-all duration-200">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=500&h=350&fit=crop" alt="Business growth and success" class="rounded-xl shadow-xl w-full h-auto object-cover border border-white/10">
                        <div class="absolute -top-3 -left-3 bg-lime/20 backdrop-blur-sm rounded-lg px-3 py-1 border border-lime/30">
                            <span class="text-lime text-xs font-bold">Your Success Partner</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Hidden anchor for CTA -->
        <div id="apply" class="relative top-0"></div>
        
    </main>

    <script>
        // Add smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        // Observe sections for animation
        document.querySelectorAll('.loan-card, .step-item, .bg-gradient-card, .rounded-2xl, .image-container').forEach(el => {
            observer.observe(el);
        });
        
        // Lazy loading for images
        const images = document.querySelectorAll('img');
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.add('opacity-100');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        images.forEach(img => {
            img.classList.add('transition-opacity', 'duration-500', 'opacity-0');
            imageObserver.observe(img);
            img.onload = () => img.classList.add('opacity-100');
        });
    </script>
    
</body>
</html>