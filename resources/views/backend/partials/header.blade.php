<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-light"
                        style="width: 60%; height: 60%; display: block; text-align: center;">
                        <span class="logo-sm">
                            <img src="{{ asset('backend') }}/assets/images/logo-minimize.svg" alt="">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('backend') }}/assets/images/logo-default.svg" alt=""
                                style="width: 100%; height: 100%;">
                        </span>
                    </a>
                </div>

                <button type="button" class="px-3 btn btn-sm font-size-16 header-item waves-effect"
                    id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

            </div>

            <div class="d-flex">
                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user"
                            src="{{ asset('backend') }}/assets/images/profile.jpeg" alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1" key="t-henry"
                            style="font-size: 16px; color: #000; ">Henry</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#">
                            <i class="align-middle bx bx-user font-size-16 me-1"></i>
                            <span key="t-profile">Profile</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="align-middle bx bx-cog font-size-16 me-1"></i>
                            <span key="t-my-wallet">Setting</span>
                        </a>
                        <a class="dropdown-item text-danger" href="#">
                            <i class="align-middle bx bx-power-off font-size-16 me-1 text-danger"></i>
                            <span key="t-logout">Logout</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </header>