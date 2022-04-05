@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')

    <main class="main needs">
        <section class="head">
            <div class="container">
                <h2 class="title">Не один поиск не обходится без использования оборудования... </h2>
            </div>
        </section>

        <section class="needs__main">
            <div class="container">
                <div class="needs__contacts">
                    <p class="needs__name">Иванов Иван Иванович</p>
                    <p class="needs__position">(Отвечает за наши отрядные нужды)</p>
                    <a href="mailto:ivanIvo@gmail.com" class="needs__mail">ivanIvo@gmail.com</a>
                    <div class="needs__footer">
                        <a href="tel:+79323560325" class="needs__phone">+7 (932) 35-60-325</a>
                        <a href="tel:+79323560325" class="needs__btn btn">Связаться</a>
                    </div>
                </div>
                <h1 class="needs__heading sh">
                    <span class="sh__main">Список нужд</span>
                    <span class="sh__shadow">Список нужд</span>
                </h1>
                <div class="needs__list" id="needs_list_id">
{{--                    <div class="needs__item">Скотч</div>--}}
{{--                    <div class="needs__item">--}}
{{--                        <div>--}}
{{--                            <p>Принтер цветной, к нему:</p>--}}
{{--                            <p>-Картриджи с краской </p>--}}
{{--                            <p>-Белая бумага а4 для печати</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <img data-anim src="/css/img/decor/acc.svg" alt="акб" class="needs__decor needs__decor_akb">
            <img data-anim src="/css/img/decor/compass.svg" alt="компас" class="needs__decor needs__decor_compas">
        </section>
    </main>
{{--    <div class="auto-load text-center" style="text-align: center">--}}
{{--        <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--             x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">--}}
{{--                <path fill="#000"--}}
{{--                      d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">--}}
{{--                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"--}}
{{--                                      from="0 50 50" to="360 50 50" repeatCount="indefinite"/>--}}
{{--                </path>--}}
{{--            </svg>--}}
{{--    </div>--}}
    @include('includes.footer')
@endsection
@section('Help')
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
                url: ENDPOINT + "/Help?page=" + page,
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
                    $("#needs_list_id").append(response);
                })
                .fail(function (jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }
    </script>
@endsection
