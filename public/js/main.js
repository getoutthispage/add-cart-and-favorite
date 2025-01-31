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
document.getElementById('openModal').onclick = function () {
    document.getElementById('buyModal').style.display = 'block';
};

document.querySelector('.close').onclick = function () {
    document.getElementById('buyModal').style.display = 'none';
};

window.onclick = function (event) {
    const modal = document.getElementById('buyModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
};
$('.menu-btn').on('click', function (){
   $('.menu-mobile__list').toggleClass('menu-mobile__list--active')
});
function toggleModal(event) {
    if (event) event.preventDefault(); // Отключаем переход по ссылке
    let modal = document.getElementById('authModal');
    modal.style.display = (modal.style.display === "flex") ? "none" : "flex";
}

// Закрытие при клике вне окна
window.onclick = function(event) {
    let modal = document.getElementById('authModal');
    if (event.target === modal) {
        modal.style.display = "none";
    }
};
