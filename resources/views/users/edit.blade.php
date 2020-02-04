@extends('layouts.base')
@section('title', "Edit Profile")
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <p class="text-center"><b>Profile Update</b></p>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            @include('partials.partials')
                            <form enctype="multipart/form-data" method="post" action="{{route('update-profile')}}">
                                @csrf @method('post')
                                @if(auth()->user()->profile()->exists())
                                    @include('users.edit-profile.yes-profile')
                                @else
                                    @include('users.edit-profile.no-profile')
                                @endif
                            </form>
                        </div> 
                    </div>                    
                </div>                
            </div>
        </div>
    </div>
@endsection