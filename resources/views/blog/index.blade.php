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
                <div class="blog__photo ibg"><img src="/uploads/blogImages/{{$BlogHeader->image}}" alt="Новость" class="blog__img"></div>
                <div class="blog__info">
                    <p class="blog__date">{{$BlogHeader->DataParserBlog()}}г.</p>
                    <h2 class="blog__title">{{$BlogHeader->title}}</h2>
                    <p class="blog__text">{{$BlogHeader->teaser}}</p>
                    <a href="{{url('/Blog/Articles/'.$BlogHeader->slug.'')}}" class="blog__more">Читать больше</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog__news" id="blogs_list">
{{--            <div class="blog__item">--}}
{{--                <p class="blog__date">21.10.2021г.</p>--}}
{{--                <div class="blog__row">--}}
{{--                    <div class="blog__left">--}}
{{--                        <div class="blog__photo ibg"><img src="/css/img/news/news2.png" alt="Новость" class="blog__img"></div>--}}
{{--                    </div>--}}
{{--                    <div class="blog__right">--}}
{{--                        <div class="blog__info">--}}
{{--                            <h2 class="blog__title">В Бурятии нашли пропавших волонтеров-поисковиков</h2>--}}
{{--                            <p class="blog__text">23 сентября спасатели Байкальского поисково-спасательного отряда МЧС России нашли пропавших добровольных поисковиков в районе слияния рек Снежная и Ара-Буректай.</p>--}}
{{--                            <p class="blog__text">С волонтерами все в порядке, их доставили на вертолете в ближайший населенный пункт. Выяснилось, что они не могли сообщить о своем местонахождении из-за отсутствия связи...</p>--}}
{{--                            <a href="{{route('article')}}" class="blog__more">Читать больше</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="blog__item">--}}
{{--                <p class="blog__date">21.10.2021г.</p>--}}
{{--                <div class="blog__row">--}}
{{--                    <div class="blog__left">--}}
{{--                        <div class="blog__photo ibg"><img src="/css/img/news/news3.png" alt="Новость" class="blog__img"></div>--}}
{{--                        <!-- ЭТОТ блок выводить только у второй новости в блоке .blog__news !!! -->--}}
{{--                        <div class="blog__shadow"></div>--}}
{{--                    </div>--}}
{{--                    <div class="blog__right">--}}
{{--                        <div class="blog__info">--}}
{{--                            <h2 class="blog__title">В Иркутске провели первый учебный поиск пропавшего ребенка</h2>--}}
{{--                            <p class="blog__text">Организаторы развернули оперативный штаб с несколькими учебными зонами, рассказали о системе организации поисков и оказании первой медицинской помощи. По словам руководителя проектов благотворительного фонда «Оберег» Артема Шестакова, эффективно помочь в поиске можно даже не выходя из дома.</p>--}}
{{--                            <a href="{{route('article')}}" class="blog__more">Читать больше</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</main>
<div class="auto-load text-center" style="text-align: center">
    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <path fill="#000"
                      d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                                      from="0 50 50" to="360 50 50" repeatCount="indefinite"/>
                </path>
            </svg>
</div>
@include('includes.footer')
@endsection
@section('Blog')
    <script>
        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }
        let ENDPOINT = "{{ url('/') }}";
        let page = 1;
        infinteLoadMore(page);
        $(window).scroll(function () {
            // alert($(window).scrollTop() + $(window).height() +'/'+$(document).height());
            // alert($(window).scrollTop());

            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                page++;
                infinteLoadMore(page);
            }
        });

        function infinteLoadMore(page) {
            $.ajax({
                url: ENDPOINT + "/Blog?page=" + page,
                datatype: "html",
                type: "get",
                beforeSend: function () {
                    $('.auto-load').show();
                }
            })
                .done(function (response) {
                    if (response.length == 0) {
                        $('.auto-load').html("");
                        return;
                    }
                    $('.auto-load').hide();
                    $("#blogs_list").append(response);
                })
                .fail(function (jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }
    </script>
@endsection
