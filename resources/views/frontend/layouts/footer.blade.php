<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Customer Testimonials</h4>
					<div class="row">
						<img src="frontend/images/a-1.jpg">
						<h5>Nick Roach</h5>
						<p>Pellentesque elementum leo et justo dapibus convalli. In justo nibh, congue nec dapibus ac, placerat eget sem. Nunc consequat felis non elit ultricies in varius massa laoreet. Aenean lectus nisl, ellentesque in fermentum sit amet, convallis a lorem condimentum mollis. Aenean lectus nisl, ellentesque in fermentum sit amet.</p>
					</div>
				</div>
			</div>
			@php
					$location = App\Models\Location::latest() -> take(1) -> get();
				@endphp
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Location</h4>
					@foreach ($location as $item)
					<div class="wrap-map"><iframe src="{{ $item -> link }}" width="100%" height="200" frameborder="0" style="border:0"></iframe></div>
						
					@endforeach
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Open Daily</h4>
					<p><span>mon.</span> 17:00 - 21:00</p>
					<p><span>tue.-wed.</span> 16:30 – 21:00</p>
					<p><span>thu.-sat.</span> 16:30 – 21:00</p>
					<p><span>sun.</span> 11:00 – 21:00</p>
					<p><span>Need help getting home?</span></br>
					We will call a cab for you!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
			Copyright 2022 - Designed by <a href="https://www.meditech.khalifashopbd.com">Sharif</a>
			<ul class="quick-link f-right">
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Use</a></li>
			</ul>
		</div>
	</div>
</footer>