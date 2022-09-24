@extends('frontend.layouts.app')

@section('frontend-main')
   @include('frontend.layouts.header')

   {{-- Slider Start --}}
   @php
	   $slider = App\Models\Slider::where('status', true) -> take(4) -> get();
   @endphp
   <div class="zerogrid">
	<div class="callbacks_container">
	  <ul class="rslides" id="slider4">

		@foreach ($slider as $item)
			<li>
				<img src="{{url('storage/sliders/' .$item -> photo )}}" alt="">
				<div class="caption">
				<h2>{{ $item -> title }}.</h2></br>
				<p>{!! htmlspecialchars_decode( $item -> desc  ) !!}</p>
				</div>
			</li>
		@endforeach		

	  </ul>
	</div>
  </div>
  {{-- Slider End --}}

   <!--////////////////////////////////////Container-->
<section id="container" class="index-page">
	<div class="wrap-container zerogrid">
		<!-----------------content-box-1-------------------->
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="row box-item"><!--Start Box-->
					<h2>“Your awesome company slogan goes here, we have the best food around”</h2>
					<span>Unc elementum lacus in gravida pellentesque urna dolor eleifend felis eleifend</span>
				</div>
			</div>
		</section>
		@include('frontend.sections.home.foodmenu')		
	</div>
</section>
   
@include('frontend.layouts.footer')
@endsection