@extends('layouts.admin')
@section('content')
<div class="container mt-4">
    <div class="container">
        <h1 class="class="text-center mt-3">Add a new Project</h1>
         <div class="row justify-content-center">
                <div class="col-10 mb-5">
                    @include('partials.errors')
                    <form class="" action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        </div>

                         <div class="form-group mb-2">
                        <label for="cover_image">Image</label>
                        <input type="file" name="cover_image" id="cover_image"
                            class="form-control @error('cover_image')
                            is-invalid
                        @enderror">
                        @error('cover_image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Image preview --}}
                        <div class="mt-3">
                            <img id="image_preview" src="" alt="" style="max-height: 200px">
                        </div>
                    </div>
                        <div class="mb-2">
                            <label for="thumb">Description</label>
                            <textarea class="form-control" id="description" name="description"
                            rows="10">{{ old('description') }}</textarea>
                        </div>
                        <button class="btn btn-danger" type="submit">Add</button>
                    </form>
                </div>
            </div>

    </div>
</div>
@endsection