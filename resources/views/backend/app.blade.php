<!doctype html>
<html lang="en">

<head>
    <title>@yield('title' ?? "Admin Dashboard")</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset($systemSetting->favicon ?? 'backend/assets/images/logo-minimize.svg') }}">
    @include('backend.partials.style')
</head>

<body data-sidebar="dark" data-layout-mode="light">
    @include('backend.partials.header')
    @include('backend.partials.leftsidebar')
    <!-- Start right Content here -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('page-content')
                    </div>
                    <div class="row">
                    </div>
                </div>
                @include('backend.partials.footer')
            </div>
            <!-- END layout-wrapper -->
            @include('backend.partials.script')
        </div>
</body>

</html>