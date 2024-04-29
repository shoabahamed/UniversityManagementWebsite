<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
 
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style type="text/css">
    i {
        font-size: 50px;
    }
    </style>
</head>

<body>
    <div id="app" style="margin-top:10px;">
        <main class="container">
            <h3 class="text-center"> How to Install Bootstrap 5 in Laravel 10 - Online Web Tutor</h3>
            <div class="card">
                <div class="card-header">
                    Icons
                </div>
                <div class="card-body text-center">
                    <i class="bi bi-bag-heart-fill"></i>
                    <i class="bi bi-app"></i>
                    <i class="bi bi-arrow-right-square-fill"></i>
                    <i class="bi bi-bag-check-fill"></i>
                    <i class="bi bi-calendar-plus-fill"></i>
                </div>
            </div>
        </main>
    </div>
</body>

</html>