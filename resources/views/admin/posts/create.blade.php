@extends('admin.layouts.layout')

@section('content')
    
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex">
                        <p>Post form</p>
                        <div class="ms-auto">
                            <a class="btn btn-primary btn-sm mb-2" href="{{route('post.index')}}">List Posts</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">Select Category :</label>
                                <select class="form-select form-control form-control-sm" name="category_id" id="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- <div class="mb-3">
                                <label for="" class="form-label">Select Tag :</label>
                                <select class="form-select form-control form-control-sm" name="tag_id" id="tag_id">
                                    @foreach ($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div> --}}

                            <div class="mb-3">
                                <label for="" class="form-label">Title :</label>
                                <input type="text"
                                    class="form-control form-control-sm" 
                                    name="title" id="title" aria-describedby="name">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
      
                            <div class="mb-3">
                                  <label for="" class="form-label">Slug :</label>
                                  <input type="text"
                                      class="form-control form-control-sm" 
                                      name="slug" id="slug" aria-describedby="slug">
                                  @error('slug')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Content :</label>
                              <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                              @error('content')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Image :</label>
                                <input type="file"
                                  class="form-control form-control-sm" 
                                  name="image" id="image" aria-describedby="image">
                                @error('image')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Featured :</label>
                                <div class="form-check">
                                    <input class="form-check-input" name="is_featured" id="is_featured" type="checkbox" value="checkedValue" aria-label="Text for screen reader">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Published :</label>
                                <div class="form-check">
                                    <input class="form-check-input" name="is_published" id="is_published" type="checkbox" value="checkedValue" aria-label="Text for screen reader">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Post</button>

                        </form>  
  
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection