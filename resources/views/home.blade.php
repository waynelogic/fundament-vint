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

    @php($arAdvantages = [
        (object) [
            'title' => 'Работаем без предоплаты <br>за монтаж',
            'image' => 'https://vint-fundament.ru/assets/images/calculation.png'
        ],
        (object) [
            'title' => 'Гарантия <br>до 10 лет',
            'image' => 'https://vint-fundament.ru/assets/images/warranty.png'
        ],
        (object) [
            'title' => 'Профессиональный <br>расчет',
            'image' => 'https://vint-fundament.ru/assets/images/calculation.png'
        ],
        (object) [
            'title' => 'Поставка и монтаж <br>в кратчайшие сроки',
            'image' => 'https://vint-fundament.ru/assets/images/fast3.png'
        ],
        (object) [
            'title' => 'Собственное <br>производство',
            'image' => 'https://vint-fundament.ru/assets/images/welding.png'
        ],
        (object) [
            'title' => 'Более 300 объектов с 2017 года',
            'image' => 'https://vint-fundament.ru/assets/images/welding.png'
        ],
    ])

    {{--    <section>--}}
    {{--        <div class="container py-12">--}}
    {{--            <div class="grid lg:grid-cols-6 gap-10 text-center">--}}
    {{--                @foreach($arAdvantages as $obItem)--}}
    {{--                    <div class="flex flex-col items-center">--}}
    {{--                        <img width="40px" src="{{ $obItem->image }}" alt="">--}}
    {{--                        <div class="text-[13px]">{!! $obItem->title !!}</div>--}}
    {{--                    </div>--}}
    {{--                @endforeach--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    @php($arAdvantages = [
        (object) [
            'title' => 'Работаем без предоплаты <br>за монтаж',
            'image' => 'https://vint-fundament.ru/assets/images/calculation.png'
        ],
        (object) [
            'title' => 'Гарантия <br>до 10 лет',
            'image' => 'https://vint-fundament.ru/assets/images/warranty.png'
        ],
        (object) [
            'title' => 'Профессиональный <br>расчет',
            'image' => 'https://vint-fundament.ru/assets/images/calculation.png'
        ],
        (object) [
            'title' => 'Поставка и монтаж <br>в кратчайшие сроки',
            'image' => 'https://vint-fundament.ru/assets/images/fast3.png'
        ],
    ])

{{--        <section class="relative">--}}
{{--            <img class="absolute object-center h-full right-0 w-3/4" src="images/home/city.png" alt="">--}}
{{--            <img class="absolute h-full top-0 right-0" src="images/home/screw_piles.png" alt="">--}}
{{--            <div class="container py-12">--}}
{{--                <h2 class="text-3xl font-serif font-semibold mb-6">Почему выбирают Винт Фундамент?</h2>--}}
{{--                <div class="grid grid-cols-2">--}}
{{--                    <div class="grid lg:grid-cols-2 gap-10 text-center">--}}
{{--                        @foreach($arAdvantages as $obItem)--}}
{{--                            <div class="flex flex-col items-center bg-white p-4 border-2 border-gray-900/20 rounded-xl">--}}
{{--                                <img width="40px" src="{{ $obItem->image }}" alt="">--}}
{{--                                <div class="font-serif text-[13px]">{!! $obItem->title !!}</div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

    <section class="relative">
        <img class="absolute object-center h-full right-0 w-3/4" src="images/home/city.png" alt="">
        <div class="container py-12">
            <h2 class="text-3xl font-serif font-semibold mb-6">Почему выбирают Винт Фундамент?</h2>
            <div class="grid lg:grid-cols-4 gap-10 text-center">
                @foreach($arAdvantages as $obItem)
                    <div class="flex flex-col items-center bg-white p-4 border-2 border-gray-900/20 rounded-xl">
                        <img width="40px" class="mb-2" src="{{ $obItem->image }}" alt="">
                        <div class="font-serif text-[13px]">{!! $obItem->title !!}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('home.creation')
    @include('home.pile-types')
    @include('home.installation')
    @include('home.soil-research')
    @include('home.portfolio')
    @include('home.contacts')




</div>
