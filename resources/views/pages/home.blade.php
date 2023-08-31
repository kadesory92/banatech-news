@extends('front.layouts.master')

@section('content')
    @include('front.layouts.inc.header')

    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">{{$latestPost->created_at}}</div>
                    <h2 class="card-title">{{Illuminate\Support\Str::limit(strip_tags($latestPost['title']), 10, '...')}}</h2>
                    <p class="card-text">{{Illuminate\Support\Str::limit(strip_tags($latestPost['content']), 100, '...')}}</p>
                    <a class="btn btn-primary" href={{route('post-show', $latestPost->id)}}>Read more →</a>
                </div>
            </div>
            @include('front._partials.list-posts')
        </div>
        <!-- Side widgets-->
        @include('front._partials.home-sidebar')
    </div>

@endsection