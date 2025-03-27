<!doctype html>
<html lang="en" class="light-style layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('template/') }}" data-template="horizontal-menu-template-no-customizer" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard - eCommerce | Materialize - Material Design HTML Admin Template</title>
    <meta name="description" content="" />

    <link rel="icon" type="image/x-icon" href="{{ asset('template/img/favicon/favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('template/vendor/fonts/remixicon/remixicon.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/fonts/flag-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/libs/node-waves/node-waves.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/libs/swiper/swiper.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/vendor/css/pages/cards-statistics.css') }}" />

    <script src="{{ asset('template/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('template/assets/js/config.js') }}"></script>
</head>

</html>

<body>

    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="container-xxl">
                <a href="{{ url('/app') }}" class="auth-cover-brand d-flex align-items-center gap-2">
                    <span class="app-brand-logo demo">
                        <span class="app-logo" style="color: var(--bs-primary)">
                            <svg width="10" height="70" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z" fill="currentColor" />
                            </svg>
                        </span>
                    </span>
                    <span class="app-brand-text demo text-heading fw-semibold">Materialize</span>
                </a>
                    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-6">
                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                            <i class="ri-close-fill align-middle"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <li class="nav-item navbar-search-wrapper me-1 me-xl-0">
                                <a class="nav-link btn btn-text-secondary rounded-pill search-toggler fw-normal" href="javascript:void(0);">
                                    <i class="ri-search-line ri-22px scaleX-n1-rtl"></i>
                                </a>
                            </li>

                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('template/img/avatars/1.png') }}" alt class="rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('app') }}">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('template/img/avatars/1.png') }}" alt class="rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block small">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('app') }}">
                                            <i class="ri-user-3-line ri-22px me-3"></i><span class="align-middle">Meu Perfil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('app') }}">
                                            <i class="ri-logout-box-r-line ri-22px me-3"></i><span class="align-middle">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

            <div class="layout-page">

                <div class="content-wrapper">

                    @yield('content')

                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                                <div class="text-body mb-2 mb-md-0">
                                    &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , feito com <span class="text-danger"><i class="tf-icons ri-heart-fill"></i></span> por
                                    <a href="https://pixinvent.com" target="_blank" class="footer-link">Pixinvent</a>
                                </div>
                            </div>
                        </div>
                    </footer>

                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="drag-target"></div>
</body>

<script src="{{ asset('template/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('template/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('template/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('template/vendor/libs/node-waves/node-waves.js') }}"></script>
<script src="{{ asset('template/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('template/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('template/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('template/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('template/vendor/js/menu.js') }}"></script>

<script src="{{ asset('template/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('template/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('template/vendor/libs/swiper/swiper.js') }}"></script>

<script src="{{ asset('template/js/main.js') }}"></script>

<script src="{{ asset('template/js/app-ecommerce-dashboard.js') }}"></script>

</body>

</html>
