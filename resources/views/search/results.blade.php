@extends('layouts.main')

@section('content')
    <section class="catalog page-section">
        <div class="container">
            <h2 class="catalog__title title-indent">Результаты поиска для "{{ $query }}"</h2>
            @if($products->isEmpty())
                <p>Товары не найдены.</p>
            @else
                <div class="catalog__filters">
                    <div class="catalog__filter-items">
                    </div>
                </div>
                <div class="catalog__inner">
                    <div class="catalog__inner-list">
                        @forelse ($products as $product)
                            @php
                                $imagesArray = explode(',', $product->images);
                                $imageSrc = !empty($imagesArray[0]) ? trim($imagesArray[0]) : '';
                            @endphp
                            <div class="product-item__wrapper {{ $product->quantity == 0 ? 'product-item__not-available' : '' }}">
                                <button class="product-item-favorite"></button>
                                <button class="product-item-cart">
                                    <img src="/images/icons/cart-white.svg" alt="" class="product-item-cart__img">
                                </button>
                                <a href="#" class="product-item__notify-link">
                                    <span>сообщить о поступлении</span>
                                </a>
                                <a href="{{ route('product.show', ['id' => $product->id]) }}" class="product-item product-item-catalog">
                                    <p class="product-item__hover-text">посмотреть товар</p>
                                    <img src="/product/{{ $imageSrc }}" alt="" class="product-item__img">
                                    <h4 class="product-item__title">{{ $product->name }}</h4>
                                    <p class="price product-item__price">
                                        {{ number_format($product->sale_price, 2, '.', ' ') }}<span>₸</span>
                                    </p>
                                    <p class="product-item__notify-text">нет в наличии</p>
                                </a>
                            </div>
                        @empty
                            <p>Товары в данной категории отсутствуют.</p>
                        @endforelse
                    </div>
                </div>
                <div class="pagination">
                    <ul class="pagination-list">
                        @if ($products->onFirstPage())
                            <li class="pagination-list__item disabled"><span>«</span></li>
                        @else
                            <li class="pagination-list__item"><a href="{{ $products->previousPageUrl() }}">«</a></li>
                        @endif
                        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                            <li class="pagination-list__item {{ $page == $products->currentPage() ? 'active' : '' }}">
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach
                        @if ($products->hasMorePages())
                            <li class="pagination-list__item"><a href="{{ $products->nextPageUrl() }}">»</a></li>
                        @else
                            <li class="pagination-list__item disabled"><span>»</span></li>
                        @endif
                    </ul>
                </div>
            @endif
        </div>
    </section>
@endsection
