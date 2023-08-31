@extends('admin.layouts.layout')

@section('content')
    
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-2">
          <div class="col-md-10">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="card-title">{{$tag->name}}</h3>
                <p class="card-text">{{$tag->description}}</p>
                <span>{{$tag->slug}}</span>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection