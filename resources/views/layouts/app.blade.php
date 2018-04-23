<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>DDNA - Gestión Empleados </title>
    <!-- Favicon-->
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ asset('resources/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet"></link>
    

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('resources/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet"></link>
    <link href="{{ asset('resources/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet"></link>


    <!-- Waves Effect Css -->
    <link href="{{ asset('resources/plugins/node-waves/waves.css')}}" rel="stylesheet"></link>


    <!-- Animation Css -->
    <link href="{{ asset('resources/plugins/animate-css/animate.css')}}" rel="stylesheet"></link>

    
 
    <!-- Morris Chart Css-->
    <link href="{{ asset('resources/plugins/morrisjs/morris.css')}}" rel="stylesheet"></link>


    <!-- Custom Css -->
    <link href="{{ asset('resources/css/style.css')}}" rel="stylesheet"></link>

 

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('resources/css/themes/theme-light-blue.css')}}" rel="stylesheet"></link>

</head>

<body class="login-page">
 
   
    <!-- #Top Bar -->
 
  
          

            @yield('content')
                <!-- #END# Browser Usage -->
         
    

    <!-- Jquery Core Js -->
    <script src="{{ asset('resources/plugins/jquery/jquery.min.js')}}" ></script>


    <!-- Bootstrap Core Js -->
    <script src="{{ asset('resources/plugins/bootstrap/js/bootstrap.js')}}" ></script>


    <!-- Select Plugin Js -->
    <script src="{{ asset('resources/plugins/bootstrap-select/js/bootstrap-select.js')}}" ></script>


    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('resources/plugins/jquery-slimscroll/jquery.slimscroll.js')}}" ></script>


    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('resources/plugins/node-waves/waves.js')}}" ></script>

    <!-- Autorsize Plugin Js -->

    <script src="{{ asset('resources/plugins/autosize/autosize.js')}}" ></script>

    <!-- Jquery CountTo Plugin Js -->

        <script src="{{ asset('resources/plugins/jquery-countto/jquery.countTo.js')}}" ></script>




    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('resources/plugins/jquery-sparkline/jquery.sparkline.js')}}" ></script>





    <!-- Demo Js -->

            <script src="{{ asset('resources/js/demo.js')}}" ></script>
            <script src="{{ asset('resources/js/pages/forms/basic-form-elements.js')}}" ></script>


            <script src="{{ asset('resources/plugins/momentjs/moment.js')}}"></script>

            <script src="{{ asset('resources/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
            <script src="{{ asset('resources/js/admin.js')}}" ></script>

</body>

</html>