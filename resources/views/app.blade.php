<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>eID Easy</title>
</head>
<body class="font-inter antialiased bg-white text-gray-900 tracking-tight">
<main class="flex-grow">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        @include('hero')
    </div>

    <div class="bg-gray-100 pt-20 pb-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            @include('steps')
        </div>
    </div>

    <div class="pt-20 pb-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            @include('developers')
        </div>
    </div>
</main>
</body>
</html>
