<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indigoshop</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/media.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>

<body>
<header class="header page-section">
    <div class="header__top">
        <div class="container">
            <div class="header__top-inner">
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a class="menu__link" href="{{route('home')}}">
                                Главная
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#categories">
                                Категории
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#footer">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
                <a class="logo" href="{{route('home')}}">
                    <img class="logo__img" src="{{asset('/images/header/logo-indigoshop.png')}}" alt="indigoshop-logo">
                </a>

                <div class="header__box">
                    <a href="https://go.2gis.com/OSkNz" class="header__address">
                        Алматы, Гагарина 186/1
                    </a>
                    <ul class="user-list">
                        <li class="user-list__item">
                            <a class="user-list__link cart" href="{{route('home')}}">
                                <img src="{{asset('/images/icons/cart.svg')}}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <ul class="menu-categories">
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="{{ url('/categories/hairdressers/machines')}}">Машинки</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="{{ url('/categories/hairdressers/scissors')}}">Ножницы</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link"
                       href="{{url('/categories/hairdressers/CurlingIronsStraighteners')}}">Плойки</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="{{url('/categories/hairdressers/combs')}}">Расчески</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="{{route('home')}}">Фены</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="{{ url('/categories/accessories') }}">Аксессуары</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="{{route('home')}}">Планшеты</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="{{route('home')}}">Чашки</a>
                </li>
            </ul>
        </div>
    </div>
</header>
