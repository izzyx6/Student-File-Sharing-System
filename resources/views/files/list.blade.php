@extends('layouts.base')
@section('title', 'File List')
@section('content')
<div class="container mt-3">    
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="h4 text-center">                        
                        @if(request()->search)
                        Search Results
                        @elseif(request()->segment(2) == 'csc')                        
                        Computer Science Files
                        @elseif(request()->segment(2)=='maths')
                        Mathematics Files
                        @elseif(request()->segment(2)=='geology')
                        Geology Files
                        @elseif(request()->segment(2)=='physics')
                        Physics Files
                        @elseif(request()->segment(2)=='chemistry')
                        Chemistry Files
                        @elseif(request()->segment(1)=='my-files')
                        All Materials Uploaded By You
                        @else
                        File List
                        @endif
                    </div>                    
                </div>
                <div class="card-body">
                    @include('partials.partials')
                    <div class="list-group">
                        @forelse($files as $file)
                            <a href="{{route('comments', $file->id)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-1">{{$file->name}}</h5>
                                    <small><i>Uploaded by {{$file->user->profile->full_name}}</i> {{$file->created_at->diffForHumans()}}</small>
                                </div>
                                <p class="mb-1">
                                    Course Code: {{$file->course_code}} | Size: {{filehelper::bytesToHuman(Storage::size($file_path.$file->filename))}} | File Type: {{strtoupper($file->extension)}}
                                </p>
                                <hr>
                                <p class="mb-1">{{$file->description}}</p>
                                <hr>                                
                            </a>
                            &nbsp;<div class="row form-group ">
                            <div class="col-md-12">
                            <a target="_blank" href="{{asset('storage/uploads/'.$file->filename)}}" class="text-center text-white btn btn-info"><i class="fa fa-eye"></i>&nbsp;Preview</a>
                            &nbsp;
                            </div>
</div>
                            &nbsp;<div class="row form-group ">
                            <div class="col-md-12">
                            <a target="_blank" href="{{route('download-file', $file->id)}}" class="text-center text-white btn btn-success"><i class="fa fa-download"></i>&nbsp;Download File </a>
                            </div>
</div>
                            &nbsp;<div class="row form-group ">
                            <div class="col-md-12">
                            @can('delete', $file)
                            <a onclick="return confirm('Are You Sure?');" href="{{route('delete-file', $file->id)}}" class="text-center text-white btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Delete File </a>
</div>
</div>
                            @endcan
                            @empty
                            @if(request()->search)
                            <p class="alert alert-info">No Search Results</p>
                            @elseif(request()->segment(1)=='my-files')
                            <p class="alert alert-info">You Have No Files</p>
                            @else
                            <p class="alert alert-info">No Files Here</p>
                            @endif
                        @endforelse
                    </div>                    
                </div>
            </div>
            <hr>
            {{$files->links()}}
        </div>
    </div>
</div>
@endsection