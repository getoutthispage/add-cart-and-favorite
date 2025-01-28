@extends('layouts.main')

@section('title', 'Главная страница')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__list-item"><a href="#">Главная</a></li>
                <li class="breadcrumbs__list-item"><span>Аксессуары</span></li>
            </ul>
        </div>
    </div>
    <section class="categories page-section">
        <div class="container">
            <div class="categories__inner">
                <a class="categories__item" href="{{ route('catalog','all-accessories') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Аксессуары</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/Accessories-for-colorist.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog','clips') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Зажимы Невидимки для Причесок</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/Clips.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog','rugs') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Коврики Подставки</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/Rugs.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog','mannequins') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Манекены</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/Mannequins.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog','bags') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Сумки Чехлы Кабуры</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/Bags.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog','decorations') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Украшения</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/Decorations.png')}}" alt="">
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
