@extends('frontend.layouts.app')

@section('frontend-main')
   @include('frontend.layouts.header')
   @php
		$location = App\Models\Location::latest() -> take(1) -> get();
	@endphp

    <!--////////////////////////////////////Container-->
    <section id="container" class="sub-page">
        <div class="wrap-container zerogrid">
            <div class="crumbs">
                <ul>
                    <li><a href="{{route('home.page')}}">Home</a></li>
                    <li><a href="{{route('reservation.page')}}">Reservation</a></li>
                </ul>
            </div>
            <div id="main-content">
                <div class="wrap-content">
                    <div class="row">
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <h3>Complete the Submission Form</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p><br/>
                                @foreach ($location as $item)
                                    <h3>Or Just Make a Call</h3>
                                    <p>Mobile: {{$item -> cell}}</p>
                                    <p>E-mail: {{$item -> email}}</p>
                                    <br>
                                    <h3>Address</h3>
                                    <p>{{$item -> address}}</p>
                                @endforeach                                
                            </div>
                        </div>
                        <div class="col-2-3">
                            <div class="wrap-col">
                                <div class="contact">
                                    <div id="contact_form">
                                        @if( Session::has('success') )
                                            <p class="alert alert-success" id="close-reser" style="font-weight: bold;text-align:center">{{ Session::get('success') }}<button class="close" id="reser-close" data-dismiss="alert" style="margin-left:5px;background-color:green;color:white;outline:none;border: none;border-radius:5px;cursor: pointer;"> &times; </button></p>
                                        @endif
                                        <form action="{{route('food-reservation.store')}}" name="contact" id="contact" method="POST">
                                            @csrf
                                            <label class="row">
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="text" name="name"  id="name" placeholder="Enter name" required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <div class="wrap-col">
                                                        <input type="email" name="email" id="email" placeholder="Enter email" required="required" />
                                                    </div>
                                                </div>
                                            </label>
                                            <label class="row">
                                                <div class="col-2-4">
                                                    <div class="wrap-col">
                                                    <input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-1-4">
                                                    <div class="wrap-col">
                                                    <input type="date"  name="date" id="date" placeholder="Date"/>
                                                    </div>
                                                </div>
                                                <div class="col-1-4">
                                                    <div class="wrap-col">
                                                    <input type="time"  name="time" id="time" placeholder="Time"/>
                                                    </div>
                                                </div>											
                                            </label>
                                            <label class="row">
                                                <div class="wrap-col">
                                                    <textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
                                                    placeholder="Message"></textarea>
                                                </div>
                                            </label>
                                            <center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>

   
 
    @include('frontend.layouts.footer')
@endsection