<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    data-layout="vertical"
    data-topbar="light"
    data-sidebar="dark"
    data-sidebar-size="lg"
    data-sidebar-image="none"
    data-preloader="disable"
    data-theme="vintage"
    data-theme-colors="blue"
    data-sidebar-visibility="show"
    data-layout-style="default"
    data-bs-theme="light"
    data-layout-width="fluid"
    data-layout-position="fixed"
    data-body-image="none"
    data-sidebar-user-show
>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'SIEPG Matricula' }}</title>

    <meta
        content="Sistema de Matricula de la Escuela de Posgrado de la Universidad Nacional de Ucayali"
        name="description"
    />
    <meta content="Escuela de Posgrado UNU" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- jsvectormap css -->
    <link href="assets/libs/jsvectormap/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22" />
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17" />
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22" />
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="17" />
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- Name -->
                        <div class="d-flex align-items-center">
                            <span class="fs-4 text-muted ms-2 mt-1" style="font-weight: 500;">
                                SIEPG Matricula
                            </span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle"
                                data-toggle="fullscreen">
                                <i class="bx bx-fullscreen fs-22"></i>
                            </button>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle light-dark-mode">
                                <i class="bx bx-moon fs-22"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22" />
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17" />
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22" />
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17" />
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <!-- Card User -->
            <div class="sidebar-user m-1 rounded">
                <div class="btn material-shadow-none" id="page-header-user-dropdown" style="cursor: default;">
                    <span class="d-flex align-items-center gap-2">
                        <img
                            class="rounded header-profile-user"
                            src="assets/images/users/avatar-1.jpg"
                            alt="Header Avatar"
                        />
                        <span class="text-start">
                            <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                            <span class="d-block fs-14 sidebar-user-name-sub-text">
                                <i class="ri ri-circle-fill fs-10 text-success align-baseline"></i>
                                <span class="align-middle">Online</span>
                            </span>
                        </span>
                    </span>
                </div>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu"></div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title">
                            <span data-key="t-menu">Menu</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i>
                                <span data-key="t-dashboards">Dashboards</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                            Analytics
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            CRM
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link" data-key="t-ecommerce">
                                            Ecommerce
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-blog.html" class="nav-link"><span
                                                data-key="t-blog">Blog</span>
                                            <span class="badge bg-success" data-key="t-new">New</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- end Dashboard Menu -->

                        <li class="menu-title">
                            <i class="ri-more-fill"></i>
                            <span data-key="t-pages">Pages</span>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="widgets.html">
                                <i class="ri-honour-line"></i>
                                <span data-key="t-widgets">Widgets</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarForms">
                                <i class="ri-file-list-3-line"></i>
                                <span data-key="t-forms">Forms</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarForms">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="forms-elements.html" class="nav-link"
                                            data-key="t-basic-elements">Basic Elements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-select.html" class="nav-link" data-key="t-form-select">
                                            Form Select
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-checkboxs-radios.html" class="nav-link"
                                            data-key="t-checkboxs-radios">Checkboxs & Radios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-pickers.html" class="nav-link" data-key="t-pickers">
                                            Pickers
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-masks.html" class="nav-link" data-key="t-input-masks">Input
                                            Masks</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-advanced.html" class="nav-link"
                                            data-key="t-advanced">Advanced</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-range-sliders.html" class="nav-link"
                                            data-key="t-range-slider">
                                            Range Slider
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-validation.html" class="nav-link"
                                            data-key="t-validation">Validation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-wizard.html" class="nav-link"
                                            data-key="t-wizard">Wizard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-editors.html" class="nav-link"
                                            data-key="t-editors">Editors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-file-uploads.html" class="nav-link"
                                            data-key="t-file-uploads">File Uploads</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-layouts.html" class="nav-link"
                                            data-key="t-form-layouts">Form Layouts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="forms-select2.html" class="nav-link"
                                            data-key="t-select2">Select2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    {{ $slot }}

                </div>
            </div>

            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                {{ date('Y') }}
                            </script>
                            © Escuela de Posgrado UNU
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Diseñado y desarrollado por <strong>MendCode</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>
