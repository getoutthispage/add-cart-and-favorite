<section class="products page-section">
    <div class="container">
        <div class="products__inner">
            <h3 class="product__title">{{$pptitle}}</h3>
            <div class="swiper my-second-slider">
                <div class="swiper-wrapper">
                    @foreach ($products->take(6) as $product)
                        @if(!$product->images)
                            @continue
                        @endif
                        <div class="swiper-slide product-slider__item">
                            <div class="product-item__wrapper">
                                <button class="product-item-favorite"></button>
                                <button class="product-item-cart">
                                    <img src="{{asset('/images/icons/cart-white.svg')}}" alt="">
                                </button>
                                <div class="not-available">
                                    <a href="{{ route('product.show', $product->id) }}"
                                       class="product-item__notify-text">нет в наличии</a>
                                    <a class="product-item__notify-link"
                                       href="{{ route('product.show', $product->id) }}"><span>сообщить о поступлении</span></a>
                                </div>
                                <a class="product-item" href="{{ route('product.show', $product->id) }}">
                                    <p class="product-item__hover-text">посмотреть товар</p>
                                    <img class="product-item__img"
                                         src="/product/{{ explode(',', $product->images)[0] }}" alt="">
                                    <h4 class="product-item__title">{{ $product->name }}</h4>
                                    <div  class="price product-item__price">{{ number_format($product->sale_price, 0, '.')  }}
                                        <span>₸</span></div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="product__more"><a class="product__more-link" href="{{ route('catalog','all-accessories') }}">Показать
                    еще</a></div>
        </div>
    </div>
</section>
