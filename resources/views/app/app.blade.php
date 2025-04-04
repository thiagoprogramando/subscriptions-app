@extends('app.layout')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-6 mb-1">
        <div class="col-lg-6">
            <div class="card" style="height: auto; min-height: 200px;">
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

    </div>
</div>
<!--/ Content -->

<div class="content-backdrop fade"></div>


<!--/ Layout container -->
</div>
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

<!--/ Layout wrapper -->


@endsection
