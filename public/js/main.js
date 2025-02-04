const swiper = new Swiper('.my-first-slider', {});


const secondSlider = new Swiper('.my-second-slider', {
    slidesPerView: 4, // По умолчанию 4 слайда
    spaceBetween: 10, // Расстояние между слайдами
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    loop: true, // Зацикливание (опционально)
    breakpoints: {
        1200: {
            slidesPerView: 4, // Для экранов шириной до 1100px
        },
        1100: {
            slidesPerView: 3, // Для экранов шириной до 1100px
        },
        968: {
            slidesPerView: 2, // Для экранов шириной до 968px
        },
        0: {
            slidesPerView: 2, // Для экранов шириной до 640px
        },

    },
});
