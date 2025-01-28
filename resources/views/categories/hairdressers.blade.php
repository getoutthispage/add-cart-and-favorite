@extends('layouts.main')

@section('title', 'Главная страница')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs__list">
            <li class="breadcrumbs__list-item"><a href="#">Главная</a></li>
            <li class="breadcrumbs__list-item"><span>Все для парикмахеров</span></li>
        </ul>
    </div>
</div>
<section class="categories page-section">
    <div class="container">
        <div class="categories__inner">
            <a class="categories__item" href="#">
                <div class="categories__item-info">
                    <h4 class="categories__item-title">Бигуди</h4>
                    <p class="categories__item-text">Подробнее</p>
                </div>
                <div class="categories__item-img">
                    <img src="{{asset('images/categories/curlers.png')}}" alt="">
                </div>
            </a>
            <a class="categories__item" href="{{ url('/categories/hairdressers/machines')}}">
                <div class="categories__item-info">
                    <h4 class="categories__item-title">Машинки</h4>
                    <p class="categories__item-text">Подробнее</p>
                </div>
                <div class="categories__item-img">
                    <img src="{{asset('images/categories/machines.png')}}" alt="">
                </div>
            </a>
            <a class="categories__item" href="{{ url('/categories/hairdressers/scissors')}}">
                <div class="categories__item-info">
                    <h4 class="categories__item-title">Ножницы</h4>
                    <p class="categories__item-text">Подробнее</p>
                </div>
                <div class="categories__item-img">
                    <img src="{{asset('images/categories/scissors.png')}}" alt="">
                </div>
            </a>
{{--            <a class="categories__item" href=" {{ route('catalog', ['slug' => 'Nightgown']) }}"> --}}
            <a href="#" class="categories__item">
                <div class="categories__item-info">
                    <h4 class="categories__item-title">Пеньюары</h4>
                    <p class="categories__item-text">Подробнее</p>
                </div>
                <div class="categories__item-img">
                    <img src="{{asset('images/categories/Nightgown.png')}}" alt="">
                </div>
            </a>
            <a class="categories__item" href="{{url('/categories/hairdressers/CurlingIronsStraighteners')}}">
                <div class="categories__item-info">
                    <h4 class="categories__item-title">Плойки Выпрямители</h4>
                    <p class="categories__item-text">Подробнее</p>
                </div>
                <div class="categories__item-img">
                    <img src="{{asset('images/categories/Curling-Irons-Straighteners.png')}}" alt="">
                </div>
            </a>
            <a href="#" class="categories__item">
{{--            <a class="categories__item" href="{{ route('catalog', ['slug' => 'Hair-dryers']) }}">--}}
                <div class="categories__item-info">
                    <h4 class="categories__item-title">Фены</h4>
                    <p class="categories__item-text">Подробнее</p>
                </div>
                <div class="categories__item-img">
                    <img src="{{asset('images/categories/Hair-dryers.png')}}" alt="">
                </div>
            </a>
            <a class="categories__item" href="{{url('/categories/hairdressers/combs')}}">
                <div class="categories__item-info">
                    <h4 class="categories__item-title">Расчёски</h4>
                    <p class="categories__item-text">Подробнее</p>
                </div>
                <div class="categories__item-img">
                    <img src="{{asset('images/categories/combs.png')}}" alt="">
                </div>
            </a>
            <a href="#" class="categories__item">
{{--            <a class="categories__item" href="{{ route('catalog', ['slug' => 'Sprayers']) }}">--}}
                <div class="categories__item-info">
                    <h4 class="categories__item-title">Распылители</h4>
                    <p class="categories__item-text">Подробнее</p>
                </div>
                <div class="categories__item-img">
                    <img src="{{asset('images/categories/Sprayers.png')}}" alt="">
                </div>
            </a>
            <a href="#" class="categories__item">
{{--            <a class="categories__item" href="{{ route('catalog', ['slug' => 'brushes']) }}">--}}
                <div class="categories__item-info">
                    <h4 class="categories__item-title">Смётки</h4>
                    <p class="categories__item-text">Подробнее</p>
                </div>
                <div class="categories__item-img">
                    <img src="{{asset('images/categories/brushes.png')}}" alt="">
                </div>
            </a>
            <a href="#" class="categories__item">
{{--            <a class="categories__item" href="{{ route('catalog', ['slug' => 'aprons']) }}">--}}
                <div class="categories__item-info">
                    <h4 class="categories__item-title">Фартуки</h4>
                    <p class="categories__item-text">Подробнее</p>
                </div>
                <div class="categories__item-img">
                    <img src="{{asset('images/categories/aprons.png')}}" alt="">
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
