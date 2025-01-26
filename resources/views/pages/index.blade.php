@extends('layouts.main')

@section('title', 'Главная страница')

@section('content')
    <section class="banner__swiper page-section">

        <div class="container">
            <div class="banner-section-inner">
                <div class="swiper my-first-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img class="swiper__img"
                                src="{{asset('images/banner/scissors-for-hairdressers-and-barbers.jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img class="swiper__img"
                                src="{{asset('images/banner/installment-plan-in-kaspi.jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img class="swiper__img"
                                src="{{asset('images/banner/installment-plan-in-halyk.jpg')}}" alt=""></div>
                    </div>
                </div>
                <a class="main-promotion-banner" href="{{route('home')}}">
                    <img src="{{asset('/images/banner/sale-product/main-promotion.png')}}" alt="">
                </a>
            </div>
        </div>
    </section>
    <section class="search page-section">
        <div class="container">
            <form class="search__content-form">
                <input class="search__content-input" type="text" placeholder="Введите название товара">
                <button class="search__content-btn" type="submit">Искать</button>
            </form>
        </div>
    </section>
    <section class="categories page-section">
        <div class="container">
            <div class="categories__inner">
                <a class="categories__item" href="{{ route('categories.hairdressers') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Все для парикмахеров</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/Vse_dlya_parikhmaherov.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('categories.colorists') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Все для колористов</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/Vse_dlya_Koloristov.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('categories.accessories') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Аксессуары</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/aksessuary.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('categories.consumables') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Расходные материалы</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/rashodnie-materialy.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog', ['slug' => 'komplekty']) }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Комплекты</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/komplekty.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog', ['slug' => 'stock']) }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Акции</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/akcii.png')}}" alt="">
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
                        @foreach ($products->take(6) as $product)
                            <div class="swiper-slide product-slider__item">
                                <div class="product-item__wrapper">
                                    <button class="product-item-favorite"></button>
                                    <button class="product-item-cart"> <img src="{{asset('/images/icons/cart-white.svg')}}"
                                                                            alt="" class="product-item-cart__img"> </button>
                                    <a href="#" class="product-item__notify-link"><span>сообщить о
                                        поступлении</span></a>
                                    <a href="{{ route('product.show', ['id' => $product->id]) }}" class="product-item">
                                        <p class="product-item__hover-text">
                                            посмотреть товар
                                        </p>
                                        <img src="/product/{{ $product->images }}" alt="" class="product-item__img">
                                        <h4 class="product-item__title">{{ $product->name }}</h4>
                                        <p class="price product-item__price">{{ number_format($product->sale_price, 2, '.', ' ') }}<span>₸</span></p>
                                        <a href="{{route('home')}}" class="product-item__notify-text">
                                            нет в наличии
                                        </a>
                                    </a>
                                </div>
                            </div>
                        @endforeach
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
    <section class="products page-section">
        <div class="container">
            <div class="products__inner">
                <h3 class="product__title">C этим товаром так же покупают</h3>
                <div class="swiper my-second-slider">
                    <div class="swiper-wrapper swiper-wrapper-prodi">
                        @foreach ($products->take(6) as $product)
                        <div class="swiper-slide product-slider__item">
                            <div class="product-item__wrapper">
                                <button class="product-item-favorite"></button>
                                <button class="product-item-cart"> <img src="{{asset('/images/icons/cart-white.svg')}}"
                                        alt="" class="product-item-cart__img"> </button>
                                <a href="{{ route('product.show', ['id' => $product->id]) }}" class="product-item__notify-link"><span>сообщить о
                                        поступлении</span></a>
                                <a href="{{ route('product.show', ['id' => $product->id]) }}" class="product-item">
                                    <p class="product-item__hover-text">
                                        посмотреть товар
                                    </p>
                                    <img src="/product/{{ $product->images }}" alt="" class="product-item__img">
                                    <h4 class="product-item__title">{{ $product->name }}</h4>
                                    <p class="price product-item__price">{{ number_format($product->sale_price, 2, '.', ' ') }}<span>₸</span></p>
                                    <a href="{{route('home')}}" class="product-item__notify-text">
                                        нет в наличии
                                    </a>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="product__more"><a class="product__more-link" href="{{route('home')}}">Показать еще</a></div>php at
            </div>
        </div>
    </section>
@endsection
