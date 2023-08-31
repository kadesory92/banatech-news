@extends('admin.layouts.layout')

@section('content')
    
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex">
                        <p>List Users</p>
                        {{-- <div class="ms-auto">
                            <a class="btn btn-primary btn-sm mb-2" href="{{route('post.create')}}">Add Post</a>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr class="">
                                        <td scope="row">{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role}}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm mb-2" 
                                            href="{{route('users.show', $user->id)}}" 
                                            style="background-color: #e3f2fd; color:black;">Show</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-primary btn-sm mb-2"
                                                style="background-color: #e3f2fd; color:black;" 
                                                type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <div class="card-footer text-center text-muted">
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection