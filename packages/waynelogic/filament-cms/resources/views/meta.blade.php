@if(isset($page))
    <title>{{ $page->title }}</title>
    <meta name="description" content="{{ $page->description }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="{{ $page->ogType }}">
    <meta property="og:title" content="{{ $page->title }}">
    <meta property="og:description" content="{{ $page->description }}">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="{{ url('/') }}">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $page->title }}">
    <meta name="twitter:description" content="{{ $page->description }}">

@else
    <title>@yield('title', 'Laravel')</title>
@endif
