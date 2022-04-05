<?php
$urlServer = $_SERVER['SERVER_NAME'];
$urlPage = $_SERVER['REQUEST_URI'];
$title = 'Span';
$description = 'description';
$keywords = 'keywords';
?>
<!DOCTYPE html>
<html lang="ru" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <?php
        switch($urlPage) {
            case '/pages/policy/':
            case '/pages/personal/':
            case '/pages/cookie/':
                echo '<meta name="robots" content="noindex, nofollow" />';
        }
        $protocol = ((!empty($urlProt) && $urlProt != 'off') || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
        $url = $protocol.$urlServer.$urlPage;
        $urlend = strrpos($url, '?', -1);
        if($urlend != false){
            $url = substr($url, 0, $urlend);
        }
        if(mb_substr($url, -1) == '/'){
            $url = substr($url, 0, -1);
        }
        echo '<link rel="canonical" href="'.$url.'"/>';
    ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title><?=$title?></title>
    <meta name="description" content="<?=$description?>" />
    <meta name="keywords" content="<?=$keywords?>" />

    <meta property="og:image" content="<?='https://'.$_SERVER['HTTP_HOST'].'/css/img/view-min.png';?>"/>
    <meta property="og:title" content="<?=$title?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$urlServer?>" />
    <meta property="og:description " content="<?=$description?>" />
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:site_name" content="<?=$title?>" />

    <meta itemprop="name" content="<?=$title?>" />
    <meta itemprop="description" content="<?=$description?>" />
    <meta itemprop="image" content="<?='https://'.$_SERVER['HTTP_HOST'].'/css/img/view-min.png';?>"/>

    <link rel="icon" href="/css/img/svg/logo.svg" />
    <link rel="apple-touch-icon" sizes="180x180" href="/css/img/svg/logo.svg" />
    <meta name="theme-color" content="#767067" />

    <link rel="stylesheet" href="/css/style.css?_v=5f20e1dedc26d1da432265a1307abd2d">

</head>
<body>
    <div class="wrapper">
        <header class="header blue">
            <div class="header__container">
                <div class="header__content">
                    <div class="header__top">
                        <div class="header__left">
                            <a href="/" class="header__logo logo"><img src="/css/img/svg/logo.svg" alt="Регион cпас логотип" class="logo__img"></a>
                            <p class="header__phone">Горячая линия: <a href="tel:+78006005952" class="header__tel">8 800 600 59 52</a></p>
                        </div>
                        <div class="header__right">
                            @auth
                                <p class="header__reg ">{{Auth::user()->name}} {{Auth::user()->surname}}</p>
                                <p class="header__enter" style="margin-left: 15px;" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">выйти</p>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @else
                                <p data-enter class="header__enter">Войти</p>
                                <p data-reg class="header__reg ">Зарегестрироваться</p>
                            @endauth
                        </div>
                    </div>
                    <div class="burger"><span class="burger__span"></span></div>
                    <nav class="header__nav menu">
                        @if (\Route::current()->getName() == 'home')
                            <a href="/" class="menu__item  menu__item_green">Главная</a>
                        @else
                            <a href="/" class="menu__item">Главная</a>
                        @endif
                        @if (\Route::current()->getName() == 'aboutUs')
                            <a href="{{route('aboutUs')}}" class="menu__item  menu__item_green">О нас</a>
                            @else
                                <a href="{{route('aboutUs')}}" class="menu__item">О нас</a>
                            @endif
                            @if (\Route::current()->getName() == 'join')
                                <a href="{{route('join')}}" class="menu__item menu__item_green">Стать добровольцем</a>
                            @else
                                <a href="{{route('join')}}" class="menu__item">Стать добровольцем</a>
                            @endif
                            @if (\Route::current()->getName() == 'activeSearch')
                                <a href="{{route('activeSearch')}}" class="menu__item menu__item_green">Активные поиски</a>
                            @else
                                <a href="{{route('activeSearch')}}" class="menu__item">Активные поиски</a>
                            @endif
                            @if (\Route::current()->getName() == 'help')
                                <a href="{{route('help')}}" class="menu__item menu__item_green">Отрядные нужды</a>
                            @else
                                <a href="{{route('help')}}" class="menu__item">Отрядные нужды</a>
                            @endif
                            @if (\Route::current()->getName() == 'requestHelp')
                                <a href="{{route('requestHelp')}}" class="menu__item menu__item_green">Заявка на поиск</a>
                            @else
                                <a href="{{route('requestHelp')}}" class="menu__item">Заявка на поиск</a>
                            @endif
                            @if (\Route::current()->getName() == 'comments')
                                <a href="{{route('comments')}}" class="menu__item menu__item_green">Благодарности</a>
                            @else
                                <a href="{{route('comments')}}" class="menu__item">Благодарности</a>
                            @endif
                            @if (\Route::current()->getName() == 'blog')
                                <a href="{{route('blog')}}" class="menu__item menu__item_green">Блог</a>
                            @else
                                <a href="{{route('blog')}}" class="menu__item">Блог</a>
                            @endif
                            @if (\Route::current()->getName() == 'contacts')
                                <a href="{{route('contacts')}}" class="menu__item menu__item_green">Контакты</a>
                            @else
                                <a href="{{route('contacts')}}" class="menu__item">Контакты</a>
                            @endif
                            @if (\Route::current()->getName() == 'gallery')
                                <a href="{{route('gallery')}}" class="menu__item menu__item_green">Галерея</a>
                            @else
                                <a href="{{route('gallery')}}" class="menu__item">Галерея</a>
                            @endif
                            @if (\Route::current()->getName() == 'faq')
                                <a href="{{route('faq')}}" class="menu__item menu__item_green">FAQ</a>
                            @else
                                <a href="{{route('faq')}}" class="menu__item">FAQ</a>
                            @endif
                    </nav>
                </div>
            </div>
        </header>
        @yield('content')
    </div>
</body>
</html>
<script src="{{asset('/js/script.js')}}"></script>
@yield('join')
@yield('ActiveSearch')
@yield('Help')
@yield('HelpRequest')
@yield('Comments')
@yield('Blog')
@yield('Gallery')
@yield('FAQ')
