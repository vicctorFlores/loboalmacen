<!--
/**
 * Created by PhpStorm.
 * User: victorflores
 * Date: 19/06/18
 * Time: 15:22
 */-->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <title>{{ config('app.name', 'Laravel') }}</title>

 <!-- Styles -->
 <!-- Bootstrap core CSS     -->
 <link href="{{ asset( 'backend/css/bootstrap.min.css') }}" rel="stylesheet" />
 <!--  Material Dashboard CSS    -->
 <link href="{{asset('backend/css/material-dashboard.css')}}" rel="stylesheet" />
 <!--  CSS for Demo Purpose, don't include it in your project     -->
 <link href="{{asset('backend/css/demo.css')}}" rel="stylesheet" />
 <!--     Fonts and icons     -->
 <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet" />
 <link href="{{asset('backend/css/google-roboto-300-700.css')}}" rel="stylesheet" />
</head>
 @stack('css')
</head>


<body>
<div id="app">
 <div class="wrapper">
    @include('layouts.partial.sidebar')
    <div class="main-panel">
      @include('layouts.partial.topbar')
        @yield('content')
   @include('layouts.partial.footer')
  </div>
 </div>
 <div class="fixed-plugin">
  <div class="dropdown show-dropdown">
   <a href="#" data-toggle="dropdown">
    <i class="fa fa-cog fa-2x"> </i>
   </a>
   <ul class="dropdown-menu">
    <li class="header-title"> Sidebar Filters</li>
    <li class="adjustments-line">
     <a href="javascript:void(0)" class="switch-trigger active-color">
      <div class="badge-colors text-center">
       <span class="badge filter badge-purple" data-color="purple"></span>
       <span class="badge filter badge-blue" data-color="blue"></span>
       <span class="badge filter badge-green" data-color="green"></span>
       <span class="badge filter badge-orange" data-color="orange"></span>
       <span class="badge filter badge-red" data-color="red"></span>
       <span class="badge filter badge-rose active" data-color="rose"></span>
      </div>
      <div class="clearfix"></div>
     </a>
    </li>
    <li class="header-title">Sidebar Background</li>
    <li class="adjustments-line">
     <a href="javascript:void(0)" class="switch-trigger background-color">
      <div class="text-center">
       <span class="badge filter badge-white" data-color="white"></span>
       <span class="badge filter badge-black active" data-color="black"></span>
      </div>
      <div class="clearfix"></div>
     </a>
    </li>
    <li class="adjustments-line">
     <a href="javascript:void(0)" class="switch-trigger">
      <p>Sidebar Mini</p>
      <div class="togglebutton switch-sidebar-mini">
       <label>
        <input type="checkbox" unchecked="">
       </label>
      </div>
      <div class="clearfix"></div>
     </a>
    </li>
    <li class="adjustments-line">
     <a href="javascript:void(0)" class="switch-trigger">
      <p>Sidebar Image</p>
      <div class="togglebutton switch-sidebar-image">
       <label>
        <input type="checkbox" checked="">
       </label>
      </div>
      <div class="clearfix"></div>
     </a>
    </li>
    <li class="header-title">Images</li>
    <li class="active">
     <a class="img-holder switch-trigger" href="javascript:void(0)">
      <img src="{{asset('backend/img/sidebar-1.jpg')}}" alt="" />
     </a>
    </li>
    <li>
     <a class="img-holder switch-trigger" href="javascript:void(0)">
      <img src="{{asset('backend/img/sidebar-2.jpg')}}" alt="" />
     </a>
    </li>
    <li>
     <a class="img-holder switch-trigger" href="javascript:void(0)">
      <img src="{{asset('backend/img/sidebar-3.jpg')}}" alt="" />
     </a>
    </li>
    <li>
     <a class="img-holder switch-trigger" href="javascript:void(0)">
      <img src="{{asset('backend/img/sidebar-4.jpg')}}" alt="" />
     </a>
    </li>
    <li class="button-container">
     <div class="">
      <a href="http://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-rose btn-block">Buy Now</a>
     </div>
     <div class="">
      <a href="http://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-info btn-block">Get Free Demo</a>
     </div>
    </li>
    <li class="header-title">Thank you for 95 shares!</li>
    <li class="button-container">
     <button id="twitter" class="btn btn-social btn-twitter btn-round"><i class="fa fa-twitter"></i> &middot; 45</button>
     <button id="facebook" class="btn btn-social btn-facebook btn-round"><i class="fa fa-facebook-square"> &middot;</i>50</button>
    </li>
   </ul>
  </div>
 </div></div>

</body>


<!--   Core JS Files   -->
<script src="{{asset('backend/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('backend/js/jquery.validate.min.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('backend/js/moment.min.js')}}"></script>
<!--  Charts Plugin -->
<script src="{{asset('backend/js/chartist.min.js')}}"></script>
<!--  Plugin for the Wizard -->
<script src="{{asset('backend/js/jquery.bootstrap-wizard.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('backend/js/bootstrap-notify.js')}}"></script>
<!--   Sharrre Library    -->
<script src="{{asset('backend/js/jquery.sharrre.js')}}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{asset('backend/js/bootstrap-datetimepicker.js')}}"></script>
<!-- Vector Map plugin -->
<script src="{{asset('backend/js/jquery-jvectormap.js')}}"></script>
<!-- Sliders Plugin -->
<script src="{{asset('backend/js/nouislider.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<!--<script src="../assets/js/jquery.select-bootstrap.js"></script>-->
<!-- Select Plugin -->
<script src="{{asset('backend/js/jquery.select-bootstrap.js')}}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{asset('backend/js/jquery.datatables.js')}}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{asset('backend/js/sweetalert2.js')}}"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('backend/js/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{asset('backend/js/fullcalendar.min.js')}}"></script>
<!-- TagsInput Plugin -->
<script src="{{asset('backend/js/jquery.tagsinput.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('backend/js/material-dashboard.js')}}"></script>


<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('backend/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>
@stack('scripts')
</html>

