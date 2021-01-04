<!DOCTYPE html>
<html class="min-h-screen">

<head>
    <meta charset="utf-8">
    {{-- page settings, to have nice dispaly on mbile --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- link tailwind css --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="js/app.js"></script>

    {{-- Title: PHP change titel regarding current page --}}
    <title>expenseTracker</title>
</head>

<body class="min-h-screen w-full bg-gray-900">
    <div class="min-h-screen">
        {{-- Hier muss Inhalt rein --}}
        @yield('header')
        @yield('content')
    </div>

</body>

</html>

