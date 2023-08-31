@extends('admin.layouts.layout')

@section('content')
    
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex">
                        <p>List Categories</p>
                        <div class="ms-auto">
                            <a class="btn btn-primary btn-sm mb-2" href="{{route('category.create')}}">Add Category</a>
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
                                    @foreach ($categories as $category)
                                    <tr class="">
                                        <td scope="row">{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm mb-2" 
                                            href="{{route('category.show', $category->id)}}" 
                                            style="background-color: #e3f2fd; color:black;">Show</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm mb-2" 
                                            href="{{route('category.edit', $category->id)}}" 
                                            style="background-color: #e3f2fd; color:black;">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('category.destroy', $category->id) }}" method="post">
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
                        {!! $categories->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection