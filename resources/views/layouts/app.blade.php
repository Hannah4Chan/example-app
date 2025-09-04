<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Aula de Laravel')</title>
    @vite('resources/css/app.css')

    {{-- js, css, img --}}
</head>
<body>
@yield('content')  

@vite('resources/js/app.js')
  

</body>
</html>

