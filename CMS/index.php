<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en" >
    <!--begin::Head-->
    <head>
        <base href="">
        <meta charset="utf-8"/>
        <title><?php echo $page_title; ?> </title>
        <meta name="description" content="<?php echo $page_description; ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<link rel="canonical" href="<?php echo $page_canonical; ?>"/>

        <!--begin::Fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
        <!--end::Fonts-->

        <!--begin::Page Custom Styles(used by this page)-->
        <link href="assets/css/pages/login/classic/login-4<?php echo $css_dir; ?>.css" rel="stylesheet" type="text/css"/>
        <!--end::Page Custom Styles-->

        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="assets/plugins/global/plugins.bundle<?php echo $css_dir; ?>.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/custom/prismjs/prismjs.bundle<?php echo $css_dir; ?>.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.bundle<?php echo $css_dir; ?>.css" rel="stylesheet" type="text/css"/>
        <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->
        <link href="assets/css/themes/layout/header/base/light<?php echo $css_dir; ?>.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/layout/header/menu/light<?php echo $css_dir; ?>.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/layout/brand/dark<?php echo $css_dir; ?>.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/layout/aside/dark<?php echo $css_dir; ?>.css" rel="stylesheet" type="text/css"/>        
        <!--end::Layout Themes-->

        <link rel="shortcut icon" href="assets/media/logos/favicon.png"/>
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >
    	<!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Login-->
            <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
                <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('assets/media/bg/bg-3.jpg');">
                    <div class="login-form text-center p-7 position-relative overflow-hidden">
                        <!--begin::Login Header-->
                        <div class="d-flex flex-center mb-15">
                            <a href="#">
                                <img src="assets/media/logos/logo.png" class="max-h-75px" alt=""/>
                            </a>
                        </div>
                        <!--end::Login Header-->

                        <!--begin::Login Sign in form-->
                        <div class="login-signin">
                            <div class="mb-20">
                                <h3>تسجيل الخول</h3>
                                <div class="text-muted font-weight-bold">أدخل بيانات العضوية الخاصة بك:</div>
                            </div>
                            <?php if(isset($_GET['error_msg']) && !empty($_GET['error_msg'])){ ?>
                            <div style="color:red;">خطأ في بيانات الدخول</div>
                            <?php } ?>
                            <form class="form" action="dashboard.php" method="post" id="kt_login_signin_form">
                                <div class="form-group mb-5">
                                    <input class="form-control h-auto form-control-solid py-4 px-8" value="" type="text" placeholder="اسم المستخدم" name="username" id="username" autocomplete="off" style="direction:rtl; important!" />
                                </div>
                                <div class="form-group mb-5">
                                    <input class="form-control h-auto form-control-solid py-4 px-8" value="" type="password" placeholder="كلمة المرور" name="password" id="password" style="direction:rtl; important!" />
                                </div>
                                <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">تسجيل الدخول</button>
                            </form>
                        </div>
                        <!--end::Login Sign in form-->
                    </div>
                </div>
            </div>
            <!--end::Login-->
        </div>
        <!--end::Main-->

        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
                "breakpoints": {
                    "sm": 576,
                    "md": 768,
                    "lg": 992,
                    "xl": 1200,
                    "xxl": 1400
                },
                "colors": {
                    "theme": {
                        "base": {
                            "white": "#ffffff",
                            "primary": "#3699FF",
                            "secondary": "#E5EAEE",
                            "success": "#1BC5BD",
                            "info": "#8950FC",
                            "warning": "#FFA800",
                            "danger": "#F64E60",
                            "light": "#E4E6EF",
                            "dark": "#181C32"
                        },
                        "light": {
                            "white": "#ffffff",
                            "primary": "#E1F0FF",
                            "secondary": "#EBEDF3",
                            "success": "#C9F7F5",
                            "info": "#EEE5FF",
                            "warning": "#FFF4DE",
                            "danger": "#FFE2E5",
                            "light": "#F3F6F9",
                            "dark": "#D6D6E0"
                        },
                        "inverse": {
                            "white": "#ffffff",
                            "primary": "#ffffff",
                            "secondary": "#3F4254",
                            "success": "#ffffff",
                            "info": "#ffffff",
                            "warning": "#ffffff",
                            "danger": "#ffffff",
                            "light": "#464E5F",
                            "dark": "#ffffff"
                        }
                    },
                    "gray": {
                        "gray-100": "#F3F6F9",
                        "gray-200": "#EBEDF3",
                        "gray-300": "#E4E6EF",
                        "gray-400": "#D1D3E0",
                        "gray-500": "#B5B5C3",
                        "gray-600": "#7E8299",
                        "gray-700": "#5E6278",
                        "gray-800": "#3F4254",
                        "gray-900": "#181C32"
                    }
                },
                "font-family": "Tajawal"
            };
        </script>
        <!--end::Global Config-->

    	<!--begin::Global Theme Bundle(used by all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <!--end::Global Theme Bundle-->

        <!--begin::Page Scripts(used by this page)-->
        <script src="assets/js/pages/custom/login/login-general.js"></script>
        <!--end::Page Scripts-->
    </body>
    <!--end::Body-->
</html>