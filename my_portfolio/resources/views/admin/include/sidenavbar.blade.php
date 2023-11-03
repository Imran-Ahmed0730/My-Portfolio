<div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a href="index.html" class="logo logo-metrica d-block text-center">
                    <span>
                        <img src="{{asset('/')}}/admin-assets/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
        </a>
        <div class="main-icon-menu-body">
            <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" data-bs-trigger="hover">
                        <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                            <i class="ti ti-smart-home menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="My Projects" data-bs-trigger="hover">
                        <a href="#MetricaApps" id="apps-tab" class="nav-link">
                            <i class="ti ti-device-desktop menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Uikit" data-bs-trigger="hover">
                        <a href="#MetricaUikit" id="uikit-tab" class="nav-link">
                            <i class="ti ti-medal menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages" data-bs-trigger="hover">
                        <a href="#MetricaPages" id="pages-tab" class="nav-link">
                            <i class="ti ti-chart-bar menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication" data-bs-trigger="hover">
                        <a href="#MetricaAuthentication" id="authentication-tab" class="nav-link">
                            <i class="ti ti-user menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                </ul><!--end nav-->
            </div><!--end /div-->
        </div><!--end main-icon-menu-body-->
        <div class="pro-metrica-end">
            <a href="#" class="profile">
                <img src="{{asset('/')}}/admin-assets/assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle thumb-sm">
            </a>
        </div><!--end pro-metrica-end-->
    </div>
    <!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                        <span>
                            <img src="{{asset('/')}}/admin-assets/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                            <img src="{{asset('/')}}/admin-assets/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        </span>
            </a><!--end logo-->
        </div><!--end topbar-left-->
        <!--end logo-->
        <div class="menu-body navbar-vertical tab-content" data-simplebar>
            <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
                 aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Dashboard</h6>
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                    </li><!--end nav-item-->
                </ul><!--end nav-->
            </div><!-- end Dashboards -->

            <div id="MetricaApps" class="main-icon-menu-pane tab-pane" role="tabpanel"
                 aria-labelledby="apps-tab">
                <div class="title-box">
                    <h6 class="menu-title">Project Module</h6>
                </div>

                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarAnalytics">
                                My Projects
                            </a>
                            <div class="collapse " id="sidebarAnalytics">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('project.add')}}" class="nav-link ">Add Project</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a href="{{route('project.manage')}}" class="nav-link ">Manage Project</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarAnalytics-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarAdvancedUI" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarAdvancedUI">
                                Client Module
                            </a>
                            <div class="collapse " id="sidebarAdvancedUI">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('client.add')}}">Add Client</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('client.manage')}}">Manage Client</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarAdvancedUI-->
                        </li><!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarForms">
                                Review Module
                            </a>
                            <div class="collapse " id="sidebarForms">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-elements.html">Manage Review</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarForms-->
                        </li><!--end nav-item-->
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div><!-- end Crypto -->

            <div id="MetricaUikit" class="main-icon-menu-pane  tab-pane" role="tabpanel"
                 aria-labelledby="uikit-tab">
                <div class="title-box">
                    <h6 class="menu-title">Expertise</h6>
                </div>
                <div class="collapse navbar-collapse" id="sidebarCollapse_2">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarAdvancedUI" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarAdvancedUI">
                                Training Module
                            </a>
                            <div class="collapse " id="sidebarAdvancedUI">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-animation.html">Add Certification</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="advanced-clipboard.html">Manage Certification</a>
                                    </li><!--end nav-item-->

                                </ul><!--end nav-->
                            </div><!--end sidebarAdvancedUI-->
                        </li><!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarForms">
                                Educational Qualification
                            </a>
                            <div class="collapse " id="sidebarForms">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-elements.html">Add Degree</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="forms-advanced.html">Manage Degree</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarForms-->
                        </li><!--end nav-item-->
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse_2-->
            </div><!-- end Others -->

            <div id="MetricaPages" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="pages-tab">
                <div class="title-box">
                    <h6 class="menu-title">Pages</h6>
                </div>
                <div class="collapse navbar-collapse" id="sidebarCollapse_3">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarElements">
                                Skill Module
                            </a>
                            <div class="collapse " id="sidebarElements">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-alerts.html">Add Skill</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ui-avatar.html">Manage Skill</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarElements-->
                        </li><!--end nav-item-->
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse_2-->
            </div><!-- end Pages -->

            <div id="MetricaAuthentication" class="main-icon-menu-pane tab-pane" role="tabpanel"
                 aria-labelledby="authentication-tab">
                <div class="title-box">
                    <h6 class="menu-title">User Module</h6>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="auth-login.html">Manage Personal Info</a>
                    </li><!--end nav-item-->
                </ul><!--end nav-->
            </div><!-- end Authentication-->
        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>
