<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <base href=""/>
    <title><?php echo e(env('APP_NAME')); ?></title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>
    <meta property="og:type" content="article"/>
    <link rel="shortcut icon" href="<?php echo e(asset_dir('adminV2/assets/media/logos/favicon.ico')); ?>"/>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="<?php echo e(asset_dir('adminV2/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(asset_dir('adminV2/assets/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="<?php echo e(asset_dir('adminV2/assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset_dir('adminV2/assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css"/>

    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<style>
    .alert {
        width: 813px;
        float: right;
        margin-left: 49px;
    }

    html:not([data-theme=dark]) {
        --kt-aside-bg-color: #232f3e;
    }

    .form-control {
        margin-top: 1vw;
        margin-bottom: 1vw;
    }

    .aside {
        display: flex;
        flex-direction: column;
        /*background-color: #232f3e;*/
        padding: 0
    }

    .btn-primary, .btn.btn-light-primary {
        background-color: #232f3e !important;
    }

    .btn.btn-primary:hover:not(.btn-active), .btn.btn-light-primary:hover {
        background-color: #232f3e85 !important;
    }
.text-muted:hover {
    color: blueviolet; /* replace with your desired hover color */
}
.aside .text-muted:hover,
.aside .aside-menu .menu .menu-item.show>.menu-link:hover span {
    color: #fff !important;
}
.aside .aside-menu .menu .menu-item.show>.menu-link .menu-icon,.aside .aside-menu .menu .menu-item.show>.menu-link .menu-icon .svg-icon,.aside .aside-menu .menu .menu-item.show>.menu-link .menu-icon i {
    color: #7e8299;
}

[data-theme=dark] {
    --kt-page-bg: #151521 !important;
    --kt-app-blank-bg: #151521 !important;
    --kt-header-desktop-fixed-bg-color: #1e1e2d !important;
    --kt-header-desktop-fixed-box-shadow: none !important;
    --kt-header-desktop-fixed-bg-color: #1e1e2d !important;
    --kt-header-desktop-fixed-box-shadow: none !important;
    --kt-aside-bg-color: #1e1e2d !important;
    --kt-sidebar-bg-color: #1e1e2d !important;
    --kt-sidebar-tabs-link-bg-color-default: #161621 !important;
    --kt-sidebar-tabs-link-bg-color-active: #12121b !important;
    --kt-sidebar-tabs-link-icon-color-default: #5e6278 !important;
    --kt-sidebar-tabs-link-icon-color-active: #ffffff !important;
    --kt-sidebar-dashed-border-color: #2B2B40 !important;
    --kt-sidebar-muted-color: #565674 !important;
    --kt-sidebar-muted-bg-color: #1a1a27 !important;
}
[data-theme=dark] {
    --bs-gray-100: #1b1b29;
    --bs-gray-200: #2B2B40;
    --bs-gray-300: #323248;
    --bs-gray-400: #474761;
    --bs-gray-500: #565674;
    --bs-gray-600: #6D6D80;
    --bs-gray-700: #92929F;
    --bs-gray-800: #CDCDDE;
    --bs-gray-900: #FFFFFF;
    --bs-dark: #FFFFFF;
    --bs-light: #2B2B40;
    --bs-secondary: #323248;
    --bs-body-color-rgb: 255,255,255;
    --bs-body-bg-rgb: 30,30,45;
    --bs-body-color: #FFFFFF;
    --bs-body-bg: #1e1e2d;
    --bs-border-color: #2B2B40;
    --bs-heading-color: #FFFFFF;
    --bs-link-color: #5e6278;
    --bs-link-hover-color: #ffffff;
    --bs-code-color: #b93993;
    --bs-second-link-color: #5e6278;
    --bs-second-link-color-hover: #ffffff;
    }
    html:not([data-theme=dark]) {
        /*--bs-link-color: #5e6278;*/
        /*--bs-link-hover-color: #5e6278;*/
        --bs-second-link-color: #5e6278;
        --bs-second-link-color-hover: #5e6278;
    }
    #kt_table_users tbody i[class*=" la-"], td a {
        color: var(--bs-second-link-color); !important;
    }
    #kt_table_users tbody i[class*=" la-"], td a:hover {
        color: var(--bs-second-link-color-hover); !important;
    }

    .white-menu-title {
        color: white !important;
    }

    .white-menu-title:hover {
        color: var(--kt-gray-700)!important;
    }
</style>

<body id="kt_body" class="sidebar-enabled">
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
            <?php echo $__env->make('backendV2.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <?php echo $__env->make('backendV2.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php if(\Session::has('errorMessage')): ?>
                <div class="alert alert-danger fade show" role="alert">
                    <div class="alert-text">
                        <?php echo \Session::get('errorMessage'); ?>

                    </div>
                </div>
                <?php endif; ?>

                <?php if(\Session::has('successMessage')): ?>

                <div class="content ">
                    <div class="container-xxl">
                        <div class="alert alert-success fade show col-md-12 col-md-offset-12" role="alert" style="width: 100%;">
                            <div class="alert-text">
                                <?php echo \Session::get('successMessage'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <!--end::Header-->
                <!--begin::Content-->
                <?php $__env->startSection('content'); ?>

                <?php echo $__env->yieldSection(); ?>
                <!--end::Content-->
                <!--begin::Footer-->
                <?php echo $__env->make('backendV2.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Sidebar-->




































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































            <!--end::Sidebar-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "adminV2/assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="<?php echo e(asset_dir('adminV2/assets/plugins/global/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset_dir('adminV2/assets/js/scripts.bundle.js')); ?>"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="<?php echo e(asset_dir('adminV2/assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset_dir('adminV2/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')); ?>"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="<?php echo e(asset_dir('adminV2/assets/js/widgets.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset_dir('adminV2/assets/js/custom/widgets.js')); ?>"></script>
    <script src="<?php echo e(asset_dir('adminV2/assets/js/custom/apps/chat/chat.js')); ?>"></script>
    <script src="<?php echo e(asset_dir('adminV2/assets/js/custom/utilities/modals/users-search.js')); ?>"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    <?php $__env->startSection('page_scripts'); ?>

    <?php echo $__env->yieldSection(); ?>
</body>
<!--end::Body-->

</html>
<?php /**PATH /home/u639317863/domains/laravel-site.net/public_html/laravelsite-app/resources/views/backendV2/layouts/default.blade.php ENDPATH**/ ?>