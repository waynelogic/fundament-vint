<footer class="bg-[#0E0E0E]">
    <div class="container text-white flex items-center justify-between font-serif py-12">
        @if(isset($header_navbar))
            <ul class="flex max-lg:flex-wrap items-center text-sm">
                @foreach($header_navbar as $obItem)
                    <li class="mr-4 py-2">
                        <a class="inline-flex" href="#">{{ $obItem->title }}</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</footer>
