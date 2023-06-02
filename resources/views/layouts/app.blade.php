<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kurz Excel') }}</title>


    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Vladyslav Hrebennikov">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ str_replace('//myks.cz/', '//www.myks.cz/', url()->current()) }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
    <!-- CSS only -->

    <!-- CSS only -->
    {{-- <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}"/> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v7.1.0/ol.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}" /> --}}

    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.3/dt-1.10.16/b-1.4.2/b-html5-1.4.2/datatables.min.css"/> --}}

    <link rel="stylesheet" href="{{ asset ('css/main.css?v=' . filemtime(public_path('css/main.css')) ) }}">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    @livewireStyles

</head>
<body>
    @include('layouts.blocks.header')
    <main class="main-body">
        @yield('content')
        {{-- <a href="#" id="to_top" class="top-link" onchange="scroll()">Jump to top of page</a> --}}
    </main>
    @include('layouts.blocks.footer')

        <!-- JavaScript Bundle with Popper -->
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.3/dt-1.10.16/b-1.4.2/b-html5-1.4.2/datatables.min.js"></script> --}}


    {{-- <script src="{{ asset('js/lightbox.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('js/splide.min.js') }}"></script> --}}
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    {{-- <script src="{{ asset('js/toastr.min.js') }}"></script> --}}
    <script src="https://kit.fontawesome.com/01db3a6801.js" crossorigin="anonymous"></script>
    <script src="{{ asset ('js/main.js?v=' . filemtime(public_path('js/main.js')) ) }}"></script>


    {{-- @if($errors->any())
    @foreach($errors->all() as $error)
            <input type="hidden" class="form-error" value="{{ $error }}">
    @endforeach
    <script>
        $(function(){
            $('.form-error').each(function() {
                var error_message = $(this).val()
                toastr.error(error_message)
            })
        })
    </script>
    @endif --}}
    @livewireScripts

</body>
</html>
