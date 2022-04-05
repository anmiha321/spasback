@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')
<main class="main blog">
    <div class="container">
        <h1 class="blog__heading sh">
            <span class="sh__main title__news">Одобрен закон</span>
            <span class="sh__shadow">Одобрен закон</span>
        </h1>
        <div class="blog__news">
            <div class="container">
                <div class="container__news">
                    <p class="blog__date">{{$article->DataParserBlog()}}г.</p>
                    <h2 class="blog__title">{{$article->title}}</h2>
                     @foreach($article->ParticlePage() as $page)
                        <p class="blog__text" style="margin-bottom:40px;">{{$page}}</p>
                    @endforeach
                </div>
                <div class="blog__news">
                    @foreach($read_more->shuffle() as $articles)
                        <div class="blog__item">
                            <p class="blog__date">{{$articles->DataParserBlog()}}г.</p>
                            <div class="blog__row">
                                <div class="blog__left">
                                    <div class="blog__photo ibg"><img src="/uploads/blogImages/{{$articles->image}}" alt="Новость" class="blog__img"></div>
                                </div>
                                <div class="blog__right">
                                    <div class="blog__info">
                                        <h2 class="blog__title">{{$articles->title}}</h2>
                                        @foreach($articles->PmainPage() as $items)
                                            <p class="blog__text">{{$items}}</p>
                                        @endforeach
                                        <a href="{{url('/Blog/Articles/'.$articles->slug.'')}}" class="blog__more">Читать больше</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- <div class="blog__item blog__item_single">
                <div class="blog__row blog__row_single">
                    <div class="blog__left">
                        <div class="blog__photo ibg"><img src="/css/img/news/news1.png" alt="Новость" class="blog__img"></div>
                    </div>
                    <div class="blog__right">
                        <div class="blog__info">
                            <p class="blog__date">1.11.2021г.</p>
                            <h2 class="blog__title">Одобрен закон о поиске пропавших людей по геолокации мобильного телефона</h2>
                            <p class="blog__text">23 июня Совет Федерации РФ принял закон «Об оперативно-розыскной деятельности». Закон разрешает правоохранительным органам, которые ведут поиск пропавшего, получать данные о местоположении его мобильного телефона.</p>
                            <a href="/pages/blog/news/" class="blog__more">Читать больше</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__item blog__item_single">
                <div class="blog__row blog__row_single">
                    <div class="blog__left">
                        <div class="blog__photo ibg"><img src="/css/img/news/news2.png" alt="Новость" class="blog__img"></div>
                    </div>
                    <div class="blog__right">
                        <div class="blog__info">
                            <p class="blog__date">21.10.2021г.</p>
                            <h2 class="blog__title">В Бурятии нашли пропавших волонтеров-поисковиков</h2>
                            <p class="blog__text">23 сентября спасатели Байкальского поисково-спасательного отряда МЧС России нашли пропавших добровольных поисковиков в районе слияния рек Снежная и Ара-Буректай.</p>
                            <p class="blog__text">С волонтерами все в порядке, их доставили на вертолете в ближайший населенный пункт. Выяснилось, что они не могли сообщить о своем местонахождении из-за отсутствия связи...</p>
                            <a href="/pages/blog/news/" class="blog__more">Читать больше</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__item blog__item_single">
                <div class="blog__row blog__row_single">
                    <div class="blog__left">
                        <div class="blog__photo ibg"><img src="/css/img/news/news4.png" alt="Новость" class="blog__img"></div>
                    </div>
                    <div class="blog__right">
                        <div class="blog__info">
                            <p class="blog__date">1.11.2021г.</p>
                            <h2 class="blog__title">В Иркутске провели первый учебный поиск пропавшего ребенка</h2>
                            <p class="blog__text">Организаторы развернули оперативный штаб с несколькими учебными зонами, рассказали о системе организации поисков и оказании первой медицинской помощи. По словам руководителя проектов благотворительного фонда «Оберег» Артема Шестакова, эффективно помочь в поиске можно даже не выходя из дома.</p>
                            <a href="/pages/blog/news/" class="blog__more">Читать больше</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</main>
@include('includes.footer')
@endsection
