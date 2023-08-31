@extends('admin.layouts.layout')

@section('content')
<div class="container-md-10 py-5">
    <div class="row justify-content-center">
        <p>Name : {{$user->name}}</p>
        <p>Email : {{$user->email}}</p>
        <p>Role : {{$user->role}}</p>
    </div>
</div>    

@endsection