@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')

<main class="main active-search">
    <div class="container">
        <h1 class="active-search__heading sh">
            <span class="sh__main">Активные поиски</span>
            <span class="sh__shadow">Активные поиски</span>
        </h1>
        <div class="active-search__body">
            <div class="active-search__items">
                <div class="active-search__item person">
                    <div class="active-search__info person__info">
                        <div class="person__top">
                            <p class="person__name">Кузьминов Василий Петрович</p>
                            <p class="person__age"><span class="person__age-text">Возраст:</span> 73 года</p>
                        </div>
                        <div class="person__call">
                            <div>
                                <p class="person__text">Номер координатора:</p>
                                <a href="tel:+79322565367" class="person__phone">+7 (932) 25-65-367</a>
                            </div>
                        </div>
                    </div>
                    <div class="active-search__photo person__photo">
                        <img src="/css/img/search1.png" alt="ФИО" class="person__img">
                    </div>
                </div>
                <div class="active-search__item person">
                    <div class="active-search__info person__info">
                        <div class="person__top">
                            <p class="person__name">Иванова Елизавета Павловна</p>
                            <p class="person__age "><span class="person__age-text">Возраст:</span> 14 лет</p>
                        </div>
                        <div class="person__call">
                            <div>
                                <p class="person__text">Номер координатора:</p>
                                <a href="tel:+79322565367" class="person__phone">+7 (932) 25-65-367</a>
                            </div>
                        </div>
                    </div>
                    <div class="active-search__photo person__photo">
                        <img src="/css/img/search3.png" alt="ФИО" class="person__img">
                    </div>
                </div>
                <div class="active-search__item person">
                    <div class="active-search__info person__info">
                        <div class="person__top">
                            <p class="person__name">Иванов Иван Павлович</p>
                            <p class="person__age"><span class="person__age-text">Возраст:</span> 26 года</p>
                        </div>
                        <div class="person__call">
                            <div>
                                <p class="person__text">Номер координатора:</p>
                                <a href="tel:+79322565367" class="person__phone">+7 (932) 25-65-367</a>
                            </div>
                        </div>
                    </div>
                    <div class="active-search__photo person__photo">
                        <img src="/css/img/search2.png" alt="ФИО" class="person__img">
                    </div>
                </div>
                <div class="active-search__item person">
                    <div class="active-search__info person__info">
                        <div class="person__top">
                            <p class="person__name">Кузьминов Василий Петрович</p>
                            <p class="person__age"><span class="person__age-text">Возраст:</span> 73 года</p>
                        </div>
                        <div class="person__call">
                            <div>
                                <p class="person__text">Номер координатора:</p>
                                <a href="tel:+79322565367" class="person__phone">+7 (932) 25-65-367</a>
                            </div>
                        </div>
                    </div>
                    <div class="active-search__photo person__photo">
                        <img src="/css/img/search1.png" alt="ФИО" class="person__img">
                    </div>
                </div>
                <div class="active-search__item person">
                    <div class="active-search__info person__info">
                        <div class="person__top">
                            <p class="person__name">Иванова Елизавета Павловна</p>
                            <p class="person__age "><span class="person__age-text">Возраст:</span> 14 лет</p>
                        </div>
                        <div class="person__call">
                            <div>
                                <p class="person__text">Номер координатора:</p>
                                <a href="tel:+79322565367" class="person__phone">+7 (932) 25-65-367</a>
                            </div>
                        </div>
                    </div>
                    <div class="active-search__photo person__photo">
                        <img src="/css/img/search3.png" alt="ФИО" class="person__img">
                    </div>
                </div>
                <div class="active-search__item person">
                    <div class="active-search__info person__info">
                        <div class="person__top">
                            <p class="person__name">Иванов Иван Павлович</p>
                            <p class="person__age"><span class="person__age-text">Возраст:</span> 26 года</p>
                        </div>
                        <div class="person__call">
                            <div>
                                <p class="person__text">Номер координатора:</p>
                                <a href="tel:+79322565367" class="person__phone">+7 (932) 25-65-367</a>
                            </div>
                        </div>
                    </div>
                    <div class="active-search__photo person__photo">
                        <img src="/css/img/search2.png" alt="ФИО" class="person__img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img data-anim src="/css/img/decor/earth.svg" alt="Земля" class="active-search__decor active-search__decor_earth anim">
    <img data-anim src="/css/img/decor/people.svg" alt="Люди" class="active-search__decor active-search__decor_units anim">
</main>
@include('includes.footer')
@endsection
