@extends('layouts.base')
@section('title', "My Profile")
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <hr>
                <!--<img src="{{asset('storage/profile_pics/'.$user->profile->profile_pic)}}" style="border-radius: 20px;" class=" w-100 img-thumbnail img-responsive">-->
                <hr>
                <a href="{{route('change-password')}}" class="btn btn-outline-info btn-block">Change Password</a>
                <hr>         
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <p class="text-center"><b>My Profile</b></p>
                    </div>
                    <div class="card-body">
                        @include('partials.partials')
                        <div class="container">
                            <p class="text-center"><b>Personal Information</b></p>
                            <div class="d-flex justify-content-between">
                                <span>First Name: {{$user->profile->first_name}}</span>
                                <span>Middle Name: {{$user->profile->middle_name}}</span>
                                <span>Last Name: {{$user->profile->last_name}}</span>                                       
                                <span>Date of Bith: {{$user->profile->dob}}</span>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                                <span>Address: {{$user->profile->address}}</span>
                                <span>Phone Number: {{$user->profile->phone}}</span>
                            </div>
                            <hr>
                            <p class="text-center"><b>Account Information</b></p>
                            <div class="d-flex justify-content-between">
                                <span>Username: {{$user->username}}</span>
                                <span>Email: {{$user->email}}</span>
                                @if($user->role->name=="student")
                                    <span>Matric Number: {{$user->profile->mat_no}}</span>   
                                    <span>Level: {{$user->profile->level}}</span>
                                    @elseif($user->role->name=="staff")
                                    <span>Employee Number: {{$user->profile->employment_no}}</span>
                                @endif
                            </div>
                        </div> 
                    </div>
                    <div class="card-footer">
                        <div class="row justify-content-center">
                            <a class="btn btn-info" href="{{route('edit-profile')}}">Edit Profile</a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>

    </div>
@endsection