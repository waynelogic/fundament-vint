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
    <div class="absolute inset-0 bg-gradient-to-t from-black/60  to-black/40 z-[-1]"></div>
    <div class="container text-white pt-24 sm:pt-28 lg:pt-36">
        <div class="mx-auto mb-20">
            <h2 class="text-xl leading-8 md:text-3xl md:leading-10 font-semibold font-serif mb-6">
                Свое производство винтовых свай <br>                      Профессиональный расчет фундаментов <br>                     Монтаж свайных фундаментов спецтехникой
            </h2>
            <p class="mb-10">Изготовление и монтаж винтовых свай в Ростовской области, Краснодарском и Ставропольском крае.</p>
            <button class="btn btn-primary py-3 px-5" onclick="window.myDialog.showModal()">
                <x-heroicon-o-calculator class="w-6 h-6 mr-4"/>
                Получить расчет и смету
            </button>
        </div>
        <div class="grid md:grid-cols-3 gap-6 py-0">
            @foreach($arHeaderServices as $obItem)
                <a href="#" class="group relative w-full rounded-t-xl overflow-hidden shadow-2xl shadow-black border-b-2 border-blue-500 isolate duration-300 hover:border-white">
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
