<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechNews - HTML and CSS Template</title>
    <link href=" {{ asset("assets/img/favicon.png") }}" rel=icon>
    <link href=" {{ asset("https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500") }}" rel='stylesheet' type='text/css'>
    <link href=" {{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href=" {{ asset("assets/fonts/font-awesome/font-awesome.min.css") }}"  rel="stylesheet">
    @yield('seo')
    <link href=" {{ asset("assets/css/mobile-menu.css") }}" rel="stylesheet">
    <link href=" {{ asset("assets/css/owl.carousel.css") }}" rel="stylesheet">
    <link href=" {{ asset("assets/css/owl.theme.default.min.css") }}" rel="stylesheet">
    <link href=" {{ asset("assets/css/style.css") }}"  rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
    
    {{-- @includeWhen($bool, 'inc.name', ['some' => 'data'])
    {{ $some }} --}}
    
    @yield('content')

    @yield('show')

    @yield('create')
    
    <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/js/jquery-2.1.4.min.js") }}"></script>
    <script src="{{ asset("assets/js/mobile-menu.js") }}"></script>
    <script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("assets/js/script.js") }}"> </script>
</body>
</html>
