<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>EU-ASEAN Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('dashboard/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('dashboard/css/paper-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('dahsboard/css/demo.css') }}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('dashboard/css/themify-icons.css') }}" rel="stylesheet">


    <!-- Data Tables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

    <style>
       #myTable_length,
       #myTable_info {
            padding-left: 20px;
            margin-bottom: 15px;
        }

        #myTable_filter,
        #myTable_paginate {
            padding-right: 20px;
            margin-bottom: 15px;
        }

        #myTable {
            margin-bottom: 15px;
            border-bottom: 1px solid #CCC5B9;
        }

        table.dataTable thead th, table.dataTable thead td {
            border-bottom: 1px solid #CCC5B9;
        }

        .dataTables_wrapper .dataTables_filter input {
            margin-left: 0.5em;
            background-color: #fdfdfd;
            border: medium none;
            border-radius: 4px;
            color: #66615b;
            font-size: 14px;
            transition: background-color 0.3s ease 0s;
            padding: 7px 18px;
            height: 40px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid #CCC5B9;
        }
    </style>
    @yield('styles')
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="info">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/" class="simple-text">
                    EU-ASEAN
                </a>
            </div>

            <ul class="nav">
                <li class="{{ Route::getCurrentRoute()->getName() == 'dashboard.index' ? 'active' : '' }}">
                    <a href="{{ route('dashboard.index') }}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{ Route::getCurrentRoute()->getName() == 'registrants.index' ? 'active' : '' }}">
                    <a href="{{ route('registrants.index') }}">
                        <i class="ti-user"></i>
                        <p>All Registrant</p>
                    </a>
                </li>
                <li class="{{ Route::getCurrentRoute()->getName() == 'registrants.pending' ? 'active' : '' }}">
                    <a href="{{ route('registrants.pending') }}">
                        <i class="ti-shield"></i>
                        <p>Pending Registrants</p>
                    </a>
                </li>
                 <li class="{{ Route::getCurrentRoute()->getName() == 'registrants.approved' ? 'active' : '' }}">
                    <a href="{{ route('registrants.approved') }}">
                        <i class="ti-check-box"></i>
                        <p>Approved Registrants</p>
                    </a>
                </li>
                <li class="{{ Route::getCurrentRoute()->getName() == 'registrants.winner' ? 'active' : '' }}">
                    <a href="{{ route('registrants.winner') }}">
                        <i class="ti-cup"></i>
                        <p>Winner List</p>
                    </a>
                </li>
                <li>
                    <a class="logout" href="javascript:;">
                        <i class="ti-power-off"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<p>Hello Administrator</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li>
                                    <a class="logout" href="javascript:;">Logout</a>
                                </li>
                              </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        @yield('content')



        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="https://edelman.id">Edelman</a>
                </div>
            </div>
        </footer>

    </div>
</div>

{{ Form::open([
    'class' => 'hidden',
    'url' => route('logout'),
    'id' => 'form-logout'
]) }}

{{ Form::close() }}

</body>
    <script>
        var baseUrl = '{{ env('BASE_URL','http://eu-asean.dev') }}';
        var apiUrl = baseUrl + '/api';
        var backendUrl = baseUrl + '/backend';
    </script>
    <!--   Core JS Files   -->
    <script src="{{ asset('dashboard/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
	<script src="{{ asset('dashboard/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{ asset('dashboard/js/bootstrap-checkbox-radio.js') }}"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('dashboard/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('dashboard/js/bootstrap-notify.js') }}"></script>

    <!-- Data Tables -->
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{ asset('dashboard/js/paper-dashboard.js') }}"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{ asset('dashboard/js/demo.js') }}"></script>

    <script>

        $(document).ready(function(){
            $('#myTable').DataTable();
        });

        $('a.logout').on('click', function () {
            $('#form-logout').submit();
            // $.ajax({
            //     url: baseUrl + '/logout',
            //     method: 'post',
            //     success: function () {
            //         window.location.reload();
            //     }
            // });
        });

    </script>

    @yield('scripts')

</html>
