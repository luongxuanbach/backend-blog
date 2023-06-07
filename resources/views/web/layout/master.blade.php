<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Katen - Minimal Blog & Magazine HTML Theme</title>
	<meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="/web/images/favicon.png">

    <title>@yield('title')</title>

    @include('web.layout.style')

    @stack('style')
</head>

<body>
    @include('web.layout.preloader')

    <!-- site wrapper -->
    <div class="site-wrapper">
        <div class="main-overlay"></div>

        {{-- @include('web.layout.menu') --}}

        <div class="main">
            @include('web.layout.header')

            @include('web.layout.hero')

            @yield('content')

            @include('web.layout.instagram-feed')

            @include('web.layout.footer')
        </div>

        @include('web.layout.search-popup-area')

        @include('web.layout.canvas-menu')

    </div>

    @include('web.layout.script')

    @stack('script')

</body>

</html>
