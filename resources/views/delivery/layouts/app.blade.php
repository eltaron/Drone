@include('trader.includes.head')
@if (Auth::user()->store->store_name != Auth::user()->name)
    @include('trader.includes.navbar')
@endif
@include('trader.includes.header')
@include('trader.includes.messages')
@yield('content')
@include('trader.includes.footer')
