class Modal {
    constructor($element) {
        this.$modal = $element;
        console.log(this)
    }
}

export default function init($element) {
    console.log(1)
    new Modal($element);
}
