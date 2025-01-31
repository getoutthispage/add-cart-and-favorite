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
                            <a class="user-list__link" href="{{route('home')}}">
                                <img src="{{asset('/images/icons/favorite.svg')}}" alt="">
                            </a>
                        </li>





                        <li class="user-list__item">
                            <a href="#" class="user-list__link" onclick="toggleModal(event)">
                                <img src="http://192.168.0.5:8080/images/header/user.svg" alt="Профиль">
                            </a>
                        </li>

                        <!-- Модальное окно -->
                        <div id="authModal" class="modal" style="display: none;"> <!-- Скрыто по умолчанию -->
                            <div class="modal-content">
                                <!-- Кнопка закрытия -->
                                <span class="close" onclick="toggleModal()">&times;</span>


                                @auth
                                    <p>Добро пожаловать!</p>
                                    <a class="modal-links">
                                    <a href="{{route('dashboard')}}" class="modal-button">Профиль</a>
                                </a>
                                @else
                                    <p>Авторизация/Регистрация</p>
                                <a class="modal-links">
                                    <a href="{{route('login')}}" class="modal-button">Войти</a>
                                </a>
                                <a class="modal-links">
                                    <a href="{{route('register')}}" class="modal-button">Регистрация</a>
                                </a>
                                @endauth
                            </div>
                        </div>



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
            <a class="menu-mobile__link" href="{{ url('/categories/hairdressers/machines')}}">
                <p>Машинки</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="{{ url('/categories/hairdressers/scissors')}}">
                <p>Ножницы</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Фены</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="{{url('/categories/hairdressers/CurlingIronsStraighteners')}}">
                <p>Плойки</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="{{ route('catalog','tablets') }}">
                <p>Планшеты</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="{{ route('catalog','brushes') }}">
                <p>Кисти</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Чашки</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="{{ route('catalog','clips') }}">
                <p>Зажимы</p>
            </a>
        </li>
    </ul>
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
                    <a class="menu-categories__link" href="{{url('/categories/hairdressers/CurlingIronsStraighteners')}}">Плойки</a>
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
