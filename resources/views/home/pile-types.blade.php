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
    <div class="container pb-12">
        <x-heading divide="true" title="Виды свай" subtitle="Сваи которые мы производим"/>
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
                        <div class="flex max-lg:flex-col p-6">
                            <div class="shrink-0 mr-4">
                                <img class="w-[150px]" src="https://vint-fundament.ru/assets/images/svaya-svs-1.png" alt="">
                            </div>
                            <div>
                                <h2 class="font-bold text-2xl mb-2 border-b">Винтовая свая ∅ {{ $obItem->title }} мм.</h2>
                                <h2><strong>Область применения.</strong></h2>
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
                                <div class="border-t py-2">
                                    <button class="btn btn-primary py-3 px-5" onclick="window.myDialog.showModal()">
                                        <x-heroicon-o-calculator class="w-6 h-6 mr-4"/>
                                        Заказать
                                    </button>
                                </div>
                            </div>
                        </div>
                    </details>
                @endforeach
            </div>
        </div>
    </div>
</section>
