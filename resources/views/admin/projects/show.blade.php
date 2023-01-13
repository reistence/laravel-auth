@extends('layouts.admin')
@section('content')
<div class="container mt-4">
      <div class="container">
        <h1 class="text-center mt-3 text-danger fw-bold">{{ $project->title }}</h1>
         <div class="text-start mb-4">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-danger"><i class="fa-solid fa-angles-left"></i></a>
            </div>
        <div class="d-flex justify-content-between mt-3 text-white">
            <h5 class="">{{ $project->created_at }}</h5>
            <p>{{ $project->slug }}</p>
        </div>
        <p class="mt-3 text-white">{{ $project->description }}</p>
        <div class="text-center">
            @if ($project->cover_image)
                <img class="w-75 rounded-3" src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ 'Cover image di ' . $project->title }}">
            @else
                <div class=" py-4 text-center d-inline-block">
                  <img class="w-75 rounded-3" src="{{Vite::asset('resources/img/dark-placeholder.png')}}" alt="Img unavailable">
                                        
                </div>
            @endif
        </div>
    </div>
</div>
@endsection