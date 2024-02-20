@php($arUsage = [
    (object) [
        'title' => 'Строительство мостов, пирсов, причалов',
        'image' => 'images/usage/primenenie-3.jpg'
    ],
    (object) [
        'title' => 'Возведение входных групп, крылец, пристроек',
        'image' => 'images/usage/primenenie-2.jpg'
    ],
    (object) [
        'title' => 'Фундаменты под частное коттеджное строительство',
        'image' => 'images/usage/primenenie-1.jpg'
    ],
    (object) [
        'title' => 'Усиление и восстановление фундаментов',
        'image' => 'images/usage/primenenie-4.jpg'
    ],

    (object) [
        'title' => 'Монтаж заборов и ограждений',
        'image' => 'images/usage/primenenie-10.jpg'
    ],
    (object) [
        'title' => 'Установка опор под столбы',
        'image' => 'images/usage/primenenie-9.jpg'
    ],
    (object) [
        'title' => 'Установка рекламных щитов',
        'image' => 'images/usage/primenenie-8.jpg'
    ],


    (object) [
        'title' => 'ЕУЫЕ',
        'image' => 'images/usage/primenenie-5.jpg'
    ],
    (object) [
        'title' => 'ЕУЫЕ',
        'image' => 'images/usage/primenenie-6.jpg'
    ],
    (object) [
        'title' => 'ЕУЫЕ',
        'image' => 'images/usage/primenenie-7.jpg'
    ],
])

<section id="creation">
    <div class="container py-12">
        <x-heading divide="true" title="Производство и установка винтовых свай" subtitle="Услуги по монтажу"/>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div class="w-full">
                <div x-data="{ activeTab: 1 }">
                    <div class="flex mb-4 *:flex-grow *:border-b-2 *:border-gray-300 *:py-2 *:text-lg *:px-1 *:duration-150">
                        <button @click="activeTab = 1" :class="{ 'active': activeTab === 1 }"
                                class="[&.active]:text-blue-600 [&.active]:border-blue-600">Производство</button>
                        <button @click="activeTab = 2" :class="{ 'active': activeTab === 2 }"
                                class="[&.active]:text-blue-600 [&.active]:border-blue-600">Установка</button>
                    </div>
                    <div :class="{ 'hidden': activeTab !== 1 }">
                        <p class="leading-relaxed mb-4">Мы являемся экспертами в производстве винтовых свай, обеспечивая высококачественные решения для фундаментов.</p>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500">Несущая спрособность</span>
                            <span class="ml-auto text-gray-900">1 - 2 т.</span>
                        </div>
                        <div class="flex border-t border-gray-200 py-2">
                            <span class="text-gray-500">Длинна</span>
                            <span class="ml-auto text-gray-900">1500 - 10 000 мм.</span>
                        </div>
                        <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                            <span class="text-gray-500">Test</span>
                            <span class="ml-auto text-gray-900">4</span>
                        </div>
                    </div>
                    <div :class="{ 'hidden': activeTab !== 2 }">
                        <p class="leading-relaxed mb-4">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam inxigo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean.</p>
                    </div>
                </div>
                <div class="flex">
                    <button class="btn btn-primary py-3 px-5" onclick="window.myDialog.showModal()">
                        <x-heroicon-o-bookmark-square class="w-6 h-6 mr-4"/>
                        Заказать
                    </button>
                </div>
            </div>
            <div class="">
                <div class="swiper mySwiper" data-lazy="usageSlider">
                    <div class="swiper-wrapper">
                        @foreach($arUsage as $obItem)
                            <div class="swiper-slide">
                                <div class="group">
                                    <img
                                        alt="Lava"
                                        src="{{ $obItem->image }}"
                                        class="h-40 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]"
                                    />

                                    <div class="p-4 pb-0">
                                        <a href="#">
                                            <h3 class="text-sm font-serif font-medium text-gray-900">{{ $obItem->title }}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
{{--                    <div class="swiper-button-prev">+</div>--}}
{{--                    <div class="swiper-button-next">+</div>--}}
                    <div class="swiper-pagination mt-4"></div>
                </div>
            </div>
        </div>
    </div>
</section>
