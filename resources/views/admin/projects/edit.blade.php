@extends('layouts.admin')
@section('content')
<div class="container mt-4">
    <div class="container text-white">
         <div class="text-start mb-4">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-danger"><i class="fa-solid fa-angles-left"></i></a>
            </div>
        <h1 class="text-center mt-3 text-danger fw-bold">Edit: {{$project->title}}</h1>
         <div class="row justify-content-center">
             <div class="col-10 mb-5">
                    @include('partials.errors')
                    <form class="" action="{{route('admin.projects.update', $project->slug)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label for="title">Title</label>
                            <input type="text" class="form-control bg-dark text-white" id="title" name="title" value="{{$project->title}}">
                        </div>

                        <div class="form-group mb-3">
                        <label for="cover_image">Image</label>
                        <input type="file" name="cover_image" id="cover_image" class="form-control bg-dark text-white">

                        {{-- Preview img --}}
                        <div class="mt-3 w-50" style="max-height: 200px">
                            <img class="w-75 rounded-4" id="image_preview" src="{{ asset('storage/' . $project->cover_image) }}"
                                alt="{{ $project->title . ' image' }}">
                        </div>
                    </div>


                        <div class="mb-2">
                            <label for="thumb">Description</label>
                            <textarea class="form-control bg-dark text-white" id="description" name="description"
                            rows="10">{{$project->description}}</textarea>
                        </div>
                        <button class="btn btn-danger" type="submit">Add</button>
                    </form>
                </div>
            </div>

    </div>
</div>
@endsection