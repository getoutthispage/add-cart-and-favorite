@extends('layouts.main')
@section('title', 'Главная страница')
@section('content')

    <section class="product-card page-section">
        <div class="container">
            <div class="product-card__inner">
                <div class="product-card__img-box product-item--sale">

                    <div class="product-card-img-wrapper">
                        <img src="/product/{{ $product->image }}" alt="" class="product-card-img">
                    </div>
                    {{--                <p class="product-card__price-old price">18 450</p>--}}
                    <p class="product-card__price-new">{{ number_format($product->sale_price, 2, '.', ' ') }}</p>
                    <a href="#" class="product-card__link">Гарантия качества</a>
                </div>
                <div class="product-card_content">
                    <h1 class="product-card__title">{{ $product->name }}</h1>
                    <p class="product-card__code">Код продукта: {{ $product->code }}</p>
                    <div class="product-card__buttons">
                        <a href="#"><img class="product-card__icon-favorite"
                                         src="{{asset('../images/icons/favorite.svg')}}"
                                         alt=""></a>
                        <a href="#"><img class="product-card__icon-compare"
                                         src="{{asset('../images/product-page/compare.svg')}}"
                                         alt=""></a>
                        <a href="#" class="rate">
                            <form>
                                <div class="rating">
                                    <input type="radio" name="rating" id="star5" value="5">
                                    <label for="star5">&#9733;</label>
                                    <input type="radio" name="rating" id="star4" value="4">
                                    <label for="star4">&#9733;</label>
                                    <input type="radio" name="rating" id="star3" value="3">
                                    <label for="star3">&#9733;</label>
                                    <input type="radio" name="rating" id="star2" value="2">
                                    <label for="star2">&#9733;</label>
                                    <input type="radio" name="rating" id="star1" value="1">
                                    <label for="star1">&#9733;</label>
                                </div>
                            </form>
                        </a>
                    </div>
                    <div class="tabs-wrapper product-card__tabs">
                        <div class="tabs">
                            <a class="tab product-card__tab tab--active" href="#product-1">Характеристики</a>
                            <a class="tab product-card__tab" href="#product-2">Наличие в магазине</a>
                        </div>
                        <div class="tabs-container">
                            <div id="product-1" class="tabs-content tabs-content--active product-card__tab-content ">
                                <ul class="product-card__list">
                                    @if($product->attributes)
                                        @php
                                            $attributes = json_decode($product->attributes, true); // Декодируем атрибуты
                                        @endphp

                                        @foreach($attributes as $key => $value)
                                            <li class="product-card__item">
                                                <div class="product-card__item-left">{{ $key }}</div>
                                                <!-- Ключ атрибута -->
                                                <div class="product-card__item-right">{{ $value }}</div>
                                                <!-- Значение атрибута -->
                                            </li>
                                        @endforeach
                                    @else
                                        <li class="product-card__item">
                                            <div class="product-card__item-left">Нет атрибутов</div>
                                            <div class="product-card__item-right">---</div>
                                        </li>
                                    @endif
                                </ul>
                                <a href="#" class="product-card__more">Показать еще</a>
                                <div class="product-card__btn">
                                    <button id="openModal" class="btn btn-primary">Купить</button>
                                    {{--                                    <a href="{{route('orders')}}" class="btn btn-primary">заказы</a>--}}

                                    <!-- Всплывающее окно -->
                                    <div id="buyModal" class="modal">
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <h2>Оставьте ваш номер телефона</h2>
                                            <form id="buyForm" action="{{ route('submitOrder') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id ?? '' }}">
                                                <label for="name">Ваше имя:</label>
                                                <input type="text" id="name" name="name" placeholder="Введите ваше имя"
                                                       required>

                                                <label for="phone">Номер телефона:</label>
                                                <input type="tel" id="phone" name="phone"
                                                       placeholder="Введите номер телефона" required>

                                                <button type="submit" class="btn btn-success">Отправить</button>
                                            </form>
                                        </div>
                                    </div>
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div id="product-2" class="tabs-content product-card__tab-content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
