<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Braakhekke</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet"/>
    <script src="{{asset('/js/app.js')}}"></script>
</head>

<body>


<div class="container">
    @include('partials.nav')
    <div class="border shadow-sm p-5">
        @yield('content')
    </div>
    @include('partials.footer')
</div>

</body>