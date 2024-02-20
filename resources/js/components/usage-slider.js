import Swiper from 'swiper';
import { Navigation, Pagination, Grid } from 'swiper/modules';
export default function init($element) {

    let options =  {
        modules: [Navigation, Pagination, Grid],
        slidesPerView: 1,
        spaceBetween: 15,
        breakpoints: {
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
                grid: {
                    rows: 2,
                    fill: "row",
                },
            }
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    }
    new Swiper($element, options);
}
