        <footer class="footer">
            <div class="container">
                <div class="footer__top">
                    <nav class="footer__nav">
                        <div class="footer__col">
                            <a href="/" class="footer__nav-item">Главная</a>
                            <a href="/pages/about/" class="footer__nav-item">О нас</a>
                            <a href="/pages/volunteer/" class="footer__nav-item">Стать добровольцем</a>
                            <a href="/pages/thanks/" class="footer__nav-item">Благодарности</a>
                            <a href="/pages/active-search/" class="footer__nav-item">Активные поиски</a>
                            <a href="/pages/needs/" class="footer__nav-item">Отрядные нужды</a>
                        </div>
                        <div class="footer__col">
                            <a href="/pages/search-req/" class="footer__nav-item footer__nav-item_green">Заявка на поиск</a>
                            <a href="/pages/blog/" class="footer__nav-item">Блог</a>
                            <a href="/pages/contacts/" class="footer__nav-item">Контакты</a>
                            <a href="/pages/gallery/" class="footer__nav-item">Галерея</a>
                            <a href="/pages/faq/" class="footer__nav-item">FAQ</a>
                        </div>
                    </nav>
                    <div class="footer__contacts">
                        <a href="tel:+78006005962" class="footer__phone">8 800 600 59 52</a>
                        <a href="mailto:regionspas72@gmail.com" class="footer__mail">regionspas72@gmail.com</a>
                    </div>
                </div>
                <div class="footer__bottom">
                    <p class="footer__company">&copy;2021 ДПСО "ТюменьРегионСпас" Тюменской области.</p>
                    <a href="https://ww.net.ru/" target="_blank" rel="nofollow" class="logoww">
                        <img src="/css/img/svg/logoww.svg" alt="ww" class="logoww__img">
                        <span class="logoww__text">Сайт разработан в диджитал-студии WW</span>
                    </a>
                </div>
            </div>
        </footer>
    </div>

    <div class="modal">
        <div id="popup-enter" class="popup header-popup">
            <div class="header-popup__wrapper">
                <div class="header-popup__close">
                    <img data-close src="/css/img/svg/x.svg" alt="Закрыть" class="header-popup__icon">
                </div>
                <div class="header-popup__top">
                    <p class="header-popup__heading">Войти/Зарегистрироваться</p>
                </div>
                <form action="#" id="form-enter" class="header-popup__form" autocomplete="off">
                    <div class="header-popup__row">
                        <p class="header-popup__label">Адрес электронной почты</p>
                        <input type="email" name="email" class="header-popup__input input" placeholder="pochta@gmail.com" maxlength="40" required>
                    </div>
                    <div class="header-popup__row">
                        <p class="header-popup__label">Пароль</p>
                        <input type="text" name="passw" class="header-popup__input input" placeholder="Введите пароль" maxlength="30" required>
                    </div>
                    <div class="header-popup__row">
                        <p class="header-popup__forgot">Забыли пароль?</p>
                    </div>
                    <input type="submit" value="Войти" class="header-popup__btn">
                </form>
                <div class="header-popup__row">
                    <p class="header-popup__question">У вас ещё нет аккаунта?</p>
                    <p data-registration class="header-popup__btn">Зарегистрироваться</p>
                </div>
            </div>
        </div>
        <div id="popup-reg" class="popup header-popup">
            <div class="header-popup__wrapper">
                <div class="header-popup__close">
                    <img data-close src="/css/img/svg/x.svg" alt="Закрыть" class="header-popup__icon">
                </div>
                <div class="header-popup__top">
                    <p class="header-popup__heading">Зарегистрироваться</p>
                </div>
                <form action="#" id="form-reg" class="header-popup__form" autocomplete="off">
                    <div class="header-popup__row">
                        <p class="header-popup__label">Имя</p>
                        <input type="text" name="name" class="header-popup__input input" placeholder="Мария" maxlength="30" required>
                    </div>
                    <div class="header-popup__row">
                        <p class="header-popup__label">Фамилия</p>
                        <input type="text" name="surname" class="header-popup__input input" placeholder="Фамилия" maxlength="30" required>
                    </div>
                    <div class="header-popup__row">
                        <p class="header-popup__label">Адрес электронной почты</p>
                        <input type="email" name="email" class="header-popup__input input" placeholder="pochta@gmail.com" maxlength="40" required>
                    </div>
                    <div class="header-popup__row">
                        <p class="header-popup__label">Пароль</p>
                        <input type="password" class="header-popup__input input" placeholder="Введите пароль" maxlength="30" required>
                    </div>
                    <div class="header-popup__row">
                        <p class="header-popup__label">Повторите пароль</p>
                        <input type="password" class="header-popup__input input" placeholder="Повторите пароль" maxlength="30" required>
                    </div>
                    <input type="submit" value="Зарегистрироваться" class="header-popup__btn">
                </form>
            </div>
        </div>
        <div id="popup-recovery-passw" class="popup header-popup">
            <div class="header-popup__wrapper">
                <div class="header-popup__close">
                    <img data-close src="/css/img/svg/x.svg" alt="Закрыть" class="header-popup__icon">
                </div>
                <div class="header-popup__top">
                    <p class="header-popup__heading">Восстановить пароль</p>
                </div>
                <form action="#" id="form-recovery-passw" class="header-popup__form" autocomplete="off">
                    <div class="header-popup__row header-popup__row_mb">
                        <p class="header-popup__label">Введите  свою электронную почту, которую вы использовали при регистрации и мы отправим вам инструцию по восстановлению пароля.</p>
                        <input type="email" name="email" class="header-popup__input input" placeholder="pochta@gmail.com" maxlength="40" required>
                    </div>
                    <input type="submit" class="header-popup__btn">
                </form>
            </div>
        </div>
        <div id="popup-new-passw" class="popup header-popup">
            <div class="header-popup__wrapper">
                <div class="header-popup__close">
                    <img data-close src="/css/img/svg/x.svg" alt="Закрыть" class="header-popup__icon">
                </div>
                <div class="header-popup__top">
                    <p class="header-popup__heading">Создание нового пароля</p>
                </div>
                <form action="#" id="form-new-passw" class="header-popup__form" autocomplete="off">
                    <div class="header-popup__row">
                        <p class="header-popup__label">Введите новый пароль</p>
                        <input type="password" class="header-popup__input input" placeholder="Введите пароль" maxlength="30" required>
                    </div>
                    <div class="header-popup__row header-popup__row_mb">
                        <p class="header-popup__label">Повторите новый пароль</p>
                        <input type="password" class="header-popup__input input" placeholder="Введите пароль" maxlength="30" required>
                    </div>
                    <input type="submit" class="header-popup__btn">
                </form>
            </div>
        </div>
    </div>
        @include('cookieConsent::index')
{{--    <?php--}}
{{--        if($_SESSION["user_ok_cock"] != '1'):?>--}}
{{--            <div class="cookie">--}}
{{--                <div class="cookie__wrapper">--}}
{{--                    <p class="cookie__text">Продолжая использовать наш сайт, вы принимаете<a href="/pages/cookie/" class="cookie__link" target="_blank">политику использования cookie-файлов.</a></p>--}}
{{--                </div>--}}
{{--                <p class="cookie__btn">Принимаю</p>--}}
{{--                <img src="/css/img/svg/x.svg" alt="Крест" title="Не принимаю" class="cookie__close">--}}
{{--            </div>--}}
{{--        <?php endif?>--}}
