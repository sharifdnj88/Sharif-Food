@extends('frontend.layouts.app')

@section('frontend-main')
   @include('frontend.layouts.header')

  
	<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="{{route('home.page')}}">Home</a></li>
				<li><a href="{{route('location.page')}}">Location</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				@php
					$location = App\Models\Location::latest() -> take(1) -> get();
				@endphp
				@foreach ($location as $item)
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<h3>Address</h3>
								<p>{{ $item -> address }}</p><br/>
								<h3>Hours Of Operation</h3>
								<p><span>MONDAY-FRIDAY: </span>8am-6pm</p>
								<p><span>SATURDAY-SUNDAY: </span>8am-10pm</p><br/>
								<h3>Contact Info</h3>
								<p><span>EMAIL ADDRESS: </span>{{ $item -> email }}</p>
								<p><span>Mobile Number: </span>{{ $item -> cell }}</p>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<div class="wrap-map"><iframe src="{{ $item -> link }}" width="100%" height="380" frameborder="0" style="border:0"></iframe></div>
							</div>
						</div>
					</div>
				@endforeach				

			</div>
		</div> 
	</div>
</section>
   
   
 
@include('frontend.layouts.footer')
@endsection