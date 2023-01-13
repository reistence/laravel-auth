@extends('layouts.admin')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4 bg-dark border border-danger text-white">
                    <div class="card-header border-bottom border-light">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        <div class="dashboard-icons">
                            <div class="feature">
                                <i class="fa-solid fa-folder-tree text-danger"></i>
                                <span>Access all your Projects</span>
                            </div>
                            <div class="feature">
                                <i class="fa-solid fa-database text-danger"></i>
                                <span>Store them all in one place</span>
                            </div>
                             <div class="feature">
                                <i class="fa-solid fa-file-pen text-danger"></i>
                                <span>Save and edit instantly</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection