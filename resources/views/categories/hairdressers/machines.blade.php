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
                <a class="categories__item" href="{{ route('catalog', 'attachments') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Насадки</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/attachments.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog','working-machines') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Рабочие Машинки</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/machines.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog', 'trimmers') }}">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Триммеры</h4>
                        <p class="categories__item-text">Подробнее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="{{asset('images/categories/trimmers.png')}}" alt="">
                    </div>
                </a>
                <a class="categories__item" href="{{ route('catalog', 'shavers') }}">
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
    @include('section.popularProducts', ['pptitle' => 'Популярные товары:'])
    <div class="banner page-section">
        <div class="container">
            <a class="banner-link" href="#">
                <img src="{{asset('images/long-banners/banner.jpg')}}" alt="">
            </a>
        </div>
    </div>

@endsection
