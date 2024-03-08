<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>Medifirst - Dashboard</title>
    @include('includes.admin.meta')

    @stack('before-style')
    @include('includes.admin.style')
    @stack('after-style')
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->

    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            @include('includes.admin.sidebar')
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                @include('includes.admin.navbar')
                <!--end::Header-->

                <!--begin::Toolbar-->
                <div class="toolbar py-2" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
                        <!--begin::Page title-->
                        <div class="flex-grow-1 flex-shrink-0 me-5">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Title-->
                                <h1 class="d-flex align-items-center text-gray-900 fw-bold my-1 fs-3">Dashboard
                                    <!--begin::Separator-->
                                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                                    <!--end::Separator-->
                                    <!--begin::Description-->
                                    <small class="text-muted fs-7 fw-semibold my-1 ms-1">#XRS-45670</small>
                                    <!--end::Description-->
                                </h1>
                                <!--end::Title-->
                            </div>
                            <!--end::Page title-->
                        </div>
                        <!--end::Page title-->

                        <!--begin::Action group-->
                        <div class="d-flex align-items-center flex-wrap">
                            <!--begin::Wrapper-->
                            <div class="flex-shrink-0 me-2">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light active fw-semibold fs-7 px-4 me-1"
                                            data-bs-toggle="tab" href="#">Day</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-semibold fs-7 px-4 me-1"
                                            data-bs-toggle="tab" href="">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-semibold fs-7 px-4"
                                            data-bs-toggle="tab" href="#">Year</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Daterangepicker-->
                                <a href="#" class="btn btn-sm btn-bg-light btn-color-gray-500 btn-active-color-primary me-2"
                                    id="kt_dashboard_daterangepicker" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-trigger="hover"
                                    title="Select dashboard daterange">
                                    <span class="fw-semibold me-1" id="kt_dashboard_daterangepicker_title">Range:</span>
                                    <span class="fw-bold" id="kt_dashboard_daterangepicker_date">January 12</span>
                                </a>
                                <!--end::Daterangepicker-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center me-n2 me-lg-0">
                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light btn-active-color-primary"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
                                        <i class="ki-outline ki-plus-square fs-2"></i>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Action group-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    @yield('content')
                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2024&copy;</span>
                            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--end::Main-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-outline ki-arrow-up"></i>
    </div>
    <!--end::Scrolltop-->

    @stack('before-script')
    @include('includes.admin.script')
    @stack('after-script')
</body>
<!--end::Body-->

</html>
