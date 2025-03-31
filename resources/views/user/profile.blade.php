@extends('app.layout')
@section('content')

<!doctype html>

<div class="layout-page">

    <div class="content-wrapper">

        <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
            <div class="container-xxl d-flex h-100">
                <ul class="menu-inner">

                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ri-home-smile-line"></i>
                            <div data-i18n="Dashboards">Dashboards</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-ecommerce-dashboard.html" class="menu-link">
                                    <i class="menu-icon tf-icons ri-shopping-cart-2-line"></i>
                                    <div data-i18n="eCommerce">eCommerce</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="dashboards-crm.html" class="menu-link">
                                    <i class="menu-icon tf-icons ri-donut-chart-fill"></i>
                                    <div data-i18n="CRM">CRM</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <i class="menu-icon tf-icons ri-bar-chart-line"></i>
                                    <div data-i18n="Analytics">Analytics</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-logistics-dashboard.html" class="menu-link">
                                    <i class="menu-icon tf-icons ri-truck-line"></i>
                                    <div data-i18n="Logistics">Logistics</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-academy-dashboard.html" class="menu-link">
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
                                <a href="layouts-without-menu.html" class="menu-link">
                                    <i class="menu-icon tf-icons ri-layout-4-line"></i>
                                    <div data-i18n="Without menu">Without menu</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../vertical-menu-template/" class="menu-link" target="_blank">
                                    <i class="menu-icon tf-icons ri-layout-left-line"></i>
                                    <div data-i18n="Vertical">Vertical</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-fluid.html" class="menu-link">
                                    <i class="menu-icon tf-icons ri-layout-top-line"></i>
                                    <div data-i18n="Fluid">Fluid</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-container.html" class="menu-link">
                                    <i class="menu-icon tf-icons ri-layout-top-2-line"></i>
                                    <div data-i18n="Container">Container</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-blank.html" class="menu-link">
                                    <i class="menu-icon tf-icons ri-square-line"></i>
                                    <div data-i18n="Blank">Blank</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Apps -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ri-mail-open-line"></i>
                            <div data-i18n="Apps">Apps</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-email.html" class="menu-link">
                                    <i class="menu-icon tf-icons ri-mail-line"></i>
                                    <div data-i18n="Email">Email</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-chat.html" class="menu-link">
                                    <i class="menu-icon tf-icons ri-message-line"></i>
                                    <div data-i18n="Chat">Chat</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-calendar.html" class="menu-link">
                                    <i class="menu-icon tf-icons ri-calendar-line"></i>
                                    <div data-i18n="Calendar">Calendar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-kanban.html" class="menu-link">
                                    <i class="menu-icon tf-icons ri-drag-drop-line"></i>
                                    <div data-i18n="Kanban">Kanban</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons ri-shopping-cart-2-line"></i>
                                    <div data-i18n="eCommerce">eCommerce</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-ecommerce-dashboard.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Dashboard">Dashboard</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Products">Products</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="app-ecommerce-product-list.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Product List">Product List</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-ecommerce-product-add.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Add Product">Add Product</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-ecommerce-category-list.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Category List">Category List</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Order">Order</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="app-ecommerce-order-list.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Order List">Order List</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-ecommerce-order-details.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Order Details">Order Details</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Customer">Customer</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="app-ecommerce-customer-all.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="All Customers">All Customers</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Customer Details">Customer Details</div>
                                                </a>
                                                <ul class="menu-sub">
                                                    <li class="menu-item">
                                                        <a href="app-ecommerce-customer-details-overview.html" class="menu-link">
                                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                            <div data-i18n="Overview">Overview</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="app-ecommerce-customer-details-security.html" class="menu-link">
                                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                            <div data-i18n="Security">Security</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="app-ecommerce-customer-details-billing.html" class="menu-link">
                                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                            <div data-i18n="Address & Billing">Address & Billing</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="app-ecommerce-customer-details-notifications.html" class="menu-link">
                                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                            <div data-i18n="Notifications">Notifications</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-ecommerce-manage-reviews.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Manage Reviews">Manage Reviews</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-ecommerce-referral.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Referrals">Referrals</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Settings">Settings</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="app-ecommerce-settings-detail.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Store Details">Store Details</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-ecommerce-settings-payments.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Payments">Payments</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-ecommerce-settings-checkout.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Checkout">Checkout</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-ecommerce-settings-shipping.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Shipping & Delivery">Shipping & Delivery</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-ecommerce-settings-locations.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Locations">Locations</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-ecommerce-settings-notifications.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Notifications">Notifications</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons ri-book-open-line"></i>
                                    <div data-i18n="Academy">Academy</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-academy-dashboard.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Dashboard">Dashboard</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-academy-course.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="My Course">My Course</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-academy-course-details.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Course Details">Course Details</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons ri-truck-line"></i>
                                    <div data-i18n="Logistics">Logistics</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-logistics-dashboard.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Dashboard">Dashboard</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-logistics-fleet.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Fleet">Fleet</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons ri-article-line"></i>
                                    <div data-i18n="Invoice">Invoice</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-invoice-list.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="List">List</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-invoice-preview.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Preview">Preview</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-invoice-edit.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Edit">Edit</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-invoice-add.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Add">Add</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons ri-user-line"></i>
                                    <div data-i18n="Users">Users</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-user-list.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="List">List</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="View">View</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="app-user-view-account.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Account">Account</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-user-view-security.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Security">Security</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-user-view-billing.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Billing & Plans">Billing & Plans</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-user-view-notifications.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Notifications">Notifications</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-user-view-connections.html" class="menu-link">
                                                    <i class="menu-icon tf-icons ri-circle-fill"></i>
                                                    <div data-i18n="Connections">Connections</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons ri-shield-user-line"></i>
                                    <div data-i18n="Roles & Permissions">Roles & Permission</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-access-roles.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Roles">Roles</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-access-permission.html" class="menu-link">
                                            <i class="menu-icon tf-icons ri-circle-fill"></i>
                                            <div data-i18n="Permission">Permission</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- / Menu -->

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Header -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-6">
                        <div class="user-profile-header-banner">
                            <img src="{{ asset('template/img/pages/profile-banner.png') }}" alt="Banner image" class="rounded-top" style="width: 100%; height: auto;" />
                        </div>
                        <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-5">
                            <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                                <img
                                    src="{{ asset('template/img/avatars/1.png') }}"
                                    alt="user image"
                                    class="d-block h-auto ms-0 ms-sm-5 rounded-4 user-profile-img" />
                            </div>
                            <div class="flex-grow-1 mt-4 mt-sm-12">
                                <div
                                    class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-6">
                                    <div class="user-profile-info">
                                        <h4 class="mb-2">John Doe</h4>
                                        <ul
                                            class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4">
                                            <li class="list-inline-item">
                                                <i class="ri-palette-line me-2 ri-24px"></i><span class="fw-medium">UX Designer</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-map-pin-line me-2 ri-24px"></i><span class="fw-medium">Vatican City</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ri-calendar-line me-2 ri-24px"></i><span class="fw-medium"> Joined April 2021</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-primary">
                                        <i class="ri-user-follow-line ri-16px me-2"></i>Connected
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Header -->


            <!-- User Profile Content -->
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-5">
                    <!-- About User -->
                    <div class="card mb-6">
                        <div class="card-body">
                            <small class="card-text text-uppercase text-muted small">About</small>
                            <ul class="list-unstyled my-3 py-1">
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-user-3-line ri-24px"></i><span class="fw-medium mx-2">Full Name:</span>
                                    <span>{{ auth()->user()->name }}</span> <!-- Nome do usuário logado -->
                                </li>
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-check-line ri-24px"></i><span class="fw-medium mx-2">Status:</span>
                                    <span>{{ auth()->user()->status ?? 'Active' }}</span> <!-- Status, ou "Active" se não estiver definido -->
                                </li>
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-star-smile-line ri-24px"></i><span class="fw-medium mx-2">Role:</span>
                                    <span>{{ auth()->user()->role ?? 'User' }}</span> <!-- Cargo do usuário -->
                                </li>
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-flag-2-line ri-24px"></i><span class="fw-medium mx-2">Country:</span>
                                    <span>{{ auth()->user()->country ?? 'USA' }}</span> <!-- País, ou "USA" se não estiver definido -->
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="ri-translate-2 ri-24px"></i><span class="fw-medium mx-2">Languages:</span>
                                    <span>{{ auth()->user()->language ?? 'English' }}</span> <!-- Idioma, ou "English" se não estiver definido -->
                                </li>
                            </ul>

                            <small class="card-text text-uppercase text-muted small">Contacts</small>
                            <ul class="list-unstyled my-3 py-1">
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-phone-line ri-24px"></i><span class="fw-medium mx-2">Contact:</span>
                                    <span>{{ auth()->user()->phone ?? '(123) 456-7890' }}</span> <!-- Telefone, ou um valor padrão -->
                                </li>
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-wechat-line ri-24px"></i><span class="fw-medium mx-2">Skype:</span>
                                    <span>{{ auth()->user()->skype ?? 'john.doe' }}</span> <!-- Skype, ou um valor padrão -->
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="ri-mail-open-line ri-24px"></i><span class="fw-medium mx-2">Email:</span>
                                    <span>{{ auth()->user()->email }}</span> <!-- Email do usuário logado -->
                                </li>
                            </ul>

                            <small class="card-text text-uppercase text-muted small">Teams</small>
                            <ul class="list-unstyled mb-0 mt-3 pt-1">
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-github-line ri-24px text-body me-2"></i>
                                    <div class="d-flex flex-wrap">
                                        <span class="fw-medium me-2">{{ auth()->user()->team ?? 'Backend Developer' }}</span><span>(126 Members)</span> <!-- Time, ou um valor padrão -->
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="ri-reactjs-line ri-24px text-body me-2"></i>
                                    <div class="d-flex flex-wrap">
                                        <span class="fw-medium me-2">{{ auth()->user()->team ?? 'React Developer' }}</span><span>(98 Members)</span> <!-- Time, ou um valor padrão -->
                                    </div>
                                    <!-- Botão para abrir o modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                        Editar Perfil
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editUserModalLabel">Editar Perfil</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="editUserForm">
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-user-3-line ri-24px"></i><span class="fw-medium mx-2">Full Name:</span>
                                    <span data-profile="name">{{ auth()->user()->name }}</span>
                                </li>
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-check-line ri-24px"></i><span class="fw-medium mx-2">Status:</span>
                                    <span data-profile="status">{{ auth()->user()->status ?? 'Active' }}</span>
                                </li>
                                <li class="d-flex align-items-center mb-4">
                                    <i class="ri-phone-line ri-24px"></i><span class="fw-medium mx-2">Contact:</span>
                                    <span data-profile="phone">{{ auth()->user()->phone ?? '(123) 456-7890' }}</span>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="ri-mail-open-line ri-24px"></i><span class="fw-medium mx-2">Email:</span>
                                    <span data-profile="email">{{ auth()->user()->email }}</span>
                                </li>

                                </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" form="editUserForm">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                document.getElementById("editUserForm").addEventListener("submit", function(event) {
                    event.preventDefault(); // Evita o recarregamento da página

                    let formData = new FormData(this);

                    fetch("{{ route('user.update') }}", {
                            method: "POST",
                            body: formData,
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}" // Token CSRF para segurança
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Atualiza os campos diretamente na tela sem precisar recarregar
                                document.querySelector('[data-profile="name"]').innerText = data.user.name;
                                document.querySelector('[data-profile="status"]').innerText = data.user.status;
                                document.querySelector('[data-profile="phone"]').innerText = data.user.phone;
                                document.querySelector('[data-profile="email"]').innerText = data.user.email;

                                // Fecha o modal
                                let modal = bootstrap.Modal.getInstance(document.getElementById("editUserModal"));
                                modal.hide();
                            } else {
                                alert("Erro ao atualizar perfil.");
                            }
                        })
                        .catch(error => console.error("Erro:", error));
                });
            </script>

            </li>
            </ul>
        </div>
    </div>
    <!--/ About User -->

    <!-- Profile Overview -->
    <div class="card mb-6">
        <div class="card-body">
            <small class="card-text text-uppercase text-muted small">Overview</small>
            <ul class="list-unstyled mb-0 mt-3 pt-1">
                <li class="d-flex align-items-center mb-4">
                    <i class="ri-check-line ri-24px"></i><span class="fw-medium mx-2">Task Compiled:</span>
                    <span>13.5k</span>
                </li>
                <li class="d-flex align-items-center mb-4">
                    <i class="ri-user-3-line ri-24px"></i><span class="fw-medium mx-2">Projects Compiled:</span>
                    <span>146</span>
                </li>
                <li class="d-flex align-items-center">
                    <i class="ri-star-smile-line ri-24px"></i><span class="fw-medium mx-2">Connections:</span>
                    <span>897</span>
                </li>
            </ul>
        </div>
    </div>
    <!--/ Profile Overview -->
</div>
<div class="col-xl-8 col-lg-7 col-md-7">
    <!-- Activity Timeline -->
    <div class="card card-action mb-6">
        <div class="card-header align-items-center">
            <h5 class="card-action-title mb-0">
                <i class="ri-bar-chart-2-line ri-24px text-body me-4"></i>Activity Timeline
            </h5>
            <div class="card-action-element">
                <div class="dropdown">
                    <button
                        type="button"
                        class="btn dropdown-toggle hide-arrow p-0"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="ri-more-2-line ri-22px text-muted"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="javascript:void(0);">Share timeline</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body pt-5">
            <ul class="timeline mb-0">
                <li class="timeline-item timeline-item-transparent">
                    <span class="timeline-point timeline-point-primary"></span>
                    <div class="timeline-event">
                        <div class="timeline-header mb-3">
                            <h6 class="mb-0">12 Invoices have been paid</h6>
                            <small class="text-muted">12 min ago</small>
                        </div>
                        <p class="mb-2">Invoices have been paid to the company</p>
                        <div class="d-flex align-items-center">
                            <div class="badge bg-lighter rounded-3">
                                <img src="{{ asset('template/img/icons/misc/pdf.png') }}" alt="img" width="15" class="me-2" />
                                <span class="h6 mb-0 text-body">invoices.pdf</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-item timeline-item-transparent">
                    <span class="timeline-point timeline-point-success"></span>
                    <div class="timeline-event">
                        <div class="timeline-header mb-3">
                            <h6 class="mb-0">Client Meeting</h6>
                            <small class="text-muted">45 min ago</small>
                        </div>
                        <p class="mb-2">Project meeting with john @10:15am</p>
                        <div class="d-flex justify-content-between flex-wrap gap-2">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="avatar avatar-sm me-2">
                                    <img src="{{ asset('template/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div>
                                    <p class="mb-0 small fw-medium">Lester McCarthy (Client)</p>
                                    <small>CEO of Pixinvent</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-item timeline-item-transparent">
                    <span class="timeline-point timeline-point-info"></span>
                    <div class="timeline-event">
                        <div class="timeline-header mb-3">
                            <h6 class="mb-0">Create a new project for client</h6>
                            <small class="text-muted">2 Day Ago</small>
                        </div>
                        <p class="mb-2">6 team members in a project</p>
                        <ul class="list-group list-group-flush">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap p-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 me-2">
                                        <li
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            title="Vinnie Mostowy"
                                            class="avatar pull-up">
                                            <img class="rounded-circle" src="{{ asset('template/img/avatars/5.png') }}" alt="Avatar" />
                                        </li>
                                        <li
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            title="Allen Rieske"
                                            class="avatar pull-up">
                                            <img class="rounded-circle" src="{{ asset('template/img/avatars/12.png') }}" alt="Avatar" />
                                        </li>
                                        <li
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            title="Julee Rossignol"
                                            class="avatar pull-up">
                                            <img class="rounded-circle" src="{{ asset('template/img/avatars/6.png') }}" alt="Avatar" />
                                        </li>
                                        <li class="avatar">
                                            <span
                                                class="avatar-initial rounded-circle pull-up text-heading"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="bottom"
                                                title="3 more">+3</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--/ Activity Timeline -->
    <div class="row">
        <!-- Connections -->
        <div class="col-lg-12 col-xl-6">
            <div class="card card-action mb-6">
                <div class="card-header align-items-center">
                    <h5 class="card-action-title mb-0">Connections</h5>
                    <div class="card-action-element">
                        <div class="dropdown">
                            <button
                                type="button"
                                class="btn dropdown-toggle hide-arrow p-0"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ri-more-2-line ri-22px text-muted"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0);">Share connections</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">


                        <li class="mb-5">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2">
                                        <img src="{{ asset('template/img/avatars/12.png') }}" alt="Avatar" class="rounded-circle" />
                                    </div>
                                    <div class="me-2">
                                        <h6 class="mb-1">Eugenia Moore</h6>
                                        <small>1.2k Connections</small>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <button class="btn btn-outline-primary btn-icon">
                                        <i class="ri-user-add-line ri-22px"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="text-center">
                            <a href="javascript:;">View all connections</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Connections -->
        <!-- Teams -->
        <div class="col-lg-12 col-xl-6">
            <div class="card card-action mb-6">
                <div class="card-header align-items-center">
                    <h5 class="card-action-title mb-0">Teams</h5>
                    <div class="card-action-element">
                        <div class="dropdown">
                            <button
                                type="button"
                                class="btn dropdown-toggle hide-arrow p-0"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="ri-more-2-line ri-24px text-muted"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:void(0);">Share teams</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-4">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2">
                                        <img
                                            src="{{ asset('template/img/icons/brands/react-label.png') }}"
                                            alt="Avatar"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="me-2">
                                        <h6 class="mb-1">React Developers</h6>
                                        <small>72 Members</small>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:;"><span class="badge bg-label-danger rounded-pill">Developer</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2">
                                        <img
                                            src="{{ asset('template/img/icons/brands/support-label.png') }}"
                                            alt="Avatar"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="me-2">
                                        <h6 class="mb-1">Support Team</h6>
                                        <small>122 Members</small>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:;"><span class="badge bg-label-primary rounded-pill">Support</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2">
                                        <img
                                            src="{{ asset('template/img/icons/brands/figma-label.png') }}"
                                            alt="Avatar"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="me-2">
                                        <h6 class="mb-1">UI Designers</h6>
                                        <small>7 Members</small>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:;"><span class="badge bg-label-info rounded-pill">Designer</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2">
                                        <img
                                            src="{{ asset('template/img/icons/brands/vue-label.png') }}"
                                            alt="Avatar"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="me-2">
                                        <h6 class="mb-1">Vue.js Developers</h6>
                                        <small>289 Members</small>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:;"><span class="badge bg-label-danger rounded-pill">Developer</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="mb-5">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2">
                                        <img
                                            src="{{ asset('template/img/icons/brands/twitter-label.png') }}"
                                            alt="Avatar"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="me-w">
                                        <h6 class="mb-1">Digital Marketing</h6>
                                        <small>24 Members</small>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <a href="javascript:;"><span class="badge bg-label-secondary rounded-pill">Marketing</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="text-center">
                            <a href="javascript:;">View all teams</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Teams -->
    </div>

    <!-- Projects table -->
    <div class="card mb-4">
        <h5 class="card-header">Project List</h5>
        <div class="card-datatable table-responsive pb-0">
            <table class="table datatable-project table-border-bottom-0">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Project</th>
                        <th>leader</th>
                        <th>teams</th>
                        <th>Progress</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!--/ Projects table -->
</div>
</div>
<!--/ User Profile Content -->
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

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('template/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('template/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('template/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('template/vendor/libs/node-waves/node-waves.js') }}"></script>
<script src="{{ asset('template/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('template/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('template/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('template/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('template/vendor/js/menu.js') }}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('template/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('template/assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('template/assets/js/pages-profile-user.js') }}"></script>
</body>

</html>
@endsection
