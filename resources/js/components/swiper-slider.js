import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
export default function init($element) {
    let defOptions =  {
        modules: [Navigation, Pagination],
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    }
    let dataOptions = $element.dataset;


    let params = Object.keys(dataOptions).reduce((result, key) => {
        if (key !== 'lazy') {
            result[key] = dataOptions[key];
        }
        return result;
    }, {});

    new Swiper($element, {...defOptions, ...params });
}
