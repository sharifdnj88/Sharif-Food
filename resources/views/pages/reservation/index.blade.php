@extends('admin.layouts.app')

@section('main')

    <!-- Main Wrapper -->
<div class="main-wrapper">
		
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
            
    <!-- Page Wrapper -->
    <div class="page-wrapper">
    
        <div class="content container-fluid">
            
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome {{ Auth::guard('admin') -> User() -> name }}</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius:20px">
                       
                        @forelse ($reservation as $item)
                            <div class="card-body shadow" style="border-radius:20px">
                                <h3 class="text-center">Reservation Message <i class="fa fa-arrow-circle-o-right fa-spin text-info" style="font-size: 20px"></i> {{ $loop -> index + 1 }}</h3>
                                @include('validate')
                                <hr>
                                <p class="font-weight-bold mb-1">Name: {{ $item -> name }}</p>
                                <p class="font-weight-bold mb-1">Email: {{ $item -> email }}</p>
                                <p class="font-weight-bold mb-1">Subject: {{ $item -> subject }}</p>
                                <p class="font-weight-bold mb-1">Date: {{ date('F d, Y', strtotime( $item -> date ) ) }}</p>
                                <p class="font-weight-bold mb-1">Time: {{ $item -> time }}</p>
                                <p class="font-weight-bold mb-1"> <span style=" text-decoration: underline;color:red">Message:</span>  {{ $item -> message }}</p>
                                <p class="text-danger">{{ $item -> created_at ->diffForHumans() }}</p>
                                
                                <div class="my-3 d-flex">                                    
                                    {{-- Update or Cancel Reservation --}}
                                        @if ($item->type=='Pending')
                                        <span class="badge badge-warning ml-2 shadow" style="line-height:23px">Pending</span>        
                                        @elseif ($item->type=='Reserved')
                                        <span class="badge badge-success ml-2 shadow" style="line-height:23px">Reserved</span>
                                        @else
                                        <span class="badge badge-danger ml-2 shadow" style="line-height:23px">Canceled</span>
                                        @endif                                        
                                        <a class="btn btn-sm btn-success ml-2 shadow" href="{{ route('reserve.update', $item->id) }}"><i
                                            class="fa fa-check"></i></a>
                                        <a class="btn btn-sm btn-danger  ml-2 shadow" href="{{ route('cancel.update', $item->id) }}"><i
                                            class="fa fa-times"></i></a>

                                        {{-- Delete Reservation Message --}}                                        
                                            <a href="{{route('reservation.delete', $item -> id)}}" class="btn btn-sm btn-danger delete-btn shadow ml-2"  type="submit"><i class="fa fa-trash" ></i></a>
                                        
                                
                                </div>
                                    
                             </div>
                            <br>
                        @empty
                            <p class="text-center text-danger my-3 font-weight-bold">No Reservation message found</p>
                        
                        @endforelse               

                    </div>
                </div>
            </div>
            
        </div>			
    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

@endsection