@extends('front.layouts.master')

@section('content')


<div class="row">
    <!-- Blog entries-->
    <div class="col-lg-8">
        <div class="row py-5">
            @foreach ($posts as $post)
                <div class="col-lg-4">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/1000" height="300" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$post->created_at}}</div>
                            <h2 class="card-title h4">{{Illuminate\Support\Str::limit(strip_tags($post['title']), 10, '...')}}</h2>
                            <p class="card-text">{{Illuminate\Support\Str::limit(strip_tags($post['content']), 100, '...')}}</p>
                            <a class="btn btn-primary" href="{{route('post-show', $post->id)}}">Read more →</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination-->
        <nav aria-label="Pagination">
            <hr class="my-0" />
            {!! $posts->links() !!}
        </nav>
    </div>
    @include('front._partials.home-sidebar')
</div>

@endsection