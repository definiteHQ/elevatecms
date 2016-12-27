<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('dashboard/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Elevate CMS</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }} " rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="{{ asset('dashboard/css/light-bootstrap-dashboard.css') }} " rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('dashboard/css/demo.css') }} " rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('dashboard/css/pe-icon-7-stroke.css') }} " rel="stylesheet" />

</head>
<body>

<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../dashboard.html">Light Bootstrap Dashboard PRO</a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li>
                   <a href="register.html">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="orange" data-image="{{ asset('dashboard/img/full-screen-image-1.jpg') }}">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        {{-- <form method="#" action="#"> --}}
                        {{-- @if(!$errors->isEmpty()) --}}
                        {{-- @endif --}}
                        {!! Form::open([
                        ]) !!}

                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card card-hidden">
                                <div class="header text-center">Login</div>
                                <div class="content">
                                    @if(!$errors->isEmpty())
                                        {{-- {{ dd($errors->getMessages()) }} --}}
                                        {!! error_widget($errors->getMessages()) !!}

                                    @endif

                                    <div class="form-group">
                                        <label>Email address</label>
                                        {{-- <input type="email" placeholder="Enter email" class="form-control"> --}}
                                        {!! Form::email('email', null, [
                                            'placeholder' => 'Enter email',
                                            'class' => 'form-control'
                                        ]) !!}
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        {{-- <input type="password" placeholder="Password" class="form-control"> --}}
                                        {!! Form::password('password', [
                                            'class' => 'form-control'
                                        ]) !!}
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="checkbox">
                                            <input type="checkbox" data-toggle="checkbox" value="">
                                            Subscribe to newsletter
                                        </label>
                                    </div> --}}
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-warning btn-wd">Login</button>
                                </div>
                            </div>

                        {{-- </form> --}}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

        <footer class="footer footer-transparent">
            <div class="container">
                <p class="copyright pull-right">
                    &copy; {{ Date('Y') }} <a href="http://www.definite.co.id">Definite Maji Arsana</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>

</div>



<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title">Background Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <div class="switch"
                        data-on-label="ON"
                        data-off-label="OFF">
                        <input type="checkbox" checked/>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('dashboard/img/full-screen-image-1.jpg') }}">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('dashboard/img/full-screen-image-2.jpg') }}">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('dashboard/img/full-screen-image-3.jpg') }}">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('dashboard/img/full-screen-image-4.jpg') }}">
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block">Get Free Demo</a>
                </div>
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-info btn-block btn-fill">Buy Now!</a>
                </div>
            </li>

            <li class="header-title">Thank you for 452 shares!</li>

            <li class="button-container">
                <button id="twitter" class="btn btn-social btn-twitter btn-round"><i class="fa fa-twitter"></i> &middot; 182</button>
                <button id="facebook" class="btn btn-social btn-facebook btn-round"><i class="fa fa-facebook-square"> &middot; 270</i></button>
            </li>

        </ul>
    </div>
</div>

</body>

      <!-- Core JS Files and PerfectScrollbar library inside jquery.ui   -->
    <script src="{{ asset('dashboard/js/jquery.min.js') }} " type="text/javascript"></script>
    <script src="{{ asset('dashboard/js/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}" type="text/javascript"></script>


    <!--  Forms Validations Plugin -->
    <script src="{{ asset('dashboard/js/jquery.validate.min.js') }} "></script>

    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{ asset('dashboard/js/moment.min.js') }} "></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="{{ asset('dashboard/js/bootstrap-datetimepicker.js') }} "></script>

    <!--  Select Picker Plugin -->
    <script src="{{ asset('dashboard/js/bootstrap-selectpicker.js') }} "></script>

    <!--  Checkbox, Radio, Switch and Tags Input Plugins -->
    <script src="{{ asset('dashboard/js/bootstrap-checkbox-radio-switch-tags.js') }} "></script>

    <!--  Charts Plugin -->
    <script src="{{ asset('dashboard/js/chartist.min.js') }} "></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('dashboard/js/bootstrap-notify.js') }} "></script>

    <!-- Sweet Alert 2 plugin -->
    <script src="{{ asset('dashboard/js/sweetalert2.js') }} "></script>

    <!-- Vector Map plugin -->
    <script src="{{ asset('dashboard/js/jquery-jvectormap.js') }} "></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Wizard Plugin    -->
    <script src="{{ asset('dashboard/js/jquery.bootstrap.wizard.min.js') }} "></script>

    <!--  Datatable Plugin    -->
    <script src="{{ asset('dashboard/js/bootstrap-table.js') }} "></script>

    <!--  Full Calendar Plugin    -->
    <script src="{{ asset('dashboard/js/fullcalendar.min.js') }} "></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
    <script src="{{ asset('dashboard/js/light-bootstrap-dashboard.js') }} "></script>

    <!--   Sharrre Library    -->
    <script src="{{ asset('dashboard/js/jquery.sharrre.js') }} "></script>

    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('dashboard/js/demo.js') }} "></script>

    <script type="text/javascript">
        $().ready(function(){
            lbd.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
</html>