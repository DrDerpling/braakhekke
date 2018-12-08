<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Braakhekke</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{ mix('css/app.css') }}">
</head>

<body>
    @include('partials.nav')

    <div class="container">
        @yield('content')
    </div>

</body>