<!-----------------content-box-2-------------------->
<section class="content-box box-2">
    <div class="zerogrid">
        <div class="row wrap-box"><!--Start Box-->
            <div class="header">
                <h2>Welcome</h2>
                <hr class="line">
                <span>text text text text text</span>
            </div>
            <div class="row">

                @php
                    $foodmenu = App\Models\Foodmenu::where('status', true) -> take(3) -> get();
                @endphp

                @foreach ($foodmenu as $item)
                    <div class="col-1-3">
                        <div class="wrap-col">
                            <div class="box-item">
                                <span class="ribbon">{{ $item -> title }}<b></b></span>
                                <img class="comet-image" src="{{ url('storage/foods/' .$item -> photo ) }}" alt="">
                                <p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
                                <a href="#" class="button button-1">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach                

                
            </div>
            <div class="row">
                <div class="col-1-3">
                    <div class="wrap-col">
                        <div class="box-item">
                            <span class="ribbon">Chef<b></b></span>
                            <img src="frontend/images/chef.jpg" alt="">
                            <p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
                            <a href="#" class="button button-1">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="wrap-col">
                        <div class="box-item">
                            <span class="ribbon">Preview<b></b></span>
                            <img src="frontend/images/preview.jpg" alt="">
                            <p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
                            <a href="#" class="button button-1">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="wrap-col">
                        <div class="box-item">
                            <span class="ribbon">Text Heading<b></b></span>
                            <img src="frontend/images/reservation.jpg" alt="">
                            <p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
                            <a href="#" class="button button-1">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>