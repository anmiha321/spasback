@extends('includes.header')
<?php
// $root_server = $_SERVER['DOCUMENT_ROOT'];
//    include ("{$root_server}/includes/header.php");
?>
@section('content')
<main class="main faq">
    <div class="container">
        <h1 class="faq__heading sh">
            <span class="sh__main">Часто задаваемые вопросы</span>
            <span class="sh__shadow">Часто задаваемые вопросы</span>
        </h1>
        <div class="faq__items">
            @foreach($questions as $faq)
                    <div class="faq__item">
                        <p class="faq__question">{{$faq->Question}}</p>
                        <p class="faq__answer">{{$faq->Answer}}</p>
                    </div>
            @endforeach
{{--            <div class="faq__item">--}}
{{--                <p class="faq__question">Заявление в полицию можно подать только через 3 после пропажи?</p>--}}
{{--                <p class="faq__answer">Нет, отказ на основании трех дней - незаконен! Если вы попытались подать заявление и вам так ответили в полиции - позвоните нам. Чем раньше начнется поиск, тем больше шансов найти человека живым и здоровым. Заявление должны принять в любом отделении, независимо от места пропажи...</p>--}}
{{--            </div>--}}
{{--            <div class="faq__item">--}}
{{--                <p class="faq__question">Кто может подать заявку на поиск? Это обязательно должен быть близкий родственник?</p>--}}
{{--                <p class="faq__answer">Нет, заявку на поиск может подать любой неравнодушный человек. В случае с обратным поиском, когда людей находят на улице, а потом ищут их родственников, это может быть просто прохожий...</p>--}}
{{--            </div>--}}
{{--            <div class="faq__item">--}}
{{--                <p class="faq__question">Зачем нужны поисковики, если есть полиция и МЧС?</p>--}}
{{--                <p class="faq__answer">Мы работаем не вместо них, а ВМЕСТЕ с ними. Представителей органов порой недостаточно, чтобы качественно закрывать все необходимые задачи по поиску. Совместными усилиями “Найден.Жив” будет намного быстрее, а время в нашем деле это главное.</p>--}}
{{--            </div>--}}
        </div>
    </div>
    <section class="faq__request">
        <div class="container">
            <h3 class="faq__title">Остались вопросы?</h3>
            <form action="#" id="form-faq" class="faq__form" autocomplete="off">
                <div class="faq__form-wrap">
                    <div class="faq__left">
                        <textarea wrap="hard" class="faq__textarea" name="faq_msg" placeholder="Введите сообщение..." maxlength="500"></textarea>
                    </div>
                    <div class="faq__right">
                        <p class="faq__label">Ваша электронная почта</p>
                        <input type="email" name="faq_email" class="faq__input" placeholder="pochta@gmail.com" maxlength="40" required>
                        <input type="submit" class="faq__submit btn">
                    </div>
                </div>
                <div data-err class="error" id="faq_error"></div>
                <div data-waiting class="waiting"><img src="/css/img/svg/loading.gif" alt="Отправка" class="waiting__img"></div>
            </form>
        </div>
    </section>
    <img src="/css/img/decor/question.svg" alt="Вопрос" class="faq__decor">
</main>
@include('includes.footer')
@endsection
@section('FAQ')
    <script>
        $(document).ready(function () {

            $(document).on('submit', '#form-faq', function (e) {
                e.preventDefault();
                let data = new FormData($('#form-faq')[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/send_question",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status == 400) {
                            $('#faq_error').html("");
                            $('#saveForm_errList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_values) {
                                $('#faq_error').addClass('active').append('<li>' + err_values + '</li>');
                                setTimeout(() => $('#faq_error').removeClass('active'), 5000);
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
                            alert('Вопрос отправлен!');
                        }
                    }
                });
            });
        });
    </script>
@endsection
