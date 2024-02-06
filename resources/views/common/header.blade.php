<header class="site-header group fixed w-full top-0 font-serif z-50 isolate" id="site-header">
    <div class="absolute inset-0 bg-black/40 backdrop-blur-[20px] backdrop-saturate-[180%] shadow-lg z-[-1] opacity-0 duration-300 group-[.styled]:opacity-100"></div>
    <div class="container text-white flex max-lg:flex-wrap items-center justify-between py-2">
        <img width="100px" src="https://vint-fundament.ru/assets/images/logo-white.png" alt="">
        <nav class="max-lg:grid max-lg:grid-rows-[0fr] group-[.menu-opened]:grid-rows-[1fr] max-lg:order-last max-lg:w-full duration-300">
            <div class="overflow-hidden">
                @if(isset($header_navbar))
                    <ul class="flex items-center text-sm max-lg:flex-col max-lg:space-y-1 max-lg:mt-4 max-lg:mb-2 lg:space-x-4">
                        @foreach($header_navbar as $obItem)
                            <li class="max-md:w-full">
                                <a class="inline-flex w-full max-md:border max-md:rounded-lg max-md:p-2 duration-300 hover:text-blue-300" href="#">{{ $obItem->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </nav>
        <a href="+7 918 590-11-10" class="ml-auto flex shrink-0">+7 918 590-11-10</a>
        <button data-action="toggle-menu" class="lg:hidden px-2 py-2 border rounded-lg ml-4">
            <x-heroicon-o-bars-4 class="w-6 h-6"/>
        </button>
    </div>
</header>
