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
        'title' => 'Собственное <br>производство',
        'image' => 'https://vint-fundament.ru/assets/images/welding.png'
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
        'title' => 'Более 300 объектов с 2017 года',
        'image' => 'https://vint-fundament.ru/assets/images/welding.png'
    ],
])

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
