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
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Food Location</h4>
                            <a href="" class="font-weight-bold btn btn-danger">Trash Food Location <i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="card-body">
                            @include('main-validate')
                            <div class="table-responsive">
                                <table class="table mb-0 text-center data-table-said table-bordered table-secondary">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Cell</th>
                                            <th>E-mail</th>
                                            <th>Created-Time</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @forelse ($location as $item)
                                            <tr>
                                                <td>{{ $loop -> index + 1 }}</td>
                                                <td>{{ $item -> cell }}</td>                                                
                                                <td>{{ $item -> email }}</td>                                                
                                                <td>{{ $item -> created_at ->diffForHumans() }}</td>
                                                <td>
                                                    @if( $item -> status )
                                                        <span class="badge badge-success">Published</span>
                                                        <a href="" class="text-danger"><i class="fa fa-times-rectangle-o"></i> </a>
                                                    @else
                                                        <span class="badge badge-danger">Unpublished</span>
                                                        <a href="" class="text-success"><i class="fa fa-check-square-o"></i> </a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('food-category.edit', $item -> id)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit" ></i></a>
                                                    <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash" ></i></a>
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
                {{--  Edit Option --}}
                <div class="col-md-4">

                    {{-- Admin Create Start --}}
                    @if( $form_type == 'create' )
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add new Food-Location</h4>
                        </div>
                        <div class="card-body">
                            @include('validate')
                            <form action="{{route('food-location.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Cell</label>
                                    <input name="cell" type="text" value="{{old('cell')}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input name="email" type="email" value="{{old('email')}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="address" type="text" value="{{old('address')}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Map-Link</label>
                                    <input name="link" type="text" value="{{old('link')}}" class="form-control">
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-danger shadow">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                    {{-- Admin Create End --}}

                    {{--  Admin Edit Start --}}
                    @if( $form_type == 'edit' )
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Food-Menu</h4>
                        </div>
                        <div class="card-body">
                            @include('validate')
                            <form action="{{route('food-location.update', $edit -> id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Cell</label>
                                    <input name="cell" type="text" value="{{old('cell')}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input name="email" type="text" value="{{old('email')}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="address" type="text" value="{{old('address')}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Map-Link</label>
                                    <input name="link" type="text" value="{{old('link')}}" class="form-control">
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-danger shadow">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif           
                     {{--  Admin Edit End --}}         
                </div>
            </div>         
            
        </div>			
    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

@endsection