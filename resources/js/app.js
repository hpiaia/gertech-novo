import Swiper from 'swiper';
import GLightbox from 'glightbox';

document.getElementById('navbar-toggle').addEventListener('click', e => {
    e.preventDefault();

    document.getElementById('navbar').classList.toggle('hidden');
});

new Swiper('.banners-slide', {
    autoHeight: true,
    pagination: {
        el: '.banners-slide-pagination',
        clickable: true
    }
});

new Swiper('.customers-slide', {
    autoplay: {
        delay: 2000
    },
    slidesPerView: 2,
    breakpoints: {
        768: {
            slidesPerView: 3
        },
        1024: {
            slidesPerView: 4
        }
    }
});

const galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    autoplay: true
});

new Swiper('.gallery-top', {
    spaceBetween: 10,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    thumbs: {
        swiper: galleryThumbs
    }
});

GLightbox({
    selector: 'solution-gallery'
});

if (document.getElementById('contact-map')) {
    const map = new google.maps.Map(document.getElementById('contact-map'), {
        zoom: 17,
        center: { lat: -27.095895, lng: -52.635874 }
    });

    new google.maps.Marker({
        position: { lat: -27.095895, lng: -52.635874 },
        map
    });
}
