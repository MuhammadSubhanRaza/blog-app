
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/finance-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Apr 2022 11:02:44 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Finance</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <link rel="stylesheet" href="{{asset('admin/css/bootstrap1.min.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/vendors/themefy_icon/themify-icons.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/vendors/swiper_slider/css/swiper.min.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/vendors/select2/css/select2.min.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/vendors/niceselect/css/nice-select.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/vendors/owl_carousel/css/owl.carousel.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/vendors/gijgo/gijgo.min.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/vendors/font_awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/vendors/tagsinput/tagsinput.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/vendors/datatable/css/buttons.dataTables.min.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/vendors/text_editor/summernote-bs4.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/vendors/morris/morris.css')}}">

    <link rel="stylesheet" href="{{asset('admin/vendors/material_icon/material-icons.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/css/metisMenu.css')}}">

    <link rel="stylesheet" href="{{asset('admin/css/style1.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/colors/default.css')}}" id="colorSkinCSS')}}">
</head>

<body class="crm_body_bg">



    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="img/logo.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a href="#">
                    <img src="img/menu-icon/1.svg" alt="">
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="mm-active">
                <a href="{{Route('category')}}">
                    <img src="img/menu-icon/1.svg" alt="">
                    <span>Category</span>
                </a>
            </li>
            <li class="mm-active">
                <a href="#">
                    <img src="img/menu-icon/1.svg" alt="">
                    <span>Users</span>
                </a>
            </li>
        </ul>
    </nav>


    <section class="main_content dashboard_part">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                </form>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a href="#"> <img src="img/icon/bell.svg" alt=""> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="img/icon/msg.svg" alt=""> </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="img/client_img.png" alt="#">
                                <div class="profile_info_iner">
                                    <p>Welcome Admin!</p>
                                    <h5>Travor James</h5>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile <i class="ti-user"></i></a>
                                        <a href="#">Settings <i class="ti-settings"></i></a>
                                        <a href="#">Log Out <i class="ti-shift-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner ">
            @yield('admin-content')
        </div>

        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by<a href="#"> Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="{{asset('admin/js/jquery1-3.4.1.min.js')}}"></script>

    <script src="{{asset('admin/js/popper1.min.js')}}"></script>

    <script src="{{asset('admin/js/bootstrap1.min.js')}}"></script>

    <script src="{{asset('admin/js/metisMenu.js')}}"></script>

    <script src="{{asset('admin/vendors/count_up/jquery.waypoints.min.js')}}"></script>

    <script src="{{asset('admin/vendors/chartlist/Chart.min.js')}}"></script>

    <script src="{{asset('admin/vendors/count_up/jquery.counterup.min.js')}}"></script>

    <script src="{{asset('admin/vendors/swiper_slider/js/swiper.min.js')}}"></script>

    <script src="{{asset('admin/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('admin/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('admin/vendors/gijgo/gijgo.min.js')}}"></script>

    <script src="{{asset('admin/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatable/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/vendors/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/js/chart.min.js')}}"></script>

    <script src="{{asset('admin/vendors/progressbar/jquery.barfiller.js')}}"></script>

    <script src="{{asset('admin/vendors/tagsinput/tagsinput.js')}}"></script>

    <script src="{{asset('admin/vendors/text_editor/summernote-bs4.js')}}"></script>
    <script src="{{asset('admin/vendors/apex_chart/apexcharts.js')}}"></script>

    <script src="{{asset('admin/js/custom.js')}}"></script>

    <script src="{{asset('admin/js/active_chart.js')}}"></script>
    <script src="{{asset('admin/vendors/apex_chart/radial_active.js')}}"></script>
    <script src="{{asset('admin/vendors/apex_chart/stackbar.js')}}"></script>
    <script src="{{asset('admin/vendors/apex_chart/area_chart.js')}}"></script>

    <script src="{{asset('admin/vendors/apex_chart/bar_active_1.js')}}"></script>
    <script src="{{asset('admin/vendors/chartjs/chartjs_active.js')}}"></script>

</body>

<!-- Mirrored from demo.dashboardpack.com/finance-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Apr 2022 11:03:14 GMT -->

</html>

