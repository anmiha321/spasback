@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')
<main class="main thanks">
    <div class="container">
        <h1 class="thanks__heading sh">
            <span class="sh__main">Благодарности</span>
            <span class="sh__shadow">Благодарности</span>
        </h1>
        <div class="thanks__items">
            <div class="thanks__item">
                <p class="thanks__date">1.10.2021</p>
                <div class="thanks__body">
                    <div class="thanks__left">
                        <p class="thanks__text">Благодарственное письмо вручено за оперативность команды волонтеров. Благодарственное письмо вручено за </p>
                        <p class="thanks__text">Кем выдана: Администрацией города Тюмени</p>
                    </div>
                    <div class="thanks__right">
                        <a href="/css/img/letters/letter1.png" class="thanks__photo" data-fancybox>
                            <img src="/css/img/letters/plug.png" alt="" class="thanks__img">
                        </a>
                        <img src="/css/img/svg/thanks_search.svg" alt="Поиск" class="thanks__plug">
                    </div>
                </div>
            </div>
            <div class="thanks__item">
                <p class="thanks__date">1.10.2021</p>
                <div class="thanks__body">
                    <div class="thanks__left">
                        <p class="thanks__text">Благодарственное письмо вручено за оперативность команды волонтеров. Благодарственное письмо вручено за </p>
                        <p class="thanks__text">Кем выдана: Администрацией города Тюмени</p>
                    </div>
                    <div class="thanks__right">
                        <a href="/css/img/letters/letter1.png" class="thanks__photo" data-fancybox>
                            <img src="/css/img/letters/plug.png" alt="" class="thanks__img">
                        </a>
                        <img src="/css/img/svg/thanks_search.svg" alt="Поиск" class="thanks__plug">
                    </div>
                </div>
            </div>
        </div>
        <section class="partners">
            <h2 class="partners__heading sh">
                <span class="sh__main">Наши партнёры</span>
                <span class="sh__shadow">Наши партнёры</span>
            </h2>
            <div class="partners__slider sWs">
                <div class="partners__photo"><img src="/css/img/partners/utair.svg" alt="Ютэйр" class="partners__img"></div>
                <div class="partners__photo"><img src="/css/img/partners/utair.svg" alt="Ютэйр" class="partners__img"></div>
                <div class="partners__photo"><img src="/css/img/partners/utair.svg" alt="Ютэйр" class="partners__img"></div>
                <div class="partners__photo"><img src="/css/img/partners/utair.svg" alt="Ютэйр" class="partners__img"></div>
                <div class="partners__photo"><img src="/css/img/partners/utair.svg" alt="Ютэйр" class="partners__img"></div>
                <div class="partners__photo"><img src="/css/img/partners/utair.svg" alt="Ютэйр" class="partners__img"></div>
            </div>
            <div class="partners__navigation">
                <div class="partners__prev ic_arr_prev"></div>
                <div class="partners__next ic_arr_next"></div>
            </div>
        </section>
    </div>
</main>
@include('includes.footer')
@endsection
