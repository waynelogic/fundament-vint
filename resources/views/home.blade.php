@extends('layouts.app')

@section('content')
    @php($arHeaderServices = [
        (object) [
            'title' => 'Исследование грунта ',
            'image' => 'https://iziskania.com/sites/default/files/paragraph/text-image/real_1570790268_0.jpg'
        ],
        (object) [
            'title' => 'Производство и установка винтовых свай',
            'image' => 'https://bsg-i.nbxc.com/product/b8/31/cb/a29bcc93df87eb2b8745528c3f.jpg@95Q.webp'
        ],
        (object) [
            'title' => 'Монтаж металлоконструкций',
            'image' => 'images/home/monage.png'
        ],
    ])

    <section class="relative isolate">
        <img class="absolute w-full h-full object-center object-cover z-[-2]" src="https://screw-piles.com/thumb/2/0ow_7i4I5l9IsPcfbqkxGw/r/d/55029793_2.jpg" alt="">
        <div class="absolute inset-0 bg-gradient-to-t from-black  to-black/40 z-[-1]"></div>
        <div class="container text-white pt-24 sm:pt-28 lg:pt-36">
            <div class="mx-auto mb-20">
                <h2 class="text-xl leading-8 md:text-3xl md:leading-10 font-semibold font-serif mb-6">
                    {!! $content->hero_title !!}
                </h2>
                <p class="mb-10">{!! $content->hero_text !!}</p>
                <button class="btn btn-primary py-3 px-5" onclick="window.myDialog.showModal()">
                    <x-heroicon-o-calculator class="w-6 h-6 mr-4"/>
                    Получить расчет и смету
                </button>
            </div>
            <div class="grid md:grid-cols-3 gap-6 py-0">
                @foreach($arHeaderServices as $obItem)
                    <a href="#" class="group relative w-full rounded-t-xl overflow-hidden shadow-lg border-b-4 border-blue-500 isolate duration-300 hover:border-white">
                        <img class="absolute w-full h-full object-cover object-center z-[-2] duration-500 group-hover:scale-105" src="{{ $obItem->image }}" alt="">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/10 z-[-1]"></div>
                        <div class="p-6 pt-40 group-hover:text-blue-500 duration-300">
                            <div class="flex justify-between items-center">
                                <h3 class="text-sm font-serif font-semibold">{{ $obItem->title }}</h3>
                                <x-heroicon-o-arrow-up-right class="shrink-0 w-6 h-6 ml-4"/>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

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

    <section class="relative">
        <img class="absolute object-center h-full right-0 w-3/4" src="images/home/city.png" alt="">
        <img class="absolute h-full top-0 right-0" src="images/home/screw_piles.png" alt="">
        <div class="container py-12">
            <h2 class="text-3xl font-serif font-semibold mb-6">Почему выбирают Винт Фундамент?</h2>
            <div class="grid grid-cols-2">
                <div class="grid lg:grid-cols-2 gap-10 text-center">
                    @foreach($arAdvantages as $obItem)
                        <div class="flex flex-col items-center bg-white p-4 border-2 border-gray-900/20 rounded-xl">
                            <img width="40px" src="{{ $obItem->image }}" alt="">
                            <div class="font-serif text-[13px]">{!! $obItem->title !!}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <h2 class="text-3xl font-serif font-semibold mb-6">Сферы применения наших винтовых свай</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="group">
                        <div class="group">
                            <img
                                alt="Lava"
                                src="https://vint-fundament.ru/assets/images/primenenie-{{ $i }}.jpg"
                                class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]"
                            />

                            <div class="p-4">
                                <a href="#">
                                    <h3 class="text-base font-serif font-medium text-gray-900">
                                        Строительство мостов, пирсов, причалов
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>



    @php($arTypes = [
        (object) [
            'title' => 'СВС 57',
            'image' => 'https://vint-fundament.ru/assets/images/calculation.png'
        ],
        (object) [
            'title' => 'СВС 76',
            'image' => 'https://vint-fundament.ru/assets/images/warranty.png'
        ],
        (object) [
            'title' => 'СВС 89',
            'image' => 'https://vint-fundament.ru/assets/images/calculation.png'
        ],
        (object) [
            'title' => 'СВС 108',
            'image' => 'https://vint-fundament.ru/assets/images/fast3.png'
        ],
        (object) [
            'title' => 'СВС 133',
            'image' => 'https://vint-fundament.ru/assets/images/fast3.png'
        ],
    ])

    <section class="types">
        <div class="container py-12">
            <h2 class="text-3xl font-serif font-semibold mb-6">Виды свай</h2>

            <div class="flex border-2 rounded-lg mb-4" data-lazy="accordion">
                <div class="max-md:hidden border-r-2">
                    <div class="min-w-[150px] flex flex-col shrink-0">
                        @foreach($arTypes as $obItem)
                            <button class="group px-4 py-6 border-b-2 last:border-0 font-serif font-semibold {{ $loop->first ? 'active' : ''}}" data-item="types_{{ $loop->iteration }}">
                                <span class="group-[.active]:text-blue-500">{{ $obItem->title }}</span>
                            </button>
                        @endforeach
                    </div>
                </div>
                <div class="w-full">
                    @foreach($arTypes as $obItem)
                        <details class="group w-full" id="types_{{ $loop->iteration }}" {{ $loop->first ? 'open' : ''}}>
                            <summary class="group-open:text-blue-500 md:hidden group p-4 border-b last:border-0 font-serif font-semibold">
                                <span class="group-[.active]:text-blue-500">{{ $obItem->title }}</span>
                            </summary>
                            <div class="flex p-6">
                                <div class="shrink-0 mr-4">
                                    <img class="w-[150px]" src="https://vint-fundament.ru/assets/images/svaya-svs-1.png" alt="">
                                </div>
                                <div>
                                    <h2><strong>Винтовая свая ∅ {{ $obItem->title }} мм. Область применения.</strong></h2>
                                    <ul>
                                        <li>
                                            заборы с сеткой-рабицей;</li>
                                        <li>
                                            лестниц,ы;</li>
                                        <li>
                                            теплицы;</li>
                                        <li>
                                            автомобильные навесы;</li>
                                        <li>
                                            дорожные знаки;</li>
                                        <li>
                                            небольшие объекты ландшафтного дизайна;</li>
                                        <li>
                                            бытовки, времянки.</li>
                                    </ul>
                                    <h2><strong>Преимущества винтовой сваи ∅ {{ $obItem->title }} мм</strong></h2>
                                    <ul>
                                        <li>
                                            установка фундамента без изменения рельефа и проведения дополнительных земельных работ;</li>
                                        <li>
                                            скорость и простота монтажа;</li>
                                        <li>
                                            долговечность;</li>
                                        <li>
                                            высокие прочностные характеристики;</li>
                                        <li>
                                            надежность;</li>
                                        <li>
                                            возможность установки в любую погоду и в любое время года;</li>
                                        <li>
                                            экономичность.</li>
                                    </ul>
                                </div>
                            </div>
                        </details>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="how-we-work">
        <div class="container">

        </div>
    </section>

    <section class="portfolio">
        <div class="container py-12">
            <div class="flex justify-between items-center mb-2">
                <h2 class="text-3xl font-serif font-semibold">Наши работы</h2>
                <a href="" class="font-serif font-semibold text-blue-500">Посмотреть все</a>
            </div>
            <p class="mb-4">Наши работы, это без пиздежа - лучшее творение человечества! Так что бери и не выёбывайся!</p>
            <div class="grid grid-cols-3 gap-6">
                @for ($i = 1; $i <= 3; $i++)
                    <a href="#" class="group bg-white rounded-2xl overflow-hidden shadow">
                        <div class="relative isolate overflow-hidden ">
                            <div class="absolute w-[50px] h-[50px] flex flex-col items-center justify-center top-0 right-0 bg-blue-500 font-serif text-white p-2">
                                <span class="text-[17px]">{{ \Carbon\Carbon::now()->addDay($i * 5)->format('d') }}</span>
                                <span class="text-[9px]">{{ \Carbon\Carbon::now()->addDay($i * 5)->translatedFormat('M') }}</span>
                            </div>
                            <img class="relative group-hover:scale-105 duration-300 h-80 w-full object-center object-cover z-[-1]" src="https://vint-fundament.ru/assets/images/gallery-{{ $i + 1  }}-big.jpg" alt="">
                        </div>
                        <div class="px-4 py-2">
                            <h4 class="text-sm font-serif font-semibold mb-2 duration-300 group-hover:text-blue-500">Какой-то там объект</h4>
                            <p class="text-sm">Вот такие мы крутые</p>
                        </div>
                    </a>
                @endfor
            </div>
            <div class="flex justify-center mt-5">
                <button class="btn btn-primary py-3 px-5" onclick="window.myDialog.showModal()">
                    <x-heroicon-o-heart class="w-6 h-6 mr-4"/>
                    Тоже так хочу!
                </button>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="relative text-white rounded-2xl overflow-hidden">
                <img class="absolute w-full h-full object-center object-cover grayscale z-[-2]" src="https://screw-piles.com/thumb/2/0ow_7i4I5l9IsPcfbqkxGw/r/d/55029793_2.jpg" alt="">
                <div class="absolute inset-0 bg-blue-500/80 z-[-1]"></div>
                <form class="p-6 md:p-12" method="POST" data-request="">
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
@endsection
