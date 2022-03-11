@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')
<main class="main blog">
    <div class="container">
        <h1 class="blog__heading sh">
            <span class="sh__main">Блог</span>
            <span class="sh__shadow">Блог</span>
        </h1>
    </div>
    <div class="blog__container">
        <div class="blog__body">
            <div class="blog__main">
                <div class="blog__photo ibg"><img src="/css/img/news/news1.png" alt="Новость" class="blog__img"></div>
                <div class="blog__info">
                    <p class="blog__date">1.11.2021г.</p>
                    <h2 class="blog__title">Одобрен закон о поиске пропавших людей по геолокации мобильного телефона</h2>
                    <p class="blog__text">23 июня Совет Федерации РФ принял закон «Об оперативно-розыскной деятельности». Закон разрешает правоохранительным органам, которые ведут поиск пропавшего, получать данные о местоположении его мобильного телефона.</p>
                    <a href="/pages/blog/news/" class="blog__more">Читать больше</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog__news">
            <div class="blog__item">
                <p class="blog__date">21.10.2021г.</p>
                <div class="blog__row">
                    <div class="blog__left">
                        <div class="blog__photo ibg"><img src="/css/img/news/news2.png" alt="Новость" class="blog__img"></div>
                    </div>
                    <div class="blog__right">
                        <div class="blog__info">
                            <h2 class="blog__title">В Бурятии нашли пропавших волонтеров-поисковиков</h2>
                            <p class="blog__text">23 сентября спасатели Байкальского поисково-спасательного отряда МЧС России нашли пропавших добровольных поисковиков в районе слияния рек Снежная и Ара-Буректай.</p>
                            <p class="blog__text">С волонтерами все в порядке, их доставили на вертолете в ближайший населенный пункт. Выяснилось, что они не могли сообщить о своем местонахождении из-за отсутствия связи...</p>
                            <a href="/pages/blog/news/" class="blog__more">Читать больше</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__item">
                <p class="blog__date">21.10.2021г.</p>
                <div class="blog__row">
                    <div class="blog__left">
                        <div class="blog__photo ibg"><img src="/css/img/news/news3.png" alt="Новость" class="blog__img"></div>
                        <!-- ЭТОТ блок выводить только у второй новости в блоке .blog__news !!! -->
                        <div class="blog__shadow"></div>
                    </div>
                    <div class="blog__right">
                        <div class="blog__info">
                            <h2 class="blog__title">В Иркутске провели первый учебный поиск пропавшего ребенка</h2>
                            <p class="blog__text">Организаторы развернули оперативный штаб с несколькими учебными зонами, рассказали о системе организации поисков и оказании первой медицинской помощи. По словам руководителя проектов благотворительного фонда «Оберег» Артема Шестакова, эффективно помочь в поиске можно даже не выходя из дома.</p>
                            <a href="/pages/blog/news/" class="blog__more">Читать больше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('includes.footer')
@endsection
