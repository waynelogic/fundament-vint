<section class="portfolio">
    <div class="container py-12">
        <x-heading divide="true" title="Наши работы" linkText="Посмотреть все" link="/" text="От замысла до воплощения: гордимся представить наши завершенные проекты!"/>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
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
