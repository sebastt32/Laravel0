<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    <!-- favicon  -->
    <!-- estilos  -->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- header -->
    <!-- nav -->

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')
    <!-- script -->
</body>
</html>