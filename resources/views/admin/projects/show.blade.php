@extends('layouts.admin')
@section('content')
<div class="container mt-4">
      <div class="container">
        <h1 class="text-center mt-3">{{ $project->title }}</h1>
        <div class="d-flex justify-content-between mt-3">
            <h5>{{ $project->created_at }}</h5>
            <p>{{ $project->slug }}</p>
        </div>
        <p class="mt-3">{{ $project->description }}</p>
    </div>
</div>
@endsection