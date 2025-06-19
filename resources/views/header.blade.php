<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMAX - Китайские автомобили нового поколения</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Heroicons -->
    <script src="https://unpkg.com/@heroicons/react@2.0.16/outline/index.js" defer></script>
    <script src="https://unpkg.com/@heroicons/react@2.0.16/solid/index.js" defer></script>
    <!-- Alpine.js для интерактивности -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Font Awesome для иконок -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Кастомные стили */
        :root {
            --primary: #0f172a;
            --secondary: #1e293b;
            --accent: #3b82f6;
            --accent-hover: #2563eb;
            --cta-color: #10b981;
            --cta-hover: #059669;
            --text: #f8fafc;
            --text-secondary: #94a3b8;
            --header-bg: rgba(15, 23, 42, 0.98);
            --header-border: rgba(255, 255, 255, 0.08);
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            @apply bg-slate-50 text-slate-800;
            padding-top: 80px;
        }
        
        /* Анимации */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }
        
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
        
        .animate-pulse {
            animation: pulse 2s infinite;
        }
        
        /* Эффект стекла */
        .glass-effect {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        /* Градиентный текст */
        .text-gradient {
            background: linear-gradient(90deg, #3b82f6, #10b981);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        /* Кастомный логотип */
        .logo-mark {
            position: relative;
        }
        
        .logo-mark::after {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border: 2px dashed rgba(59, 130, 246, 0.4);
            border-radius: 50%;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .logo:hover .logo-mark::after {
            opacity: 1;
        }
        
        /* Эффект при наведении на навигацию */
        .nav-item {
            position: relative;
        }
        
        .nav-item::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: width 0.3s ease;
        }
        
        .nav-item:hover::after {
            width: 100%;
        }
        
        /* Выпадающее меню */
        .dropdown-enter {
            opacity: 0;
            transform: translateY(-10px);
        }
        
        .dropdown-enter-active {
            opacity: 1;
            transform: translateY(0);
            transition: all 0.2s ease;
        }
        
        .dropdown-exit {
            opacity: 1;
            transform: translateY(0);
        }
        
        .dropdown-exit-active {
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.2s ease;
        }
        
        /* Мобильное меню */
        .mobile-menu {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .mobile-menu-enter {
            transform: translateX(100%);
        }
        
        .mobile-menu-enter-active {
            transform: translateX(0);
        }
        
        .mobile-menu-exit {
            transform: translateX(0);
        }
        
        .mobile-menu-exit-active {
            transform: translateX(100%);
        }
        
        /* Адаптивные стили */
        @media (max-width: 1536px) {
            .container {
                max-width: 1280px;
            }
        }
        
        @media (max-width: 1280px) {
            .container {
                max-width: 1024px;
            }
        }
        
        @media (max-width: 1024px) {
            .container {
                max-width: 768px;
            }
        }
        
        @media (max-width: 768px) {
            .container {
                max-width: 640px;
            }
        }
        
        @media (max-width: 640px) {
            .container {
                max-width: 100%;
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }
    </style>
</head>
<body x-data="{ mobileMenuOpen: false, searchOpen: false, catalogOpen: false, scrolled: false }"
      @scroll.window="scrolled = window.scrollY > 50">
    <!-- Хедер -->
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
            :class="{'shadow-xl': scrolled}"
            style="background: var(--header-bg); border-bottom: 1px solid var(--header-border); height: 80px;">
        <div class="container mx-auto px-4 h-full flex items-center justify-between">
            
            <!-- Логотип -->
            <a href="/" class="logo flex items-center group" aria-label="EMAX - Главная страница">
                <div class="logo-mark mr-2 relative">
                    <svg class="w-8 h-8 group-hover:rotate-6 transition-transform duration-300" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="18" stroke="url(#logo-gradient)" stroke-width="2" stroke-dasharray="0, 8" stroke-linecap="round" fill="none"/>
                        <path d="M12 12L28 28M28 12L12 28" stroke="url(#logo-accent)" stroke-width="3" stroke-linecap="round"/>
                        <defs>
                            <linearGradient id="logo-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#3b82f6"/>
                                <stop offset="100%" stop-color="#10b981"/>
                            </linearGradient>
                            <linearGradient id="logo-accent" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#60a5fa"/>
                                <stop offset="100%" stop-color="#34d399"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <span class="text-xl md:text-2xl font-bold text-gradient font-exo">EMAX</span>
            </a>

            <!-- Основная навигация (десктоп) -->
            <nav class="hidden lg:flex items-center space-x-6">
                <!-- Каталог с выпадающим меню -->
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button @click="open = !open" class="nav-item flex items-center space-x-1 text-white hover:text-blue-400 transition-colors">
                        <span>Каталог</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    
                    <!-- Выпадающее меню -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute left-0 mt-2 w-56 origin-top-left rounded-lg shadow-lg bg-slate-800 ring-1 ring-slate-700 focus:outline-none z-50">
                        <div class="py-1">
                            <a href="/catalog/sedans" class="block px-4 py-2 text-sm text-slate-200 hover:bg-slate-700 hover:text-blue-400 transition-colors">Седаны</a>
                            <a href="/catalog/crossovers" class="block px-4 py-2 text-sm text-slate-200 hover:bg-slate-700 hover:text-blue-400 transition-colors">Кроссоверы</a>
                            <a href="/catalog/electro" class="block px-4 py-2 text-sm text-slate-200 hover:bg-slate-700 hover:text-blue-400 transition-colors">Электромобили</a>
                            <a href="/catalog/hybrids" class="block px-4 py-2 text-sm text-slate-200 hover:bg-slate-700 hover:text-blue-400 transition-colors">Гибриды</a>
                            <div class="border-t border-slate-700 my-1"></div>
                            <a href="/catalog/brands" class="block px-4 py-2 text-sm text-slate-200 hover:bg-slate-700 hover:text-blue-400 transition-colors">По маркам</a>
                        </div>
                    </div>
                </div>
                
                <a href="/test-drive" class="nav-item text-white hover:text-blue-400 transition-colors">Тест-драйв</a>
                <a href="/conditions" class="nav-item text-white hover:text-blue-400 transition-colors">Условия покупки</a>
                <a href="{{ route('onas') }}" class="nav-item text-white hover:text-blue-400 transition-colors">О нас</a>
                <a href="/contacts" class="nav-item text-white hover:text-blue-400 transition-colors">Контакты</a>
            </nav>

            <!-- Правая часть хедера -->
            <div class="flex items-center space-x-4 md:space-x-6">
                <!-- Контакты (десктоп) -->
                <div class="hidden lg:flex items-center space-x-4">
                    <a href="tel:+74951234567" class="flex items-center space-x-2 group">
                        <div class="p-1.5 rounded-full bg-blue-500/10 group-hover:bg-blue-500/20 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <span class="text-white font-medium hidden xl:inline">+7 (495) 123-45-67</span>
                        <span class="text-white font-medium xl:hidden">Позвонить</span>
                    </a>
                    
                    <!-- Социальные сети -->
                    <div class="flex space-x-2">
                        <a href="https://t.me/emax_autoru" class="p-1.5 rounded-full bg-slate-700 hover:bg-blue-500 transition-colors text-white" aria-label="Telegram">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/74951234567" class="p-1.5 rounded-full bg-slate-700 hover:bg-green-500 transition-colors text-white" aria-label="WhatsApp">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.612-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Поиск -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="p-1.5 rounded-full hover:bg-slate-700 transition-colors text-white" aria-label="Поиск">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                        
                        <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="absolute right-0 mt-2 w-72 origin-top-right rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50 p-2">
                            <div class="relative">
                                <input type="text" placeholder="Поиск по модели или марке..." 
                                       class="w-full pl-10 pr-4 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <div class="absolute left-3 top-2.5 text-slate-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Кнопка записи на тест-драйв (заменили консультацию) -->
                <a href="/test-drive" class="hidden md:flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                    </svg>
                    <span class="hidden lg:inline">Тест-драйв</span>
                </a>
                
                <!-- Кнопка мобильного меню -->
                <button @click="mobileMenuOpen = true" class="lg:hidden p-2 rounded-full hover:bg-slate-700 transition-colors text-white" aria-label="Меню">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Мобильное меню -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-in-out duration-300"
         x-transition:leave="transition ease-in-out duration-300"
         class="fixed inset-0 z-40 overflow-y-auto bg-slate-900/95 backdrop-blur pt-20 pb-12 px-6"
         style="display: none;">
        <div class="flex justify-end mb-8">
            <button @click="mobileMenuOpen = false" class="p-2 rounded-full hover:bg-slate-800 transition-colors text-white" aria-label="Закрыть меню">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <nav class="flex flex-col space-y-6 mb-10">
            <a href="/catalog" class="text-2xl font-medium text-white hover:text-blue-400 transition-colors">Каталог</a>
            <a href="/test-drive" class="text-2xl font-medium text-white hover:text-blue-400 transition-colors">Тест-драйв</a>
            <a href="/conditions" class="text-2xl font-medium text-white hover:text-blue-400 transition-colors">Условия покупки</a>
            <a href="/about" class="text-2xl font-medium text-white hover:text-blue-400 transition-colors">О нас</a>
            <a href="/contacts" class="text-2xl font-medium text-white hover:text-blue-400 transition-colors">Контакты</a>
        </nav>
        
        <div class="mb-10">
            <a href="tel:+74951234567" class="flex items-center space-x-4 mb-6">
                <div class="p-3 rounded-full bg-blue-500/10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <span class="text-xl font-medium text-white">+7 (495) 123-45-67</span>
            </a>
            
            <div class="flex space-x-4">
                <a href="https://t.me/emax_autoru" class="flex items-center space-x-2 px-4 py-2 rounded-lg bg-slate-800 hover:bg-blue-500 transition-colors text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
                    </svg>
                    <span>Telegram</span>
                </a>
                <a href="https://wa.me/74951234567" class="flex items-center space-x-2 px-4 py-2 rounded-lg bg-slate-800 hover:bg-green-500 transition-colors text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.612-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                    <span>WhatsApp</span>
                </a>
            </div>
        </div>
        
        <a href="/test-drive" class="w-full flex items-center justify-center space-x-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
            </svg>
            <span>Записаться на тест-драйв</span>
        </a>
    </div>

    <!-- Основной контент страницы -->
    <main>
        <!-- Здесь будет основной контент страницы -->
    </main>

    <!-- SVG-спрайт для иконок -->
    <svg xmlns="http://www.w3.org/2000/svg" class="hidden">
        <!-- Иконка автомобиля -->
        <symbol id="icon-car" viewBox="0 0 24 24">
            <path fill="currentColor" d="M18.9 6.5c-.2-.6-.8-1-1.4-1h-11c-.7 0-1.2.4-1.4 1l-2 5.5v7c0 .8.7 1.5 1.5 1.5h1c.8 0 1.5-.7 1.5-1.5v-1.5h10v1.5c0 .8.7 1.5 1.5 1.5h1c.8 0 1.5-.7 1.5-1.5v-7l-2-5.5zm-12.4 1h11l1.4 4h-13.8l1.4-4zm-1.5 6c.8 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5.7-1.5 1.5-1.5zm13 0c.8 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5.7-1.5 1.5-1.5z"/>
        </symbol>
        
        <!-- Иконка шеврона -->
        <symbol id="icon-chevron" viewBox="0 0 20 20">
            <path fill="currentColor" d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
        </symbol>
    </svg>

    <!-- Скрипты -->
    <script>
        // Инициализация Alpine.js
        document.addEventListener('alpine:init', () => {
            Alpine.store('header', {
                scrolled: false,
                
                init() {
                    window.addEventListener('scroll', () => {
                        this.scrolled = window.scrollY > 50;
                    });
                }
            });
        });
        
        // Параллакс эффект для фона (пример)
        document.addEventListener('DOMContentLoaded', () => {
            const hero = document.querySelector('.hero-section');
            if (hero) {
                window.addEventListener('scroll', () => {
                    const scrollPosition = window.scrollY;
                    hero.style.backgroundPositionY = `${scrollPosition * 0.5}px`;
                });
            }
            
            // Анимация элементов при загрузке
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.animate-on-scroll');
                elements.forEach(el => {
                    const elementPosition = el.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.2;
                    
                    if (elementPosition < screenPosition) {
                        el.classList.add('animate-fade-in');
                    }
                });
            };
            
            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll();
        });
    </script>
</body>
</html>