<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Cart | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />

        @include('backend.partials.style')

    </head>

    <body data-sidebar="dark" data-layout-mode="light">


            @include('backend.partials.header')

            @include('backend.partials.leftsidebar')
            <!-- Start right Content here -->
            <div class="main-content">
                
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row text-center">
                            <h4>
                                @yield('page-title')
                            </h4>
                        </div>

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
    </body>
</html>
