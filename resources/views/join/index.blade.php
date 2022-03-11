@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')

<main class="main search-req volunteer">
    <section class="search-req__head head">
        <div class="container">
            <h2 class="volunteer__title title">Заполните эту форму чтобы пройти обучение добровольца и стать частью РегионСпас.</h2>
        </div>
    </section>

    <section class="search-req__main">
        <div class="container">
            <h1 class="search-req__heading sh">
                <span class="sh__main">Стань добровольцем</span>
                <span class="sh__shadow">Стань добровольцем</span>
            </h1>
            <form action="#" id="form-volunteer" class="search-req__form" autocomplete="off">
                <div class="search-req__fields">
                    <div class="search-req__left">
                        <div class="search-req__item">
                            <p class="search-req__name">Фамилия</p>
                            <input data-alpha type="text" name="surname_volunteer" class="search-req__input input" placeholder="Иванов" maxlength="30">
                        </div>
                        <div class="search-req__item">
                            <p class="search-req__name">Имя</p>
                            <input data-alpha type="text" name="name_volunteer" class="search-req__input input" placeholder="Иван" maxlength="30"  required>
                        </div>
                        <div class="search-req__item">
                            <p class="search-req__name">Мобильный номер</p>
                            <input type="tel" name="phone_volunteer" class="search-req__input input" placeholder="+7 (932) 468-51-77" maxlength="17">
                        </div>
                        <div class="search-req__item">
                            <p class="search-req__name">Электронная почта</p>
                            <input type="email" name="email_volunteer" class="search-req__input input" placeholder="ivanIvo@gmail.com" maxlength="50">
                        </div>
                    </div>
                    <div class="search-req__right">
                        <div class="search-req__item">
                            <p class="search-req__name">Ссылка на страницу ВК</p>
                            <input type="url" name="vk_volunteer" class="search-req__input input" placeholder="Введите ссылку" maxlength="100">
                        </div>
                        <div class="search-req__item">
                            <p class="search-req__name">Населенный пункт</p>
                            <input type="text" name="city_volunteer" class="search-req__input input" placeholder="Введите ссылку" maxlength="50" required>
                        </div>
                        <div class="search-req__item">
                            <p class="search-req__name">Пеший/Авто</p>
                            <div class="search-req__radios volunteer__radios">
                                <label class="search-req__label volunteer__label checked">
                                    <input data-radio type="radio" name="is_auto_volunteer" value="Автомобиля нет" class="search-req__radio" checked>
                                    <span class="search-req__label-text">Автомобиля&nbsp;нет</span>
                                </label>
                                <label class="search-req__label volunteer__label">
                                    <input data-radio type="radio" name="is_auto_volunteer" value="Автомобиль есть" class="search-req__radio">
                                    <span class="search-req__label-text">Автомобиль&nbsp;есть</span>
                                </label>
                            </div>
                        </div>
                        <div class="search-req__item">
                            <p class="search-req__name">Дата рождения</p>
                            <input type="date" name="birthday_volunteer" class="search-req__input input" maxlength="10" required>
                        </div>
                    </div>
                </div>
                <div class="search-req__btn">
                    <input type="submit" class="search-req__submit btn">
                </div>
                <div data-err class="error"></div>
                <div data-waiting class="waiting"><img src="/css/img/svg/loading.gif" alt="Отправка" class="waiting__img"></div>
            </form>
        </div>
    </section>
</main>
@include('includes.footer')
@endsection
