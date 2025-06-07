<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- SideMenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li class="{{ request()->routeIs(['admin.dashboard']) ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor"
                            class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" />
                        </svg>
                        <span key="t-file-manager">Dashboard</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Apps</li>

                <li
                    class="{{ request()->routeIs(['profile.setting', 'system.index', 'mail.setting', 'social.index', 'dynamic_page.*']) ? 'mm-active sidebarParentActive' : '' }}">
                    <a href="javascript: void(0);" class="has-arrow waves-effect" style="color: #000">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg>
                        <span key="t-invoices">Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('profile.setting') }}"
                                class="{{ request()->routeIs(['profile.setting']) ? 'active' : '' }}"
                                key="t-invoice-list">Profile Settings</a>
                        </li>
                        <li>
                            <a href="{{ route('system.index') }}"
                                class="{{ request()->routeIs(['system.index']) ? 'active' : '' }}"
                                key="t-invoice-detail">System Settings</a>
                        </li>
                        <li>
                            <a href="{{ route('social.index') }}"
                                class="{{ request()->routeIs(['social.index']) ? 'active' : '' }}"
                                key="t-invoice-detail">Social Settings</a>
                        </li>
                        <li>
                            <a href="{{ route('dynamic_page.index') }}"
                                class="{{ request()->routeIs(['dynamic_page.*']) ? 'active' : '' }}"
                                key="t-invoice-detail">Dynamic Page</a>
                        </li>
                        <li>
                            <a href="{{ route('mail.setting') }}"
                                class="{{ request()->routeIs(['mail.setting']) ? 'active' : '' }}"
                                key="t-invoice-detail">Mail Settings</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->