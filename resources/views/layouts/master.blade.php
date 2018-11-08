<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    {{-- CSS global to every page can be loaded here --}}
    <link rel="stylesheet"
          href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css') }}"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel='stylesheet'>


    {{-- CSS specific to a given page/child view can be included via a stack --}}
    @stack('head')
</head>
<body>

<h1> Lottery App! </h1>

<header>
    <img src='images/giphy1.gif' alt='funny gif of simpsons character'>
</header>

<section>
    @yield('content')
</section>

<footer>
    &copy; {{ date('Y') }}
</footer>


</body>
</html>
