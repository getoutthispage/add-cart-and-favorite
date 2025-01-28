<footer class="footer" id="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__top-inner">
                <div class="footer__top-item footer__top-news-latter">
                    <h6 class="footer__top-title">
                        Подпишитесь на нашу рассылку <br>
                        и узнавайте о акциях быстрее
                    </h6>
                    <form action="" class="footer-form">
                        <input class="footer-form-input" type="text" placeholder="Введите ваш Email:">
                        <button class="footer-form-btn" type="submit">Отправить</button>
                    </form>
                </div>
                <div class="footer__top-item">
                    <h6 class="footer__top-title">Информация</h6>
                    <ul class="footer-list">
                        <li class="footer-list__item"><a href="{{route('home')}}">О компании</a></li>
                        <li class="footer-list__item"><a href="{{route('home')}}">Магазины</a></li>
                        <li class="footer-list__item"><a href="{{route('home')}}">Акции</a></li>
                        <li class="footer-list__item"><a href="{{route('home')}}">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer__top-item">
                    <h6 class="footer__top-title">Интернет-магазин</h6>
                    <ul class="footer-list">
                        <li class="footer-list__item"><a href="{{route('home')}}">Доставка и самовывоз</a></li>
                        <li class="footer-list__item"><a href="{{route('home')}}">Оплата</a></li>
                        <li class="footer-list__item"><a href="{{route('home')}}">Возврат-обмен</a></li>
                        <li class="footer-list__item"><a href="{{route('home')}}">Новости</a></li>
                    </ul>
                </div>
                <div class="footer__top-item footer__top-item-social">
                    <ul class="social-list">
                        <li class="social-list__item"><a href="https://www.instagram.com/indigoshop.kz"><img src="{{asset('images/footer/insta-icon.svg')}}"
                                                                       alt=""></a>
                        </li>
                        <li class="social-list__item"><a href="https://www.youtube.com/@indigobeauty4298"><img src="{{asset('images/footer/yt-icon.svg')}}" alt=""></a>
                        </li>
                        <li class="social-list__item"><a href="https://web.facebook.com/people/indigoshopkz/100085899945476"><img src="{{asset('images/footer/fb-icon.svg')}}" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <a class="footer__bottom-link" href="tel:+77089739330">8 708 973 93 30</a>
            <a class="footer__bottom-link" href="{{route('home')}}">Алматы, Гагарина 186/1</a>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
