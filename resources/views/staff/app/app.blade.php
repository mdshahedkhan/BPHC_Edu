
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon_1.ico') }}">
    <title>Moltran - Responsive Admin Dashboard Template</title>

    <!-- Base Css Files -->
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Font Icons -->
    <link href="{{ asset('assets/backend/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

    <!-- animate css -->
    <link href="{{ asset('assets/backend/css/animate.css') }}" rel="stylesheet" />

    <!-- Waves-effect -->
    <link href="{{ asset('assets/backend/css/waves-effect.css') }}" rel="stylesheet">

    <!-- sweet alerts -->
    <link href="{{ asset('assets/backend/assets/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">

    <!-- Custom Files -->
    <link href="{{ asset('assets/backend/css/helper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!--Stake CSS FILE START-->
    @stack('CSS')
    <!--End Stake CSS FILE -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- Plugins css -->
    <link href="{{ asset('assets/backend/assets/notifications/notification.css') }}" rel="stylesheet" />

    <script src="{{ asset('assets/backend/js/modernizr.min.js') }}"></script>

</head>



<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
            </div>
        </div>
        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">
                    <div class="pull-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fa fa-bars"></i>
                        </button>
                        <span class="clearfix"></span>
                    </div>
                    <form class="navbar-form pull-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                        </div>
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </form>

                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="dropdown hidden-xs">
                            <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="text-center notifi-title">Notification</li>
                                <li class="list-group">
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left">
                                                <em class="fa fa-user-plus fa-2x text-info"></em>
                                            </div>
                                            <div class="media-body clearfix">
                                                <div class="media-heading">New user registered</div>
                                                <p class="m-0">
                                                    <small>You have 10 unread messages</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- last list item -->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <small>See all notifications</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                        </li>
                        <li class="hidden-xs">
                            <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('assets/backend') }}/images/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <a href="javascript:;" onclick="event.preventDefault(); this.closest('form').submit()"><i class="md md-settings-power"></i> Logout</a>
                                    </form>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <div class="user-details">
                <div class="pull-left">
                    <img src="{{ asset('assets/backend') }}/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                </div>
                <div class="user-info">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                            <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                        </ul>
                    </div>
                    <p class="text-muted m-0">Supper Admin</p>
                </div>
            </div>
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{ route('staff.dashboard') }}" class="waves-effect {{ request()->is('staff/dashboard') ? 'active':'' }}"><i class="md md-home"></i><span>Dashboard</span></a>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:" class="waves-effect {{ request()->is('staff/employs/') ? 'subdrop':'' }}"><i class="ion-android-social"></i><span> Employs </span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled" style="display: none;">
                            <li class="{{ request()->is('staff/employs/create') ? 'active':'' }}"><a href="{{ route('staff.employs.create') }}">Add Employs</a></li>
                            <li><a href="{{ route('staff.employs.index') }}">All Employs</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            @yield('content')
        </div> <!-- content -->

        <footer class="footer text-right">
            2015 © Moltran.
        </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar nicescroll">
        <h4 class="text-center">Chat</h4>
        <div class="contact-list nicescroll">
            <ul class="list-group contacts-list">
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{ asset('assets/backend') }}/images/users/avatar-1.jpg" alt="">
                        </div>
                        <span class="name">Chadengle</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Right-bar -->

</div>

<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/waves.js') }}"></script>
<script src="{{ asset('assets/backend/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('assets/backend/assets/chat/moment-2.2.1.js') }}"></script>
<script src="{{ asset('assets/backend/assets/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/backend/assets/jquery-detectmobile/detect.js') }}"></script>
<script src="{{ asset('assets/backend/assets/fastclick/fastclick.js') }}"></script>
<script src="{{ asset('assets/backend/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/backend/assets/jquery-blockui/jquery.blockUI.js') }}"></script>

<!-- sweet alerts -->
<script src="{{ asset('assets/backend/assets/sweet-alert/sweet-alert.min.js') }}"></script>
<script src="{{ asset('assets/backend/assets/sweet-alert/sweet-alert.init.js') }}"></script>

<!-- flot Chart -->
<script src="{{ asset('assets/backend/assets/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/backend/assets/flot-chart/jquery.flot.time.js') }}"></script>
<script src="{{ asset('assets/backend/assets/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('assets/backend/assets/flot-chart/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/backend/assets/flot-chart/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/backend/assets/flot-chart/jquery.flot.selection.js') }}"></script>
<script src="{{ asset('assets/backend/assets/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('assets/backend/assets/flot-chart/jquery.flot.crosshair.js') }}"></script>

<!-- Counter-up -->
<script src="{{ asset('assets/backend/assets/counterup/waypoints.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/assets/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('assets/backend/js/jquery.app.js') }}"></script>

<!-- Dashboard -->
<script src="{{ asset('assets/backend/js/jquery.dashboard.js') }}"></script>

<!-- Chat -->
<script src="{{ asset('assets/backend/js/jquery.chat.js') }}"></script>

<!-- Todo -->
<!--form validation-->
<script type="text/javascript" src="{{ asset('assets/backend/assets/jquery.validate/jquery.validate.min.js') }}"></script>

<!--form validation init-->
<script src="{{ asset('assets/backend/assets/jquery.validate/form-validation-init.js') }}"></script>
<script src="{{ asset('assets/backend/js/jquery.todo.js') }}"></script>
<script src="{{ asset('assets/backend/assets/notifications/notify.min.js') }}"></script>
<script src="{{ asset('assets/backend/assets/notifications/notify-metro.js') }}"></script>
<script src="{{ asset('assets/backend/assets/notifications/notifications.js') }}"></script>
    <!--Start Stake Javascript -->
        @stack('JS')
    <!-- End Stake Javascript File -->
<script src="{{ asset('assets/backend/MainApp.js') }}"></script>
<script type="text/javascript">

    /* ==============================================
    Counter Up
    =============================================== */
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
    });
/*    let EmploysCreate = document.getElementById('EmploysCreate');
    EmploysCreate.addEventListener('submit', function (e){
        e.preventDefault();
        let FormData = {};
        [...this.elements].forEach(El=>{
            console.log(El.value);
        })
    });*/

</script>

</body>
</html>
