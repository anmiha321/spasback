@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')

    <main class="main search-req">
        <section class="search-req__head head">
            <div class="container">
                <h2 class="search-req__title title">Оставьте свою заявку и мы свяжемся с вами </h2>
            </div>
        </section>

        <section class="search-req__main">
            <div class="container">
                <h1 class="search-req__heading sh">
                    <span class="sh__main">Заявка на поиск</span>
                    <span class="sh__shadow">Заявка на поиск</span>
                </h1>
                <form action="#" id="form-losted" class="search-req__form" enctype="multipart/form-data"
                      autocomplete="off">
                    <div class="search-req__fields">
                        <div class="search-req__left">
                            <div class="search-req__item">
                                <p class="search-req__name req">Заявитель: ФИО</p>
                                <input data-alpha-fio data-clean-request type="text" name="fio_applicant" class="search-req__input input"
                                       placeholder="Иванов Иван Иванович" maxlength="30" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Контакты заявителя: телефон для связи</p>
                                <input data-clean-request type="tel" name="phone_applicant" class="search-req__input input"
                                       placeholder="+7 (932) 468-51-77" maxlength="17" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">ФИО пропавшего</p>
                                <input data-alpha-fio data-clean-request type="text" name="fio_missed" class="search-req__input input"
                                       placeholder="Иванов Иван Иванович" maxlength="30" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Дата рождения</p>
                                <input data-clean-request type="date" name="birthday_missed" class="search-req__input input" maxlength="10"
                                       required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Дата пропажи</p>
                                <input data-clean-request type="date" name="date_missed" class="search-req__input input" maxlength="10"
                                       required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Время пропажи</p>
                                <input data-clean-request type="time" name="time_missed" class="search-req__input input" maxlength="5"
                                       required>
                            </div>
                        </div>
                        <div class="search-req__right">
                            <div class="search-req__item">
                                <p class="search-req__name req">Область пропажи</p>
                                <input data-clean-request type="text" name="place_missed" class="search-req__input input"
                                       placeholder="г.Тюмень ул. Ленина 37" maxlength="100" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name">Тип местности</p>
                                <div class="search-req__radios">
                                    <label id="city_type_label" class="search-req__label checked">
                                        <input data-radio type="radio" name="type_missed" id="city_type" value="1"
                                               class="search-req__radio" checked>
                                        <span class="search-req__label-text">Город</span>
                                    </label>
                                    <label id="forest_type_label" class="search-req__label">
                                        <input data-radio type="radio" name="type_missed" id="forest_type" value="2"
                                               class="search-req__radio">
                                        <span class="search-req__label-text">Лес</span>
                                    </label>
                                </div>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Обстоятельства пропажи</p>
                                <input data-clean-request type="text" name="cond_missed" class="search-req__input input"
                                       placeholder="введите информацию" maxlength="500" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Заявление в полицию</p>
                                <input data-clean-request type="text" name="police_missed" class="search-req__input input"
                                       placeholder="введите информацию" maxlength="100" required>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name req">Фото пропавшего</p>
                                <label id="label-photo" class="search-req__input search-req__input_file input">
                                    <input data-clean-request type="file" name="photo_missed" id="photo-missed"
                                           class="search-req__file input" required>
                                    <input type="hidden" name="photo_name" id="photo-name">
                                    <span id="photo_name_id" class="search-req__file-text">выберите файл</span>
                                </label>
                                <div id="photo-preview" class="search-req__preview-photo error">
                                    <img src="" class="search-req__preview-img" id="photo_missed_preview" alt="preview">
                                    </a>
                                </div>
                            </div>
                            <div class="search-req__item">
                                <p class="search-req__name">Дополнительная информация</p>
                                <input data-clean-request type="text" name="info_missed" class="search-req__input input"
                                       placeholder="введите информацию" maxlength="400" required>
                            </div>
                        </div>
                    </div>
                    <div class="search-req__btn"><button type="submit" class="search-req__submit btn">Отправить</button></div>
                    <div id="requestHelp_error_id" data-err class="error"></div>
                    <div data-waiting class="waiting"><img src="/css/img/svg/loading.gif" alt="Отправка"
                                                           class="waiting__img"></div>
                </form>
            </div>
        </section>
    </main>
    @include('includes.footer')
@endsection
@section('HelpRequest')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $(document).on('change', '#photo-missed', function (e) {
                $('#photo-preview').addClass('active');
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#photo_missed_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
                $('#photo_name_id').text('фото добавлено!');
            });

            $(document).on('submit', '#form-losted', function (e) {
                e.preventDefault();
                let data = new FormData($('#form-losted')[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/create_request",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status == 400) {
                            $('#requestHelp_error_id').html("");
                            $('#saveForm_errList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_values) {
                                $('#requestHelp_error_id').addClass('active').append('<li>' + err_values + '</li>');
                                setTimeout(() => $('#requestHelp_error_id').removeClass('active'), 5000);
                            });
                        } else {
                            $('input[data-clean-request]').val("");
                            $('#forest_type').prop('checked', false);
                            $('#city_type').prop('checked', true);
                            $('#forest_type_label').removeClass('checked');
                            $('#city_type_label').addClass('checked');
                            $('#photo-preview').removeClass('active');
                            $('#photo_name_id').text('выберите файл');
                            alert('Заявка успешно отправлена!');
                        }
                    }
                });
            });

        });
    </script>
@endsection
