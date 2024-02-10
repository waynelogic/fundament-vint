<section id="creation">
    <div class="container py-12">
        <h3 class="text-sm title-font text-gray-500 tracking-widest">Услуги по монтажу</h3>
        <h2 class="text-3xl font-serif font-semibold mb-6">Производство и установка винтовых свай</h2>
        <div class="grid grid-cols-2 gap-10">
            <div class="w-full">
                <div x-data="{ activeTab: 1 }">
                    <div class="flex mb-4 *:flex-grow *:border-b-2 *:border-gray-300 *:py-2 *:text-lg *:px-1 *:duration-150">
                        <button @click="activeTab = 1" :class="{ 'active': activeTab === 1 }"
                                class="[&.active]:text-blue-600 [&.active]:border-blue-600">Описание</button>
                        <button @click="activeTab = 2" :class="{ 'active': activeTab === 2 }"
                                class="[&.active]:text-blue-600 [&.active]:border-blue-600">Цены</button>
                        <button @click="activeTab = 3" :class="{ 'active': activeTab === 3 }"
                                class="[&.active]:text-blue-600 [&.active]:border-blue-600">Еще что-то</button>
                    </div>
                    <div :class="{ 'hidden': activeTab !== 1 }">
                        <p class="leading-relaxed mb-4">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam inxigo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean.</p>
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

                <div class="grid lg:grid-cols-2 gap-4">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="group">
                            <div class="group">
                                <img
                                    alt="Lava"
                                    src="https://vint-fundament.ru/assets/images/primenenie-{{ $i }}.jpg"
                                    class="h-40 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]"
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
        </div>
    </div>
</section>
