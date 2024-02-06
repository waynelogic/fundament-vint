class Accordion {
    constructor($element) {
        this.$accordion = $element;
        this.items = [];
        this.init();
    }
    init() {
        this.buttons = this.$accordion.querySelectorAll('[data-item]');
        this.buttons.forEach(button => {
            let item = button.dataset.item;
            let content = document.getElementById(item);
            this.items[item] = {
                button,
                content
            }
            button.addEventListener('click', () => this.toggleItem(item));
        });
    }

    toggleItem(itemKey) {
        Object.keys(this.items).forEach(item => {
            let state = item === itemKey;
            this.items[item].button.classList.toggle('active', state);
            this.items[item].content.open = state;
        });
    }
}

export default function init($element) {
    new Accordion($element)
}
