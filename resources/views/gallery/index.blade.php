@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')
<main class="main gallery">
    <div class="container">
        <h1 class="gallery__heading sh">
            <span class="sh__main">Галерея</span>
            <span class="sh__shadow">Галерея</span>
        </h1>
        <div class="gallery__items" id="gallery_list">
            @foreach($res as $key => $result)
                <div class="gallery__item">
                    <p class="gallery__date">{{$key}}г.</p>
                    <div class="gallery__body">
                        @foreach($result as $item)
                            <div class="gallery__photo gf_big1">
                                <img src="uploads/photoGallery/{{$item->image}}" alt="Галерея" class="gallery__img">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
{{--            <div class="gallery__item">--}}
{{--                <p class="gallery__date">29.10.2021г.</p>--}}
{{--                <div class="gallery__body">--}}
{{--                    <div class="gallery__photo gf_big1">--}}
{{--                        <img src="/css/img/gallery/gallery2.png" alt="Галерея" class="gallery__img">--}}
{{--                    </div>--}}
{{--                    <div class="gallery__photo gf_big2">--}}
{{--                        <img src="/css/img/gallery/gallery1.png" alt="Галерея" class="gallery__img">--}}
{{--                    </div>--}}
{{--                    <div class="gallery__photo gf_small1">--}}
{{--                        <img src="/css/img/gallery/gallery3.png" alt="Галерея" class="gallery__img">--}}
{{--                    </div>--}}
{{--                    <div class="gallery__photo gf_small2">--}}
{{--                        <img src="/css/img/gallery/gallery4.png" alt="Галерея" class="gallery__img">--}}
{{--                    </div>--}}
{{--                    <div class="gallery__photo gf_big3">--}}
{{--                        <img src="/css/img/gallery/gallery5.png" alt="Галерея" class="gallery__img">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</main>
{{--<div class="auto-load text-center" style="text-align: center">--}}
{{--    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--         x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">--}}
{{--                <path fill="#000"--}}
{{--                      d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">--}}
{{--                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"--}}
{{--                                      from="0 50 50" to="360 50 50" repeatCount="indefinite"/>--}}
{{--                </path>--}}
{{--            </svg>--}}
{{--</div>--}}
@include('includes.footer')
@endsection
@section('Gallery')
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                }--}}
{{--            });--}}
{{--            --}}{{--window.onbeforeunload = function () {--}}
{{--            --}}{{--    window.scrollTo(0, 0);--}}
{{--            --}}{{--}--}}
{{--            --}}{{--let ENDPOINT = "{{ url('/') }}";--}}
{{--            --}}{{--let page = 1;--}}
{{--            --}}{{--infinteLoadMore(page);--}}
{{--            --}}{{--$(window).scroll(function () {--}}
{{--            --}}{{--    // alert($(window).scrollTop() + $(window).height() +'/'+$(document).height());--}}
{{--            --}}{{--    // alert($(window).scrollTop());--}}

{{--            --}}{{--    if ($(window).scrollTop() + $(window).height() >= $(document).height()) {--}}
{{--            --}}{{--        page++;--}}
{{--            --}}{{--        infinteLoadMore(page);--}}
{{--            --}}{{--    }--}}
{{--            --}}{{--});--}}

{{--                fetchcgallery();--}}
{{--            function fetchcgallery() {--}}
{{--                $.ajax({--}}
{{--                    type: "GET",--}}
{{--                    url: "/Gallery",--}}
{{--                    datatype: "html",--}}
{{--                    success: function (response) {--}}
{{--                        $('#gallery_list').html(response);--}}
{{--                    }--}}

{{--                });--}}
{{--            }--}}
{{--            });--}}
{{--    </script>--}}
@endsection
