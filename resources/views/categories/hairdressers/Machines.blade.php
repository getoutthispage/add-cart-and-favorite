@extends('layouts.main')

@section('title', 'Главная страница')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__list-item"><a href="#">Главная</a></li>
                <li class="breadcrumbs__list-item"><span>Все для парикмахеров</span></li>
                <li class="breadcrumbs__list-item"><span>Машинки</span></li>
            </ul>
        </div>
    </div>
    <section class="categories page-section">
        <div class="container">
            <div class="categories__inner">
                <a class="categories__item" href="{{ route('catalog', ['slug' => 'attachments']) }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Насадки</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/attachments.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog', ['slug' => 'Рабочие Машинки']) }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Рабочие Машинки</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/machines.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog', ['slug' => 'trimmers']) }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Триммеры</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/trimmers.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog', ['slug' => 'shavers']) }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Шейверы, Электро-Бритвы</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/shavers.png')}}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="products page-section">
        <div class="container">
            <div class="products__inner">
                <h3 class="product__title">Популярные товары</h3>
                <div class="swiper my-second-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide product-slider__item">
                            <div class="product-item__wrapper">
                                <button class="product-item-favorite"></button>
                                <button class="product-item-cart"> <img src="/images/icons/cart-white.svg"
                                                                        alt="" class="product-item-cart__img"> </button>
                                <a href="#" class="product-item__notify-link"><span>сообщить о
                                    поступлении</span></a>
                                <a href="#" class="product-item">
                                    <p class="product-item__hover-text">
                                        посмотреть товар
                                    </p>
                                    <img src="/images/product/cr-11.png" alt="" class="product-item__img">
                                    <h4 class="product-item__title">Рабочая машинка CRONIER CR-11</h4>
                                    <p class="price product-item__price">18 450 <span>₸</span></p>
                                    <p href="" class="product-item__notify-text">
                                        нет в наличии
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide product-slider__item">
                            <div class="product-item__wrapper">
                                <button class="product-item-favorite"></button>
                                <button class="product-item-cart"> <img src="/images/icons/cart-white.svg"
                                                                        alt="" class="product-item-cart__img"> </button>
                                <a href="#" class="product-item__notify-link"><span>сообщить о
                                    поступлении</span></a>
                                <a href="#" class="product-item">
                                    <p class="product-item__hover-text">
                                        посмотреть товар
                                    </p>
                                    <img src="/images/product/cr-11.png" alt="" class="product-item__img">
                                    <h4 class="product-item__title">Рабочая машинка CRONIER CR-11</h4>
                                    <p class="price product-item__price">18 450 <span>₸</span></p>
                                    <p href="" class="product-item__notify-text">
                                        нет в наличии
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide product-slider__item">
                            <div class="product-item__wrapper">
                                <button class="product-item-favorite"></button>
                                <button class="product-item-cart"> <img src="/images/icons/cart-white.svg"
                                                                        alt="" class="product-item-cart__img"> </button>
                                <a href="#" class="product-item__notify-link"><span>сообщить о
                                    поступлении</span></a>
                                <a href="#" class="product-item">
                                    <p class="product-item__hover-text">
                                        посмотреть товар
                                    </p>
                                    <img src="/images/product/cr-11.png" alt="" class="product-item__img">
                                    <h4 class="product-item__title">Рабочая машинка CRONIER CR-11</h4>
                                    <p class="price product-item__price">18 450 <span>₸</span></p>
                                    <p href="" class="product-item__notify-text">
                                        нет в наличии
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide product-slider__item">
                            <div class="product-item__wrapper">
                                <button class="product-item-favorite"></button>
                                <button class="product-item-cart"> <img src="/images/icons/cart-white.svg"
                                                                        alt="" class="product-item-cart__img"> </button>
                                <a href="#" class="product-item__notify-link"><span>сообщить о
                                    поступлении</span></a>
                                <a href="#" class="product-item">
                                    <p class="product-item__hover-text">
                                        посмотреть товар
                                    </p>
                                    <img src="/images/product/cr-11.png" alt="" class="product-item__img">
                                    <h4 class="product-item__title">Рабочая машинка CRONIER CR-11</h4>
                                    <p class="price product-item__price">18 450 <span>₸</span></p>
                                    <p href="" class="product-item__notify-text">
                                        нет в наличии
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide product-slider__item">
                            <div class="product-item__wrapper">
                                <button class="product-item-favorite"></button>
                                <button class="product-item-cart"> <img src="/images/icons/cart-white.svg"
                                                                        alt="" class="product-item-cart__img"> </button>
                                <a href="#" class="product-item__notify-link"><span>сообщить о
                                    поступлении</span></a>
                                <a href="#" class="product-item">
                                    <p class="product-item__hover-text">
                                        посмотреть товар
                                    </p>
                                    <img src="/images/product/cr-11.png" alt="" class="product-item__img">
                                    <h4 class="product-item__title">Рабочая машинка CRONIER CR-11</h4>
                                    <p class="price product-item__price">18 450 <span>₸</span></p>
                                    <p href="" class="product-item__notify-text">
                                        нет в наличии
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide product-slider__item">
                            <div class="product-item__wrapper">
                                <button class="product-item-favorite"></button>
                                <button class="product-item-cart"> <img src="/images/icons/cart-white.svg"
                                                                        alt="" class="product-item-cart__img"> </button>
                                <a href="#" class="product-item__notify-link"><span>сообщить о
                                    поступлении</span></a>
                                <a href="#" class="product-item">
                                    <p class="product-item__hover-text">
                                        посмотреть товар
                                    </p>
                                    <img src="/images/product/cr-11.png" alt="" class="product-item__img">
                                    <h4 class="product-item__title">Рабочая машинка CRONIER CR-11</h4>
                                    <p class="price product-item__price">18 450 <span>₸</span></p>
                                    <p href="" class="product-item__notify-text">
                                        нет в наличии
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__more"><a class="product__more-link" href="#">Показать еще</a></div>
            </div>
        </div>
    </section>
    <div class="banner page-section">
        <div class="container">
            <a class="banner-link" href="#">
                <img src="{{asset('images/long-banners/banner.jpg')}}" alt="">
            </a>
        </div>
    </div>

@endsection
