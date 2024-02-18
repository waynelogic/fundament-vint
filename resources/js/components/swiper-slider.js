import Swiper from 'swiper';
import { Navigation, Pagination, Grid } from 'swiper/modules';
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
            if (key === 'rows') {

            }
            result[key] = dataOptions[key];
            console.log(result)
        }
        return result;
    }, {});

    new Swiper($element, {...defOptions, ...params });
}
