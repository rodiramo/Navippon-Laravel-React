<!DOCTYPE html>
<html class="h-full bg-gray-200" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Navippon</title>
    <!--icon-->
    <link rel="icon" href="{{ URL::to('favicon.ico') }}">
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Vibur:400" rel='stylesheet' type='text/css'>
    <link href="{{ 'css/app.css' }}" rel="stylesheet">

    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    @inertiaHead
</head>

<body class="font-sans antialiased leading-none text-gray-800">

    @inertia

</body>

</html>
