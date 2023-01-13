@extends('layouts.admin')
@section('content')
<div class="container mt-4">
    <div class="container">
        <h1 class="text-center mt-3 text-danger fw-bold">Edit: {{$project->title}}</h1>
         <div class="row justify-content-center">
             <div class="col-10 mb-5">
                    @include('partials.errors')
                    <form class="" action="{{route('admin.projects.update', $project->slug)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$project->title}}">
                        </div>
                        <div class="mb-2">
                            <label for="thumb">Description</label>
                            <textarea class="form-control" id="description" name="description"
                            rows="10">{{$project->description}}</textarea>
                        </div>
                        <button class="btn btn-danger" type="submit">Add</button>
                    </form>
                </div>
            </div>

    </div>
</div>
@endsection