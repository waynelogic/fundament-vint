<section>
    <div class="container">
        <div class="relative text-white rounded-2xl overflow-hidden">
            <img class="absolute w-full h-full object-center object-cover grayscale z-[-2]" src="https://screw-piles.com/thumb/2/0ow_7i4I5l9IsPcfbqkxGw/r/d/55029793_2.jpg" alt="">
            <div class="absolute inset-0 bg-blue-500/80 z-[-1]"></div>
            <form class="p-6 md:p-12" method="POST" action="{{ route('magic-forms')  }}">
                <input type="hidden" name="form" value="main">
                <h2 class="text-3xl font-serif font-semibold">Форма для уточнения</h2>
                <div class="grid md:grid-cols-3 gap-6 font-serif mt-10">
                    <input type="text" name="Имя" placeholder="Имя" class="bg-transparent !border-b-2 !border-white border-x-0 border-t-0 focus:ring-0 placeholder-white/50">
                    <input type="tel" name="Телефон" placeholder="Телефон" class="bg-transparent !border-b-2 !border-white border-x-0 border-t-0 focus:ring-0 placeholder-white/50">
                    <input type="email" name="E-mail" placeholder="E-mail" class="bg-transparent !border-b-2 !border-white border-x-0 border-t-0 focus:ring-0  placeholder-white/50">
                    <textarea name="Сообщение" placeholder="Сообщение" rows="1" class="md:col-span-3 bg-transparent !border-b-2 !border-white border-x-0 border-t-0 focus:ring-0  placeholder-white/50"></textarea>
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
