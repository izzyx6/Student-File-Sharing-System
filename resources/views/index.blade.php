@extends('layouts.base')
@section('title', 'Welcome To The File Sharing Site')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h1 class="display-4 text-center">Search Your Files</h1>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-8">
                        <form class="form-inline" action="{{route('search-files')}}" method="get">
                            <input required type="text" name="search" class="form-control w-75 mr-2 form-control-lg" placeholder="Search Files">
                            <button class="btn btn-primary btn-lg">Search</button>
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>

        </div>
    </div>
@endsection