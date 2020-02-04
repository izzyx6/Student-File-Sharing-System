@extends('layouts.base')
@section('title', "Admin Dashboard")
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-9">                
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between ">
                            <h3>Admin Dashboard</h3>
                            <ul class="nav card-header-tabs nav-tabs justify-content-end">
                              <!--  <li class="nav-item">
                                    <a href="{{route('dashboard')}}" class="nav-link">Site Info</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="{{route('staffs')}}" class="nav-link btn-dark">View Staffs </a>
                                </li>-->
                                <li class="nav-item">
                                    <a href="{{route('students')}}" class="nav-link btn-dark"> View Students</a>
                                </li>
                            
                            </ul>                            
                        </div>
                        
                       
                    </div>
                    <div class="card-body">
                        @include('partials.partials')
                        @if (request()->segment(2)=='students')
                            @include('dashboard.students')
                            @elseif(request()->segment(2)=='staffs')
                            @include('dashboard.staff')
                        @else
                            @include('dashboard.dashboard')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection