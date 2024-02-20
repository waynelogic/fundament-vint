<div class="flex flex-col mb-6">
    @if ($divide)
    <div class="h-1 bg-gray-200 rounded overflow-hidden mb-4">
        <div class="w-24 h-full bg-blue-500"></div>
    </div>
    @endif
    @if ($subtitle)
    <h3 class="text-sm title-font text-gray-500 tracking-widest">{{ $subtitle }}</h3>
    @endif
    @if($link and $linkText)
        <div class="flex justify-between items-center">
            <h2 class="text-xl md:text-3xl font-serif font-semibold">{{ $title }}</h2>
            <a href="" class="font-serif font-semibold text-blue-500">Посмотреть все</a>
        </div>
    @else
        <h2 class="text-xl md:text-3xl font-serif font-semibold">{{ $title }}</h2>
    @endif
    @if ($text)
        <p class="mt-4">{{ $text }}</p>
    @endif
</div>
