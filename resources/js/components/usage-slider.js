import Swiper from 'swiper';
import { Navigation, Pagination, Grid } from 'swiper/modules';
export default function init($element) {
    let options =  {
        modules: [Navigation, Pagination, Grid],
        slidesPerView: 2    ,
        grid: {
            rows: 2,
        },
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    }
    new Swiper($element, options);
}
