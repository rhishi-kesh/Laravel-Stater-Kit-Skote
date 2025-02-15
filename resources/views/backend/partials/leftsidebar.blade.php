            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>


                            
                            <li>
                                <a href="{{ route('admin-dashboard') }}" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-file-manager">Admin Dashboard</span>
                                </a>
                            </li>
                            {{-- =================================================== --}}
                            {{-- Dashboard --}}
                            {{-- =================================================== --}}
                            {{-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboards</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="index.html" key="t-default">Default</a></li>
                                    <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                                    <li><a href="dashboard-crypto.html" key="t-crypto">Crypto</a></li>
                                    <li><a href="dashboard-blog.html" key="t-blog">Blog</a></li>
                                    <li><a href="dashboard-job.html"><span
                                                class="badge rounded-pill text-bg-success float-end"
                                                key="t-new">New</span> <span key="t-jobs">Jobs</span></a></li>
                                </ul>
                            </li> --}}







                            {{-- ================================================ --}}
                            {{-- Admin Dashboard --}}
                            {{-- ================================================ --}}
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-detail"></i>
                                    <span key="t-invoices">Informations</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('site-infos.index') }}" key="t-invoice-list">Company Informations</a></li>
                                    <li><a href="{{ route('platforms.index') }}" key="t-invoice-detail">Platforms</a></li>
                                    <li><a href="{{ route('cards.index') }}" key="t-invoice-detail">Cards</a></li>
                                    <li><a href="{{ route('amounts.index') }}" key="t-invoice-detail">Available Card Amounts</a></li>
                                    <li><a href="{{ route('versions.index') }}" key="t-invoice-detail">Card Versions</a></li>
                                    <li><a href="{{ route('blogs.index') }}" key="t-invoice-detail">Blogs</a></li>
                                </ul>
                            </li>
                            {{-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">Admin Dashboard</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Company Infos</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-light-sidebar.html" key="t-light-sidebar">Add Info</a></li>
                                            <li><a href="#" key="t-compact-sidebar">Show Info</a></li>
                                            <li><a href="layouts-icon-sidebar.html" key="t-icon-sidebar">Edit Info</a></li>
                                            <li><a href="layouts-boxed.html" key="t-boxed-width">Delete Info</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow"
                                            key="t-horizontal">Card Infos</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-horizontal.html" key="t-horizontal">Add Card</a></li>
                                            <li><a href="layouts-hori-topbar-light.html" key="t-topbar-light">Show Card</a></li>
                                            <li><a href="layouts-hori-boxed-width.html" key="t-boxed-width">Edit Card</a></li>
                                            <li><a href="layouts-hori-preloader.html" key="t-preloader">Delete Card</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            --}}



                            <li class="menu-title" key="t-apps">Apps</li>



                            {{-- ================================= --}}
                            {{-- Products --}}
                            {{-- ================================= --}}

                            {{-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">Ecommerce</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ecommerce-products.html" key="t-products">Products</a></li>
                                    <li><a href="ecommerce-product-detail.html" key="t-product-detail">Product
                                            Detail</a></li>
                                    <li><a href="ecommerce-orders.html" key="t-orders">Orders</a></li>
                                    <li><a href="ecommerce-customers.html" key="t-customers">Customers</a></li>
                                    <li><a href="ecommerce-cart.html" key="t-cart">Cart</a></li>
                                    <li><a href="ecommerce-checkout.html" key="t-checkout">Checkout</a></li>
                                    <li><a href="ecommerce-shops.html" key="t-shops">Shops</a></li>
                                    <li><a href="ecommerce-add-product.html" key="t-add-product">Add Product</a></li>
                                </ul>
                            </li> --}}

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-receipt"></i>
                                    <span key="t-invoices">Invoices</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="invoices-list.html" key="t-invoice-list">Invoice List</a></li>
                                    <li><a href="invoices-detail.html" key="t-invoice-detail">Invoice Detail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-briefcase-alt-2"></i>
                                    <span key="t-projects">Projects</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="projects-grid.html" key="t-p-grid">Projects Grid</a></li>
                                    <li><a href="projects-list.html" key="t-p-list">Projects List</a></li>
                                    <li><a href="projects-overview.html" key="t-p-overview">Project Overview</a></li>
                                    <li><a href="projects-create.html" key="t-create-new">Create New</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-task"></i>
                                    <span key="t-tasks">Tasks</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tasks-list.html" key="t-task-list">Task List</a></li>
                                    <li><a href="tasks-kanban.html" key="t-kanban-board">Kanban Board</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Create Task</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-user-detail"></i>
                                    <span key="t-contacts">Contacts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="contacts-grid.html" key="t-user-grid">Users Grid</a></li>
                                    <li><a href="contacts-list.html" key="t-user-list">Users List</a></li>
                                    <li><a href="contacts-profile.html" key="t-profile">Profile</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-detail"></i>
                                    <span key="t-blog">Blog</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="blog-list.html" key="t-blog-list">Blog List</a></li>
                                    <li><a href="blog-grid.html" key="t-blog-grid">Blog Grid</a></li>
                                    <li><a href="blog-details.html" key="t-blog-details">Blog Details</a></li>
                                </ul>
                            </li>



                            <li class="menu-title" key="t-pages">Pages</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-user-circle"></i>
                                    <span key="t-authentication">Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html" key="t-login">Login</a></li>
                                    <li><a href="auth-register.html" key="t-register">Register</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
