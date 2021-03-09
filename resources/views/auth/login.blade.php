
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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

    <!-- Custom Files -->
    <link href="{{ asset('assets/backend/css/helper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('assets/backend/js/modernizr.min.js') }}"></script>

</head>
<body>


<div class="wrapper-page">
    <div class="panel panel-color panel-primary panel-pages">
        <div class="panel-heading bg-img">
            <div class="bg-overlay"></div>
            <h3 class="text-center text-white">Sign In to <strong>Biddyakanon </strong> </h3>
            <h6 class="text-center text-white">Pre-Cadet & High School</h6>
        </div>
        <div class="panel-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>
                                <strong>{{ $error }}</strong>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form-horizontal m-t-20" action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control input-lg" name="email" type="text" placeholder="Username">
                        @error('email')
                        <label id="cname-error" class="error" for="cname">This field is required.</label>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control input-lg" name="password" type="password" placeholder="Password">
                        @error('password')
                            <label id="cname-error" class="error" for="cname">This field is required.</label>
                        @enderror
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">Remember me</label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
                <div class="form-group m-t-30">
                    <div class="col-sm-7">
                        <a href=""><i class="fa fa-lock m-r-5"></i>Forgot your password?</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>


<script>
    var resizefunc = [];
</script>
<script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/waves.js') }}"></script>
<script src="{{ asset('assets/backend/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/backend/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('assets/backend/assets/jquery-detectmobile/detect.js') }}"></script>
<script src="{{ asset('assets/backend/assets/fastclick/fastclick.js') }}"></script>
<script src="{{ asset('assets/backend/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/backend/assets/jquery-blockui/jquery.blockUI.js') }}"></script>


<!-- CUSTOM JS -->
<script src="{{ asset('assets/backend/js/jquery.app.js') }}"></script>

</body>
</html>
