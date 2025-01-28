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
                <a class="categories__item" href="{{ route('catalog', ['slug' => 'scissors']) }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Рабочие ножницы</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/scissors.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog', ['slug' => 'shavettes']) }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Рейзеры Шаветки Помазки</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/shavettes.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog', ['slug' => 'Филировочные ножницы']) }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Филировочные ножницы</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/thinning.png')}}" alt="">
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
