<!DOCTYPE html>
<html lang="ru">
@include('header')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMAX - Премиальные китайские автомобили</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #1a3e72;
            --secondary: #e63946;
            --accent: #fca311;
            --light: #f8f9fa;
            --dark: #212529;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: var(--dark);
            background-color: #f5f5f5;
        }
        
        .hero {
            position: relative;
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://example.com/hero-bg.jpg') center/cover no-repeat;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
        }
        
        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(transparent, var(--light));
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
            animation: fadeInUp 1s ease-out;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        
        .cta-button {
            display: inline-block;
            background-color: var(--accent);
            color: white;
            padding: 15px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .cta-button:hover {
            background-color: #e68a00;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
        
        .brands-showcase {
            padding: 60px 0;
            background-color: white;
            text-align: center;
        }
        
        .section-title {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 40px;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent);
        }
        
        .brands-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .brand-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .brand-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .brand-logo {
            height: 80px;
            object-fit: contain;
            margin-bottom: 15px;
            filter: grayscale(100%);
            transition: filter 0.3s ease;
        }
        
        .brand-card:hover .brand-logo {
            filter: grayscale(0%);
        }
        
        .brand-name {
            font-weight: bold;
            color: var(--primary);
        }
        
        .featured-cars {
            padding: 60px 0;
            background-color: var(--light);
        }
        
        .cars-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .cars-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 40px;
        }
        
        .filter-button {
            padding: 10px 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .filter-button:hover, .filter-button.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        
        .cars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .car-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .car-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .car-image {
            height: 200px;
            width: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .car-card:hover .car-image {
            transform: scale(1.05);
        }
        
        .car-details {
            padding: 20px;
        }
        
        .car-title {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--primary);
        }
        
        .car-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--secondary);
            margin-bottom: 15px;
        }
        
        .car-features {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .feature {
            background-color: #f0f0f0;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.8rem;
        }
        
        .view-button {
            display: block;
            text-align: center;
            background-color: var(--primary);
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        
        .view-button:hover {
            background-color: #0d2a57;
        }
        
        .advantages {
            padding: 60px 0;
            background: linear-gradient(135deg, var(--primary), #0d2a57);
            color: white;
        }
        
        .advantages-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .advantages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .advantage-card {
            text-align: center;
            padding: 30px 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        .advantage-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.2);
        }
        
        .advantage-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--accent);
        }
        
        .advantage-title {
            font-size: 1.3rem;
            margin-bottom: 15px;
        }
        
        .testimonials {
            padding: 60px 0;
            background-color: white;
        }
        
        .testimonials-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .testimonials-slider {
            position: relative;
            margin-top: 40px;
        }
        
        .testimonial-card {
            background: var(--light);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin: 0 15px;
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 4rem;
            color: rgba(0, 0, 0, 0.1);
            font-family: serif;
            line-height: 1;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .author-name {
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .author-position {
            font-size: 0.8rem;
            color: #666;
        }
        
        .cta-section {
            padding: 80px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://example.com/cta-bg.jpg') center/cover no-repeat;
            color: white;
            text-align: center;
        }
        
        .cta-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .cta-text {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .cta-button-primary {
            background-color: var(--accent);
            color: white;
        }
        
        .cta-button-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .cars-grid {
                grid-template-columns: 1fr;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>UMAX - Премиальные китайские автомобили</h1>
            <p>Откройте для себя новый уровень комфорта и технологий по доступной цене</p>
            <a href="#cars" class="cta-button">Выбрать автомобиль</a>
        </div>
    </section>

    <!-- Brands Showcase -->
    <section class="brands-showcase">
        <h2 class="section-title">Наши бренды</h2>
        <div class="brands-grid">
            <div class="brand-card">
                <img src="https://example.com/geely-logo.png" alt="Geely" class="brand-logo">
                <div class="brand-name">Geely</div>
            </div>
            <div class="brand-card">
                <img src="https://example.com/haval-logo.png" alt="Haval" class="brand-logo">
                <div class="brand-name">Haval</div>
            </div>
            <div class="brand-card">
                <img src="https://example.com/changan-logo.png" alt="Changan" class="brand-logo">
                <div class="brand-name">Changan</div>
            </div>
            <div class="brand-card">
                <img src="https://example.com/chery-logo.png" alt="Chery" class="brand-logo">
                <div class="brand-name">Chery</div>
            </div>
            <div class="brand-card">
                <img src="https://example.com/exeed-logo.png" alt="Exeed" class="brand-logo">
                <div class="brand-name">Exeed</div>
            </div>
            <div class="brand-card">
                <img src="https://example.com/lynkco-logo.png" alt="Lynk & Co" class="brand-logo">
                <div class="brand-name">Lynk & Co</div>
            </div>
        </div>
    </section>

    <!-- Featured Cars -->
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
                <!-- Car 1 -->
                <div class="car-card">
                    <img src="https://example.com/geely-coolray.jpg" alt="Geely Coolray" class="car-image">
                    <div class="car-details">
                        <h3 class="car-title">Geely Coolray 2023</h3>
                        <div class="car-price">1 899 000 ₽</div>
                        <div class="car-features">
                            <span class="feature">Кроссовер</span>
                            <span class="feature">1.5T</span>
                            <span class="feature">177 л.с.</span>
                            <span class="feature">Автомат</span>
                        </div>
                        <a href="#" class="view-button">Подробнее</a>
                    </div>
                </div>
                
                <!-- Car 2 -->
                <div class="car-card">
                    <img src="https://example.com/haval-jolion.jpg" alt="Haval Jolion" class="car-image">
                    <div class="car-details">
                        <h3 class="car-title">Haval Jolion 2023</h3>
                        <div class="car-price">1 950 000 ₽</div>
                        <div class="car-features">
                            <span class="feature">Кроссовер</span>
                            <span class="feature">1.5T</span>
                            <span class="feature">150 л.с.</span>
                            <span class="feature">Вариатор</span>
                        </div>
                        <a href="#" class="view-button">Подробнее</a>
                    </div>
                </div>
                
                <!-- Car 3 -->
                <div class="car-card">
                    <img src="https://example.com/exeed-txl.jpg" alt="Exeed TXL" class="car-image">
                    <div class="car-details">
                        <h3 class="car-title">Exeed TXL 2023</h3>
                        <div class="car-price">2 990 000 ₽</div>
                        <div class="car-features">
                            <span class="feature">Премиум SUV</span>
                            <span class="feature">2.0T</span>
                            <span class="feature">249 л.с.</span>
                            <span class="feature">Полный привод</span>
                        </div>
                        <a href="#" class="view-button">Подробнее</a>
                    </div>
                </div>
                
                <!-- Car 4 -->
                <div class="car-card">
                    <img src="https://example.com/changan-uni-v.jpg" alt="Changan UNI-V" class="car-image">
                    <div class="car-details">
                        <h3 class="car-title">Changan UNI-V 2023</h3>
                        <div class="car-price">2 150 000 ₽</div>
                        <div class="car-features">
                            <span class="feature">Спорт-седан</span>
                            <span class="feature">1.5T</span>
                            <span class="feature">188 л.с.</span>
                            <span class="feature">7DCT</span>
                        </div>
                        <a href="#" class="view-button">Подробнее</a>
                    </div>
                </div>
                
                <!-- Car 5 -->
                <div class="car-card">
                    <img src="https://example.com/geely-tugella.jpg" alt="Geely Tugella" class="car-image">
                    <div class="car-details">
                        <h3 class="car-title">Geely Tugella 2023</h3>
                        <div class="car-price">2 750 000 ₽</div>
                        <div class="car-features">
                            <span class="feature">Кроссовер</span>
                            <span class="feature">2.0T</span>
                            <span class="feature">238 л.с.</span>
                            <span class="feature">AWD</span>
                        </div>
                        <a href="#" class="view-button">Подробнее</a>
                    </div>
                </div>
                
                <!-- Car 6 -->
                <div class="car-card">
                    <img src="https://example.com/byd-han.jpg" alt="BYD Han" class="car-image">
                    <div class="car-details">
                        <h3 class="car-title">BYD Han EV 2023</h3>
                        <div class="car-price">3 490 000 ₽</div>
                        <div class="car-features">
                            <span class="feature">Электромобиль</span>
                            <span class="feature">517 л.с.</span>
                            <span class="feature">600 км заряд</span>
                            <span class="feature">4WD</span>
                        </div>
                        <a href="#" class="view-button">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages -->
    <section class="advantages">
        <div class="advantages-container">
            <h2 class="section-title" style="color: white;">Почему выбирают UMAX</h2>
            
            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="advantage-title">Гарантия 5 лет</h3>
                    <p>Самые выгодные гарантийные условия на рынке</p>
                </div>
                
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="advantage-title">Быстрая доставка</h3>
                    <p>Поставка автомобилей за 2-4 недели</p>
                </div>
                
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-percentage"></i>
                    </div>
                    <h3 class="advantage-title">Выгодный кредит</h3>
                    <p>Ставки от 5.9% на все модели</p>
                </div>
                
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="advantage-title">Оригинальные запчасти</h3>
                    <p>Полное сервисное обслуживание</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="testimonials-container">
            <h2 class="section-title">Отзывы наших клиентов</h2>
            
            <div class="testimonials-slider">
                <!-- Отзыв 1 -->
                <div class="testimonial-card">
                    <p class="testimonial-text">Приобрел Geely Coolray в UMAX и очень доволен! Качество сборки на уровне, комплектация богатая, а сервис просто на высоте. Консультанты помогли с выбором и оформили все документы быстро.</p>
                    <div class="testimonial-author">
                        <img src="https://example.com/client1.jpg" alt="Иван Петров" class="author-avatar">
                        <div>
                            <div class="author-name">Иван Петров</div>
                            <div class="author-position">Владелец Geely Coolray</div>
                        </div>
                    </div>
                </div>
                
                <!-- Отзыв 2 -->
                <div class="testimonial-card">
                    <p class="testimonial-text">Выбрал Haval Jolion после тест-драйва. UMAX предложили лучшие условия по кредиту среди всех дилеров. Прошел год - никаких нареканий, машина радует каждый день!</p>
                    <div class="testimonial-author">
                        <img src="https://example.com/client2.jpg" alt="Алексей Смирнов" class="author-avatar">
                        <div>
                            <div class="author-name">Алексей Смирнов</div>
                            <div class="author-position">Владелец Haval Jolion</div>
                        </div>
                    </div>
                </div>
                
                <!-- Отзыв 3 -->
                <div class="testimonial-card">
                    <p class="testimonial-text">Exeed TXL - это просто космос! Качество материалов, технологии и комфорт не уступают немецким премиум брендам, а цена в 2 раза ниже. Спасибо UMAX за профессиональный подход!</p>
                    <div class="testimonial-author">
                        <img src="https://example.com/client3.jpg" alt="Ольга Иванова" class="author-avatar">
                        <div>
                            <div class="author-name">Ольга Иванова</div>
                            <div class="author-position">Владелец Exeed TXL</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-container">
            <h2 class="cta-title">Готовы к тест-драйву?</h2>
            <p class="cta-text">Запишитесь на бесплатный тест-драйв понравившейся модели или получите персональное предложение от нашего менеджера</p>
            <div class="cta-buttons">
                <a href="#" class="cta-button cta-button-primary">Записаться на тест-драйв</a>
                <a href="#" class="cta-button cta-button-secondary">Получить консультацию</a>
            </div>
        </div>
    </section>
</body>
@include('footer')
</html>