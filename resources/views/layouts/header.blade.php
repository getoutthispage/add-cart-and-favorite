<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indigoshop</title>
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
                    <div class="menu-btn">
                        <img src="{{asset('images/header/burger.svg')}}" alt="">
                    </div>
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a class="menu__link" href="{{route('home')}}">
                                Главная
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="{{route('home')}}">
                                Категории
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="{{route('home')}}">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
                <a class="logo" href="{{route('home')}}">
                    <img class="logo__img" src="{{asset('/images/header/logo-indigoshop.png')}}" alt="indigoshop-logo">
                </a>

                <div class="header__box">
                    <p class="header__address">
                        Алматы, Гагарина 186/1
                    </p>
                    <ul class="user-list">
                        <li class="user-list__item">
                            <a class="user-list__link" href="{{route('home')}}">
                                <img src="{{asset('/images/icons/favorite.svg')}}" alt="">
                            </a>
                        </li>
                        <li class="user-list__item">
                            <a class="user-list__link" href="{{route('home')}}">
                                <img src="{{asset('/images/header/user.svg')}}" alt="">
                            </a>
                        </li>
                        <li class="user-list__item">
                            <a class="user-list__link cart" href="{{route('home')}}">
                                <img src="{{asset('/images/icons/cart.svg')}}" alt="">
                                <!-- <p class="cart__num">1</p> -->
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <ul class="menu-mobile__list">
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="{{asset('/images/header/user.svg')}}" alt="">
                <p>Войти</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="{{asset('/images/header/user.svg')}}" alt="">
                <p>Регистрация</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="{{asset('/images/icons/favorite.svg')}}" alt="">
                <p>Избранное</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="{{asset('/images/icons/cart.svg')}}" alt="">
                <p>Корзина</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="{{asset('/images/icons/shops.svg')}}" alt="">
                <p>Магазины</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="{{asset('/images/icons/procent.svg')}}" alt="">
                <p>Акции</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="{{asset('/images/icons/dostavka.svg')}}" alt="">
                <p>Доставка и оплата</p>
            </a>
        </li>

        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Машинки</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Ножницы</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Фены</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Плойки</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Планшеты</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Кисти</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Чашки</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Зажимы</p>
            </a>
        </li>
    </ul>
    <div class="header__bottom">
        <div class="container">
            <ul class="menu-categories">
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="{{route('home')}}">Машинки</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="{{route('home')}}">Ножницы</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="{{route('home')}}">Плойки</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="{{route('home')}}">Расчески</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="{{route('home')}}">Фены</a>
                </li>
                <li class="menu-categories__item">
                    <a class="menu-categories__link" href="{{route('home')}}">Аксессуары</a>
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
