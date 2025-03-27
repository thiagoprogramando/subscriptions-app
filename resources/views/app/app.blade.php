@extends('app.layout')
@section('content')

<!doctype html>

<html
    lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('template/') }}"
    data-template="horizontal-menu-template-no-customizer"
    data-style="light">

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Menu -->
                    <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
                        <div class="container-xxl d-flex h-100">
                            <ul class="menu-inner">
                                <!-- Dashboards -->
                                <li class="menu-item">
                                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons ri-home-smile-line"></i>
                                        <div data-i18n="Dashboards">Dashboards</div>
                                    </a>
                                    <ul class="menu-sub">
                                        <li class="menu-item active">
                                            <a href="{{ asset('template/app-ecommerce-dashboard.html') }}" class="menu-link">
                                                <i class="menu-icon tf-icons ri-shopping-cart-2-line"></i>
                                                <div data-i18n="eCommerce">eCommerce</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ asset('template/dashboards-crm.html') }}" class="menu-link">
                                                <i class="menu-icon tf-icons ri-donut-chart-fill"></i>
                                                <div data-i18n="CRM">CRM</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ asset('template/index.html') }}" class="menu-link">
                                                <i class="menu-icon tf-icons ri-bar-chart-line"></i>
                                                <div data-i18n="Analytics">Analytics</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ asset('template/app-logistics-dashboard.html') }}" class="menu-link">
                                                <i class="menu-icon tf-icons ri-truck-line"></i>
                                                <div data-i18n="Logistics">Logistics</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ asset('template/app-academy-dashboard.html') }}" class="menu-link">
                                                <i class="menu-icon tf-icons ri-book-open-line"></i>
                                                <div data-i18n="Academy">Academy</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Layouts -->
                                <li class="menu-item">
                                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons ri-layout-2-line"></i>
                                        <div data-i18n="Layouts">Layouts</div>
                                    </a>

                                    <ul class="menu-sub">
                                        <li class="menu-item">
                                            <a href="{{ asset('template/layouts-without-menu.html') }}" class="menu-link">
                                                <i class="menu-icon tf-icons ri-layout-4-line"></i>
                                                <div data-i18n="Without menu">Without menu</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ asset('template/vertical-menu-template/') }}" class="menu-link" target="_blank">
                                                <i class="menu-icon tf-icons ri-layout-left-line"></i>
                                                <div data-i18n="Vertical">Vertical</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ asset('template/layouts-fluid.html') }}" class="menu-link">
                                                <i class="menu-icon tf-icons ri-layout-top-line"></i>
                                                <div data-i18n="Fluid">Fluid</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ asset('template/layouts-container.html') }}" class="menu-link">
                                                <i class="menu-icon tf-icons ri-layout-top-2-line"></i>
                                                <div data-i18n="Container">Container</div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ asset('template/layouts-blank.html') }}" class="menu-link">
                                                <i class="menu-icon tf-icons ri-square-line"></i>
                                                <div data-i18n="Blank">Blank</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Charts & Maps -->
                                <li class="menu-item">
                                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons ri-donut-chart-line"></i>
                                        <div data-i18n="Charts & Maps">Charts & Maps</div>
                                    </a>
                                    <ul class="menu-sub">
                                        <li class="menu-item">
                                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                <i class="menu-icon tf-icons ri-bar-chart-2-line"></i>
                                                <div data-i18n="Charts">Charts</div>
                                            </a>
                                            <ul class="menu-sub">
                                                <li class="menu-item">
                                                    <a href="charts-apex.html" class="menu-link">
                                                        <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                        <div data-i18n="Apex Charts">Apex Charts</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="charts-chartjs.html" class="menu-link">
                                                        <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                        <div data-i18n="ChartJS">ChartJS</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="maps-leaflet.html" class="menu-link">
                                                <i class="menu-icon tf-icons ri-map-2-line"></i>
                                                <div data-i18n="Leaflet Maps">Leaflet Maps</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- / Menu -->

                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row g-6 mb-6">
                            <!-- Sales Overview-->
                            <div class="col-lg-6">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-1">Sales Overview</h5>
                                            <div class="dropdown">
                                                <button
                                                    class="btn btn-text-secondary rounded-pill text-muted border-0 p-1"
                                                    type="button"
                                                    id="salesOverview"
                                                    data-bs-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ri-more-2-line ri-20px"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesOverview">
                                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center card-subtitle">
                                            <div class="me-2">Total 42.5k Sales</div>
                                            <div class="d-flex align-items-center text-success">
                                                <p class="mb-0 fw-medium">+18%</p>
                                                <i class="ri-arrow-up-s-line ri-20px"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex justify-content-between flex-wrap gap-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-label-primary rounded">
                                                    <i class="ri-user-star-line ri-24px"></i>
                                                </div>
                                            </div>
                                            <div class="card-info">
                                                <h5 class="mb-0">8,458</h5>
                                                <p class="mb-0">New Customers</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-label-warning rounded">
                                                    <i class="ri-pie-chart-2-line ri-24px"></i>
                                                </div>
                                            </div>
                                            <div class="card-info">
                                                <h5 class="mb-0">$28.5k</h5>
                                                <p class="mb-0">Total Profit</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-label-info rounded">
                                                    <i class="ri-arrow-left-right-line ri-24px"></i>
                                                </div>
                                            </div>
                                            <div class="card-info">
                                                <h5 class="mb-0">2,450k</h5>
                                                <p class="mb-0">New Transactions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Sales Overview-->

                            <!-- Ratings -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="card h-100">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body">
                                                <div class="card-info mb-5">
                                                    <h6 class="mb-2 text-nowrap">Ratings</h6>
                                                    <div class="badge bg-label-primary rounded-pill lh-xs">Year of 2021</div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <h4 class="mb-0 me-2">8.14k</h4>
                                                    <p class="mb-0 text-success">+15.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end d-flex align-items-end">
                                            <div class="card-body pb-0 pt-7">
                                                <img src="{{ asset('template/img/illustrations/card-ratings-illustration.png') }}"
                                                    alt="Ratings"
                                                    class="img-fluid"
                                                    width="95" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Ratings -->


                            <!-- Total Visits -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between flex-wrap gap-2">
                                            <p class="d-block mb-0 text-body">Total Visits</p>
                                            <div class="d-flex align-items-center text-success">
                                                <p class="mb-0">+18.4%</p>
                                                <i class="ri-arrow-up-s-line ri-20px"></i>
                                            </div>
                                        </div>
                                        <h4 class="mb-0">$42.5k</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="d-flex gap-2 align-items-center mb-2">
                                                    <div class="avatar avatar-xs flex-shrink-0">
                                                        <div class="avatar-initial rounded bg-label-warning">
                                                            <i class="ri-pie-chart-2-line ri-16px"></i>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Mobile</p>
                                                </div>
                                                <h4 class="mb-2">23.5%</h4>
                                                <p class="mb-0">2,890</p>
                                            </div>
                                            <div class="col-4">
                                                <div class="divider divider-vertical">
                                                    <div class="divider-text">
                                                        <span class="badge-divider-bg">VS</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                                                    <p class="mb-0">Desktop</p>
                                                    <div class="avatar avatar-xs flex-shrink-0">
                                                        <div class="avatar-initial rounded bg-label-primary">
                                                            <i class="ri-mac-line ri-16px"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="mb-2">76.5%</h4>
                                                <p class="mb-0">22,465</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-4">
                                            <div class="progress w-100 rounded" style="height: 8px">
                                                <div
                                                    class="progress-bar bg-warning"
                                                    style="width: 20%"
                                                    role="progressbar"
                                                    aria-valuenow="20"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                                <div
                                                    class="progress-bar bg-primary"
                                                    role="progressbar"
                                                    style="width: 80%"
                                                    aria-valuenow="80"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Total Visits -->

                            <!-- Top Referral Source Mobile  -->
                            <div class="col-xl-6">
                                <div class="card h-100">
                                    <div class="card-header d-flex justify-content-between">
                                        <div>
                                            <h5 class="card-title mb-1">Top Referral Sources</h5>
                                            <p class="card-subtitle mb-0">Number of Sales</p>
                                        </div>
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-text-secondary rounded-pill text-muted border-0 p-1"
                                                type="button"
                                                id="earningReportsTabsId"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="ri-more-2-line ri-20px"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <ul
                                            class="nav nav-tabs nav-tabs-widget pb-6 gap-4 mx-1 d-flex flex-nowrap align-items-center"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a
                                                    href="javascript:void(0);"
                                                    class="nav-link btn active d-flex flex-column align-items-center justify-content-center"
                                                    role="tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#navs-orders-id-1"
                                                    aria-controls="navs-orders-id-1"
                                                    aria-selected="true">
                                                    <div>
                                                        <img src="{{ asset('template/img/products/apple-iPhone-13.png') }}" alt="Mobile" class="img-fluid" />
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                                    role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id-2" aria-controls="navs-orders-id-2"
                                                    aria-selected="false">
                                                    <div>
                                                        <img src="{{ asset('template/img/products/apple-iMac-3k.png') }}" alt="Apple iMac 3k" class="img-fluid" />
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                                    role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id-3" aria-controls="navs-orders-id-3"
                                                    aria-selected="false">
                                                    <div>
                                                        <img src="{{ asset('template/img/products/gaming-remote.png') }}" alt="Gaming Remote" class="img-fluid" />
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link btn d-flex align-items-center justify-content-center disabled"
                                                    role="tab" data-bs-toggle="tab" aria-selected="false">
                                                    <div class="avatar avatar-sm">
                                                        <div class="avatar-initial bg-label-secondary text-body rounded">
                                                            <i class="ri-add-line ri-22px"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content p-0">
                                        <div class="tab-pane fade show active" id="navs-orders-id-1" role="tabpanel">
                                            <div class="table-responsive text-nowrap">
                                                <table class="table border-top">
                                                    <thead>
                                                        <tr>
                                                            <th class="bg-transparent border-bottom">Image</th>
                                                            <th class="bg-transparent border-bottom">Name</th>
                                                            <th class="text-end bg-transparent border-bottom">Status</th>
                                                            <th class="text-end bg-transparent border-bottom">Revenue</th>
                                                            <th class="text-end bg-transparent border-bottom">Profit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">

                                                        <tr>
                                                            <td>
                                                                <img src="{{ asset('template/img/products/samsung-s22.png') }}" alt="Mobile" width="34" height="34"
                                                                    class="rounded" />
                                                            </td>
                                                            <td>Samsung S22</td>
                                                            <td class="text-end">
                                                                <div class="badge bg-label-primary rounded-pill">Out of Stock</div>
                                                            </td>
                                                            <td class="text-end fw-medium">$12.5k</td>
                                                            <td class="text-success fw-medium text-end">+24%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{ asset('template/img/products/apple-iPhone-13-pro.png') }}" alt="Mobile" width="34" height="34"
                                                                    class="rounded" />
                                                            </td>
                                                            <td>iPhone 14 Pro</td>
                                                            <td class="text-end">
                                                                <div class="badge bg-label-success rounded-pill">In Stock</div>
                                                            </td>
                                                            <td class="text-end fw-medium">$45k</td>
                                                            <td class="text-danger fw-medium text-end">-18%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{ asset('template/img/products/oneplus-9-pro.png') }}" alt="Mobile" width="34" height="34"
                                                                    class="rounded" />
                                                            </td>
                                                            <td>Oneplus 9 Pro</td>
                                                            <td class="text-end">
                                                                <div class="badge bg-label-warning rounded-pill">Upcoming</div>
                                                            </td>
                                                            <td class="text-end fw-medium">$98.2k</td>
                                                            <td class="text-success fw-medium text-end">+55%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="{{ asset('template/img/products/google-pixel-6.png') }}" alt="Mobile" width="34" height="34"
                                                                    class="rounded" />
                                                            </td>
                                                            <td>Google Pixel 6</td>
                                                            <td class="text-end">
                                                                <div class="badge bg-label-success rounded-pill">In Stock</div>
                                                            </td>
                                                            <td class="text-end fw-medium">$210k</td>
                                                            <td class="text-success fw-medium text-end">+8%</td>
                                                        </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Top Referral Source Mobile -->



                            <!-- Marketing & Sales-->
                            <div class="col-lg-5 col-sm-6">
                                <div class="swiper-container swiper-container-horizontal swiper swiper-sales" id="swiper-marketing-sales">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide card pb-5 shadow-none border-0">
                                            <h5 class="mb-1">Marketing & Sales</h5>
                                            <div class="d-flex align-items-center card-subtitle gap-2">
                                                <div>Total 245.8k Sales</div>
                                                <div class="d-flex align-items-center text-success">
                                                    <p class="mb-0 fw-medium">+25%</p>
                                                    <i class="ri-arrow-up-s-line ri-20px mt-n1"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-5">
                                                <img src="{{ asset('template/img/products/card-marketing-expense-logo.png') }}"
                                                    alt="Marketing and sales" width="84" class="rounded-4" />
                                                <div class="d-flex flex-column w-100 ms-6">
                                                    <h6 class="mb-2">Marketing Expense</h6>
                                                    <div class="row d-flex flex-wrap justify-content-between g-4">
                                                        <div class="col-sm-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex mb-3 align-items-center">
                                                                    <p class="mb-0 me-3 sales-text-bg fw-medium">5k</p>
                                                                    <p class="mb-0 text-truncate">Operating</p>
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <p class="mb-0 me-3 sales-text-bg fw-medium">6k</p>
                                                                    <p class="mb-0 text-truncate">COGF</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex mb-3 align-items-center">
                                                                    <p class="mb-0 me-3 sales-text-bg fw-medium">2k</p>
                                                                    <p class="mb-0 text-truncate">Financial</p>
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <p class="mb-0 me-3 sales-text-bg fw-medium">1k</p>
                                                                    <p class="mb-0 text-truncate">Expense</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-6">
                                                <button type="button" class="btn btn-sm btn-outline-primary me-3">
                                                    <i class="tf-icons ri-sticky-note-line ri-14px me-1"></i>Details
                                                </button>
                                                <button type="button" class="btn btn-sm btn-primary">
                                                    <i class="tf-icons ri-download-line ri-14px me-1"></i>Report
                                                </button>
                                            </div>
                                        </div>

                                        <div class="swiper-slide card pb-5 shadow-none border-0">
                                            <h5 class="mb-1">Marketing & Sales</h5>
                                            <div class="d-flex align-items-center card-subtitle gap-2">
                                                <div>Total 245.8k Sales</div>
                                                <div class="d-flex align-items-center text-success">
                                                    <p class="mb-0 fw-medium">+25%</p>
                                                    <i class="ri-arrow-up-s-line ri-20px mt-n1"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-5">
                                                <img src="{{ asset('template/img/products/card-accounting-logo.png') }}"
                                                    alt="Marketing and sales" width="84" class="rounded-4" />
                                                <div class="d-flex flex-column w-100 ms-6">
                                                    <h6 class="mb-2">Accounting</h6>
                                                    <div class="row d-flex flex-wrap justify-content-between g-4">
                                                        <div class="col-sm-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex mb-3 align-items-center">
                                                                    <p class="mb-0 me-3 sales-text-bg fw-medium">18</p>
                                                                    <p class="mb-0 text-truncate">Billing</p>
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <p class="mb-0 me-3 sales-text-bg fw-medium">30</p>
                                                                    <p class="mb-0 text-truncate">Leads</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-flex mb-3 align-items-center">
                                                                    <p class="mb-0 me-3 sales-text-bg fw-medium">28</p>
                                                                    <p class="mb-0 text-truncate">Sales</p>
                                                                </li>
                                                                <li class="d-flex align-items-center">
                                                                    <p class="mb-0 me-3 sales-text-bg fw-medium">80</p>
                                                                    <p class="mb-0 text-truncate">Impression</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-6">
                                                <button type="button" class="btn btn-sm btn-outline-primary me-3">
                                                    <i class="tf-icons ri-sticky-note-line ri-14px me-1"></i>Details
                                                </button>
                                                <button type="button" class="btn btn-sm btn-primary">
                                                    <i class="tf-icons ri-download-line ri-14px me-1"></i>Report
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <!--/ Marketing & Sales-->

                        </div>
                    </div>
                    <!--/ Content -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!--/ Content wrapper -->
            </div>

            <!--/ Layout container -->
        </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->


</body>

</html>

@endsection
