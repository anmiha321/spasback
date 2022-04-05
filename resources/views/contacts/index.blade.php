@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')
<main class="main contacts">
    <div class="container">
        <h1 class="contacts__heading sh">
            <span class="sh__main">Контакты</span>
            <span class="sh__shadow">Контакты</span>
        </h1>
        <p class="contacts__subheading">Горячая линия по поиску без вести пропавших людей - <a href="tel:+78006005952" class="contacts__link">8 800 600 59 52</a></p>
    </div>
    <div class="contacts__items">
        @foreach ($users_owners as $items)
            @if($loop->iteration % 2 == 0)
                <div class="contacts__item">
                    <div class="contacts__body">
                        <div class="container">
                            <div class="contacts__main">
                                <div class="contacts__photo">
                                    <img src="/uploads/userImages/{{$items->image}}" alt="Иванов И. И." class="contacts__img">
                                </div>
                                <div class="contacts__info">
                                    <div class="contacts__person">
                                        <p class="contacts__name">{{$items->surname}} {{$items->name}} {{$items->patronymic}}</p>
                                        <p class="contacts__position">{{$items->position == 1 ? 'Организатор' : 'Не назначено'}}</p>
                                    </div>
                                    <a href="tel:+79322567235" class="contacts__phone">+7 (932) 25-67-235</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="contacts__item">
                    <div class="contacts__body">
                        <div class="container">
                            <div class="contacts__main">
                                <div class="contacts__photo">
                                    <img src="/uploads/userImages/{{$items->image}}" alt="Иванов И. И." class="contacts__img">
                                </div>
                                <div class="contacts__info contacts__info_long">
                                    <div class="contacts__person">
                                        <p class="contacts__name">{{$items->surname}} {{$items->name}} {{$items->patronymic}}</p>
                                        <p class="contacts__position">{{$items->position == 1 ? 'Организатор' : 'Не назначено'}}</p>
                                    </div>
                                    <a href="tel:+79322567235" class="contacts__phone">+7 (932) 25-67-235</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__decor"></div>
                </div>
            @endif
        @endforeach
    </div>
</main>
@include('includes.footer')
@endsection
