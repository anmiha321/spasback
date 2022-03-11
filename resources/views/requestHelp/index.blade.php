@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')

    <main class="main search-req">
        <section class="search-req__head head">
            <div class="container">
                <h2 class="search-req__title title">Оставьте свою заявку и мы свяжемся  с вами </h2>
            </div>
        </section>

        <section class="search-req__main">
            <div class="container">
                <h1 class="search-req__heading sh">
                    <span class="sh__main">Заявка на поиск</span>
                    <span class="sh__shadow">Заявка на поиск</span>
                </h1>
                <form action="#" id="form-losted" class="search-req__form" enctype="multipart/form-data" autocomplete="off">
                    <div class="search-req__fields">
                        <div class="search-req__left">
                            <div class="search-req__item">
                                <p class="search-req__name req">Заявитель: ФИО</p>
                                <input data-alpha-fio type="text" name="fio_applicant" class="search-req__input input" placeholder="Иванов Иван Иванович"  maxlength="30" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Контакты заявителя: телефон для связи</p>
                                <input type="tel" name="phone_applicant" class="search-req__input input" placeholder="+7 (932) 468-51-77"  maxlength="17">
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">ФИО пропавшего</p>
                                <input data-alpha-fio type="text" name="fio_missed" class="search-req__input input" placeholder="Иванов Иван Иванович"  maxlength="30" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Дата рождения</p>
                                <input type="date" name="birthday_missed" class="search-req__input input"  maxlength="10" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Дата пропажи</p>
                                <input type="date" name="date_missed" class="search-req__input input"  maxlength="10" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Время пропажи</p>
                                <input type="time" name="time_missed" class="search-req__input input" maxlength="5" required>
                            </div>
                        </div>
                        <div class="search-req__right">
                            <div class="search-req__item">
                                <p class="search-req__name req">Область пропажи</p>
                                <input type="text" name="place_missed" class="search-req__input input" placeholder="г.Тюмень ул. Ленина 37" maxlength="100" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name">Тип местности</p>
                                <div class="search-req__radios">
                                    <label class="search-req__label checked">
                                        <input data-radio type="radio" name="type_missed" value="Город" class="search-req__radio" checked>
                                        <span class="search-req__label-text">Город</span>
                                    </label>
                                    <label class="search-req__label">
                                        <input data-radio type="radio" name="type_missed" value="Лес" class="search-req__radio">
                                        <span class="search-req__label-text">Лес</span>
                                    </label>
                                </div>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Обстоятельства пропажи</p>
                                <input type="text" name="cond_missed" class="search-req__input input" placeholder="введите информацию" maxlength="500" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Заявление в полицию</p>
                                <input type="text" name="police_missed" class="search-req__input input" placeholder="введите информацию" maxlength="100" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Фото пропавшего</p>
                                <label id="label-photo" class="search-req__input search-req__input_file input">
                                    <input type="file" name="photo_missed" id="photo-missed" class="search-req__file input">
                                    <input type="hidden" name="photo_name" id="photo-name">
                                    <span class="search-req__file-text">выберите файл</span>
                                </label>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name">Дополнительная информация</p>
                                <input type="text" name="info_missed" class="search-req__input input" placeholder="введите информацию" maxlength="400">
                            </div>
                        </div>
                    </div>
                    <div class="search-req__btn"><input type="submit" class="search-req__submit btn"></div>
                    <div data-err class="error"></div>
                    <div data-waiting class="waiting"><img src="/css/img/svg/loading.gif" alt="Отправка" class="waiting__img"></div>
                </form>
            </div>
        </section>
    </main>
@include('includes.footer')
@endsection
