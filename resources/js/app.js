import './bootstrap';

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

axios.get(window.location.href, {
    headers: {
        'Method': 'onGetData',
    }
})
    .then((res) => console.log(res.data))
    .catch((err) => console.error(err));







const arDynamicScripts =  {
    // larax: (object) => import('./larax/main').then(({ default: init }) => init()),
    modal: (object) => import('./components/modal').then(({ default: init }) => init(object)),
    accordion: (object) => import('./components/accordion').then(({ default: init }) => init(object)),
    slider: (object) => import('./components/swiper-slider').then(({ default: init }) => init(object)),
    header: (object) => import('./components/header').then(({ default: init }) => init())
}

document.addEventListener('DOMContentLoaded', startFrontController);
document.addEventListener('turbo:render', startFrontController);

function startFrontController(event) {
    arDynamicScripts.header();
    const lazyLoader = new IntersectionObserver(
        (entries, observer) => entries.forEach(entry => {
            if (entry.isIntersecting) {
                arDynamicScripts[entry.target.dataset.lazy](entry.target);
                observer.unobserve(entry.target);
            }
        }), { rootMargin: '50px' }
    );
    document.querySelectorAll('[data-lazy]').forEach(element => {
        let fnName = element.dataset.lazy;
        if (arDynamicScripts[fnName] === undefined) return console.log(`Lazy функция ${fnName} не найдена`);
        lazyLoader.observe(element);
    });
}
