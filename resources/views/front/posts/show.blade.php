@extends('front.layouts.master')

@section('content')
    
<div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8 mb-5">

        <!-- Title -->
        <h1 class="mt-4">{{$post['title']}}</h1>

        <!-- Date/Time -->
        <p>Posté le {{$post->created_at->format('d/m/Y')}}</p>
        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="https://via.placeholder.com/1000" alt="">
        <hr>

        <!-- Post Content -->
        {!! $post->content !!}
        <hr>

        <form action="{{route('comment.post')}}" method="post" class="mb-3">
            @csrf

            <div class="mb-3">
                <input type="hidden" name="slug" value="{{$post->slug}}" id="">
                <label for="" class="form-label">Comment :</label>
                <textarea class="form-control" name="content" id="" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <hr>

        <h4>The Comments</h4>

        @foreach ($comments as $comment)
            <div class="mb-2">
                <p>{{$comment->content}}</p>
                <div class="small text-muted"><span>Author : </span>{{$comment->user->name}}</div>
            </div>
        @endforeach

    </div>

    @include('front._partials.home-sidebar')

</div>

@endsection