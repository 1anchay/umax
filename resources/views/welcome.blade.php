<!DOCTYPE html>
<html lang="ru">
@include('header')
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMAX - Премиальные китайские автомобили</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@heroicons/vue@1.0.4/outline/index.js" defer></script>
    <script src="https://unpkg.com/headlessui@v1.4.2/dist/headlessui.production.min.js" defer></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        .clip-path-hero {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }
        .clip-path-section {
            clip-path: polygon(0 15%, 100% 0, 100% 100%, 0 100%);
        }
        .bg-gradient-radial {
            background: radial-gradient(circle at center, rgba(251, 113, 133, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
        }
    </style>
</head>
<body class="font-inter antialiased text-gray-900">
    <!-- Hero Section -->
    <section class="relative clip-path-hero bg-gray-900 h-screen flex items-center justify-center overflow-hidden">
        <!-- Background elements -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" 
                 alt="Luxury car" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/70 to-transparent"></div>
        </div>
        
        <!-- Floating car image -->
        <img src="https://www.freepnglogos.com/uploads/tesla-car-logo-png-28.png" 
             alt="Floating car" 
             class="absolute right-10 bottom-1/4 w-1/3 max-w-xl float-animation opacity-90 transform -rotate-12">
        
        <!-- Vector shapes -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-radial"></div>
            <div class="absolute top-1/2 left-1/4 w-64 h-64 rounded-full bg-pink-600 opacity-20 mix-blend-overlay filter blur-3xl"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 rounded-full bg-indigo-600 opacity-15 mix-blend-overlay filter blur-3xl"></div>
        </div>
        
        <!-- Hero content -->
        <div class="relative z-10 px-4 sm:px-6 lg:px-8 text-center max-w-4xl">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-indigo-500">EMAX</span> — 
                <span class="block sm:inline">Премиальные автомобили</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-10 max-w-3xl mx-auto">
                Откройте для себя элитные китайские автомобили нового поколения. Идеальное сочетание технологий, комфорта и стиля.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#models" class="px-8 py-4 bg-gradient-to-r from-pink-500 to-indigo-600 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 hover:from-pink-600 hover:to-indigo-700">
                    Каталог моделей
                </a>
                <a href="#testimonials" class="px-8 py-4 bg-white/10 text-white font-semibold rounded-full border border-white/20 backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
                    Отзывы клиентов
                </a>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-10">
            <div class="animate-bounce w-8 h-14 rounded-full border-2 border-white/50 flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2"></div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute -top-32 -left-32 w-64 h-64 rounded-full bg-pink-100 opacity-30"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-indigo-100 opacity-30"></div>
        
        <div class="container mx-auto px-6 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Наши бренды</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-indigo-600 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
                <!-- Brand 1 -->
                <div class="group relative p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-pink-500/20 transition-all duration-300"></div>
                    <img src="https://www.carlogos.org/logo/Geely-logo-2014-1920x1080.png" alt="Geely" class="h-16 mx-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    <h3 class="mt-4 text-center font-medium text-gray-700 group-hover:text-gray-900">Geely</h3>
                </div>
                
                <!-- Brand 2 -->
                <div class="group relative p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-indigo-500/20 transition-all duration-300"></div>
                    <img src="https://www.carlogos.org/logo/Changan-logo-2010-1920x1080.png" alt="Changan" class="h-16 mx-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    <h3 class="mt-4 text-center font-medium text-gray-700 group-hover:text-gray-900">Changan</h3>
                </div>
                
                <!-- Brand 3 -->
                <div class="group relative p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-pink-500/20 transition-all duration-300"></div>
                    <img src="https://www.carlogos.org/logo/Chery-logo-2013-1920x1080.png" alt="Chery" class="h-16 mx-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    <h3 class="mt-4 text-center font-medium text-gray-700 group-hover:text-gray-900">Chery</h3>
                </div>
                
                <!-- Brand 4 -->
                <div class="group relative p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-indigo-500/20 transition-all duration-300"></div>
                    <img src="https://www.carlogos.org/logo/Great-Wall-logo-1920x1080.png" alt="Great Wall" class="h-16 mx-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    <h3 class="mt-4 text-center font-medium text-gray-700 group-hover:text-gray-900">Great Wall</h3>
                </div>
                
                <!-- Brand 5 -->
                <div class="group relative p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-pink-500/20 transition-all duration-300"></div>
                    <img src="https://www.carlogos.org/logo/SAIC-Motor-logo-1920x1080.png" alt="SAIC" class="h-16 mx-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    <h3 class="mt-4 text-center font-medium text-gray-700 group-hover:text-gray-900">SAIC</h3>
                </div>
                
                <!-- Brand 6 -->
                <div class="group relative p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="absolute inset-0 rounded-xl border-2 border-transparent group-hover:border-indigo-500/20 transition-all duration-300"></div>
                    <img src="https://www.carlogos.org/logo/FAW-logo-2010-1920x1080.png" alt="FAW" class="h-16 mx-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                    <h3 class="mt-4 text-center font-medium text-gray-700 group-hover:text-gray-900">FAW</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Cars Section -->
    <section id="models" class="py-20 bg-gray-50 relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-white via-transparent to-transparent opacity-50"></div>
        <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-indigo-100 opacity-20"></div>
        
        <div class="container mx-auto px-6 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Популярные модели</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-indigo-600 mx-auto"></div>
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
                <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Geely Coolray" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent"></div>
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-pink-500 text-white text-xs font-semibold rounded-full">НОВИНКА</span>
                        </div>
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
                <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1544636331-e26879cd4d9b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Changan UNI-K" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
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
                <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-64">
                        <img src="https://images.unsplash.com/photo-1550355291-bbee04a92027?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Chery Tiggo 8 Pro" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent"></div>
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-indigo-500 text-white text-xs font-semibold rounded-full">ВЫГОДА</span>
                        </div>
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
    <section class="py-20 bg-gradient-to-br from-indigo-900 to-gray-900 text-white relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute top-1/4 left-1/4 w-32 h-32 rounded-full bg-pink-500 filter blur-3xl"></div>
            <div class="absolute bottom-1/3 right-1/3 w-40 h-40 rounded-full bg-indigo-500 filter blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-6 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Почему выбирают EMAX</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-indigo-400 mx-auto"></div>
                <p class="mt-4 text-lg text-indigo-200 max-w-2xl mx-auto">
                    Мы предлагаем не просто автомобили, а премиальный опыт владения
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Advantage 1 -->
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8 border border-white/10 hover:border-pink-500/30 transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-14 h-14 bg-pink-500/10 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Гарантия 5 лет</h3>
                    <p class="text-indigo-200">Самая продолжительная гарантия на рынке премиальных автомобилей</p>
                </div>
                
                <!-- Advantage 2 -->
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8 border border-white/10 hover:border-indigo-500/30 transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-14 h-14 bg-indigo-500/10 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Выгодный кредит</h3>
                    <p class="text-indigo-200">Специальные программы кредитования от 3.9% годовых</p>
                </div>
                
                <!-- Advantage 3 -->
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8 border border-white/10 hover:border-pink-500/30 transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-14 h-14 bg-pink-500/10 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Trade-in</h3>
                    <p class="text-indigo-200">Выгодный обмен вашего автомобиля с доплатой</p>
                </div>
                
                <!-- Advantage 4 -->
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8 border border-white/10 hover:border-indigo-500/30 transition-all duration-300 transform hover:-translate-y-2">
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
    <section id="testimonials" class="py-20 bg-white relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute -top-32 -right-32 w-64 h-64 rounded-full bg-pink-100 opacity-20"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 rounded-full bg-indigo-100 opacity-20"></div>
        
        <div class="container mx-auto px-6 relative">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Отзывы клиентов</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-indigo-600 mx-auto"></div>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Что говорят наши клиенты о своем опыте с EMAX
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 rounded-2xl p-8 relative overflow-hidden">
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
                <div class="bg-gray-50 rounded-2xl p-8 relative overflow-hidden">
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
                <div class="bg-gray-50 rounded-2xl p-8 relative overflow-hidden">
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
    <section class="py-20 bg-gradient-to-br from-indigo-900 to-gray-900 text-white relative overflow-hidden">
        <!-- Decorative elements -->
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
                    <a href="#" class="px-8 py-4 bg-gradient-to-r from-pink-500 to-indigo-600 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 hover:from-pink-600 hover:to-indigo-700 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        Заказать звонок
                    </a>
                    <a href="#" class="px-8 py-4 bg-white/10 text-white font-semibold rounded-full border border-white/20 backdrop-blur-sm hover:bg-white/20 transition-all duration-300 flex items-center justify-center">
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
    <footer class="bg-gray-900 text-gray-400 py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">EMAX</h3>
                    <p class="mb-4">Официальный дилер премиальных китайских автомобилей в России</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Модели</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-colors">Geely</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Changan</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Chery</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Great Wall</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">FAW</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Компания</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-colors">О нас</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Контакты</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Вакансии</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Новости</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Блог</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Контакты</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Москва, ул. Автодилерская, 12
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +7 (495) 123-45-67
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            info@emax-auto.ru
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center">
                <p>© 2023 EMAX Auto. Все права защищены.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white">Политика конфиденциальности</a>
                    <a href="#" class="text-gray-400 hover:text-white">Условия использования</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Simple animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fadeInUp');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.brand-card, .car-card, .advantage-card, .testimonial-card').forEach(card => {
                observer.observe(card);
                card.classList.add('opacity-0', 'transition-all', 'duration-500', 'ease-out');
            });

            // Add animation classes when element is in view
            const animateOnScroll = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        entry.target.classList.remove('opacity-0', 'translate-y-4');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('[data-animate]').forEach(el => {
                el.classList.add('opacity-0', 'translate-y-4', 'transition-all', 'duration-500', 'ease-out');
                animateOnScroll.observe(el);
            });
        });
    </script>
</body>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>EMAX - Премиальные китайские автомобили</h1>
            <p>Откройте для себя новый уровень комфорта и технологий по доступной цене</p>
            <a href="#cars" class="cta-button">Выбрать автомобиль</a>
        </div>
    </section>

    <section class="brands-showcase">
    <h2 class="section-title">Наши бренды</h2>
    <div class="brands-grid">
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Geely_Logo.svg/1200px-Geely_Logo.svg.png" alt="Geely" class="brand-logo">
            <div class="brand-name">Geely</div>
        </div>
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Haval_Logo.png/800px-Haval_Logo.png" alt="Haval" class="brand-logo">
            <div class="brand-name">Haval</div>
        </div>
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Changan_Auto_logo.svg/1200px-Changan_Auto_logo.svg.png" alt="Changan" class="brand-logo">
            <div class="brand-name">Changan</div>
        </div>
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Chery_Logo.svg/1200px-Chery_Logo.svg.png" alt="Chery" class="brand-logo">
            <div class="brand-name">Chery</div>
        </div>
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Exeed_Logo.svg/1200px-Exeed_Logo.svg.png" alt="Exeed" class="brand-logo">
            <div class="brand-name">Exeed</div>
        </div>
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Lynk_%26_Co_logo.svg/1200px-Lynk_%26_Co_logo.svg.png" alt="Lynk & Co" class="brand-logo">
            <div class="brand-name">Lynk & Co</div>
        </div>
    </div>
</section>

<style>
    .brands-showcase {
        padding: 40px 20px;
        background-color: #f8f9fa;
        text-align: center;
    }
    
    .section-title {
        font-size: 2rem;
        margin-bottom: 30px;
        color: #333;
    }
    
    .brands-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .brand-card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .brand-logo {
        width: 100%;
        max-width: 120px;
        height: auto;
        margin: 0 auto 15px;
        transition: all 0.3s ease;
    }
    
    .brand-name {
        font-weight: 600;
        color: #333;
    }
    
    /* Разные анимации при наведении */
    .brands-grid div:nth-child(1):hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 20px rgba(0,0,0,0.1);
    }
    
    .brands-grid div:nth-child(2):hover {
        transform: rotate(2deg) scale(1.05);
    }
    
    .brands-grid div:nth-child(3):hover {
        background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%);
    }
    
    .brands-grid div:nth-child(4):hover {
        border: 2px solid #007bff;
        transform: scale(1.03);
    }
    
    .brands-grid div:nth-child(5):hover .brand-logo {
        transform: scale(1.2);
    }
    
    .brands-grid div:nth-child(6):hover {
        animation: pulse 1s infinite;
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    
    /* Дополнительные эффекты для логотипов */
    .brands-grid div:nth-child(1):hover .brand-logo {
        filter: drop-shadow(0 5px 5px rgba(0,100,255,0.3));
    }
    
    .brands-grid div:nth-child(2):hover .brand-logo {
        filter: brightness(1.1);
    }
    
    .brands-grid div:nth-child(3):hover .brand-name {
        color: #007bff;
        font-weight: 700;
    }
</style>

    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMAX - Галерея автомобилей</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --card-shadow-hover: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        body {
            font-family: 'Segoe UI', 'Roboto', system-ui, -apple-system, sans-serif;
            margin: 0;
            padding: 0;
            color: var(--dark);
            background-color: #f5f7fa;
            line-height: 1.6;
        }

        /* Featured Cars Section */
        .featured-cars {
            padding: 80px 0;
            background-color: white;
            position: relative;
            overflow: hidden;
        }

        .featured-cars::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            clip-path: polygon(0 0, 100% 0, 100% 70%, 0 100%);
            z-index: 0;
        }

        .cars-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }

        .section-title {
            font-size: 2.5rem;
            color: white;
            margin-bottom: 40px;
            font-weight: 700;
            position: relative;
            display: inline-block;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background-color: var(--accent);
            border-radius: 2px;
        }

        /* Filter Styles */
        .cars-filter {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 40px;
            align-items: center;
        }

        .filter-button {
            padding: 12px 24px;
            background-color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            font-weight: 500;
            color: var(--gray);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        .filter-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }

        .filter-button:hover {
            color: var(--primary);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .filter-button.active {
            color: white;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            box-shadow: 0 5px 15px rgba(26, 62, 114, 0.3);
        }

        .filter-button.active:hover {
            transform: none;
        }

        /* Cars Grid */
        .cars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
        }

        .car-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            position: relative;
            cursor: pointer;
            z-index: 1;
        }

        .car-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--card-shadow-hover);
            z-index: 2;
        }

        .car-image-container {
            height: 220px;
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .car-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .car-card:hover .car-image {
            transform: scale(1.05);
        }

        .car-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--accent);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .car-details {
            padding: 20px;
        }

        .car-title {
            font-size: 1.4rem;
            margin-bottom: 8px;
            color: var(--primary);
            font-weight: 700;
        }

        .car-year {
            font-size: 0.9rem;
            color: var(--gray);
            margin-bottom: 5px;
        }

        .car-price {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--secondary);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .car-price span {
            font-size: 1rem;
            color: var(--gray);
            margin-left: 5px;
            font-weight: 400;
        }

        .car-features {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .feature {
            background-color: var(--light-gray);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            color: var(--dark);
        }

        .car-actions {
            display: flex;
            gap: 10px;
        }

        .view-button {
            flex: 1;
            text-align: center;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(26, 62, 114, 0.2);
        }

        .view-button:hover {
            background: linear-gradient(135deg, var(--primary-light), var(--primary));
            box-shadow: 0 5px 15px rgba(26, 62, 114, 0.3);
            transform: translateY(-2px);
        }

        .quick-view-button {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            border: 1px solid var(--light-gray);
            border-radius: 8px;
            color: var(--primary);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .quick-view-button:hover {
            background-color: var(--light-gray);
            color: var(--primary-light);
        }

        /* Modal Styles */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }

        .modal.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background-color: white;
            border-radius: 16px;
            width: 90%;
            max-width: 1000px;
            max-height: 90vh;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .modal.active .modal-content {
            transform: scale(1);
        }

        .modal-header {
            padding: 20px;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0;
        }

        .modal-close {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 5px;
        }

        .modal-body {
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .modal-gallery {
            height: 400px;
            position: relative;
            overflow: hidden;
        }

        .modal-main-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.3s ease;
        }

        .modal-thumbnails {
            display: flex;
            padding: 15px;
            gap: 10px;
            overflow-x: auto;
            background-color: var(--light-gray);
        }

        .modal-thumbnail {
            width: 80px;
            height: 60px;
            border-radius: 4px;
            object-fit: cover;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .modal-thumbnail:hover, .modal-thumbnail.active {
            border-color: var(--accent);
        }

        .modal-details {
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .modal-price {
            font-size: 2rem;
            font-weight: 700;
            color: var(--secondary);
            margin-bottom: 15px;
        }

        .modal-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-bottom: 20px;
        }

        .modal-feature {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .modal-feature i {
            color: var(--accent);
            width: 20px;
            text-align: center;
        }

        .modal-description {
            grid-column: span 2;
            color: var(--gray);
            line-height: 1.6;
        }

        .modal-actions {
            grid-column: span 2;
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .modal-button {
            flex: 1;
            padding: 15px;
            border-radius: 8px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .modal-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            box-shadow: 0 2px 8px rgba(26, 62, 114, 0.2);
        }

        .modal-primary:hover {
            background: linear-gradient(135deg, var(--primary-light), var(--primary));
            box-shadow: 0 5px 15px rgba(26, 62, 114, 0.3);
            transform: translateY(-2px);
        }

        .modal-secondary {
            background-color: white;
            border: 1px solid var(--light-gray);
            color: var(--primary);
        }

        .modal-secondary:hover {
            background-color: var(--light-gray);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }
            
            .cars-grid {
                grid-template-columns: 1fr;
            }
            
            .modal-details {
                grid-template-columns: 1fr;
            }
            
            .modal-description, .modal-actions {
                grid-column: span 1;
            }
            
            .modal-gallery {
                height: 250px;
            }
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .car-card {
            animation: fadeIn 0.5s ease-out forwards;
            opacity: 0;
        }

        .car-card:nth-child(1) { animation-delay: 0.1s; }
        .car-card:nth-child(2) { animation-delay: 0.2s; }
        .car-card:nth-child(3) { animation-delay: 0.3s; }
        .car-card:nth-child(4) { animation-delay: 0.4s; }
        .car-card:nth-child(5) { animation-delay: 0.5s; }
        .car-card:nth-child(6) { animation-delay: 0.6s; }
    </style>
</head>
<body>
    <section class="featured-cars" id="cars">
        <div class="cars-container">
            <h2 class="section-title">Популярные модели</h2>
            
            <div class="cars-filter">
                <button class="filter-button active">Все</button>
                <button class="filter-button">Седаны</button>
                <button class="filter-button">Кроссоверы</button>
                <button class="filter-button">Внедорожники</button>
                <button class="filter-button">Электромобили</button>
                <button class="filter-button">До 2 млн ₽</button>
                <button class="filter-button">Премиум</button>
            </div>
            
           <div class="cars-grid">
    <!-- Zeekr 7X 2025 -->
    <div class="car-card" data-car="zeekr-7x">
        <div class="car-image-container">
            <img src="https://cdn.motor1.com/images/mgl/6ZZv2O/s1/zeekr-7x.webp" alt="Zeekr 7X 2025" class="car-image">
            <div class="car-badge">Новинка 2025</div>
        </div>
        <div class="car-details">
            <h3 class="car-title">Zeekr 7X</h3>
            <div class="car-year">2025 год</div>
            <div class="car-price">4 200 000 <span>₽</span></div>
            <div class="car-features">
                <span class="feature">Электрокроссовер</span>
                <span class="feature">544 л.с.</span>
                <span class="feature">0-100 за 3.8с</span>
                <span class="feature">Запас хода 615 км</span>
            </div>
            <div class="car-actions">
                <button class="quick-view-button" data-car="zeekr-7x">
                    <i class="fas fa-expand"></i>
                </button>
                <a href="{{ route('lisan') }}" class="view-button">Подробнее</a>
            </div>
        </div>
    </div>
    
    <!-- BYD Yangwang U8 2023 -->
    <div class="car-card" data-car="byd-yangwang-u8">
        <div class="car-image-container">
            <img src="https://cdn.motor1.com/images/mgl/4MqAe/s1/byd-yangwang-u8.webp" alt="BYD Yangwang U8" class="car-image">
            <div class="car-badge">Luxury</div>
        </div>
        <div class="car-details">
            <h3 class="car-title">BYD Yangwang U8</h3>
            <div class="car-year">2023 год</div>
            <div class="car-price">15 990 000 <span>₽</span></div>
            <div class="car-features">
                <span class="feature">Гибридный внедорожник</span>
                <span class="feature">1184 л.с.</span>
                <span class="feature">0-100 за 3.6с</span>
                <span class="feature">Плавающий</span>
            </div>
            <div class="car-actions">
                <button class="quick-view-button" data-car="byd-yangwang-u8">
                    <i class="fas fa-expand"></i>
                </button>
                <a href="{{ route('byd_yangwang_u8') }}" class="view-button">Подробнее</a>
            </div>
        </div>
    </div>
</div>
                
                <!-- Car 3 -->
                <div class="car-card" data-car="exeed-txl">
                    <div class="car-image-container">
                        <img src="https://example.com/exeed-txl.jpg" alt="Exeed TXL" class="car-image">
                        <div class="car-badge">Премиум</div>
                    </div>
                    <div class="car-details">
                        <h3 class="car-title">Exeed TXL</h3>
                        <div class="car-year">2023 год</div>
                        <div class="car-price">2 990 000 <span>₽</span></div>
                        <div class="car-features">
                            <span class="feature">Премиум SUV</span>
                            <span class="feature">2.0T</span>
                            <span class="feature">249 л.с.</span>
                            <span class="feature">Полный привод</span>
                        </div>
                        <div class="car-actions">
                            <button class="quick-view-button" data-car="exeed-txl">
                                <i class="fas fa-expand"></i>
                            </button>
                            <a href="/cars/exeed-txl" class="view-button">Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <!-- Car 4 -->
                <div class="car-card" data-car="changan-uni-v">
                    <div class="car-image-container">
                        <img src="https://example.com/changan-uni-v.jpg" alt="Changan UNI-V" class="car-image">
                        <div class="car-badge">Спорт</div>
                    </div>
                    <div class="car-details">
                        <h3 class="car-title">Changan UNI-V</h3>
                        <div class="car-year">2023 год</div>
                        <div class="car-price">2 150 000 <span>₽</span></div>
                        <div class="car-features">
                            <span class="feature">Спорт-седан</span>
                            <span class="feature">1.5T</span>
                            <span class="feature">188 л.с.</span>
                            <span class="feature">7DCT</span>
                        </div>
                        <div class="car-actions">
                            <button class="quick-view-button" data-car="changan-uni-v">
                                <i class="fas fa-expand"></i>
                            </button>
                            <a href="/cars/changan-uni-v" class="view-button">Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <!-- Car 5 -->
                <div class="car-card" data-car="geely-tugella">
                    <div class="car-image-container">
                        <img src="https://example.com/geely-tugella.jpg" alt="Geely Tugella" class="car-image">
                    </div>
                    <div class="car-details">
                        <h3 class="car-title">Geely Tugella</h3>
                        <div class="car-year">2023 год</div>
                        <div class="car-price">2 750 000 <span>₽</span></div>
                        <div class="car-features">
                            <span class="feature">Кроссовер</span>
                            <span class="feature">2.0T</span>
                            <span class="feature">238 л.с.</span>
                            <span class="feature">AWD</span>
                        </div>
                        <div class="car-actions">
                            <button class="quick-view-button" data-car="geely-tugella">
                                <i class="fas fa-expand"></i>
                            </button>
                            <a href="/cars/geely-tugella" class="view-button">Подробнее</a>
                        </div>
                    </div>
                </div>
                
                <!-- Car 6 -->
                <div class="car-card" data-car="byd-han">
                    <div class="car-image-container">
                        <img src="https://example.com/byd-han.jpg" alt="BYD Han" class="car-image">
                        <div class="car-badge">Электро</div>
                    </div>
                    <div class="car-details">
                        <h3 class="car-title">BYD Han EV</h3>
                        <div class="car-year">2023 год</div>
                        <div class="car-price">3 490 000 <span>₽</span></div>
                        <div class="car-features">
                            <span class="feature">Электромобиль</span>
                            <span class="feature">517 л.с.</span>
                            <span class="feature">600 км заряд</span>
                            <span class="feature">4WD</span>
                        </div>
                        <div class="car-actions">
                            <button class="quick-view-button" data-car="byd-han">
                                <i class="fas fa-expand"></i>
                            </button>
                            <a href="/cars/byd-han" class="view-button">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Template -->
    <div class="modal" id="carModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modalCarTitle">Geely Coolray</h3>
                <button class="modal-close" id="modalClose">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-gallery">
                    <img src="" alt="" class="modal-main-image" id="modalMainImage">
                </div>
                <div class="modal-thumbnails" id="modalThumbnails">
                    <!-- Thumbnails will be added here by JavaScript -->
                </div>
                <div class="modal-details">
                    <div class="modal-price" id="modalPrice">1 899 000 ₽</div>
                    <div class="modal-features" id="modalFeatures">
                        <!-- Features will be added here by JavaScript -->
                    </div>
                    <div class="modal-description" id="modalDescription">
                        Современный компактный кроссовер Geely Coolray сочетает в себе динамичный дизайн, передовые технологии и отличные ходовые качества. Идеальный выбор для города и загородных поездок.
                    </div>
                    <div class="modal-actions">
                        <a href="#" class="modal-button modal-primary" id="modalDetailsLink">Подробнее</a>
                        <a href="#" class="modal-button modal-secondary">Запись на тест-драйв</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Modal functionality
        const modal = document.getElementById('carModal');
        const modalClose = document.getElementById('modalClose');
        const quickViewButtons = document.querySelectorAll('.quick-view-button');
        const carCards = document.querySelectorAll('.car-card');
        
        // Sample car data (in real app, this would come from API)
        const carsData = {
            'geely-coolray': {
                title: 'Geely Coolray 2023',
                price: '1 899 000 ₽',
                images: [
                    'https://example.com/geely-coolray.jpg',
                    'https://example.com/geely-coolray-2.jpg',
                    'https://example.com/geely-coolray-3.jpg',
                    'https://example.com/geely-coolray-4.jpg'
                ],
                features: [
                    { icon: 'fas fa-car', text: 'Кроссовер' },
                    { icon: 'fas fa-tachometer-alt', text: '1.5T, 177 л.с.' },
                    { icon: 'fas fa-cog', text: 'Автоматическая коробка' },
                    { icon: 'fas fa-gas-pump', text: '7.5 л/100км' },
                    { icon: 'fas fa-users', text: '5 мест' },
                    { icon: 'fas fa-bolt', text: 'Разгон 0-100 за 7.9с' }
                ],
                description: 'Современный компактный кроссовер Geely Coolray сочетает в себе динамичный дизайн, передовые технологии и отличные ходовые качества. Идеальный выбор для города и загородных поездок.',
                link: '/cars/geely-coolray'
            },
            'haval-jolion': {
                title: 'Haval Jolion 2023',
                price: '1 950 000 ₽',
                images: [
                    'https://example.com/haval-jolion.jpg',
                    'https://example.com/haval-jolion-2.jpg',
                    'https://example.com/haval-jolion-3.jpg'
                ],
                features: [
                    { icon: 'fas fa-car', text: 'Кроссовер' },
                    { icon: 'fas fa-tachometer-alt', text: '1.5T, 150 л.с.' },
                    { icon: 'fas fa-cog', text: 'Вариатор' },
                    { icon: 'fas fa-gas-pump', text: '7.8 л/100км' },
                    { icon: 'fas fa-users', text: '5 мест' },
                    { icon: 'fas fa-shield-alt', text: '5 звезд безопасности' }
                ],
                description: 'Haval Jolion - стильный и практичный кроссовер с просторным салоном и современными системами безопасности. Отличное сочетание цены и качества.',
                link: '/cars/haval-jolion'
            }
            // Add data for other cars similarly
        };

        // Open modal with car data
        function openModal(carId) {
            const carData = carsData[carId];
            if (!carData) return;
            
            // Set modal content
            document.getElementById('modalCarTitle').textContent = carData.title;
            document.getElementById('modalPrice').textContent = carData.price;
            document.getElementById('modalDescription').textContent = carData.description;
            document.getElementById('modalDetailsLink').href = carData.link;
            
            // Set main image
            const mainImage = document.getElementById('modalMainImage');
            mainImage.src = carData.images[0];
            mainImage.alt = carData.title;
            
            // Set thumbnails
            const thumbnailsContainer = document.getElementById('modalThumbnails');
            thumbnailsContainer.innerHTML = '';
            
            carData.images.forEach((img, index) => {
                const thumbnail = document.createElement('img');
                thumbnail.src = img;
                thumbnail.alt = `${carData.title} - фото ${index + 1}`;
                thumbnail.className = 'modal-thumbnail' + (index === 0 ? ' active' : '');
                thumbnail.addEventListener('click', () => {
                    mainImage.src = img;
                    document.querySelectorAll('.modal-thumbnail').forEach(t => t.classList.remove('active'));
                    thumbnail.classList.add('active');
                });
                thumbnailsContainer.appendChild(thumbnail);
            });
            
            // Set features
            const featuresContainer = document.getElementById('modalFeatures');
            featuresContainer.innerHTML = '';
            
            carData.features.forEach(feature => {
                const featureElement = document.createElement('div');
                featureElement.className = 'modal-feature';
                featureElement.innerHTML = `
                    <i class="${feature.icon}"></i>
                    <span>${feature.text}</span>
                `;
                featuresContainer.appendChild(featureElement);
            });
            
            // Show modal
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        // Close modal
        function closeModal() {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Event listeners
        modalClose.addEventListener('click', closeModal);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });

        quickViewButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.stopPropagation();
                const carId = button.getAttribute('data-car');
                openModal(carId);
            });
        });

        carCards.forEach(card => {
            card.addEventListener('click', (e) => {
                // If click was on a link or button, don't redirect
                if (e.target.tagName === 'A' || e.target.tagName === 'BUTTON' || e.target.closest('a') || e.target.closest('button')) {
                    return;
                }
                
                const carId = card.getAttribute('data-car');
                window.location.href = `/cars/${carId}`;
            });
        });

        // Filter functionality (simplified)
        const filterButtons = document.querySelectorAll('.filter-button');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                
                // In real app, you would filter cars here
                // This is just for demonstration
                document.querySelectorAll('.car-card').forEach(card => {
                    card.style.display = 'block';
                });
            });
        });
    </script>
</body>
    <!-- Advantages -->
    <section class="advantages-section">
    <div class="advantages-container">
        <h2 class="section-title" data-aos="fade-up">Ваши преимущества с <span class="emax-highlight">EMAX</span></h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Тысячи клиентов уже оценили наш сервис и качество</p>
        
        <div class="advantages-grid">
            <!-- Преимущество 1 -->
            <div class="advantage-card" data-aos="fade-up" data-aos-delay="200">
                <div class="advantage-icon-wrapper">
                    <svg class="advantage-icon" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M32 2L2 18v28l30 16 30-16V18L32 2z"/>
                        <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M32 2v60"/>
                        <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M2 18l30 16 30-16"/>
                    </svg>
                </div>
                <h3 class="advantage-title">5 лет гарантии</h3>
                <p class="advantage-text">Самые надёжные условия на китайские авто</p>
                <div class="glow-effect"></div>
            </div>
            
            <!-- Преимущество 2 -->
            <div class="advantage-card" data-aos="fade-up" data-aos-delay="300">
                <div class="advantage-icon-wrapper">
                    <svg class="advantage-icon" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M48 40l16-8-16-8M16 40L0 32l16-8"/>
                        <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M48 24l-8 16H24L16 24l8-16h16l8 16z"/>
                    </svg>
                </div>
                <h3 class="advantage-title">Быстрая доставка</h3>
                <p class="advantage-text">Машина у вас уже через 2–4 недели</p>
                <div class="glow-effect"></div>
            </div>
            
            <!-- Преимущество 3 -->
            <div class="advantage-card" data-aos="fade-up" data-aos-delay="400">
                <div class="advantage-icon-wrapper">
                    <svg class="advantage-icon" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M32 2v60M2 18l30 16 30-16"/>
                        <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M2 18v28l30 16 30-16V18"/>
                        <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M32 2L2 18v28l30 16 30-16V18L32 2z"/>
                        <circle fill="currentColor" cx="32" cy="32" r="8" stroke="none"/>
                    </svg>
                </div>
                <h3 class="advantage-title">Льготный кредит от 5.9%</h3>
                <p class="advantage-text">Индивидуальные условия по программам</p>
                <div class="glow-effect"></div>
            </div>
            
            <!-- Преимущество 4 -->
            <div class="advantage-card" data-aos="fade-up" data-aos-delay="500">
                <div class="advantage-icon-wrapper">
                    <svg class="advantage-icon" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M32 2v60M2 18l30 16 30-16"/>
                        <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M2 18v28l30 16 30-16V18"/>
                        <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M32 2L2 18v28l30 16 30-16V18L32 2z"/>
                        <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M20 32l4 4 8-8"/>
                    </svg>
                </div>
                <h3 class="advantage-title">Собственный сервис</h3>
                <p class="advantage-text">Оригинальные детали, техобслуживание и забота</p>
                <div class="glow-effect"></div>
            </div>
        </div>
        
        <div class="cta-wrapper" data-aos="fade-up" data-aos-delay="600">
            <a href="#guarantee" class="cta-button">Узнать больше о нашей гарантии</a>
        </div>
    </div>
</section>

<style>
    :root {
        --primary-dark: #0B0F1A;
        --secondary-dark: #111827;
        --accent-blue: #00a8ff;
        --accent-green: #00ff88;
        --text-light: #ffffff;
        --text-gray: #94a3b8;
    }
    
    .advantages-section {
        background: linear-gradient(135deg, var(--primary-dark), var(--secondary-dark));
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }
    
    .advantages-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 2;
    }
    
    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 15px;
        background: linear-gradient(to right, var(--accent-blue), var(--accent-green));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }
    
    .emax-highlight {
        font-weight: 800;
        position: relative;
        display: inline-block;
    }
    
    .emax-highlight::after {
        content: '';
        position: absolute;
        bottom: 5px;
        left: 0;
        width: 100%;
        height: 8px;
        background: rgba(0, 168, 255, 0.3);
        z-index: -1;
        border-radius: 4px;
    }
    
    .section-subtitle {
        font-size: 1.2rem;
        color: var(--text-gray);
        text-align: center;
        max-width: 600px;
        margin: 0 auto 50px;
    }
    
    .advantages-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-bottom: 50px;
    }
    
    .advantage-card {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        padding: 30px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .advantage-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 168, 255, 0.2);
        border-color: rgba(0, 168, 255, 0.3);
    }
    
    .advantage-icon-wrapper {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        background: linear-gradient(135deg, rgba(0, 168, 255, 0.2), rgba(0, 255, 136, 0.2));
        position: relative;
    }
    
    .advantage-icon {
        width: 40px;
        height: 40px;
        color: var(--accent-blue);
    }
    
    .advantage-card:hover .advantage-icon {
        animation: pulse 1.5s infinite;
    }
    
    .advantage-title {
        font-size: 1.4rem;
        font-weight: 600;
        color: var(--text-light);
        text-align: center;
        margin-bottom: 15px;
    }
    
    .advantage-text {
        font-size: 1rem;
        color: var(--text-gray);
        text-align: center;
        line-height: 1.6;
    }
    
    .glow-effect {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at center, rgba(0, 168, 255, 0.1) 0%, transparent 70%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .advantage-card:hover .glow-effect {
        opacity: 1;
    }
    
    .cta-wrapper {
        text-align: center;
    }
    
    .cta-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 15px 30px;
        border-radius: 8px;
        background: linear-gradient(to right, var(--accent-blue), var(--accent-green));
        color: var(--primary-dark);
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border: none;
        cursor: pointer;
    }
    
    .cta-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: all 0.6s ease;
    }
    
    .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 168, 255, 0.3);
    }
    
    .cta-button:hover::before {
        left: 100%;
    }
    
    /* Анимации */
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }
    
    /* Фоновые элементы */
    .advantages-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle at center, rgba(0, 168, 255, 0.03) 0%, transparent 70%);
        animation: rotate 60s linear infinite;
        z-index: 1;
    }
    
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    /* Адаптивность */
    @media (max-width: 768px) {
        .advantages-section {
            padding: 60px 0;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .section-subtitle {
            font-size: 1rem;
            margin-bottom: 30px;
        }
        
        .advantages-grid {
            grid-template-columns: 1fr;
            max-width: 400px;
            margin: 0 auto 30px;
        }
        
        .advantage-card {
            padding: 25px;
        }
    }
</style>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Инициализация анимаций при скролле
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-out-quart'
        });
    });
</script>

    
  <section class="cta-section" id="cta-section">
    <div class="cta-container">
        <!-- Текстовый контент -->
        <div class="cta-content">
            <h2 class="cta-title">Испытай будущее за рулём уже сегодня!</h2>
            <p class="cta-text">Запишитесь на <strong>бесплатный тест-драйв</strong> понравившейся модели или получите персональное предложение от нашего менеджера</p>
            
            <div class="cta-buttons">
                <a href="#test-drive-form" class="cta-button cta-button-primary" data-modal="test-drive">
                    <svg class="cta-icon" viewBox="0 0 24 24" width="20" height="20">
                        <path fill="currentColor" d="M5,11L6.5,6.5H17.5L19,11M17.5,16A1.5,1.5 0 0,1 16,14.5A1.5,1.5 0 0,1 17.5,13A1.5,1.5 0 0,1 19,14.5A1.5,1.5 0 0,1 17.5,16M6.5,16A1.5,1.5 0 0,1 5,14.5A1.5,1.5 0 0,1 6.5,13A1.5,1.5 0 0,1 8,14.5A1.5,1.5 0 0,1 6.5,16M18.92,6C18.72,5.42 18.16,5 17.5,5H6.5C5.84,5 5.28,5.42 5.08,6L3,12V20A1,1 0 0,0 4,21H5A1,1 0 0,0 6,20V19H18V20A1,1 0 0,0 19,21H20A1,1 0 0,0 21,20V12L18.92,6Z"/>
                    </svg>
                    Записаться на тест-драйв
                </a>
                
                <a href="#consultation" class="cta-button cta-button-secondary" data-modal="consultation">
                    <svg class="cta-icon" viewBox="0 0 24 24" width="20" height="20">
                        <path fill="currentColor" d="M20,2H4A2,2 0 0,0 2,4V22L6,18H20A2,2 0 0,0 22,16V4A2,2 0 0,0 20,2M6,9H18V11H6M14,14H6V12H14M18,8H6V6H18"/>
                    </svg>
                    Получить консультацию
                </a>
            </div>
        </div>
        
        <!-- Иллюстрация -->
        <div class="cta-image">
            <!-- SVG автомобиля с анимацией -->
            <svg class="car-illustration" viewBox="0 0 600 400" xmlns="http://www.w3.org/2000/svg">
                <!-- Фон города -->
                <rect x="0" y="250" width="600" height="150" fill="#1a2a3a"/>
                <!-- Здания -->
                <rect x="50" y="150" width="40" height="100" fill="#2d3e50"/>
                <rect x="120" y="100" width="60" height="150" fill="#34495e"/>
                <rect x="220" y="180" width="50" height="70" fill="#2d3e50"/>
                <rect x="300" y="120" width="70" height="130" fill="#34495e"/>
                <rect x="400" y="160" width="40" height="90" fill="#2d3e50"/>
                <rect x="470" y="200" width="60" height="50" fill="#34495e"/>
                
                <!-- Автомобиль -->
                <g class="car-body" transform="translate(100, 220)">
                    <path d="M50,50 L150,50 L180,80 L250,80 L280,50 L350,50 L370,70 L370,120 L350,140 L280,140 L270,130 L180,130 L170,140 L100,140 L80,120 L80,70 Z" fill="#00a8ff"/>
                    <rect x="100" y="80" width="80" height="30" fill="#e0f7fa" opacity="0.8"/>
                    <rect x="220" y="80" width="80" height="30" fill="#e0f7fa" opacity="0.8"/>
                    <circle cx="130" cy="140" r="20" fill="#263238"/>
                    <circle cx="130" cy="140" r="10" fill="#37474f"/>
                    <circle cx="270" cy="140" r="20" fill="#263238"/>
                    <circle cx="270" cy="140" r="10" fill="#37474f"/>
                </g>
                
                <!-- Эффекты движения -->
                <line x1="0" y1="250" x2="600" y2="250" stroke="#00a8ff" stroke-width="2" stroke-dasharray="10,5">
                    <animate attributeName="x1" values="0;600" dur="10s" repeatCount="indefinite"/>
                    <animate attributeName="x2" values="600;1200" dur="10s" repeatCount="indefinite"/>
                </line>
            </svg>
        </div>
    </div>
</section>

<style>
    :root {
        --cta-primary: #00ff88;
        --cta-primary-hover: #00e676;
        --cta-secondary: #00a8ff;
        --cta-secondary-hover: #0095e0;
        --cta-text: #ffffff;
        --cta-dark: #1a1a1a;
    }
    
    /* Основные стили секции */
    .cta-section {
        position: relative;
        padding: 80px 0;
        background: linear-gradient(135deg, #1a2a3a 0%, #0f172a 100%);
        overflow: hidden;
        color: var(--cta-text);
    }
    
    .cta-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        z-index: 2;
    }
    
    .cta-content {
        flex: 1;
        max-width: 600px;
        padding-right: 40px;
    }
    
    .cta-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.2;
        background: linear-gradient(to right, var(--cta-primary), var(--cta-secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }
    
    .cta-text {
        font-size: 1.2rem;
        margin-bottom: 30px;
        line-height: 1.6;
        opacity: 0.9;
    }
    
    .cta-text strong {
        color: var(--cta-primary);
        font-weight: 600;
    }
    
    .cta-buttons {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }
    
    .cta-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 15px 30px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        text-align: center;
    }
    
    .cta-icon {
        margin-right: 10px;
        transition: transform 0.3s ease;
    }
    
    .cta-button-primary {
        background-color: var(--cta-primary);
        color: var(--cta-dark);
        box-shadow: 0 4px 15px rgba(0, 255, 136, 0.3);
    }
    
    .cta-button-primary:hover {
        background-color: var(--cta-primary-hover);
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 255, 136, 0.4);
    }
    
    .cta-button-primary:hover .cta-icon {
        transform: translateX(5px);
    }
    
    .cta-button-secondary {
        background-color: transparent;
        color: var(--cta-text);
        border: 2px solid var(--cta-secondary);
    }
    
    .cta-button-secondary:hover {
        background-color: rgba(0, 168, 255, 0.1);
        transform: translateY(-3px);
        border-color: var(--cta-secondary-hover);
    }
    
    .cta-button-secondary:hover .cta-icon {
        transform: translateX(5px);
    }
    
    /* Иллюстрация автомобиля */
    .cta-image {
        flex: 1;
        max-width: 500px;
        position: relative;
    }
    
    .car-illustration {
        width: 100%;
        height: auto;
        filter: drop-shadow(0 10px 20px rgba(0, 168, 255, 0.3));
    }
    
    /* Эффекты фона */
    .cta-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(0,168,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z"><animate attributeName="opacity" values="0.05;0.1;0.05" dur="10s" repeatCount="indefinite"/></path></svg>');
        background-size: 200px 200px;
        opacity: 0.5;
        z-index: 1;
    }
    
    /* Анимация появления */
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
    
    .cta-section {
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
        animation-delay: 0.3s;
    }
    
    /* Адаптивность */
    @media (max-width: 992px) {
        .cta-container {
            flex-direction: column;
            text-align: center;
        }
        
        .cta-content {
            padding-right: 0;
            margin-bottom: 40px;
            max-width: 100%;
        }
        
        .cta-buttons {
            justify-content: center;
        }
        
        .cta-image {
            max-width: 400px;
        }
    }
    
    @media (max-width: 768px) {
        .cta-section {
            padding: 60px 0;
        }
        
        .cta-title {
            font-size: 2rem;
        }
        
        .cta-text {
            font-size: 1.1rem;
        }
        
        .cta-buttons {
            flex-direction: column;
            gap: 15px;
        }
        
        .cta-button {
            width: 100%;
            padding: 12px 20px;
        }
    }
    
    @media (max-width: 480px) {
        .cta-title {
            font-size: 1.8rem;
        }
        
        .cta-image {
            max-width: 300px;
        }
    }
</style>

<script>
    // Инициализация анимации при скролле
    document.addEventListener('DOMContentLoaded', function() {
        // Простая реализация анимации при скролле
        const ctaSection = document.getElementById('cta-section');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                }
            });
        }, { threshold: 0.1 });
        
        observer.observe(ctaSection);
        
        // Обработчики для кнопок (можно заменить на реальные модальные окна)
        document.querySelectorAll('[data-modal]').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const modalType = this.getAttribute('data-modal');
                alert(`Открывается модальное окно: ${modalType}`);
                // Здесь можно добавить код для открытия модального окна
            });
        });
    });
</script>
</body>
@include('footer')
</html>