<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="author" name="{{ config('app.name') }}">
    <meta content="keywords" name="{{ config('app.name') }}">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="Corona virus">
    <meta property="og:image" content="{{ asset('assets/frontend/image/home-1-logo.png') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @stack('title') | {{ config('app.name') }}</title>

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('assets/frontend/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/images/favicon.png') }}"/>

    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/fontawesome/css/font-awesome.min.css') }}"/>

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap-select.min.css') }}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/magnific-popup.min.css') }}">

    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/flaticon.min.css') }}">



    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/revolution/revolution/css/navigation.css') }}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!--====== AJAX ======-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @stack('style')
</head>

<body>

<div class="page-wraper">

    <!-- HEADER START -->
    @include('layouts.frontend.includes.header')
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="page-content">

        @yield('content')

    </div>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    @include('layouts.frontend.includes.footer')
    <!-- FOOTER END -->



    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

</div>

<!-- LOADING AREA START ===== -->
@include('layouts.frontend.includes.page-loader')
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="{{ asset('assets/frontend/js/jquery-2.2.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script  src="{{ asset('assets/frontend/js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
<script  src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{ asset('assets/frontend/js/bootstrap-select.min.js') }}"></script><!-- Form js -->
<script  src="{{ asset('assets/frontend/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script  src="{{ asset('assets/frontend/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script  src="{{ asset('assets/frontend/js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
<script  src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script  src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script  src="{{ asset('assets/frontend/js/stellar.min.js') }}"></script><!-- PARALLAX BG IMAGE   -->
<script  src="{{ asset('assets/frontend/js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{ asset('assets/frontend/js/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script  src="{{ asset('assets/frontend/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->

</body>
</html>


{{--<body class="home_page_one">--}}
{{--<div class="page_wapper">--}}
{{--    <!--Start Preloader-->--}}
{{--    @include('layouts.frontend.includes.page-loader')--}}
{{--    <!--End Preloader -->--}}
{{--    <!--Header-->--}}
{{--    @include('layouts.frontend.includes.header')--}}
{{--    <!--Header-->--}}
{{--    <main class="main-content">--}}
{{--        <!------main-content------>--}}
{{--        @yield('content')--}}
{{--        @include('layouts.frontend.includes.footer')--}}
{{--        <!-------------main-centent-end--------------->--}}
{{--    </main>--}}
{{--    <!-------------pagewapper-end--------------->--}}
{{--</div>--}}
{{--<!--Scroll to top-->--}}
{{--<a href="#" id="scroll" class="default-bg" style="display: inline;"><span class="fa fa-angle-up"></span></a>--}}
{{--<!---------mbile-navbar----->--}}
{{--@include('layouts.frontend.includes.mobile-navbar')--}}
{{--<!---------mbile-navbar----->--}}
{{--<!-- /.side-menu__block -->--}}
{{--<!-- /.search-popup -->--}}
{{--@include('layouts.frontend.includes.search-popup')--}}
{{--<!-- /.search-popup -->--}}
{{--<!-----------------------------------script-------------------------------------->--}}
{{--<script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>--}}
{{--<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/frontend/js/bsnav.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/frontend/js/jquery-ui.js') }}"></script>--}}

{{--<script src="{{ asset('assets/frontend/js/owl.js') }}"></script>--}}
{{--<script src="{{ asset('assets/frontend/js/wow.js') }}"></script>--}}
{{--<script src="{{ asset('assets/frontend/js/jquery.fancybox.js') }}"></script>--}}
{{--<script src="{{ asset('assets/frontend/js/TweenMax.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/frontend/js/validator.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/frontend/js/appear.js') }}"></script>--}}
{{--<script src="{{ asset('assets/frontend/js/moment.js') }}"></script>--}}
{{--<script src="{{ asset('assets/frontend/js/jquery.flexslider-min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/frontend/js/pagenav.js') }}"></script>--}}
{{--<script src="{{ asset('assets/frontend/js/custom.js') }}"></script>--}}
{{--<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>--}}
{{--@include('sweetalert::alert')--}}
{{--@stack('script')--}}
{{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}
{{--<script>--}}
{{--    $( function() {--}}
{{--        $( ".doctor-search" ).autocomplete({--}}
{{--            source: function(request, response) {--}}
{{--                console.log(request.term);--}}
{{--                var formData = new FormData();--}}
{{--                formData.append('search_data', request.term)--}}
{{--                $.ajax({--}}
{{--                    method: 'POST',--}}
{{--                    url: "{{ route('getSpecialist') }}",--}}
{{--                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},--}}
{{--                    data: formData,--}}
{{--                    processData: false,--}}
{{--                    contentType: false,--}}
{{--                    success:function(data){--}}
{{--                        var array = $.map(data,function(obj){--}}
{{--                            return{--}}
{{--                                value: obj.name, //Filable in input field--}}
{{--                                label: obj.name,  //Show as label of input field--}}
{{--                            }--}}
{{--                        })--}}
{{--                        response($.ui.autocomplete.filter(array, request.term));--}}
{{--                    },--}}
{{--                })--}}
{{--            },--}}
{{--            minLength: 1,--}}
{{--        });--}}
{{--    } );--}}
{{--</script>--}}
{{--</body>--}}

{{--</html>--}}
