@extends('layouts.app')
@section('content')

<div class="myjumbotron p-5 mb-4  text-white rounded-3">
    <img class="waves" src="{{Vite::asset('resources/img/wave.svg')}}" alt="" srcset="">
    <img id="morty" src="{{Vite::asset('resources/img/morty.png')}}" alt="" srcset="">
        
            <img id="right-eye" class="eye" src="{{Vite::asset('resources/img/eye.jpeg')}}" alt="" srcset="">
            <img id="left-eye" class="eye" src="{{Vite::asset('resources/img/eye.jpeg')}}" alt="" srcset="">
    
            
    <div class="container py-5">
    
        <h1 class="display-5 fw-bold">
            Welcome to Boolfolio
        </h1>

        <p class="col-md-8 fs-4">Using a series of utilities, you can store all your personal projects in one safe place.</p>
    </div>
</div>

<div class="content mt-5">
    <div class="container bg-dark text-white">
        <p>Login in order to access all of its features!</p>
           <div class="dashboard-icons">
                            <div class="feature">
                                <i class="fa-solid fa-folder-tree text-danger"></i>
                                <span class="fs-1 text-center">Access all your Projects</span>
                            </div>
                            <div class="feature">
                                <i class="fa-solid fa-database text-danger"></i>
                                <span class="fs-1 text-center">Store them all in one place</span>
                            </div>
                             <div class="feature">
                                <i class="fa-solid fa-file-pen text-danger"></i>
                                <span class="fs-1 text-center">Save and edit instantly</span>
                            </div>
                        </div>
    </div>
</div>
@endsection
