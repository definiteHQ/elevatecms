<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>EU-ASEAN Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>

<style>
    body {
        background: #f4f3ef;
    }

    .col-md-4 {
            position: absolute;
            top: 50%;
            left: 50%;
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
    }
</style>

<body>


<div class="wrapper">
    <div class="col-md-4" style="float:none;margin: auto;">
        <form class="card card-user" action="index.php">
            <div class="content" style="padding:20px 40px;">
                <h3  class="text-center">Login</h3>
                <div class="form-group">
                    <input type="email" class="form-control border-input" placeholder="Email" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control border-input" placeholder="Password" required>
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-fill btn-wd">Login</button>
                    </div>
                </div>
            </div>
        </form>

         <div class="alert alert-danger">
            <button type="button" aria-hidden="true" class="close">×</button>
            <span>Wrong Credentials</span>
        </div> 
    </div>
</div>

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

</html>