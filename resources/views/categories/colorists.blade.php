@extends('layouts.main')

@section('title', 'Главная страница')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__list-item"><a href="#">Главная</a></li>
                <li class="breadcrumbs__list-item"><span>Все для колористов</span></li>
            </ul>
        </div>
    </div>
    <section class="categories page-section">
        <div class="container">
            <div class="categories__inner">
                <a class="categories__item" href="{{ route('catalog','accessories') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Аксессуары</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/key.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog','brushes') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Кисти</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/brushes.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog','tablets') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Планшеты, термобумага, весы</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/tablets.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog','cups') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Чашки</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/cups.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog','caps') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Шапочки Пелерины</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/capes.png')}}" alt="">
                    </div>
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
