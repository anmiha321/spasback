@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')

    <main class="main search-req volunteer">
        <section class="search-req__head head">
            <div class="container">
                <h2 class="volunteer__title title">Заполните эту форму чтобы пройти обучение добровольца и стать частью
                    РегионСпас.</h2>
            </div>
        </section>

        <section class="search-req__main">
            <div class="container">
                <h1 class="search-req__heading sh">
                    <span class="sh__main">Стань добровольцем</span>
                    <span class="sh__shadow">Стань добровольцем</span>
                </h1>
                <form action="#" id="create_volunteer_form" class="search-req__form" autocomplete="off">
                    <div class="search-req__fields">
                        <div class="search-req__left">
                            <div class="search-req__item">
                                <p class="search-req__name">Фамилия</p>
                                <input data-alpha data-clean type="text" name="surname" class="search-req__input input"
                                       placeholder="Иванов" maxlength="30" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name">Имя</p>
                                <input data-alpha data-clean type="text" name="name" class="search-req__input input"
                                       placeholder="Иван" maxlength="30" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name">Мобильный номер</p>
                                <input data-clean type="tel" name="phone" class="search-req__input input"
                                       placeholder="+7 (932) 468-51-77" maxlength="17" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name">Электронная почта</p>
                                <input data-clean type="email" name="email" class="search-req__input input"
                                       placeholder="ivanIvo@gmail.com" maxlength="50" required>
                            </div>
                        </div>
                        <div class="search-req__right">
                            <div class="search-req__item">
                                <p class="search-req__name">Ссылка на страницу ВК</p>
                                <input data-clean type="url" name="vk" class="search-req__input input"
                                       placeholder="Введите ссылку" maxlength="100" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name">Населенный пункт</p>
                                <input data-clean type="text" name="city" class="search-req__input input"
                                       placeholder="Введите населенный пункт" maxlength="50" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name">Пеший/Авто</p>
                                <div class="search-req__radios volunteer__radios">
                                    <label id="auto_not_exist_label" class="search-req__label volunteer__label checked">
                                        <input data-radio="0" type="radio" id="auto_not_exist" name="is_auto_volunteer" value="1"
                                               class="search-req__radio" checked>
                                        <span class="search-req__label-text">Автомобиля&nbsp;нет</span>
                                    </label>
                                    <label id="auto_exist_label" class="search-req__label volunteer__label">
                                        <input data-radio="1" type="radio" id="auto_exist" name="is_auto_volunteer" value="2"
                                               class="search-req__radio">
                                        <span class="search-req__label-text">Автомобиль&nbsp;есть</span>
                                    </label>
                                </div>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name">Дата рождения</p>
                                <input data-clean type="date" name="birthday" class="search-req__input input"
                                       maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="search-req__btn">
                        <button type="submit" class="search-req__submit btn">Отправить</button>
                    </div>
                    <div id="join_error_id" data-err class="error"></div>
                    <div data-waiting class="waiting"><img src="/css/img/svg/loading.gif" alt="Отправка"
                                                           class="waiting__img"></div>
                </form>
            </div>
        </section>
    </main>
    @include('includes.footer')
@endsection
@section('join')
    <script>
        $(document).ready(function () {

            $(document).on('submit', '#create_volunteer_form', function (e) {
                e.preventDefault();
                let data = new FormData($('#create_volunteer_form')[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/create_volunteer",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status == 400) {
                            $('#join_error_id').html("");
                            $('#saveForm_errList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_values) {
                                $('#join_error_id').addClass('active').append('<li>' + err_values + '</li>');
                                setTimeout(() => $('#join_error_id').removeClass('active'), 5000);
                            });
                        } else {
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('input[data-clean]').val("");
                            $('#auto_exist').prop('checked', false);
                            $('#auto_not_exist').prop('checked', true);
                            $('#auto_exist_label').removeClass('checked');
                            $('#auto_not_exist_label').addClass('checked');
                            alert('Пользователь успешно создан!');
                        }
                    }
                });
            });



        });
    </script>
@endsection
