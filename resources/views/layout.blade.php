<!doctype html>
<html lang="ru">

<head>

    @include('components.head')

</head>

<body>

    @include('components.header')

    @yield('content')

    @include('components.scripts')

</body>

</html>