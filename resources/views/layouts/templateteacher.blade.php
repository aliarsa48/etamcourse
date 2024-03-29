<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="/dashboard/image/x-icon" href="/dashboard/img/favicon.ico">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/850984f961.js" crossorigin="anonymous"></script>
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/bootstrap.min.css"> 

    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/owl.carousel.css">
    <link rel="stylesheet" href="/dashboard/css/owl.theme.css">
    <link rel="stylesheet" href="/dashboard/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/educate-custon-icon.css">
        <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/datapicker/datepicker3.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="/dashboard/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/dashboard/css/calendar/fullcalendar.print.min.css">
        <!-- datapicker JS
        ============================================ -->
    <script src="/dashboard/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="/dashboard/js/datapicker/datepicker-active.js"></script>
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="/dashboard/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="/dashboard/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header" style="margin-top: 10px;">
                <a href="/"><img class="main-logo" src="/images/logo2.png" alt="" /></a>
                <strong><a href="/r"><img src="/images/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
          
                        <li>
                            <a href="{{'/teacher'}}">
                                   <span class="educate-icon icon-wrap"><i class="fas fa-home"></i></span>
                                   <span class="mini-click-non">Dashboard</span>
                                </a>
                        </li>                       

                        <li class="active">
                            <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Kelas</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a href="{{'/teacher/courses'}}"><span class="mini-sub-pro">Semua Kelas Saya</span></a></li>
                                <li><a href="{{'/teacher/add'}}"><span class="mini-sub-pro">Buat Kelas Baru</span></a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Penghasilan</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a href="{{'/teacher/payment'}}"><span class="mini-sub-pro">Pencairan</span></a></li>
                                <li><a href="{{'/teacher/payment/history'}}"><span class="mini-sub-pro">Riwayat</span></a></li>
                            </ul>
                        </li>
                       
                      
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="/"><img class="main-logo" src="/dashboard/img/logo/logo2.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                                <img src="/profile/avatar/{{Auth::user()->avatar}}" alt="" style=" object-fit: cover; border-radius: 100%; height: 30px; width: 30px;"/>
                                                            <span class="admin-name">{{ Auth::user()->name }}</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="/myprofile"><span class="edu-icon edu-home-admin author-log-ic"></span>Profil</a>
                                                        </li>
                                                        <li><a href="{{route('logout')}}"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
                        <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a href="/teacher">Dashboard</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Kelas <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="/teacher/courses">Semua Kelas Saya</a>
                                                </li>
                                                <li><a href="/teacher/add">Buat Kelas Baru</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Penghasilan <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="/teacher/payment">Pencairan</a>
                                                </li>
                                                <li><a href="/teacher/payment/history">Riwayat</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->

@yield('content')


    <!-- jquery
        ============================================ -->
    <script src="/dashboard/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="/dashboard/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="/dashboard/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="/dashboard/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="/dashboard/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="/dashboard/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="/dashboard/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="/dashboard/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="/dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/dashboard/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="/dashboard/js/metisMenu/metisMenu.min.js"></script>
    <script src="/dashboard/js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="/dashboard/js/data-table/bootstrap-table.js"></script>
    <script src="/dashboard/js/data-table/tableExport.js"></script>
    <script src="/dashboard/js/data-table/data-table-active.js"></script>
    <script src="/dashboard/js/data-table/bootstrap-table-editable.js"></script>
    <script src="/dashboard/js/data-table/bootstrap-editable.js"></script>
    <script src="/dashboard/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="/dashboard/js/data-table/colResizable-1.5.source.js"></script>
    <script src="/dashboard/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="/dashboard/js/editable/jquery.mockjax.js"></script>
    <script src="/dashboard/js/editable/mock-active.js"></script>
    <script src="/dashboard/js/editable/select2.js"></script>
    <script src="/dashboard/js/editable/moment.min.js"></script>
    <script src="/dashboard/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="/dashboard/js/editable/bootstrap-editable.js"></script>
    <script src="/dashboard/js/editable/xediable-active.js"></script>
    <!-- Chart JS
        ============================================ -->
    <script src="/dashboard/js/chart/jquery.peity.min.js"></script>
    <script src="/dashboard/js/peity/peity-active.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="/dashboard/js/tab.js"></script>
        <!-- icheck JS
        ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="/dashboard/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="/dashboard/js/main.js"></script>

</body>

</html>