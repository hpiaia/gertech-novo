<!doctype html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | Gertech Soluções Industriais</title>

        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.8/css/swiper.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="h-full">
        <div id="app" class="h-full flex flex-col">
            @include('layouts._header')

            <main class="mb-auto">
                @yield('content')
            </main>

            @include('layouts._footer')

            <div class="fixed bottom-0 right-0 mr-6 mb-6 z-20">
                <a href="https://wa.me/5549984011000" target="_blank" class="block w-16 h-16 flex items-center justify-center rounded-full text-white shadow" style="background-color: #14D471">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANxX8NWcmXRAlvmNS29qKJOBFepQsXp3A"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
