<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Construcción y Remodelación LG</title>
     {{-- Uikit Styles --}}
    <link rel="stylesheet" href="{{ asset('css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

    @include('components.navbar')

    <section>
        @yield('content')
    </section> 
    
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
    @stack('js')
</body>
</html>