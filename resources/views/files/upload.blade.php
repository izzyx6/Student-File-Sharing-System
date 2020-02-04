@extends('layouts.base')
@section('title', 'Upload File')
@section('content')
<div class="container mt-3">    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">
                        Upload Material
                    </h4>
                </div>
                <div class="card-body">
                    @include('partials.partials')
                    <form  action="{{route('upload')}}" method="post" enctype="multipart/form-data">
                        @csrf @method('post')
                        <div class="row form-group">
                            <label for="name" class="col-form-label col-md-3 text-right">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="course_code" class="col-form-label col-md-3 text-right">Course Code</label>
                            <div class="col-md-9">
                                <input type="text" name="course_code" id="course_code" value="{{old('course_code')}}" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="file" class="col-form-label col-md-3 text-right">File</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="file"  aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="row form-group">
                            <label for="name" class="col-form-label col-md-3 text-right">Description</label>
                            <div class="col-md-9">
                                <textarea placeholder="Enter a short description about the file. 500 words MAX" name="description" id="descriptoin" class="form-control">{{old('description')}}</textarea>
                            </div>
                        </div>
                        <div class="row form-group">                               
                            <div class="col-md-9 offset-md-3">
                                <input type="submit" class="btn btn-outline-primary" value="Upload File">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer"></div>
            </div>            
        </div>

    </div>>
</div>
@endsection