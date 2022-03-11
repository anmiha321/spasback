@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')

<main class="main">
    <section class="about">
        <div class="about__content">
            <div class="about__body">
                <div class="container">
                    <div class="about__main">
                        <div class="about__info">
                            <h1 class="about__title sh">
                                <span class="sh__main">О нас</span>
                                <span class="sh__shadow">О нас</span>
                            </h1>
                            <p class="about__text text">Добровольческий поисково-спасательный отряд “Регион-Спас” - некоммерческая организация, занимающаяся оперативным и информационным поиском пропавших в городе или природной среде. Мы тесно сотрудничаем с государственными структурами, но не зависим от них.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about__photo">
                <img src="/css/img/about2.png" alt="О нас" class="about__img">
            </div>
            <img data-anim src="/css/img/decor/about1.png" alt="Картинка" class="about__decor">
        </div>
    </section>

    <section class="targets">
        <div class="container">
            <div class="targets__content">
                <h2 class="targets__title sh">
                    <span class="sh__main">Наши цели</span>
                    <span class="sh__shadow">Наши цели</span>
                </h2>
                <div class="targets__body">
                    <ul class="targets__list">
                        <li class="targets__item ic_item">Создание массового информационного поля для распространения информации о пропавших людях</li>
                        <li class="targets__item ic_item">Организация общественности для участия в ПСР, обеспечение взаимодействия между добровольцами и официальными службами</li>
                        <li class="targets__item ic_item">Поддержание позитивного образа добровольцев в обществе</li>
                        <li class="targets__item ic_item">Информационная работа с населением и профилактика пропаж</li>
                        <li class="targets__item ic_item">Разработка методических материалов и проведение занятий с детьми школьного возраста на тему: "как не потеряться и что делать если уже потерялся" </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="targets__photos">
            <div class="targets__photo">
                <img src="/css/img/target1.png" alt="ФИО" class="targets__img">
            </div>
            <div class="targets__photo">
                <img src="/css/img/target2.png" alt="ФИО" class="targets__img">
            </div>
            <div class="targets__photo">
                <img src="/css/img/target3.png" alt="ФИО" class="targets__img">
            </div>
            <div class="targets__photo">
                <img src="/css/img/target4.png" alt="ФИО" class="targets__img">
            </div>
            <div class="targets__photo">
                <img src="/css/img/target5.png" alt="ФИО" class="targets__img">
            </div>
            <div class="targets__photo">
                <img src="/css/img/target5.png" alt="ФИО" class="targets__img">
            </div>
            <div class="targets__photo">
                <img src="/css/img/target4.png" alt="ФИО" class="targets__img">
            </div>
            <div class="targets__photo">
                <img src="/css/img/target3.png" alt="ФИО" class="targets__img">
            </div>
            <div class="targets__photo">
                <img src="/css/img/target2.png" alt="ФИО" class="targets__img">
            </div>
            <div class="targets__photo">
                <img src="/css/img/target1.png" alt="ФИО" class="targets__img">
            </div>
        </div>
        <img data-anim src="/css/img/decor/about2.png" alt="Картинка" class="targets__decor anim">
    </section>

    <section class="main-deals">
        <div class="container">
            <div class="main-deals__content">
                <h2 class="main-deals__title sh">
                    <span class="sh__main">Основная деятельность</span>
                    <span class="sh__shadow">Основная деятельность</span>
                </h2>
                <div class="main-deals__body">
                    <div class="main-deals__left">
                        <p class="main-deals__text">Уже не первый год мы помогаем людям вернуть своих близких домой. Все поисково-спасательные мероприятия организуются координаторами с обширным успешным опытом в поиске пропавших, в работе используются отработанные методики и техническое оснащение.</p>
                        <p class="main-deals__text">Финансирование организации осуществляется из собственных средств, а также благодаря не финансовой спонсорской и добровольной поддержке. Список актуальных потребностей отряда можно найти в разделе “наши нужды”</p>
                    </div>
                    <div class="main-deals__right">
                        <div class="main-deals__wrapper">
                            <div class="main-deals__row">
                                <img src="/css/img/svg/search.svg" alt="Карта" class="main-deals__icon">
                                <p class="main-deals__item">Поисково-спасательные работы на месте пропажи</p>
                            </div>
                            <div class="main-deals__row">
                                <img src="/css/img/svg/med.svg" alt="ПМП" class="main-deals__icon">
                                <p class="main-deals__item">Оказание помощи пострадавшим в чрезвычайных ситуациях</p>
                            </div>
                            <div class="main-deals__row">
                                <img src="/css/img/svg/educ.svg" alt="Обучение" class="main-deals__icon">
                                <p class="main-deals__item">Обучение добровольцев поисковым алгоритмам</p>
                            </div>
                            <div class="main-deals__row">
                                <img src="/css/img/svg/info.svg" alt="Инфо" class="main-deals__icon">
                                <p class="main-deals__item">Информационный поиск через средства связи</p>
                            </div>
                            <div class="main-deals__row">
                                <img src="/css/img/svg/exercises.svg" alt="Учения" class="main-deals__icon">
                                <p class="main-deals__item">Проведение полевых учений в природной среде</p>
                            </div>
                            <div class="main-deals__row">
                                <img src="/css/img/svg/prevention.svg" alt="Работа" class="main-deals__icon">
                                <p class="main-deals__item">Информационная работа по пропажи людей</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="isquestions">
        <div class="container">
            <div class="isquestions__body">
                <div class="isquestions__content">
                    <h4 class="isquestions__heading">Появились вопросы?</h4>
                    <div class="isquestions__btn"><a href="/pages/faq/" class="isquestions__link">Перейти в раздел FAQ</a></div>
                </div>
            </div>
        </div>
    </section>

</main>
@include('includes.footer')
@endsection
