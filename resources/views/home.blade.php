<div>
    @include('home.hero')

    <dialog id="myDialog" class="rounded-2xl backdrop:duration-300 backdrop:bg-black/80 modal-window" data-lazy="modal">
        <form method="dialog">
            <button>
                Закрыть с помощью формы
            </button>
        </form>
        <div class="section-title text-center p-4">
            <p class="text-3xl text-blue-500 font-semibold">Получить консультацию</p>
            <p class="mt-2 mt-md-0 text-center">Мы подготовим для Вас расчет и смету</p>
        </div>
        <div class="flex flex-col space-y-2 p-4">
            <input type="text" class="form-input" name="name" placeholder="Имя *">
            <input type="tel" class="form-input" name="phone" placeholder="Телефон *">
            <textarea class="form-input" name="Сообщение" placeholder="Сообщение *"></textarea>
        </div>
    </dialog>

    @include('home.advantages')
    @include('home.creation')
    @include('home.pile-types')
    @include('home.installation')
    @include('home.soil-research')
    @include('home.portfolio')
    @include('home.contacts')




</div>
