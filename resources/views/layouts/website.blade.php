 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mini Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <script src="{{ asset('website')}}/js/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="{{ asset('website')}}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{ asset('website')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('website')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('website')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('website')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('website')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('website')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('website')}}/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{ asset('website')}}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('website')}}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('website')}}/css/dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('website')}}/css/sweet-alert.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('website') }}/plugins/summernote/summernote.css" />


    <!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('backend/assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('backend/assets/css/minified/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('backend/assets/css/minified/core.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('backend/assets/css/minified/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('backend/assets/css/minified/colors.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/practiceTime.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/summernote/summernote.css') }}" rel="stylesheet" type="text/css"/>
    <!-- /filePond stylesheets --> 
    <link href="{{ asset('web/filepond/filepond.css') }}" rel="stylesheet" type="text/css"/>
    
    <!-- Rang Slider stylesheets --> 
    <link href="{{ asset('web/rangSlider/rangSlider.css') }}" rel="stylesheet" type="text/css"/>

    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-12 search-form-wrap js-search-form">
            <form method="get" action="#">
              <input type="text" id="s" class="form-control" placeholder="Search...">
              <button class="search-btn" type="submit"><span class="icon-search"></span></button>
            </form>
          </div>

          <div class="col-4 site-logo">
            <a href="{{url('/home')}}" class="text-black h2 mb-0">Mini Blog</a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                <li><a href="{{ url('/')}}">Home</a></li>
                {{-- <li><a href="{{ url('/category')}}">Category</a></li> --}}
                <li><a href="{{ url('/about')}}">About Us</a></li>

                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @if(Auth::guard('web')->check())
                             <a class="dropdown-item" href="{{ url('userProfile') }}">Dashboard</a>
                             <a class="dropdown-item" href="{{ url('/classExamRunning')}}">Exam</a>
                            @endif
                        </div>
                    </li>
                @endguest
          
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>
    
    
    @yield('content')
    
    
    <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
          </div>
          <div class="col-md-4">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled float-left mr-5">
              <li><a href="{{ url('/about')}}">About Us</a></li>
              <li><a href="{{ url('/category')}}">Category</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <div>
              <h3 class="footer-heading mb-4">Connect With Us</h3>
              <p>
                <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                <a href="#"><span class="icon-twitter p-2"></span></a>
                <a href="#"><span class="icon-instagram p-2"></span></a>
                <a href="#"><span class="icon-rss p-2"></span></a>
                <a href="#"><span class="icon-envelope p-2"></span></a>
              </p>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
        </div>
      </div>
    </div>
    
  </div>


  <script src="{{ asset('website')}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ asset('website')}}/js/jquery-ui.js"></script>
  <script src="{{ asset('website')}}/js/popper.min.js"></script>
  <script src="{{ asset('website')}}/js/bootstrap.min.js"></script>
  <script src="{{ asset('website')}}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('website')}}/js/jquery.stellar.min.js"></script>
  <script src="{{ asset('website')}}/js/jquery.countdown.min.js"></script>
  <script src="{{ asset('website')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('website')}}/js/bootstrap-datepicker.min.js"></script>
  <script src="{{ asset('website')}}/js/aos.js"></script>

  <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript" src="{{ asset('website')}}/js/select2.min.js"></script>
  <script type="text/javascript" src="{{ asset('website')}}/js/bootbox.js"></script>
  <script type="text/javascript" src="{{ asset('website')}}/js/bootbox.locales.min.js"></script>
  <script type="text/javascript" src="{{ asset('website')}}/js/custom_frame.js"></script>
  <script src="{{ asset('website')}}/js/sweetAlert/sweet-alert.js"></script>
  <script src="{{ asset('website')}}/js/sweetAlert/sweet-alert.min.js"></script>
  <script src="{{ asset('website')}}/js/main.js"></script>
  <script src="{{ asset('website')}}/plugins/summernote/summernote.min.js"></script>


  
	<!-- Core JS files -->
	<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/loaders/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backend/assets/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backend/assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/bootbox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/bootbox.locales.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/summernote/summernote.min.js') }}"></script>
    
    <!-- Stricky Class menu scrollbar -->
    @if (request()->is('class'))
    <script type="text/javascript" src="{{ asset('backend/assets/js/plugins/ui/nicescroll.min.js') }}"></script>
    @endif
    <!-- Horizontal Navbar JS files -->
	<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/ui/drilldown.js') }}"></script>
    
    
    <!-- Sweet Alert JS files -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/plugins/notifications/sweet_alert.min.js') }}"></script>

    <!-- Form JS files -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/plugins/forms/validation/validate.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/plugins/forms/inputs/touchspin.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backend/assets/js/core/libraries/jquery_ui/interactions.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/plugins/forms/styling/switch.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <!-- Form JS files -->
    
    <!-- Dashboard JS files -->
    {{-- <script type="text/javascript" src="{{ asset('backend/assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/pickers/daterangepicker.js') }}"></script> --}}
    <!-- Dashboard JS files -->

    <!-- Uploader JS files -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/plugins/uploaders/fileinput.min.js') }}"></script>

    @if (!request()->is('changeProfile'))
    <!-- Chart JS files -->
	{{-- <script type="text/javascript" src="{{ asset('backend/assets/js/plugins/visualization/echarts/echarts.js') }}"></script> --}}
    @endif
	
    <script type="text/javascript" src="{{ asset('backend/assets/js/core/app.js') }}"></script>
	{{-- <script type="text/javascript" src="{{ asset('backend/assets/js/pages/dashboard.js') }}"></script> --}}
    
    <!-- Datatable JS files -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/pages/datatables_advanced.js') }}"></script>

    <!-- Form Validation JS files -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/pages/form_validation.js') }}"></script>

    <!-- Select2 JS files -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/pages/form_select2.js') }}"></script>

    <!-- Uploader JS files -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/pages/uploader_bootstrap.js') }}"></script>
    
    <!-- Stricky Class menu scrollbar -->
    @if (request()->is('class'))
	<script type="text/javascript" src="{{ asset('backend/assets/js/sticky/sidebar_detached_sticky_custom.js') }}"></script>
    @endif
    <!-- /Filepond JS files -->
    <script type="text/javascript" src="{{ asset('web/filepond/filepond.js') }}"></script>
    
    <!-- /Filepond JS files -->
    <script src="{{ asset('web/rangSlider/prefixfree.min.js') }}"></script>
    <script src="{{ asset('web/rangSlider/rangeslider.min.js') }}"></script>
    <script src="{{ asset('web/rangSlider/underscore-min.js') }}"></script>

    <!-- /Custom JS files -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/custom_frame.js') }}"></script>    

  <!-- Per Page JS files -->
  @stack('javascript')
  <!-- /Per Page JS files -->


  </body>
</html>