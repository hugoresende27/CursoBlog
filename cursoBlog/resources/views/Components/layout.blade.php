<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <title>O meu blog</title>
</head>
<body>

    <header>
        @yield('banner')
    </header>

   {{ $slot }}

    

   
</body>
</html>