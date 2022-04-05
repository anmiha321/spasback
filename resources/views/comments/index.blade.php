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
        <div class="thanks__items" id="comment_list">
{{--            <div class="thanks__item">--}}
{{--                <p class="thanks__date">1.10.2021</p>--}}
{{--                <div class="thanks__body">--}}
{{--                    <div class="thanks__left">--}}
{{--                        <p class="thanks__text">Благодарственное письмо вручено за оперативность команды волонтеров. Благодарственное письмо вручено за </p>--}}
{{--                        <p class="thanks__text">Кем выдана: Администрацией города Тюмени</p>--}}
{{--                    </div>--}}
{{--                    <div class="thanks__right">--}}
{{--                        <a href="/css/img/letters/letter1.png" class="thanks__photo" data-fancybox>--}}
{{--                            <img src="/css/img/letters/tumbanil.png" alt="" class="thanks__img">--}}
{{--                        </a>--}}
{{--                        <img src="/css/img/svg/thanks_search.svg" alt="Поиск" class="thanks__plug">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="thanks__item">--}}
{{--                <p class="thanks__date">1.10.2021</p>--}}
{{--                <div class="thanks__body">--}}
{{--                    <div class="thanks__left">--}}
{{--                        <p class="thanks__text">Благодарственное письмо вручено за оперативность команды волонтеров. Благодарственное письмо вручено за </p>--}}
{{--                        <p class="thanks__text">Кем выдана: Администрацией города Тюмени</p>--}}
{{--                    </div>--}}
{{--                    <div class="thanks__right">--}}
{{--                        <a href="/css/img/letters/letter1.png" class="thanks__photo" data-fancybox>--}}
{{--                            <img src="/css/img/letters/tumbanil.png" alt="" class="thanks__img">--}}
{{--                        </a>--}}
{{--                        <img src="/css/img/svg/thanks_search.svg" alt="Поиск" class="thanks__plug">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
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
        <section class="partners">
            <h2 class="partners__heading sh">
                <span class="sh__main">Наши партнёры</span>
                <span class="sh__shadow">Наши партнёры</span>
            </h2>
            <div class="partners__slider sWs">
                @foreach($partners as $partner)
                    <div class="partners__photo"><img src="uploads/partnerImages/{{$partner->image}}" alt="Ютэйр" class="partners__img"></div>
                @endforeach
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
@section('Comments')
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
                url: ENDPOINT + "/Comments?page=" + page,
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
                    $("#comment_list").append(response);
                })
                .fail(function (jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }
    </script>
@endsection
