@extends('admin.layouts.layout')

@section('content')
    
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex">
                        <p>Category form</p>
                        <div class="ms-auto">
                            <a class="btn btn-primary btn-sm mb-2" href="{{route('category.index')}}">List Categories</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <form action="{{route('category.update', $category->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="" class="form-label">Name :</label>
                                <input type="text"
                                    class="form-control form-control-sm" 
                                    name="name" value="{{$category->name}}" id="name" aria-describedby="name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
      
                            <div class="mb-3">
                                  <label for="" class="form-label">Description :</label>
                                  <input type="text"
                                      class="form-control form-control-sm" 
                                      name="description" value="{{$category->description}}" id="description" aria-describedby="description">
                                  @error('description')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                            </div>
      
                            <div class="mb-3">
                                    <label for="" class="form-label">Slug :</label>
                                    <input type="text"
                                      class="form-control form-control-sm" 
                                      name="slug" value="{{$category->slug}}" id="slug" aria-describedby="slug">
                                    @error('slug')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update Category</button>

                        </form>  
  
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection