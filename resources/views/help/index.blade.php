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
            <div class="needs__list">
                <div class="needs__item">Скотч</div>
                <div class="needs__item">
                    <div>
                        <p>Принтер цветной, к нему:</p>
                        <p>-Картриджи с краской </p>
                        <p>-Белая бумага а4 для печати</p>
                    </div>
                </div>
                <div class="needs__item">Батарейки AA и AAA, либо такие же аккумуляторы + зарядное устройство к ним</div>
                <div class="needs__item">Внешние аккумуляторы для зарядки (powerbank)</div>
                <div class="needs__item">Карта памяти Samsung microSDXC EVO + UHS-I U3 64GB Class10 для квадрокоптера</div>
                <div class="needs__item">Аэрозоль-репелленты</div>
                <div class="needs__item">Термоодеяло многоразовое</div>
                <div class="needs__item">Жилеты светоотражающие</div>
                <div class="needs__item">Компасы (москомпас модель 22 C)</div>
                <div class="needs__item">
                    <div>
                        <p>Фонари Armytek (DOBERMANN, Viking, Partner C2, UNI C4), к ним отдельно  также нужны:</p>
                        <p>-Аккумуляторы (LI-ION ARMYTEK 18650 3500 MAH)</p>
                        <p>-Зарядка для аккумуляторов 18650 Armytek</p>
                    </div>
                </div>
                <div class="needs__item">
                    <div>
                        <p>Рации Baofeng BF-A58, к ним:</p>
                        <p>-Зарядная станция для аккумуляторов Baofeng BF-A58</p>
                        <p>-Аккумулятор для рации BaoFeng UV-XR, BF-A58, BF-9700, BF-S56 Max</p>
                        -Антенна для рации Protec PHD-771
                    </div>
                </div>
                <div class="needs__item">Набор Первой Помощи (Базовый от Медплант)</div>
                <div class="needs__item">Набор походной складной мебели (стол и стулья)</div>
                <div class="needs__item">Сигнальная громкоговорящая установка Смерч 12М-4 (чтобы бвп мог идти на звук)</div>
                <div class="needs__item">Бензиновый генератор Honda EU20iT1RG </div>
                <div class="needs__item">Плащи или пончо влагозащитные многоразовые</div>
                <div class="needs__item">Мешки спальные (СЕЗОННЫЙ 2/3 ULTRALIGHT FORCLAZ QUECHUA)</div>
                <div class="needs__item">Палатка на 10 или 30 человек (Палатка МЧС М-10 от производителя ПФ "Берег")</div>
                <div class="needs__item">Квадроцикл ( STELS ATV 600 YS LEOPARD 2020)</div>
                <div class="needs__item">Дом на колесах/прицеп МЗСА 817731.001-05 </div>
                <div class="needs__item">Снегоход Yamaha Viking 540 V Белый (2020 г.)</div>
                <div class="needs__item">УАЗ Комби Экспедиция (Для заброски волонтёров в труднодоступные места, в буханку вмещаются 25 человек или 23 человека и 2 собаки. Автомобиль также идеально подходит под штаб на активных поисках)</div>
            </div>
        </div>
        <img data-anim src="/css/img/decor/acc.svg" alt="акб" class="needs__decor needs__decor_akb">
        <img data-anim src="/css/img/decor/compass.svg" alt="компас" class="needs__decor needs__decor_compas">
    </section>
</main>
@include('includes.footer')
@endsection
