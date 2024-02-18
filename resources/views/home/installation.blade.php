@php($arInstallation = [
    (object) [
        'title' => 'Японский ямобур ISUZU',
        'text' => 'С высокой точностью бурит основу для сваи в труднодоступных зонах. Работает в любых сезонных условиях.',
        'image' => 'https://vint-fundament.ru/assets/images/tehnika-1.jpg'
    ],
    (object) [
        'title' => 'Гидравлический сваекрут',
        'text' => 'Для монтажа в труднодоступных местах, небольших фундаментов, пирсов',
        'image' => 'https://vint-fundament.ru/assets/images/tehnika-2.jpg'
    ],
    (object) [
        'title' => 'Автомобиль «Газель»',
        'text' => 'Для транспортировки свай и передвижения монтажников',
        'image' => 'https://vint-fundament.ru/assets/images/tehnika-3.jpg'
    ],
])

<section class="">
    <div class="container">
        <div class="flex flex-col mb-4">
            <div class="h-1 bg-gray-200 rounded overflow-hidden mb-4">
                <div class="w-24 h-full bg-blue-500"></div>
            </div>
            <div>
{{--                <h3 class="text-sm title-font text-gray-500 tracking-widest">Услуги по монтажу</h3>--}}
                <h2 class="text-lg lg:text-3xl font-serif font-semibold mb-4">Cобственная профессиональная техника</h2>
                <p>Монтаж винтовых свай выполняем собственной профессиональной техникой</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            @foreach($arInstallation as $obItem)
                <div class="">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-56 md:h-36 w-full object-cover object-center" src="{{ $obItem->image }}" alt="{{ $obItem->title }}">
                        <div class="p-6">
{{--                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>--}}
                            <h1 class="title-font text-lg font-bold mb-3">{{ $obItem->title }}</h1>
                            <p class="leading-relaxed mb-3">{{ $obItem->text }}</p>
{{--                            <div class="flex items-center flex-wrap ">--}}
{{--                                <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">--}}
{{--                                    Learn More--}}
{{--                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"--}}
{{--                                         fill="none" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                        <path d="M5 12h14"></path>--}}
{{--                                        <path d="M12 5l7 7-7 7"></path>--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">--}}
{{--                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"--}}
{{--                                         stroke-linejoin="round" viewBox="0 0 24 24">--}}
{{--                                       <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>--}}
{{--                                       <circle cx="12" cy="12" r="3"></circle>--}}
{{--                                    </svg>--}}
{{--                                    1.2K--}}
{{--                                 </span>--}}
{{--                                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">--}}
{{--                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"--}}
{{--                                         stroke-linejoin="round" viewBox="0 0 24 24">--}}
{{--                                       <path--}}
{{--                                           d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>--}}
{{--                                    </svg>--}}
{{--                                    6--}}
{{--                                 </span>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
