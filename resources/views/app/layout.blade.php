<!doctype html>

<html
    lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('template/') }}"
    data-template="horizontal-menu-template-no-customizer"
    data-style="light">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>User Profile - Profile | Materialize - Material Design HTML Admin Template</title>

    <meta name="description" content="" />

    <link rel="icon" type="image/x-icon" href="{{ asset('template/img/favicon/favicon.ico') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('template/vendor/fonts/remixicon/remixicon.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/fonts/flag-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/vendor/libs/node-waves/node-waves.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />

    <link rel="stylesheet" href="{{ asset('template/assets/vendor/css/pages/page-profile.css') }}" />

    <script src="{{ asset('template/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('template/assets/js/config.js') }}"></script>
</head>

<body>
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container" style="padding-top: 20px;">
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

            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="container-xxl">
                    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-6">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <span style="color: var(--bs-primary)">
                                    <svg width="268" height="150" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                                            fill="currentColor" />
                                        <path
                                            d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                                            fill="url(#paint0_linear_2989_100980)"
                                            fill-opacity="0.4" />
                                        <path
                                            d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                                            fill="currentColor" />
                                        <path
                                            d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                            fill="currentColor" />
                                        <path
                                            d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                            fill="url(#paint1_linear_2989_100980)"
                                            fill-opacity="0.4" />
                                        <path
                                            d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                                            fill="currentColor" />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_2989_100980"
                                                x1="5.36642"
                                                y1="0.849138"
                                                x2="10.532"
                                                y2="24.104"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-opacity="1" />
                                                <stop offset="1" stop-opacity="0" />
                                            </linearGradient>
                                            <linearGradient
                                                id="paint1_linear_2989_100980"
                                                x1="5.19475"
                                                y1="0.849139"
                                                x2="10.3357"
                                                y2="24.1155"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-opacity="1" />
                                                <stop offset="1" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>
                            </span>
                            <span class="app-brand-text demo menu-text fw-semibold">Materialize</span>
                        </a>

                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                            <i class="ri-close-fill align-middle"></i>
                        </a>
                    </div>

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="ri-menu-fill ri-22px"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <li class="nav-item navbar-search-wrapper me-1 me-xl-0">
                                <a
                                    class="nav-link btn btn-text-secondary rounded-pill search-toggler fw-normal"
                                    href="javascript:void(0);">
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
                                        <a class="dropdown-item" href="{{ route('profile') }}">
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
                                        <a class="dropdown-item" href="{{ route('profile') }}">
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
