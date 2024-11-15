<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    data-layout="vertical"
    data-topbar="light"
    data-sidebar="dark"
    data-sidebar-size="lg"
    data-sidebar-image="none"
    data-preloader="disable"
    data-theme="minimal"
    data-theme-colors="default"
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
    <link rel="shortcut icon" href="{{ asset('files/imagenes/logo-epg.png') }}" />

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

    <div style="height: 100vh;">
        <div class="row align-items-center h-100 g-0">
            <div class="col-xl-4 h-100">
                <div class="h-100 w-100">
                    <div class="d-flex flex-column h-100 justify-content-center align-items-center p-4 gap-4">
                        <img
                            src="{{ asset('files/imagenes/logo-epg.png') }}"
                            alt="logo"
                            height="120"
                        />
                        <div clsas="">
                            <h4 class="text-center" style="font-weight: 700;">
                                Escuela de Posgrado
                            </h4>
                            <p class="text-center text-muted px-md-3 px-xl-3 px-xxl-5 mb-0">
                                Bienvenido al sistema de matricula de la Escuela de Posgrado de la Universidad Nacional de Ucayali.
                            </p>
                        </div>
                        <div class="row g-3 w-100">
                            <div class="col-xxl-10 col-xl-11 col-lg-7 col-md-7 col-sm-10 col-12 mx-auto">
                                <label for="correoElectronico" class="form-label">
                                    Correo Electrónico
                                </label>
                                <div class="form-icon">
                                    <input
                                        type="email"
                                        class="form-control form-control-icon"
                                        id="correoElectronico"
                                        placeholder="example@unu.edu.pe"
                                    >
                                    <i class="ri-mail-line"></i>
                                </div>
                            </div>
                            <div class="col-xxl-10 col-xl-11 col-lg-7 col-md-7 col-sm-10 col-12 mx-auto">
                                <label for="contrasena" class="form-label">
                                    Contraseña
                                </label>
                                <div class="form-icon">
                                    <input
                                        type="password"
                                        class="form-control form-control-icon"
                                        id="contrasena"
                                        placeholder="********"
                                    >
                                    <i class="ri-lock-2-line"></i>
                                </div>
                            </div>
                            <div class="col-xxl-10 col-xl-11 col-lg-7 col-md-7 col-sm-10 col-12 mx-auto mt-4">
                                <button class="btn btn-primary w-100">
                                    Iniciar Sesión
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 h-100 d-none d-xl-block">
                <div
                    class="h-100"
                    style="
                        background-image: url('{{ asset('files/imagenes/bg-auth.webp') }}');
                        background-size: cover;
                        background-position: center;
                    "
                ></div>
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

    <!--Swiper slider js-->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

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
