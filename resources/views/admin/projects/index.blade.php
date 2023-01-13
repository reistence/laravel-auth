@extends('layouts.admin')
@section('content')
<div class="container mt-4  prova">
     <div class="container mt-4">
        <h3 class="text-center text-danger fw-bold">Projects List</h3>
        <div class="row justify-content-center">
            <div class="col-11">
                 <div class="text-end mb-4">
                <a href="{{ route('admin.projects.create') }}" class="btn btn-danger">Add a new Project</a>
            </div>
            @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <table class="table  table-dark table-hover text-white ">
                    <thead>
                        <tr>
                            <th scope="col">Title:</th>
                            <th scope="col">Created at:</th>
                            <th scope="col">Image:</th>
                            <th scope="col">Actions: </th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider border-top border-danger">
                        @foreach ($projects as $project)
                            <tr class="position-relative" >
                                
                                <th scope="row">{{ $project->title }}</th>
                                <td>{{ $project->created_at }}</td>
                                 <td id="img-index-td" class="">
                                    @if ($project->cover_image)
                                        <img class=" rounded-4" src="{{ asset('storage/' . $project->cover_image) }}"
                                            alt="">
                                    @else
                                        
                                          <img class="rounded-4" src="{{Vite::asset('resources/img/dark-placeholder.png')}}" alt="Img unavailable">
                                        
                                    @endif
                                </td>
                                <td  class="">
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
                                <div class="layer"></div>



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