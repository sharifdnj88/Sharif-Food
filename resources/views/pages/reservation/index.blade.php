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

            {{-- Table Start --}}
                {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Reservation Message</h4>                            
                        </div>
                        <div class="card-body">
                            @include('validate')
                            <div class="table-responsive">
                                <table class="table mb-0 text-center data-table-said table-bordered table-secondary">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Message</th>
                                            <th>Created-Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @forelse ($reserve as $item)
                                            <tr>
                                                <td>{{ $loop -> index + 1 }}</td>
                                                <td>{{ $item -> name }}</td>                                                
                                                <td>{{ $item -> email }}</td>                                                
                                                <td>{{ $item -> subject }}</td>                                                
                                                <td>{{ date('F d, Y', strtotime( $item -> date ) ) }}</td>                                                
                                                <td>{{ $item -> time}}</td>                                                
                                                <td>{{ $item -> message}}</td>                                                
                                                <td>{{ $item -> created_at ->diffForHumans() }}</td>
                                                <td>
                                                    <a href="{{route('food-category.edit', $item -> id)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit" ></i></a>                                                    
                                                    <form action="{{route('food-reservation.destroy', $item -> id)}}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger delete-btn"  type="submit"><i class="fa fa-trash" ></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            
                                        @endforelse
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div> --}}
            {{-- Table End --}}
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius:20px">
                       
                        @forelse ($reserve as $item)
                            <div class="card-body shadow" style="border-radius:20px">
                                <h3 class="text-center">Reservation Message <i class="fa fa-arrow-circle-o-right fa-spin text-info" style="font-size: 20px"></i> {{ $loop -> index + 1 }}</h3>
                                <hr>
                                <p class="font-weight-bold mb-1">Name: {{ $item -> name }}</p>
                                <p class="font-weight-bold mb-1">Email: {{ $item -> email }}</p>
                                <p class="font-weight-bold mb-1">Subject: {{ $item -> subject }}</p>
                                <p class="font-weight-bold mb-1">Date: {{ date('F d, Y', strtotime( $item -> date ) ) }}</p>
                                <p class="font-weight-bold mb-1">Time: {{ $item -> time }}</p>
                                <p class="font-weight-bold mb-1"> <span style=" text-decoration: underline;color:red">Message:</span>  {{ $item -> message }}</p>
                                <p class="text-danger">{{ $item -> created_at ->diffForHumans() }}</p>
                                <form action="{{route('food-reservation.destroy', $item -> id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger delete-btn"  type="submit"><i class="fa fa-trash" ></i></button>
                                </form>
                            </div>
                            <br>
                        @empty
                            <p class="text-center text-danger my-3 font-weight-bold">No message found</p>
                        
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