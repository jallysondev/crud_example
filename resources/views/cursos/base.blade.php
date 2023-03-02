<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crud Example</title>
    {{--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> --}}
</head>

<body>
    <div class="container">
        @yield('main')
    </div>
    @vite(['resources/js/app.js'])
    {{-- <script src="{{ asset('js/app.js') }}" type="text/js"></script> --}}
</body>

</html>