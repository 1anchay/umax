<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMAX - Премиальные китайские автомобили</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary: #1a3e72;
            --primary-light: #2a4d8a;
            --secondary: #e63946;
            --accent: #fca311;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --cta-primary: #00ff88;
            --cta-primary-hover: #00e676;
            --cta-secondary: #00a8ff;
            --cta-secondary-hover: #0095e0;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            @apply text-gray-900 antialiased;
        }
        
        /* Hero Section */
        .hero-section {
            @apply relative h-screen flex items-center justify-center overflow-hidden bg-gray-900;
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }
        
        .hero-bg {
            @apply absolute inset-0 z-0;
        }
        
        .hero-bg img {
            @apply w-full h-full object-cover opacity-50;
        }
        
        .hero-gradient {
            @apply absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/70 to-transparent;
        }
        
        .floating-car {
            @apply absolute right-10 bottom-1/4 w-1/3 max-w-xl opacity-90 transform -rotate-12;
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(-12deg); }
            50% { transform: translateY(-10px) rotate(-12deg); }
        }
        
        .hero-content {
            @apply relative z-10 px-4 sm:px-6 lg:px-8 text-center max-w-4xl;
        }
        
        .hero-title {
            @apply text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight;
        }
        
        .gradient-text {
            @apply text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-indigo-500;
        }
        
        .hero-subtitle {
            @apply text-xl md:text-2xl text-gray-300 mb-10 max-w-3xl mx-auto;
        }
        
        .hero-buttons {
            @apply flex flex-col sm:flex-row justify-center gap-4;
        }
        
        .primary-button {
            @apply px-8 py-4 bg-gradient-to-r from-pink-500 to-indigo-600 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 hover:from-pink-600 hover:to-indigo-700;
        }
        
        .secondary-button {
            @apply px-8 py-4 bg-white/10 text-white font-semibold rounded-full border border-white/20 backdrop-blur-sm hover:bg-white/20 transition-all duration-300;
        }
        
        .scroll-indicator {
            @apply absolute bottom-10 left-1/2 transform -translate-x-1/2 z-10;
        }
        
        /* Brands Section */
        .brands-section {
            @apply py-20 bg-white relative overflow-hidden;
        }
        
        .brands-container {
            @apply container mx-auto px-6 relative;
        }
        
        .section-title {
            @apply text-4xl font-bold text-gray-900 mb-4 text-center;
        }
        
        .title-underline {
            @apply w-20 h-1 bg-gradient-to-r from-pink-500 to-indigo-600 mx-auto;
        }
        
        .brands-grid {
            @apply grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8;
        }
        
        .brand-card {
            @apply group relative p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2;
        }
        
        .brand-card-border {
            @apply absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-pink-500/20 transition-all duration-300;
        }
        
        .brand-logo {
            @apply h-16 mx-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500;
        }
        
        .brand-name {
            @apply mt-4 text-center font-medium text-gray-700 group-hover:text-gray-900;
        }
        
        /* Featured Cars */
        .featured-cars {
            @apply py-20 bg-gray-50 relative overflow-hidden;
        }
        
        .car-card {
            @apply group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2;
        }
        
        .car-image-container {
            @apply relative overflow-hidden h-64;
        }
        
        .car-image {
            @apply w-full h-full object-cover transition-transform duration-700 group-hover:scale-110;
        }
        
        .car-badge {
            @apply absolute top-4 right-4 px-3 py-1 bg-pink-500 text-white text-xs font-semibold rounded-full;
        }
        
        /* Advantages Section */
        .advantages-section {
            @apply py-20 bg-gradient-to-br from-indigo-900 to-gray-900 text-white relative overflow-hidden;
        }
        
        /* Testimonials */
        .testimonial-card {
            @apply bg-gray-50 rounded-2xl p-8 relative overflow-hidden;
        }
        
        /* CTA Section */
        .cta-section {
            @apply py-20 bg-gradient-to-br from-indigo-900 to-gray-900 text-white relative overflow-hidden;
        }
        
        /* Footer */
        .footer {
            @apply bg-gray-900 text-gray-400 py-12;
        }
        
        /* Animations */
        [data-aos] {
            transition-property: transform, opacity;
        }
    </style>
</head>
<body>
    <!-- Header -->
    @include('header')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-bg">
            <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" alt="Luxury car">
            <div class="hero-gradient"></div>
        </div>
        
        <img src="https://www.freepnglogos.com/uploads/tesla-car-logo-png-28.png" alt="Floating car" class="floating-car">
        
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-radial"></div>
            <div class="absolute top-1/2 left-1/4 w-64 h-64 rounded-full bg-pink-600 opacity-20 mix-blend-overlay filter blur-3xl"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 rounded-full bg-indigo-600 opacity-15 mix-blend-overlay filter blur-3xl"></div>
        </div>
        
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="gradient-text">EMAX</span> — 
                <span class="block sm:inline">Премиальные автомобили</span>
            </h1>
            <p class="hero-subtitle">
                Откройте для себя элитные китайские автомобили нового поколения. Идеальное сочетание технологий, комфорта и стиля.
            </p>
            <div class="hero-buttons">
                <a href="#models" class="primary-button">Каталог моделей</a>
                <a href="#testimonials" class="secondary-button">Отзывы клиентов</a>
            </div>
        </div>
        
        <div class="scroll-indicator">
            <div class="animate-bounce w-8 h-14 rounded-full border-2 border-white/50 flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2"></div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="brands-section" data-aos="fade-up">
        <div class="absolute -top-32 -left-32 w-64 h-64 rounded-full bg-pink-100 opacity-30"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-indigo-100 opacity-30"></div>
        
        <div class="brands-container">
            <div class="text-center mb-16">
                <h2 class="section-title">Наши бренды</h2>
                <div class="title-underline"></div>
            </div>
            
            <div class="brands-grid">
                <!-- Brand 1 -->
                <div class="brand-card">
                    <div class="brand-card-border"></div>
                    <img src="https://www.carlogos.org/logo/Geely-logo-2014-1920x1080.png" alt="Geely" class="brand-logo">
                    <h3 class="brand-name">Geely</h3>
                </div>
                
                <!-- Brand 2 -->
                <div class="brand-card">
                    <div class="brand-card-border"></div>
                    <img src="https://www.carlogos.org/logo/Changan-logo-2010-1920x1080.png" alt="Changan" class="brand-logo">
                    <h3 class="brand-name">Changan</h3>
                </div>
                
                <!-- Brand 3 -->
                <div class="brand-card">
                    <div class="brand-card-border"></div>
                    <img src="https://www.carlogos.org/logo/Chery-logo-2013-1920x1080.png" alt="Chery" class="brand-logo">
                    <h3 class="brand-name">Chery</h3>
                </div>
                
                <!-- Brand 4 -->
                <div class="brand-card">
                    <div class="brand-card-border"></div>
                    <img src="https://www.carlogos.org/logo/Great-Wall-logo-1920x1080.png" alt="Great Wall" class="brand-logo">
                    <h3 class="brand-name">Great Wall</h3>
                </div>
                
                <!-- Brand 5 -->
                <div class="brand-card">
                    <div class="brand-card-border"></div>
                    <img src="https://www.carlogos.org/logo/SAIC-Motor-logo-1920x1080.png" alt="SAIC" class="brand-logo">
                    <h3 class="brand-name">SAIC</h3>
                </div>
                
                <!-- Brand 6 -->
                <div class="brand-card">
                    <div class="brand-card-border"></div>
                    <img src="https://www.carlogos.org/logo/FAW-logo-2010-1920x1080.png" alt="FAW" class="brand-logo">
                    <h3 class="brand-name">FAW</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Cars Section -->
    <section id="models" class="featured-cars" data-aos="fade-up">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-white via-transparent to-transparent opacity-50"></div>
        <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-indigo-100 opacity-20"></div>
        
        <div class="container mx-auto px-6 relative">
            <div class="text-center mb-16">
                <h2 class="section-title">Популярные модели</h2>
                <div class="title-underline"></div>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Откройте для себя наши самые востребованные модели премиум-класса
                </p>
            </div>
            
            <!-- Filter tabs -->
            <div class="flex justify-center mb-12">
                <div class="inline-flex rounded-full p-1 bg-gray-200">
                    <button class="px-6 py-2 rounded-full bg-white shadow-sm text-pink-600 font-medium">Все</button>
                    <button class="px-6 py-2 rounded-full text-gray-600 hover:text-gray-900 font-medium">Седаны</button>
                    <button class="px-6 py-2 rounded-full text-gray-600 hover:text-gray-900 font-medium">Внедорожники</button>
                    <button class="px-6 py-2 rounded-full text-gray-600 hover:text-gray-900 font-medium">Электромобили</button>
                    <button class="px-6 py-2 rounded-full text-gray-600 hover:text-gray-900 font-medium">Люкс</button>
                </div>
            </div>
            
            <!-- Cars grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Car 1 -->
                <div class="car-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="car-image-container">
                        <img src="https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Geely Coolray" 
                             class="car-image">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent"></div>
                        <div class="car-badge">НОВИНКА</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Geely Coolray</h3>
                                <p class="text-gray-600">Компактный кроссовер</p>
                            </div>
                            <div class="text-right">
                                <span class="text-sm text-gray-500 line-through">1 850 000 ₽</span>
                                <p class="text-xl font-bold text-pink-600">1 650 000 ₽</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">1.5L Turbo</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">177 л.с.</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">Автомат</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <a href="#" class="text-pink-600 font-medium hover:text-pink-700 flex items-center">
                                Подробнее
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <button class="p-2 rounded-full bg-gray-100 text-gray-700 hover:bg-pink-100 hover:text-pink-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car 2 -->
                <div class="car-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="car-image-container">
                        <img src="https://images.unsplash.com/photo-1544636331-e26879cd4d9b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Changan UNI-K" 
                             class="car-image">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Changan UNI-K</h3>
                                <p class="text-gray-600">Флагманский кроссовер</p>
                            </div>
                            <div class="text-right">
                                <p class="text-xl font-bold text-indigo-600">2 350 000 ₽</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">2.0L Turbo</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">233 л.с.</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">Полный привод</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">8AT</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <a href="#" class="text-indigo-600 font-medium hover:text-indigo-700 flex items-center">
                                Подробнее
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <button class="p-2 rounded-full bg-gray-100 text-gray-700 hover:bg-indigo-100 hover:text-indigo-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car 3 -->
                <div class="car-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="car-image-container">
                        <img src="https://images.unsplash.com/photo-1550355291-bbee04a92027?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Chery Tiggo 8 Pro" 
                             class="car-image">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent"></div>
                        <div class="car-badge bg-indigo-500">ВЫГОДА</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Chery Tiggo 8 Pro</h3>
                                <p class="text-gray-600">7-местный SUV</p>
                            </div>
                            <div class="text-right">
                                <span class="text-sm text-gray-500 line-through">2 150 000 ₽</span>
                                <p class="text-xl font-bold text-indigo-600">1 990 000 ₽</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">1.6L Turbo</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">197 л.с.</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">7DCT</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">3-й ряд</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <a href="#" class="text-indigo-600 font-medium hover:text-indigo-700 flex items-center">
                                Подробнее
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <button class="p-2 rounded-full bg-gray-100 text-gray-700 hover:bg-indigo-100 hover:text-indigo-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-gradient-to-r from-pink-500 to-indigo-600 shadow-sm hover:from-pink-600 hover:to-indigo-700 transition-colors">
                    Показать все модели
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section class="advantages-section" data-aos="fade-up">
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute top-1/4 left-1/4 w-32 h-32 rounded-full bg-pink-500 filter blur-3xl"></div>
            <div class="absolute bottom-1/3 right-1/4 w-40 h-40 rounded-full bg-indigo-500 filter blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-6 relative">
            <div class="text-center mb-16">
                <h2 class="section-title text-white">Почему выбирают EMAX</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-indigo-400 mx-auto"></div>
                <p class="mt-4 text-lg text-indigo-200 max-w-2xl mx-auto">
                    Мы предлагаем не просто автомобили, а премиальный опыт владения
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Advantage 1 -->
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8 border border-white/10 hover:border-pink-500/30 transition-all duration-300 transform hover:-translate-y-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="w-14 h-14 bg-pink-500/10 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Гарантия 5 лет</h3>
                    <p class="text-indigo-200">Самая продолжительная гарантия на рынке премиальных автомобилей</p>
                </div>
                
                <!-- Advantage 2 -->
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8 border border-white/10 hover:border-indigo-500/30 transition-all duration-300 transform hover:-translate-y-2" data-aos="zoom-in" data-aos-delay="200">
                    <div class="w-14 h-14 bg-indigo-500/10 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Выгодный кредит</h3>
                    <p class="text-indigo-200">Специальные программы кредитования от 3.9% годовых</p>
                </div>
                
                <!-- Advantage 3 -->
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8 border border-white/10 hover:border-pink-500/30 transition-all duration-300 transform hover:-translate-y-2" data-aos="zoom-in" data-aos-delay="300">
                    <div class="w-14 h-14 bg-pink-500/10 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Trade-in</h3>
                    <p class="text-indigo-200">Выгодный обмен вашего автомобиля с доплатой</p>
                </div>
                
                <!-- Advantage 4 -->
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8 border border-white/10 hover:border-indigo-500/30 transition-all duration-300 transform hover:-translate-y-2" data-aos="zoom-in" data-aos-delay="400">
                    <div class="w-14 h-14 bg-indigo-500/10 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Сервис</h3>
                    <p class="text-indigo-200">Собственные сервисные центры по всей стране</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-white relative overflow-hidden" data-aos="fade-up">
        <div class="absolute -top-32 -right-32 w-64 h-64 rounded-full bg-pink-100 opacity-20"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 rounded-full bg-indigo-100 opacity-20"></div>
        
        <div class="container mx-auto px-6 relative">
            <div class="text-center mb-16">
                <h2 class="section-title">Отзывы клиентов</h2>
                <div class="title-underline"></div>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Что говорят наши клиенты о своем опыте с EMAX
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="absolute -top-10 -right-10 w-32 h-32 rounded-full bg-pink-500 opacity-5"></div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 rounded-full bg-indigo-500 opacity-5"></div>
                    <div class="relative z-10">
                        <div class="flex items-center mb-6">
                            <div class="flex -space-x-2">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Алексей Петров" class="w-12 h-12 rounded-full border-2 border-white">
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-900">Алексей Петров</h4>
                                <p class="text-sm text-gray-600">Владелец Geely Coolray</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="flex text-yellow-400 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <p class="text-gray-700 italic">
                                "Пользуюсь Coolray уже год - ни единой проблемы. Качество сборки на уровне, а комплектация богаче, чем у конкурентов за те же деньги. Сервис EMAX на высоте!"
                            </p>
                        </div>
                        <div class="text-sm text-gray-500">
                            12 марта 2023
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="absolute -top-10 -right-10 w-32 h-32 rounded-full bg-indigo-500 opacity-5"></div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 rounded-full bg-pink-500 opacity-5"></div>
                    <div class="relative z-10">
                        <div class="flex items-center mb-6">
                            <div class="flex -space-x-2">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Елена Смирнова" class="w-12 h-12 rounded-full border-2 border-white">
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-900">Елена Смирнова</h4>
                                <p class="text-sm text-gray-600">Владелец Changan UNI-K</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="flex text-yellow-400 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <p class="text-gray-700 italic">
                                "UNI-K превзошел все ожидания! Комфорт как в автомобилях класса люкс, но по гораздо более доступной цене. Отдельно хочу отметить работу менеджера в салоне EMAX - все объяснил, показал, никакого навязывания."
                            </p>
                        </div>
                        <div class="text-sm text-gray-500">
                            28 февраля 2023
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="absolute -top-10 -right-10 w-32 h-32 rounded-full bg-pink-500 opacity-5"></div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 rounded-full bg-indigo-500 opacity-5"></div>
                    <div class="relative z-10">
                        <div class="flex items-center mb-6">
                            <div class="flex -space-x-2">
                                <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Дмитрий Иванов" class="w-12 h-12 rounded-full border-2 border-white">
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-900">Дмитрий Иванов</h4>
                                <p class="text-sm text-gray-600">Владелец Chery Tiggo 8 Pro</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="flex text-yellow-400 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <p class="text-gray-700 italic">
                                "Выбрал Tiggo 8 Pro из-за просторного салона и третьего ряда. Для семьи с тремя детьми - идеальный вариант. Прошел уже 25 тыс. км - никаких нареканий. Сервис EMAX действительно работает по европейским стандартам."
                            </p>
                        </div>
                        <div class="text-sm text-gray-500">
                            15 января 2023
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-1/3 left-1/4 w-64 h-64 rounded-full bg-pink-500 filter blur-3xl"></div>
            <div class="absolute bottom-1/3 right-1/4 w-96 h-96 rounded-full bg-indigo-600 filter blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-6 relative">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Готовы стать владельцем премиального автомобиля?</h2>
                <p class="text-xl text-indigo-200 mb-10">
                    Оставьте заявку прямо сейчас и получите персональное предложение от нашего менеджера
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#" class="primary-button flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        Заказать звонок
                    </a>
                    <a href="#" class="secondary-button flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        Написать нам
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS animation
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                easing: 'ease-out-quart'
            });
            
            // Simple scroll animation for elements
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fadeInUp');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.brand-card, .car-card, .testimonial-card').forEach(card => {
                observer.observe(card);
                card.classList.add('opacity-0', 'transition-all', 'duration-500', 'ease-out');
            });
        });
    </script>
</body>
</html>