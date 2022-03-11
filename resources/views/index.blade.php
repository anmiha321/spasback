@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')

    <section class="promo">
        <div class="container">
            <div class="promo__content">
                <h1 class="promo__title">Пoисково-спасательная организация <br> <span
                        class="promo__name">«Регион спас»</span></h1>
                <div class="promo__stats">
                    <div class="promo__item">
                        <p class="promo__num">35</p>
                        <p class="promo__text">Наших сотрудников</p>
                    </div>
                    <span class="promo__separator"></span>
                    <div class="promo__item">
                        <p class="promo__num">100</p>
                        <p class="promo__text">Волонтёров</p>
                    </div>
                    <span class="promo__separator"></span>
                    <div class="promo__item">
                        <p class="promo__num">513</p>
                        <p class="promo__text">Людей в поиске</p>
                    </div>
                    <span class="promo__separator"></span>
                    <div class="promo__item">
                        <p class="promo__num">210</p>
                        <p class="promo__text">Людей нашлось</p>
                    </div>
                    <img src="/css/img/decor/promo1.svg" alt="Декор" class="promo__wave">
                    <img src="/css/img/decor/promo2.svg" alt="Декор" class="promo__wave">
                    <img src="/css/img/decor/promo3.svg" alt="Декор" class="promo__wave">
                </div>
            </div>
        </div>
    </section>

    <section class="now-search">
        <div class="container">
            <div class="now-search__content">
                <h2 class="now-search__heading sh">
                    <span class="sh__main">Мы сейчас ищем...</span>
                    <span class="sh__shadow">Мы сейчас ищем...</span>
                </h2>
                <div class="now-search__body">
                    <div class="now-search__slider sWs">
                        <div class="now-search__slide">
                            <div class="now-search__item person">
                                <div class="now-search__info person__info">
                                    <div class="person__top">
                                        <p class="person__name">Иванова Елизавета Павловна</p>
                                        <p class="person__age "><span class="person__age-text">Возраст:</span> 14 лет
                                        </p>
                                    </div>
                                    <div class="person__call">
                                        <div>
                                            <p class="person__text">Номер координатора:</p>
                                            <a href="tel:+79322565367" class="person__phone">+7 (932) 25-65-367</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="person__photo">
                                    <img src="/css/img/search3.png" alt="ФИО" class="person__img">
                                </div>
                            </div>
                        </div>
                        <div class="now-search__slide">
                            <div class="now-search__item person">
                                <div class="now-search__info person__info">
                                    <div class="person__top">
                                        <p class="person__name">Кузьминов Василий Петрович</p>
                                        <p class="person__age"><span class="person__age-text">Возраст:</span> 73 года
                                        </p>
                                    </div>
                                    <div class="person__call">
                                        <div>
                                            <p class="person__text">Номер координатора:</p>
                                            <a href="tel:+79322565367" class="person__phone">+7 (932) 25-65-367</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="person__photo">
                                    <img src="/css/img/search1.png" alt="ФИО" class="person__img">
                                </div>
                            </div>
                        </div>
                        <div class="now-search__slide">
                            <div class="now-search__item person">
                                <div class="now-search__info person__info">
                                    <div class="person__top">
                                        <p class="person__name">Иванов Иван Павлович</p>
                                        <p class="person__age"><span class="person__age-text">Возраст:</span> 26 года
                                        </p>
                                    </div>
                                    <div class="person__call">
                                        <div>
                                            <p class="person__text">Номер координатора:</p>
                                            <a href="tel:+79322565367" class="person__phone">+7 (932) 25-65-367</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="person__photo">
                                    <img src="/css/img/search2.png" alt="ФИО" class="person__img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="now-search__pagination">
                        <span class="now-search__dot active"></span>
                        <span class="now-search__dot"></span>
                    </div>
                    <div class="now-search__btn now-search__btn_prev ic_arr_prev"></div>
                    <div class="now-search__btn now-search__btn_next ic_arr_next"></div>
                </div>
            </div>
        </div>
        <img data-anim src="/css/img/decor/binoculars.svg" alt="Бинокль"
             class="now-search__decor now-search__decor_binoculars">
        <img data-anim src="/css/img/decor/loupe.svg" alt="Лупа" class="now-search__decor now-search__decor_loupe">
    </section>

    <section class="about-main">
        <div class="container">
            <h2 class="about-main__heading sh">
                <span class="sh__main">О нас</span>
                <span class="sh__shadow">О нас</span>
            </h2>
            <div class="about-main__content">
                <div class="about-main__left">
                    <p class="about-main__text text">Добровольческий поисково-спасательный отряд “Регион-Спас” -
                        некоммерческая организация, занимающаяся оперативным и информационным поиском пропавших в городе
                        или природной среде. Мы тесно сотрудничаем с государственными структурами, но не зависим от
                        них.</p>
                    <a href="/pages/about/" class="about-main__more">Читать больше</a>
                </div>
                <div class="about-main__right">
                    <div class="about-main__item">
                        <div class="about-main__photo active">
                            <picture>
                                <source type="image/webp" srcset="/css/img/about1.webp">
                                <img src="/css/img/about1.png" alt="О нас" title="О нас" class="about-main__img">
                            </picture>
                        </div>
                    </div>
                    <div class="about-main__item">
                        <div class="about-main__photo">
                            <picture>
                                <source type="image/webp" srcset="/css/img/about1.webp">
                                <img src="/css/img/about1.png" alt="О нас" title="О нас" class="about-main__img">
                            </picture>
                        </div>
                    </div>
                    <div class="about-main__item">
                        <div class="about-main__photo">
                            <picture>
                                <source type="image/webp" srcset="/css/img/about1.webp">
                                <img src="/css/img/about1.png" alt="О нас" title="О нас" class="about-main__img">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="regions">
        <div class="container">
            <h2 class="regions__heading sh">
                <span class="sh__main">Регионы присутствия</span>
                <span class="sh__shadow">Регионы присутствия</span>
            </h2>
        </div>
        <div class="regions__map">
            <img src="/css/img/svg/map.svg" alt="Карта" class="regions__img">
            <p class="regions__name regions__name_right regions__name_tyumen ic_geo">Тюмень</p>
            <p class="regions__name regions__name_tobolsk ic_geo">Тобольск</p>
            <p class="regions__name regions__name_yalutorovsk ic_geo">Ялуторовск</p>
            <p class="regions__name regions__name_ishim ic_geo">Ишим</p>
            <p class="regions__name regions__name_irkutskobl ic_geo">Иркутская область</p>
        </div>
    </section>
    @include('includes.footer')
@endsection

<!-- Ошибка и ожидание для формы отправки -->
<!-- <div data-err class="error"></div>
<div data-waiting class="waiting"><img src="/css/img/svg/loading.gif" alt="Отправка" class="waiting__img"></div> -->

<!-- Всплывающая подсказка при наведении -->
<!-- <a href="#" data-tooltip="Подсказка">Ссылка</a>
<div id="tooltip"></div> -->

<!-- <h1 class="header__title sh">
    <span class="sh__main">О нас</span>
    <span class="sh__shadow">О нас</span>
</h1> -->
