@extends('admin.layouts.layout')

@section('content')
    
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex">
                        <p>List Posts</p>
                        <div class="ms-auto">
                            <a class="btn btn-primary btn-sm mb-2" href="{{route('post.create')}}">Add Post</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Image</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                    <tr class="">
                                        <td scope="row">{{$post->title}}</td>
                                        <td>{{$post->slug}}</td>
                                        <td> 
                                            <img src="https://via.placeholder.com/1000" width="100" height="70"> 
                                            {{-- {{ asset('uploads/posts/' . $post->image) }} --}}
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm mb-2" 
                                            href="{{route('post.show', $post->id)}}" 
                                            style="background-color: #e3f2fd; color:black;">Show</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm mb-2" 
                                            href="{{route('post.edit', $post->id)}}" 
                                            style="background-color: #e3f2fd; color:black;">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('post.destroy', $post->id) }}" method="post">
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
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection