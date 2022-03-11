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
        <div class="gallery__items">
            <div class="gallery__item">
                <p class="gallery__date">1.11.2021г.</p>
                <div class="gallery__body">
                    <div class="gallery__photo gf_big1">
                        <img src="/css/img/gallery/gallery2.png" alt="Галерея" class="gallery__img">
                    </div>
                    <div class="gallery__photo gf_big2">
                        <img src="/css/img/gallery/gallery1.png" alt="Галерея" class="gallery__img">
                    </div>
                    <div class="gallery__photo gf_small1">
                        <img src="/css/img/gallery/gallery3.png" alt="Галерея" class="gallery__img">
                    </div>
                    <div class="gallery__photo gf_small2">
                        <img src="/css/img/gallery/gallery4.png" alt="Галерея" class="gallery__img">
                    </div>
                    <div class="gallery__photo gf_big3">
                        <img src="/css/img/gallery/gallery5.png" alt="Галерея" class="gallery__img">
                    </div>
                </div>
            </div>
            <div class="gallery__item">
                <p class="gallery__date">29.10.2021г.</p>
                <div class="gallery__body">
                    <div class="gallery__photo gf_big1">
                        <img src="/css/img/gallery/gallery2.png" alt="Галерея" class="gallery__img">
                    </div>
                    <div class="gallery__photo gf_big2">
                        <img src="/css/img/gallery/gallery1.png" alt="Галерея" class="gallery__img">
                    </div>
                    <div class="gallery__photo gf_small1">
                        <img src="/css/img/gallery/gallery3.png" alt="Галерея" class="gallery__img">
                    </div>
                    <div class="gallery__photo gf_small2">
                        <img src="/css/img/gallery/gallery4.png" alt="Галерея" class="gallery__img">
                    </div>
                    <div class="gallery__photo gf_big3">
                        <img src="/css/img/gallery/gallery5.png" alt="Галерея" class="gallery__img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('includes.footer')
@endsection
