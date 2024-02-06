class Header {
    constructor($element) {
        this.$header = $element;
        this.menuOpened = false;
        this.init();
    }

    init() {
        this.headerStyle();
        window.onscroll = () => this.headerStyle();
        this.$header.addEventListener('click', ({target}) => {
            let action = target.dataset.action;
            action === 'toggle-menu' && this.toggleMenu(target);
        })
    }
    headerStyle() {
        let state = window.scrollY > this.$header.offsetTop;
        if (this.menuOpened) state = true;
        this.$header.classList.toggle('styled', state);
    }

    toggleMenu(target) {
        this.menuOpened = !this.menuOpened;
        this.$header.classList.toggle('menu-opened', this.menuOpened);
        console.log(target)
        target.classList.toggle('active', this.menuOpened);
        this.headerStyle();
    }
}

export default function init() {
    const siteHeader = new Header(document.getElementById('site-header'));
}
