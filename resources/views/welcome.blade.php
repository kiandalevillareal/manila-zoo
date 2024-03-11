<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{Vite::asset("resources/images/logo.png")}}">

    <title>Manila Zoo</title>
    
    {{-- JQUERY --}}
    <script src="{{asset("plugins/jquery.js")}}"></script>

    {{-- PARSLEY JS --}}
    <script src="{{asset("plugins/parsley.js")}}"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{Vite::asset("resources/css/general.css")}}">
    <link rel="stylesheet" href="{{Vite::asset("resources/css/parsley.css")}}">
    <link rel="stylesheet" href="{{Vite::asset("resources/css/header.css")}}">
    <link rel="stylesheet" href="{{Vite::asset("resources/css/footer.css")}}">

    {{-- FONTAWESOME CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @yield('assets')
</head>
<body>
    
    @yield('content')

</body>
</html>