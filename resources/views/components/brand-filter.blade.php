<div class="catalog__filters">
    <div class="catalog__filter-items">
        @foreach ($brands as $brand)
            <a href="{{ route('search', ['query' => $brand]) }}">
                <button type="button">{{ $brand }}</button>
            </a>
        @endforeach
    </div>
{{--    <div class="catalog__filter-btn">--}}
{{--        <button>--}}
{{--            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <rect x="1" y="1" width="21" height="19" stroke="#2F3035" stroke-width="2" />--}}
{{--                <rect x="7" y="6" width="2" height="2" fill="#2F3035" stroke="#2F3035" stroke-width="2" />--}}
{{--                <rect x="7" y="13" width="2" height="2" fill="#2F3035" stroke="#2F3035" stroke-width="2" />--}}
{{--                <rect x="14" y="6" width="2" height="2" fill="#2F3035" stroke="#2F3035" stroke-width="2" />--}}
{{--                <rect x="14" y="13" width="2" height="2" fill="#2F3035" stroke="#2F3035" stroke-width="2" />--}}
{{--            </svg>--}}
{{--        </button>--}}
{{--    </div>--}}
</div>
