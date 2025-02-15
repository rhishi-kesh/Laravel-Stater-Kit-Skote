<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset($systemSetting->favicon ?? 'frontend/images/logo.svg') }}">
    @include('frontend.partials.style')
</head>

<body>

    @yield('content')

    @include('frontend.partials.script')

</body>

</html>
