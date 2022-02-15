<!DOCTYPE html>
<html class="no-js">
<html lang="en">

<head>

    @include('template.partials._head')


</head>

<body>

    @include('template.partials._navbar')

    @yield('main')

    @include('template.partials._footer')

    @include('template.partials._scripts')

</body>

</html>
