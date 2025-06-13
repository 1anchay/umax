<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMAX - Премиальные китайские автомобили</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/outline/index.js" crossorigin="anonymous"></script>
    <style>
        :root {
            --primary: #1a3e72;
            --secondary: #e63946;
            --accent: #fca311;
            --light: #f8f9fa;
            --dark: #212529;
            --header-bg: rgba(255, 255, 255, 0.95);
            --header-text: var(--dark);
            --header-border: #e5e7eb;
        }

        .dark {
            --primary: #3b82f6;
            --secondary: #ef4444;
            --accent: #f59e0b;
            --light: #1e293b;
            --dark: #f8fafc;
            --header-bg: rgba(15, 23, 42, 0.95);
            --header-text: var(--dark);
            --header-border: #334155;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: var(--dark);
            background-color: #f5f5f5;
            transition: background-color 0.3s ease;
        }

        .dark body {
            background-color: #0f172a;
        }

        /* Header Styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            background-color: var(--header-bg);
            backdrop-filter: blur(10px);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid var(--header-border);
            transition: all 0.3s ease;
        }

        .header-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 5rem;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .logo-img {
            height: 2.5rem;
            width: auto;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            transition: color 0.3s ease;
        }

        .nav-desktop {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        @media (max-width: 1024px) {
            .nav-desktop {
                display: none;
            }
        }

        .nav-link {
            position: relative;
            font-size: 1rem;
            font-weight: 500;
            color: var(--header-text);
            text-decoration: none;
            transition: color 0.3s ease;
            padding: 0.5rem 0;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .active-link {
            color: var(--primary);
        }

        .active-link::after {
            width: 100%;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .theme-toggle {
            background: none;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 0.5rem;
            color: var(--header-text);
            transition: all 0.3s ease;
        }

        .theme-toggle:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .dark .theme-toggle:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .theme-icon {
            width: 1.5rem;
            height: 1.5rem;
        }

        .auth-buttons {
            display: flex;
            gap: 0.75rem;
        }

        .login-button {
            padding: 0.5rem 1rem;
            background: none;
            border: 1px solid var(--primary);
            border-radius: 0.5rem;
            color: var(--primary);
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .login-button:hover {
            background-color: rgba(26, 62, 114, 0.1);
        }

        .dark .login-button:hover {
            background-color: rgba(59, 130, 246, 0.1);
        }

        .register-button {
            padding: 0.5rem 1rem;
            background-color: var(--primary);
            border: none;
            border-radius: 0.5rem;
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .register-button:hover {
            background-color: #153a75;
        }

        .dark .register-button:hover {
            background-color: #2563eb;
        }

        /* Mobile Menu Button */
        .mobile-menu-button {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 0.5rem;
            color: var(--header-text);
            transition: all 0.3s ease;
        }

        @media (max-width: 1024px) {
            .mobile-menu-button {
                display: block;
            }
        }

        .mobile-menu-button:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .dark .mobile-menu-button:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .menu-icon {
            width: 1.5rem;
            height: 1.5rem;
        }

        /* Mobile Menu */
        .mobile-menu {
            position: fixed;
            top: 5rem;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 40;
            background-color: var(--header-bg);
            backdrop-filter: blur(10px);
            transform: translateX(100%);
            transition: transform 0.3s ease;
            overflow-y: auto;
            padding: 1.5rem;
        }

        .mobile-menu.open {
            transform: translateX(0);
        }

        .mobile-nav {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .mobile-auth-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 2rem;
        }

        .mobile-theme-toggle {
            margin-top: 2rem;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <!-- Logo -->
            <a href="/" class="logo">
                <img src="https://example.com/umax-logo.svg" alt="UMAX" class="logo-img">
                <span class="logo-text">UMAX</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="nav-desktop">
                <a href="/" class="nav-link active-link">Главная</a>
                <a href="/catalog" class="nav-link">Каталог</a>
                <a href="/about" class="nav-link">О компании</a>
                <a href="/services" class="nav-link">Сервис</a>
                <a href="/contacts" class="nav-link">Контакты</a>
            </nav>

            <!-- Header Actions -->
            <div class="header-actions">
                <!-- Theme Toggle -->
                <button class="theme-toggle" id="themeToggle">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="theme-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </button>

                <!-- Auth Buttons -->
                <div class="auth-buttons">
                    <button class="login-button">Войти</button>
                    <button class="register-button">Регистрация</button>
                </div>

                <!-- Mobile Menu Button -->
                <button class="mobile-menu-button" id="mobileMenuButton">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="menu-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <nav class="mobile-nav">
            <a href="/" class="nav-link active-link">Главная</a>
            <a href="/catalog" class="nav-link">Каталог</a>
            <a href="/about" class="nav-link">О компании</a>
            <a href="/services" class="nav-link">Сервис</a>
            <a href="/contacts" class="nav-link">Контакты</a>
        </nav>

        <div class="mobile-auth-buttons">
            <button class="login-button" style="width: 100%;">Войти</button>
            <button class="register-button" style="width: 100%;">Регистрация</button>
        </div>

        <div class="mobile-theme-toggle">
            <button class="theme-toggle" id="mobileThemeToggle">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="theme-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </button>
        </div>
    </div>

    <script>
        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        const mobileThemeToggle = document.getElementById('mobileThemeToggle');
        const html = document.documentElement;

        // Check for saved theme preference or use preferred color scheme
        const savedTheme = localStorage.getItem('theme') || 
                          (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        
        // Apply the saved theme
        if (savedTheme === 'dark') {
            html.classList.add('dark');
        }

        // Toggle theme function
        function toggleTheme() {
            html.classList.toggle('dark');
            const isDark = html.classList.contains('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        }

        // Add event listeners
        themeToggle.addEventListener('click', toggleTheme);
        mobileThemeToggle.addEventListener('click', toggleTheme);

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
        });

        // Close mobile menu when clicking on a link
        const mobileLinks = document.querySelectorAll('.mobile-nav .nav-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
            });
        });
    </script>

    <!-- Rest of your page content goes here -->
    <div style="height: 2000px; margin-top: 5rem;"></div>
</body>
</html>