<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>SharifFood | Best Restaurant</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="{{asset('frontend/css/zerogrid.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/slide.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/menu.css')}}">
	<!-- Custom Fonts -->
    <link href="{{asset('frontend/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	
	{{-- Bootstrap 4 --}}
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
	
    
</head>
<body>
  <div class="wrap-body">



    @section('frontend-main')        
    @show



  	<!-- js -->
	<script src="{{asset('frontend/js/classie.js')}}"></script>
	<script src="{{asset('frontend/js/demo.js')}}"></script>

	<script src="{{asset('frontend/js/jquery-1.11.3.min.js')}}"></script>
	<script src="{{asset('frontend/js/responsiveslides.min.js')}}"></script>

	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

	
	<script>
	$(function () {
	  // Slideshow 4
	  $("#slider4").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });
	});
	</script>
	<script>
		(function($){
			$('#reser-close').click(function(){
				$('#close-reser').hide();
			});
		})(jQuery)
	</script>
</div>
</body></html>