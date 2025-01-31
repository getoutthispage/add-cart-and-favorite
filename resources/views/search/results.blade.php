@extends('layouts.main')
@section('title', 'Главная страница')
@section('content')
    <div class="container">
        <h2 class="catalog-title">Каталог товаров</h2>
        <x-brand-filter :products="$products"/>
        <div class="catalog">
            @forelse ($products as $product)
                @php
                    $imagesArray = explode(',', $product->images);
                    $imageSrc = !empty($imagesArray[0]) ? trim($imagesArray[0]) : '';
                @endphp
                <a href="{{ route('product.show', ['id' => $product->id]) }}"
                   class="product  {{ $product->quantity == 0 ? 'product-item__not-available' : '' }}">
                    <img src="/product/{{ $imageSrc}}" alt="Товар">
                    <h3 class="product-title">{{ $product->name }}</h3>
                    <p class="product-price"> {{ number_format($product->sale_price, 0, '.') }}<span>₸</span></p>
                    <button class="product-cart">
                        <img src="/images/icons/cart-white.svg" alt="">
                    </button>
                </a>
            @empty
                <p>Товары в данной категории отсутствуют.</p>
            @endforelse
        </div>
        <div class="pagination page-section">
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
    </div>

@endsection
