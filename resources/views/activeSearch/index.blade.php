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
                <div class="active-search__items" id="active_search_list">
                    {{--                <div class="active-search__item person">--}}
                    {{--                    <div class="active-search__info person__info">--}}
                    {{--                        <div class="person__top">--}}
                    {{--                            <p class="person__name">Кузьминов Василий Петрович</p>--}}
                    {{--                            <p class="person__age"><span class="person__age-text">Возраст:</span> 73 года</p>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="person__call">--}}
                    {{--                            <div>--}}
                    {{--                                <p class="person__text">Номер координатора:</p>--}}
                    {{--                                <a href="tel:+79322565367" class="person__phone">+7 (932) 25-65-367</a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="active-search__photo person__photo">--}}
                    {{--                        <img src="/css/img/search1.png" alt="ФИО" class="person__img">--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
            </div>
        </div>
        <img data-anim src="/css/img/decor/earth.svg" alt="Земля"
             class="active-search__decor active-search__decor_earth anim">
        <img data-anim src="/css/img/decor/people.svg" alt="Люди"
             class="active-search__decor active-search__decor_units anim">
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
@section('ActiveSearch')
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
                url: ENDPOINT + "/ActiveSearch?page=" + page,
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
                    $("#active_search_list").append(response);
                })
                .fail(function (jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }
    </script>
@endsection
