@extends('frontend.layouts.app')

@section('frontend-main')
   @include('frontend.layouts.header')

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="{{route('home.page')}}">Home</a></li>
				<li><a href="{{route('menu.page')}}">Menu</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">

				@php
					$allfood = App\Models\Allfood::latest() -> get();
				@endphp

				<div class="row">

					@foreach ($allfood as $item)
					<div class="col-1-3">
						<div class="wrap-col">
							<h3> @foreach (json_decode( $item -> foodtypes ) as $cat)
								{{ $cat }}
							@endforeach </h3>
							<div class="post">
								<a href="#"><img class="food-image" src="{{ url('storage/allfoods/' .$item -> photo ) }}"/></a>
								<div class="wrapper">
								  <h5><a href="#">{{ $item -> name }}</a></h5>
								  <span>{{ $item -> price }} tk </span>
								</div>
							</div>							
						</div>
					</div>
					@endforeach
					

				</div>

				

			</div>
		</div> 
	</div>
</section>
   
@include('frontend.layouts.footer')
@endsection