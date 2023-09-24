<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{$data['title']}}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/ico" href="{{URL::asset('assets/favicon.ico')}}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    {!! Html::style('assets/plugins/bootstrap/css/bootstrap.css') !!}
    <!-- Waves Effect Css -->
    {!! Html::style('assets/plugins/node-waves/waves.css') !!}
    <!-- Animation Css -->
    {!! Html::style('assets/plugins/animate-css/animate.css') !!}
    <!-- Morris Chart Css-->
    {!! Html::style('assets/plugins/morrisjs/morris.css') !!}
    <!-- Custom Css -->
    {!! Html::style('assets/css/style.css') !!}
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    {!! Html::style('assets/css/themes/all-themes.css') !!}
</head>

<body class="theme-black">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
  
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">My Profile</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                   
                </ul>
            </div>
        </div>
    </nav>
   

    

     <!-- Jquery Core Js -->
     {!! Html::script('assets/plugins/jquery/jquery.min.js') !!}
    <!-- Bootstrap Core Js -->
    {!! Html::script('assets/plugins/bootstrap/js/bootstrap.js') !!}
    <!-- Select Plugin Js -->
    {!! Html::script('assets/plugins/bootstrap-select/js/bootstrap-select.js') !!}
    <!-- Slimscroll Plugin Js -->
    {!! Html::script('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') !!}
    <!-- Waves Effect Plugin Js -->
    {!! Html::script('assets/plugins/node-waves/waves.js') !!}
    <!-- Jquery CountTo Plugin Js -->
    {!! Html::script('assets/plugins/jquery-countto/jquery.countTo.js') !!}
    <!-- Morris Plugin Js -->
    {!! Html::script('assets/plugins/raphael/raphael.min.js') !!}
    {!! Html::script('assets/plugins/morrisjs/morris.js') !!}
    <!-- ChartJs -->
    {!! Html::script('assets/plugins/chartjs/Chart.bundle.js') !!}
    <!-- Flot Charts Plugin Js -->
    {!! Html::script('assets/plugins/flot-charts/jquery.flot.js') !!}
    {!! Html::script('assets/plugins/flot-charts/jquery.flot.resize.js') !!}
    {!! Html::script('assets/plugins/flot-charts/jquery.flot.pie.js') !!}
    {!! Html::script('assets/plugins/flot-charts/jquery.flot.categories.js') !!}
    {!! Html::script('assets/plugins/flot-charts/jquery.flot.time.js') !!}

    <!-- Sparkline Chart Plugin Js -->
    {!! Html::script('assets/plugins/jquery-sparkline/jquery.sparkline.js') !!}

    <!-- Custom Js -->
    {!! Html::script('assets/js/admin.js') !!}
    {!! Html::script('assets/js/pages/index.js') !!}

    <!-- Demo Js -->
    {!! Html::script('assets/js/demo.js') !!}
</body>

</html>