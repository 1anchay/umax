<footer class="footer">
    <div class="footer-container">
        <!-- Верхняя часть футера -->
        <div class="footer-top">
            <!-- Колонка с контактами -->
            <div class="footer-column">
                <h3 class="footer-title">Контакты</h3>
                <ul class="footer-list">
                    <li class="footer-item">
                        <i class="fas fa-map-marker-alt footer-icon"></i>
                        <span>г. Москва, ул. Автодилерская, 12</span>
                    </li>
                    <li class="footer-item">
                        <i class="fas fa-phone-alt footer-icon"></i>
                        <a href="tel:+74951234567">+7 (495) 123-45-67</a>
                    </li>
                    <li class="footer-item">
                        <i class="fas fa-envelope footer-icon"></i>
                        <a href="mailto:info@umax-auto.ru">info@umax-auto.ru</a>
                    </li>
                    <li class="footer-item">
                        <i class="fas fa-clock footer-icon"></i>
                        <span>Пн-Пт: 9:00-21:00<br>Сб-Вс: 10:00-20:00</span>
                    </li>
                </ul>
            </div>

            <!-- Колонка с меню -->
            <div class="footer-column">
                <h3 class="footer-title">Меню</h3>
                <ul class="footer-list">
                    <li class="footer-item"><a href="/">Главная</a></li>
                    <li class="footer-item"><a href="/catalog">Каталог</a></li>
                    <li class="footer-item"><a href="/test-drive">Тест-драйв</a></li>
                    <li class="footer-item"><a href="/credit">Кредит</a></li>
                    <li class="footer-item"><a href="/trade-in">Trade-in</a></li>
                    <li class="footer-item"><a href="/services">Сервис</a></li>
                </ul>
            </div>

            <!-- Колонка с брендами -->
            <div class="footer-column">
                <h3 class="footer-title">Бренды</h3>
                <ul class="footer-list footer-brands">
                    <li class="footer-item"><a href="/brands/geely">Geely</a></li>
                    <li class="footer-item"><a href="/brands/haval">Haval</a></li>
                    <li class="footer-item"><a href="/brands/changan">Changan</a></li>
                    <li class="footer-item"><a href="/brands/chery">Chery</a></li>
                    <li class="footer-item"><a href="/brands/exeed">Exeed</a></li>
                    <li class="footer-item"><a href="/brands/byd">BYD</a></li>
                </ul>
            </div>

            <!-- Колонка с подпиской -->
            <div class="footer-column footer-subscribe">
                <h3 class="footer-title">Подписка на новости</h3>
                <p class="footer-text">Будьте в курсе новых поступлений и специальных предложений</p>
                <form class="subscribe-form">
                    <input type="email" placeholder="Ваш e-mail" required>
                    <button type="submit" class="subscribe-button">Подписаться</button>
                </form>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-vk"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-telegram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Нижняя часть футера -->
        <div class="footer-bottom">
            <div class="footer-copyright">© 2023 UMAX. Все права защищены</div>
            <div class="footer-links">
                <a href="/privacy">Политика конфиденциальности</a>
                <a href="/agreement">Пользовательское соглашение</a>
                <a href="/sitemap">Карта сайта</a>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer {
        background-color: var(--primary);
        color: white;
        padding: 60px 0 30px;
        position: relative;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--accent), var(--secondary));
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-top {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 50px;
    }

    .footer-column {
        margin-bottom: 30px;
    }

    .footer-title {
        font-size: 1.3rem;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
    }

    .footer-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 2px;
        background-color: var(--accent);
    }

    .footer-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-item {
        margin-bottom: 12px;
        display: flex;
        align-items: flex-start;
    }

    .footer-item a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-item a:hover {
        color: white;
        text-decoration: underline;
    }

    .footer-icon {
        margin-right: 10px;
        color: var(--accent);
        min-width: 20px;
        text-align: center;
    }

    .footer-text {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .footer-subscribe {
        display: flex;
        flex-direction: column;
    }

    .subscribe-form {
        display: flex;
        margin-bottom: 25px;
    }

    .subscribe-form input {
        flex: 1;
        padding: 12px 15px;
        border: none;
        border-radius: 4px 0 0 4px;
        font-size: 0.9rem;
    }

    .subscribe-button {
        background-color: var(--accent);
        color: white;
        border: none;
        padding: 0 20px;
        border-radius: 0 4px 4px 0;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .subscribe-button:hover {
        background-color: #e68a00;
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-top: auto;
    }

    .social-link {
        color: white;
        background-color: rgba(255, 255, 255, 0.1);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .social-link:hover {
        background-color: var(--accent);
        transform: translateY(-3px);
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
    }

    .footer-copyright {
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.9rem;
    }

    .footer-links {
        display: flex;
        gap: 20px;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.9rem;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-links a:hover {
        color: white;
    }

    @media (max-width: 768px) {
        .footer-top {
            grid-template-columns: 1fr 1fr;
        }
        
        .footer-bottom {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }
        
        .footer-links {
            flex-direction: column;
            gap: 10px;
        }
    }

    @media (max-width: 480px) {
        .footer-top {
            grid-template-columns: 1fr;
        }
    }
</style>