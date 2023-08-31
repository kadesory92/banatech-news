@extends('admin.layouts.layout')

@section('content')
    
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex">
                        <p>List Tags</p>
                        <div class="ms-auto">
                            <a class="btn btn-primary btn-sm mb-2" href="{{route('tag.create')}}">Add Tag</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Slug</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tags as $tag)
                                    <tr class="">
                                        <td scope="row">{{$tag->name}}</td>
                                        <td>{{$tag->description}}</td>
                                        <td>{{$tag->slug}}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm mb-2" 
                                            href="{{route('tag.show', $tag->id)}}" 
                                            style="background-color: #e3f2fd; color:black;">Show</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm mb-2" 
                                            href="{{route('tag.edit', $tag->id)}}" 
                                            style="background-color: #e3f2fd; color:black;">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('tag.destroy', $tag->id) }}" method="post">
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
                        {!! $tags->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection