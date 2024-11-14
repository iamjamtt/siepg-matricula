<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    data-layout="vertical"
    data-topbar="light"
    data-sidebar="dark"
    data-sidebar-size="lg"
    data-sidebar-image="none"
    data-preloader="disable"
    data-theme="modern"
    data-theme-colors="green"
    data-sidebar-visibility="show"
    data-layout-style="default"
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
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />

    <!-- jsvectormap css -->
    <link href="{{ asset('assets/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

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
    <script>
        var defaultThemeMode = 'light';
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute('data-bs-theme')) {
                themeMode = document.documentElement.getAttribute('data-bs-theme');
            } else {
                if (localStorage.getItem('data-bs-theme') !== null) {
                    themeMode = localStorage.getItem('data-bs-theme');
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            document.documentElement.setAttribute('data-bs-theme', themeMode);
        }
    </script>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- Header -->
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="{{ route('inicio.index') }}" class="logo">
                                <span class="logo-sm">
                                    <img src="{{ asset('files/imagenes/logo-epg.png') }}" alt="" height="35" />
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('files/imagenes/logo-epg.png') }}" alt="" height="35" />
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
                        <!-- Theme Toggle -->
                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button
                                type="button"
                                class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle custom-toggle"
                                data-bs-toggle="button"
                            >
                                <span class="icon-on" onclick="themeToggle('dark')">
                                    <i class="bx bx-moon fs-22"></i>
                                </span>
                                <span class="icon-off" onclick="themeToggle('light')">
                                    <i class="bx bx-sun fs-22"></i>
                                </span>
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
                <a href="{{ route('inicio.index') }}" class="logo">
                    <span class="logo-sm">
                        <img src="{{ asset('files/imagenes/logo-epg.png') }}" alt="" height="35" />
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('files/imagenes/logo-epg.png') }}" alt="" height="35" />
                        <span class="text-white fs-2 fw-bold align-middle ms-1">EPG</span>
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <!-- Card User -->
            <div class="dropdown sidebar-user">
                <button
                    type="button"
                    class="btn material-shadow-none"
                    id="page-header-user-dropdown"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    <span class="d-flex align-items-center gap-2">
                        <img
                            class="rounded header-profile-user ms-1"
                            src="assets/images/users/avatar-1.jpg"
                            alt="Header Avatar"
                        />
                        <span class="text-start">
                            <span class="d-block fw-medium sidebar-user-name-text">Jamt Mendoza</span>
                            <span class="d-block fs-14 sidebar-user-name-sub-text">
                                <i class="ri ri-circle-fill fs-10 text-success align-baseline"></i>
                                <span class="align-middle">En linea</span>
                            </span>
                        </span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <h6 class="dropdown-header">Bienvenido Jamt!</h6>
                    <a class="dropdown-item" href="">
                        <i class="ri-logout-circle-line fs-16 align-middle me-1"></i>
                        <span class="align-middle">
                            Cerrar Sesión
                        </span>
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <x-sidebar>
                <x-sidebar.title>
                    Menu
                </x-sidebar.title>
                <x-sidebar.item
                    name="Inicio"
                    :route="route('inicio.index')"
                    routeIs="inicio.index"
                    icon="ri-home-6-line"
                />

                <x-sidebar.title icon="ri-more-fill" class="mt-2">
                    Otros
                </x-sidebar.title>
                <x-sidebar.item
                    name="Matricula"
                    route="#"
                    routeIs="matricula.index"
                    icon="ri-folder-5-line"
                />

                {{-- <x-sidebar.item
                    name="Matricula"
                    icon="ri-folder-5-line"
                    routeIs="inicio.*"
                >
                    <x-sidebar.subItem
                        :route="route('inicio.index')"
                        routeIs="inicio.index"
                    >
                        Inicio
                    </x-sidebar.subItem>
                    <x-sidebar.subItem
                        route="#"
                        routeIs="inicio.show"
                    >
                        Otros
                    </x-sidebar.subItem>
                </x-sidebar.item> --}}
            </x-sidebar>
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
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        function themeToggle(theme) {
            if (theme === 'dark') {
                document.documentElement.setAttribute('data-bs-theme', 'dark');
                localStorage.setItem('data-bs-theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-bs-theme', 'light');
                localStorage.setItem('data-bs-theme', 'light');
            }
        }
    </script>
</body>

</html>
