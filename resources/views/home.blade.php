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
    @include('home.installation')

{{--        <section>--}}
{{--            <div class="container">--}}
{{--                <h2 class="text-3xl font-serif font-semibold mb-6">Сферы применения наших винтовых свай</h2>--}}
{{--                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">--}}
{{--                    @for ($i = 1; $i <= 8; $i++)--}}
{{--                        <div class="group">--}}
{{--                            <div class="group">--}}
{{--                                <img--}}
{{--                                    alt="Lava"--}}
{{--                                    src="https://vint-fundament.ru/assets/images/primenenie-{{ $i }}.jpg"--}}
{{--                                    class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]"--}}
{{--                                />--}}

{{--                                <div class="p-4">--}}
{{--                                    <a href="#">--}}
{{--                                        <h3 class="text-base font-serif font-medium text-gray-900">--}}
{{--                                            Строительство мостов, пирсов, причалов--}}
{{--                                        </h3>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endfor--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}



    @include('home.pile-types')
    @include('home.portfolio')


    <section>
        <div class="container">
            <div class="relative text-white rounded-2xl overflow-hidden">
                <img class="absolute w-full h-full object-center object-cover grayscale z-[-2]" src="https://screw-piles.com/thumb/2/0ow_7i4I5l9IsPcfbqkxGw/r/d/55029793_2.jpg" alt="">
                <div class="absolute inset-0 bg-blue-500/80 z-[-1]"></div>
                <form class="p-6 md:p-12" method="POST" action="{{ route('magic-forms')  }}">
                    <input type="hidden" name="validator" value="main">
                    <h2 class="text-3xl font-serif font-semibold">Форма для уточнения</h2>
                    <div class="grid md:grid-cols-3 gap-6 font-serif mt-10">
                        <input type="text" name="name" placeholder="Имя" class="bg-transparent !border-b-2 !border-white border-x-0 border-t-0 focus:ring-0 placeholder-white/50">
                        <input type="tel" name="phone" placeholder="Телефон" class="bg-transparent !border-b-2 !border-white border-x-0 border-t-0 focus:ring-0 placeholder-white/50">
                        <input type="email" name="email" placeholder="E-mail" class="bg-transparent !border-b-2 !border-white border-x-0 border-t-0 focus:ring-0  placeholder-white/50">
                        <textarea name="message" placeholder="Сообщение" rows="1" class="md:col-span-3 bg-transparent !border-b-2 !border-white border-x-0 border-t-0 focus:ring-0  placeholder-white/50"></textarea>
                    </div>
                    <div class="mt-10 flex flex-wrap items-center">
                        <button class="btn btn-black max-md:w-full max-md:mb-4 px-6 py-3 mr-6">
                            <x-heroicon-o-paper-airplane class="w-6 h-6 mr-4"/>
                            Отправить
                        </button>
                        <p class="text-sm text-white/60 font-serif">Нажимая на кнопку, вы даете согласие на обработку своих <a href="" class="text-white duration-300 hover:text-black font-semibold">персональных данных</a> </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="container py-12">
            <div class="grid md:grid-cols-3 gap-10 font-serif">
                <div>
                    <div>Телефон</div>
                    <h3 class="text-sm font-semibold">+7 918 590-11-10</h3>
                </div>
                <div>
                    <div>E-mail</div>
                    <h3 class="text-sm font-semibold">fund-vint@yandex.ru</h3>
                </div>
                <div>
                    <div>Телефон</div>
                    <h3 class="text-sm font-semibold">г. Ростов-на-Дону, ул. Московская 79</h3>
                </div>
            </div>
        </div>
    </section>
</div>
