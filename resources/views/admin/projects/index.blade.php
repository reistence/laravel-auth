@extends('layouts.admin')
@section('content')
<div class="container mt-4">
    
     <div class="container mt-4">
        <h3 class="text-center text-danger fw-bold">Projects List</h3>
        <div class="row justify-content-center">
            <div class="col-8">
                 <div class="text-end mb-4">
                <a href="{{ route('admin.projects.create') }}" class="btn btn-dark">Add a new Project</a>
            </div>
            @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Title:</th>
                            <th scope="col">Created at:</th>
                            <th scope="col">Actions: </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->title }}</th>
                                <td>{{ $project->created_at }}</td>
                                <td>
                                    <a class="btn btn-dark" href="{{ route('admin.projects.show', $project->slug) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a class="btn btn-dark" href="{{ route('admin.projects.edit', $project->slug) }}">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                     <button type="button" class="del btn btn-dark">
                                        <i class="fa-solid fa-circle-xmark text-danger"></i>
                                    </button>
                                     <form class="mymod"  tabindex="-1"action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <h3>Delete: {{$project->title}}</h3>
                                        <p>Are you sure you want to delete this project?</p>
                                        <button class="mybtn btn btn-danger" type="submit">Delete</button>
                                        <button type="button" class="dismissBtn btn btn-light">Dismiss</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@endsection