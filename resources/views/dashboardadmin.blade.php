@extends('admin.layouts.layout')

@section('content')
    
    <div class="container my-5">
        <div class="row justify-content-center mb-3">
            <h4 class="card-title mb-3">General Statistics</h4>
            <div class="col-md-3">
                <div class="card">
                    <div class="row justify-content-start align-items-center">
                        {{-- <i class="bi bi-people-fill h-50"></i> --}}
                        <div class="col-4 mx-2">
                            <img src="" class="img-fluid" alt="image desc">
                        </div>
                        <div class="col">
                            <div class="card-body text-center">
                                <h4 class="card-title">Users</h4>
                                <p class="card-text">The users</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="row justify-content-start align-items-center">
                        <div class="col-4 mx-2">
                            <img src="" class="img-fluid" alt="image desc">
                        </div>
                        <div class="col">
                            <div class="card-body text-center">
                                <h4 class="card-title">Posts</h4>
                                <p class="card-text">hhhhhhh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="row justify-content-start align-items-center">
                        <div class="col-4 mx-2">
                            <img src="" class="img-fluid" alt="image desc">
                        </div>
                        <div class="col">
                            <div class="card-body text-center">
                                <h4 class="card-title">Comments</h4>
                                <p class="card-text">text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center  text-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Title</h3>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection