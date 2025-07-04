<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webspire - We Build Websites That Convert</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#1E40AF',
                        accent: '#F59E0B'
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .hero-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='4'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="text-2xl font-bold text-primary">Webspire</div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" onclick="showPage('home')" class="nav-link text-gray-700 hover:text-primary px-3 py-2 text-sm font-medium transition-colors">Home</a>
                        <a href="#services" onclick="showPage('services')" class="nav-link text-gray-700 hover:text-primary px-3 py-2 text-sm font-medium transition-colors">Services</a>
                        <a href="#packages" onclick="showPage('packages')" class="nav-link text-gray-700 hover:text-primary px-3 py-2 text-sm font-medium transition-colors">Packages</a>
                        <a href="#about" onclick="showPage('about')" class="nav-link text-gray-700 hover:text-primary px-3 py-2 text-sm font-medium transition-colors">About</a>
                        <a href="#contact" onclick="showPage('contact')" class="nav-link text-gray-700 hover:text-primary px-3 py-2 text-sm font-medium transition-colors">Contact</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button onclick="toggleMobileMenu()" class="text-gray-700 hover:text-primary focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#home" onclick="showPage('home'); toggleMobileMenu()" class="block px-3 py-2 text-gray-700 hover:text-primary">Home</a>
                <a href="#services" onclick="showPage('services'); toggleMobileMenu()" class="block px-3 py-2 text-gray-700 hover:text-primary">Services</a>
                <a href="#packages" onclick="showPage('packages'); toggleMobileMenu()" class="block px-3 py-2 text-gray-700 hover:text-primary">Packages</a>
                <a href="#about" onclick="showPage('about'); toggleMobileMenu()" class="block px-3 py-2 text-gray-700 hover:text-primary">About</a>
                <a href="#contact" onclick="showPage('contact'); toggleMobileMenu()" class="block px-3 py-2 text-gray-700 hover:text-primary">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Home Page -->
    <div id="home-page" class="page">
        <!-- Hero Section -->
        <section class="gradient-bg hero-pattern pt-20 pb-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16">
                <div class="text-center">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                        We Build Websites<br>That Convert.
                    </h1>
                    <p class="text-xl md:text-2xl text-white opacity-90 mb-4">
                        Clear, fast, and designed for growth.
                    </p>
                    <p class="text-lg text-white opacity-80 mb-8 max-w-3xl mx-auto">
                        From design to SEO and ads, Webspire helps businesses turn visitors into customers — without the fluff.
                    </p>
                    <button onclick="showPage('contact')" class="bg-accent hover:bg-yellow-500 text-white font-bold py-4 px-8 rounded-lg text-lg transition-all transform hover:scale-105 shadow-lg">
                        Get a Free Audit
                    </button>
                </div>
            </div>
        </section>

        <!-- Intro Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p class="text-lg text-gray-700 leading-relaxed">
                    We're a digital marketing and web development agency based in Amsterdam, serving both Dutch entrepreneurs and global e-commerce brands. Whether you need a fresh website, better Google rankings, or an ad campaign that actually performs — we've got you covered.
                </p>
            </div>
        </section>

        <!-- Services Preview -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Our Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md card-hover border border-gray-100">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Website Design</h3>
                        <p class="text-gray-600">Modern, responsive websites that convert visitors into customers.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md card-hover border border-gray-100">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">SEO Optimization</h3>
                        <p class="text-gray-600">Rank higher in Google and get more organic traffic.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md card-hover border border-gray-100">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Email Marketing</h3>
                        <p class="text-gray-600">Turn subscribers into buyers with automated flows.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md card-hover border border-gray-100">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Website Maintenance</h3>
                        <p class="text-gray-600">Keep your website secure, fast, and up to date.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md card-hover border border-gray-100 md:col-span-2 lg:col-span-1">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Facebook & Google Ads</h3>
                        <p class="text-gray-600">Data-driven ad campaigns that bring traffic and sales.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Work With Us -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Why Work With Us</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Fast Turnaround</h3>
                        <p class="text-gray-600">Quick delivery without compromising quality.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Transparent Pricing</h3>
                        <p class="text-gray-600">Clear costs with no hidden fees.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Results, Not Jargon</h3>
                        <p class="text-gray-600">We focus on what matters: your growth.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">No Long Contracts</h3>
                        <p class="text-gray-600">Flexibility to work on your terms.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section class="py-16 bg-primary">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-white mb-8">Ready to Grow Your Business?</h2>
                <button onclick="showPage('contact')" class="bg-accent hover:bg-yellow-500 text-white font-bold py-4 px-8 rounded-lg text-lg transition-all transform hover:scale-105 shadow-lg">
                    Request a Quote
                </button>
            </div>
        </section>
    </div>

    <!-- Services Page -->
    <div id="services-page" class="page hidden">
        <section class="pt-24 pb-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">Our Services – Built for Growth</h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Whether you're just getting started or ready to scale, our services are built to deliver measurable results.
                    </p>
                </div>

                <div class="space-y-16">
                    <!-- Website Design -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="md:flex">
                            <div class="md:w-1/3 bg-gradient-to-br from-blue-500 to-purple-600 p-8 flex items-center justify-center">
                                <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="md:w-2/3 p-8">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Website Design</h2>
                                <p class="text-gray-600 mb-4">Modern, responsive websites that look great and perform even better. Built for speed, SEO, and conversion.</p>
                                <button onclick="showPage('contact')" class="bg-primary hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg transition-colors">
                                    Get a Quote
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- SEO Optimization -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="md:flex md:flex-row-reverse">
                            <div class="md:w-1/3 bg-gradient-to-br from-green-500 to-teal-600 p-8 flex items-center justify-center">
                                <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <div class="md:w-2/3 p-8">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">SEO Optimization</h2>
                                <p class="text-gray-600 mb-4">Rank higher in Google and get more organic traffic without paying for ads. Includes keyword research, on-page SEO, and technical fixes.</p>
                                <button onclick="showPage('contact')" class="bg-primary hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg transition-colors">
                                    Get a Quote
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Email Marketing -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="md:flex">
                            <div class="md:w-1/3 bg-gradient-to-br from-purple-500 to-pink-600 p-8 flex items-center justify-center">
                                <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="md:w-2/3 p-8">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Email Marketing</h2>
                                <p class="text-gray-600 mb-4">Turn subscribers into buyers with automated email flows and newsletters. We handle both setup and management.</p>
                                <button onclick="showPage('contact')" class="bg-primary hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg transition-colors">
                                    Get a Quote
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Website Maintenance -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="md:flex md:flex-row-reverse">
                            <div class="md:w-1/3 bg-gradient-to-br from-orange-500 to-red-600 p-8 flex items-center justify-center">
                                <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="md:w-2/3 p-8">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Website Maintenance & Optimization</h2>
                                <p class="text-gray-600 mb-4">Keep your website secure, fast, and up to date. Includes speed optimization, regular updates, and backups.</p>
                                <button onclick="showPage('contact')" class="bg-primary hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg transition-colors">
                                    Get a Quote
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Facebook & Google Ads -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="md:flex">
                            <div class="md:w-1/3 bg-gradient-to-br from-indigo-500 to-blue-600 p-8 flex items-center justify-center">
                                <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div class="md:w-2/3 p-8">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Facebook & Google Ads Management</h2>
                                <p class="text-gray-600 mb-4">We run data-driven ad campaigns that bring traffic and sales. Includes monthly strategy, setup, optimization, and reporting.</p>
                                <button onclick="showPage('contact')" class="bg-primary hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg transition-colors">
                                    Get a Quote
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Packages Page -->
    <div id="packages-page" class="page hidden">
        <section class="pt-24 pb-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">Choose Your Package</h1>
                    <p class="text-xl text-gray-600">Transparent pricing for every stage of your business</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Starter Package -->
                    <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-8 card-hover">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Starter</h3>
                            <div class="mb-6">
                                <span class="text-4xl font-bold text-primary">€799</span>
                                <span class="text-gray-600"> - €1,299</span>
                            </div>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>1-page website</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Basic SEO setup</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>1 revision</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Delivery in 7 days</span>
                            </li>
                        </ul>
                        <button onclick="showOrderPage('starter')" class="w-full bg-primary hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                            Order This Package
                        </button>
                    </div>

                    <!-- Growth Package -->
                    <div class="bg-white rounded-lg shadow-lg border-2 border-accent p-8 card-hover relative">
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="bg-accent text-white px-4 py-1 rounded-full text-sm font-semibold">Most Popular</span>
                        </div>
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Growth</h3>
                            <div class="mb-6">
                                <span class="text-4xl font-bold text-primary">€1,999</span>
                                <span class="text-gray-600"> - €3,499</span>
                            </div>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Multi-page website</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>SEO optimization</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Email setup</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Ads strategy</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Delivery in 2–3 weeks</span>
                            </li>
                        </ul>
                        <button onclick="showOrderPage('growth')" class="w-full bg-accent hover:bg-yellow-500 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                            Order This Package
                        </button>
                    </div>

                    <!-- Scale Package -->
                    <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-8 card-hover">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Scale</h3>
                            <div class="mb-6">
                                <span class="text-4xl font-bold text-primary">€2,999+</span>
                                <span class="text-gray-600 block text-sm">/month retainer</span>
                            </div>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Ongoing full-service marketing</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Paid ad campaigns</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Monthly reporting</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Strategy sessions</span>
                            </li>
                        </ul>
                        <button onclick="showOrderPage('scale')" class="w-full bg-primary hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                            Order This Package
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- About Page -->
    <div id="about-page" class="page hidden">
        <section class="pt-24 pb-16">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold text-gray-900 mb-8">Who We Are</h1>
                </div>

                <div class="prose prose-lg mx-auto text-gray-600 leading-relaxed">
                    <p class="text-xl mb-8">
                        Webspire helps small businesses and online brands grow — without the usual agency jargon.
                    </p>
                    
                    <p class="mb-8">
                        We focus on clarity, conversion, and communication. You won't get buzzwords — just results.
                    </p>
                    
                    <p class="mb-12">
                        We work lean, fast, and transparently. Whether you're in Amsterdam or anywhere else, we speak your language.
                    </p>
                </div>

                <div class="bg-gray-50 rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Our Values</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Clarity</h3>
                            <p class="text-gray-600">Clear communication, transparent processes, and honest feedback.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Results</h3>
                            <p class="text-gray-600">We measure success by your growth, not vanity metrics.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Long-term Partnerships</h3>
                            <p class="text-gray-600">Building relationships that last, not just one-time projects.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Contact Page -->
    <div id="contact-page" class="page hidden">
        <section class="pt-24 pb-16">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold text-gray-900 mb-8">Let's Talk</h1>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <form id="contact-form" onsubmit="submitForm(event)">
                            <div class="mb-6">
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                                <input type="text" id="name" name="name" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div class="mb-6">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                                <textarea id="message" name="message" rows="6" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-primary hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div class="bg-gray-50 rounded-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h2>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-primary mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Email</h3>
                                    <p class="text-gray-600">info@webspire.org</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-primary mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Response Time</h3>
                                    <p class="text-gray-600">Within 24 hours (Monday to Friday)</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-primary mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Location</h3>
                                    <p class="text-gray-600">Amsterdam, Netherlands</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Order Page -->
    <div id="order-page" class="page hidden">
        <section class="pt-24 pb-16">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">Complete Your Order</h1>
                    <p class="text-xl text-gray-600">You're ordering the <span id="selected-package" class="font-semibold text-primary"></span> package</p>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8">
                    <form id="order-form" onsubmit="submitOrder(event)">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="order-name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                <input type="text" id="order-name" name="name" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="order-email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" id="order-email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                                <input type="text" id="company" name="company" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                        </div>
                        
                        <div class="mt-6">
                            <label for="project-details" class="block text-sm font-medium text-gray-700 mb-2">Project Details</label>
                            <textarea id="project-details" name="project-details" rows="4" placeholder="Tell us about your project, goals, and any specific requirements..." class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                        </div>

                        <div class="mt-8 p-6 bg-gray-50 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Next Steps</h3>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600">
                                <li>Submit this form with your project details</li>
                                <li>We'll review your requirements and send a custom quote</li>
                                <li>Once approved, we'll send an invoice and start your project</li>
                                <li>Regular updates throughout the development process</li>
                            </ol>
                        </div>
                        
                        <button type="submit" class="w-full mt-8 bg-accent hover:bg-yellow-500 text-white font-bold py-3 px-6 rounded-lg transition-colors">
                            Submit Order Request
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="text-2xl font-bold text-white mb-4">Webspire</div>
                    <p class="text-gray-300 mb-4">We build websites that convert. Clear, fast, and designed for growth.</p>
                    <p class="text-gray-400">Amsterdam, Netherlands</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" onclick="showPage('services')" class="hover:text-white transition-colors">Website Design</a></li>
                        <li><a href="#" onclick="showPage('services')" class="hover:text-white transition-colors">SEO Optimization</a></li>
                        <li><a href="#" onclick="showPage('services')" class="hover:text-white transition-colors">Email Marketing</a></li>
                        <li><a href="#" onclick="showPage('services')" class="hover:text-white transition-colors">Website Maintenance</a></li>
                        <li><a href="#" onclick="showPage('services')" class="hover:text-white transition-colors">Google & Facebook Ads</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" onclick="showPage('home')" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="#" onclick="showPage('packages')" class="hover:text-white transition-colors">Packages</a></li>
                        <li><a href="#" onclick="showPage('about')" class="hover:text-white transition-colors">About</a></li>
                        <li><a href="#" onclick="showPage('contact')" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Webspire. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Page navigation
        function showPage(pageName) {
            // Hide all pages
            const pages = document.querySelectorAll('.page');
            pages.forEach(page => page.classList.add('hidden'));
            
            // Show selected page
            document.getElementById(pageName + '-page').classList.remove('hidden');
            
            // Update nav links
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => link.classList.remove('text-primary', 'font-semibold'));
            
            // Scroll to top
            window.scrollTo(0, 0);
        }

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }

        // Show order page with selected package
        function showOrderPage(packageName) {
            showPage('order');
            document.getElementById('selected-package').textContent = packageName.charAt(0).toUpperCase() + packageName.slice(1);
        }

        // Form submissions
        function submitForm(event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            const name = formData.get('name');
            const email = formData.get('email');
            const message = formData.get('message');
            
            alert(`Thank you, ${name}! Your message has been received. We'll get back to you at ${email} within 24 hours.`);
            event.target.reset();
        }

        function submitOrder(event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            const name = formData.get('name');
            const email = formData.get('email');
            const packageName = document.getElementById('selected-package').textContent;
            
            alert(`Thank you, ${name}! Your ${packageName} package order request has been submitted. We'll send you a custom quote at ${email} within 24 hours.`);
            event.target.reset();
        }

        // Initialize with home page
        document.addEventListener('DOMContentLoaded', function() {
            showPage('home');
        });
    </script>
</body>
</html>