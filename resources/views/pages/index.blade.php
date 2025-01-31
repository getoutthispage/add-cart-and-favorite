@extends('layouts.main')

@section('title', 'Главная страница')

@section('content')
    <section class="banner__swiper page-section">
        <div class="container">
            <div class="banner-section-inner">
                <div class="swiper my-first-slider">
                    <div class="swiper-wrapper">
                        @foreach ($banners as $banner)
                            <div class="swiper-slide">
                                <img class="swiper__img" src="{{ asset('storage/' . $banner->image_path) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <a class="main-promotion-banner" href="{{ route('home') }}">
                    <img src="{{ asset('/images/banner/sale-product/main-promotion.png') }}" alt="">
                </a>
            </div>
        </div>
    </section>
{{--    <section class="banner__swiper page-section">--}}

{{--        <div class="container">--}}
{{--            <div class="banner-section-inner">--}}
{{--                <div class="swiper my-first-slider">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="swiper-slide"><img class="swiper__img"--}}
{{--                                                       src="{{asset('images/banner/scissors-for-hairdressers-and-barbers.jpg')}}"--}}
{{--                                                       alt=""></div>--}}
{{--                        <div class="swiper-slide"><img class="swiper__img"--}}
{{--                                                       src="{{asset('images/banner/installment-plan-in-kaspi.jpg')}}"--}}
{{--                                                       alt=""></div>--}}
{{--                        <div class="swiper-slide"><img class="swiper__img"--}}
{{--                                                       src="{{asset('images/banner/installment-plan-in-halyk.jpg')}}"--}}
{{--                                                       alt=""></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <a class="main-promotion-banner" href="{{route('home')}}">--}}
{{--                    <img src="{{asset('/images/banner/sale-product/main-promotion.png')}}" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section class="search page-section">
        <div class="container">
            <form class="search__content-form" action="{{ route('search') }}" method="GET">
                <input class="search__content-input" name="query" type="text" placeholder="Введите название товара" required>
                <button class="search__content-btn" type="submit">Искать</button>
            </form>
        </div>
    </section>
    <section id="categories" class="categories page-section">
        <div class="container">
            <div class="categories__inner">
                <a class="categories__item" href="{{ url('/categories/hairdressers') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Все для парикмахеров</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{ asset('images/categories/Vse_dlya_parikhmaherov.png') }}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ url('/categories/colorists') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Все для колористов</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{ asset('images/categories/Vse_dlya_Koloristov.png') }}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ url('/categories/accessories') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Аксессуары</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{ asset('images/categories/aksessuary.png') }}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ url('/categories/consumables') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Расходные материалы</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{ asset('images/categories/rashodnie-materialy.png') }}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog', ['slug' => 'sets']) }}">
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
    @include('section.popularProducts', ['pptitle' => 'Популярные товары'])
    <div class="banner page-section">
        <div class="container">
            <a class="banner-link" href="#">
                <img src="{{asset('images/long-banners/banner.jpg')}}" alt="">
            </a>
        </div>
    </div>
    @include('section.popularProducts', ['pptitle' => 'С этим товаром покупают'])
@endsection
