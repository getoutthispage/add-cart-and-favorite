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
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Выпрямители</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/straighteners.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Гофре</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/corrugation.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Плойки</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/Curling-irons.png')}}" alt="">
                    </div>
                </a>
                </a>
            </div>
        </div>
    </section>
    @include('section.popularProducts', ['pptitle' => 'Популярные товары:'])
    <div class="banner page-section">
        <div class="container">
            <a class="banner-link" href="#">
                <img src="{{asset('images/long-banners/banner.jpg')}}" alt="">
            </a>
        </div>
    </div>

@endsection
