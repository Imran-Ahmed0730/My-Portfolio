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
                    <li class="nav-item active" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" data-bs-trigger="hover">
                        <a href="#Dashboard" id="dashboard-tab" class="nav-link">
                            <i class="ti ti-smart-home menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="My Projects" data-bs-trigger="hover">
                        <a href="#project" id="project-tab" class="nav-link">
                            <i class="ti ti-activity menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Experience" data-bs-trigger="hover">
                        <a href="#experience" id="experience-tab" class="nav-link">
                            <i class="ti ti-star menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Skills" data-bs-trigger="hover">
                        <a href="#skill" id="skill-tab" class="nav-link">
                            <i class="ti ti-chart-bar menu-icon"></i>
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
            <div id="Dashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
                 aria-labelledby="dashboard-tab">
                <div class="title-box">
                    <h2 class="menu-title">Dashboard</h2>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li><!--end nav-item-->
                </ul><!--end nav-->
            </div><!-- end Dashboards -->

            <div id="project" class="main-icon-menu-pane tab-pane" role="tabpanel"
                 aria-labelledby="project-tab">
                <div class="title-box">
                    <h2 class="menu-title">My Projects</h2>
                </div>

                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarAnalytics">
                                Project
                            </a>
                            <div class="collapse " id="sidebarAnalytics">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="analytics-customers.html" class="nav-link ">Add Project</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a href="analytics-reports.html" class="nav-link ">Manage Project</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarAnalytics-->
                        </li><!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarCrypto">
                                Client
                            </a>
                            <div class="collapse " id="sidebarCrypto">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="crypto-exchange.html">Add Client</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="crypto-wallet.html">Manage Client</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="crypto-wallet.html">Client Reviews</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarCrypto-->
                        </li><!--end nav-item-->
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div><!-- end Crypto -->

            <div id="experience" class="main-icon-menu-pane  tab-pane" role="tabpanel"
                 aria-labelledby="uikit-tab">
                <div class="title-box">
                    <h2 class="menu-title">My Experience</h2>
                </div>
                <div class="collapse navbar-collapse" id="sidebarCollapse_2">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarEmployment" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarCRM">
                                Employment
                            </a>
                            <div class="collapse " id="sidebarEmployment">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="crm-contacts.html">Add Employment</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="crm-opportunities.html">Manage Employment</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarCRM-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarCRM" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarCRM">
                                Training & Certification
                            </a>
                            <div class="collapse " id="sidebarCRM">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="crm-contacts.html">Add Certification</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="crm-opportunities.html">Manage Certification</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarCRM-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarEdu" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarCRM">
                                Education
                            </a>
                            <div class="collapse " id="sidebarEdu">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="crm-contacts.html">Add Degree</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="crm-opportunities.html">Manage Degree</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarCRM-->
                        </li><!--end nav-item-->
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse_2-->
            </div><!-- end Others -->

            <div id="skill" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="pages-tab">
                <div class="title-box">
                    <h2 class="menu-title">Skills</h2>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="pages-profile.html">Add Skills</a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="pages-tour.html">Manage Skills</a>
                    </li>
                </ul><!--end nav-->
            </div><!-- end Pages -->
        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>
