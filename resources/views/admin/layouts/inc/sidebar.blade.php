<div class="border-end bg-white mx-5" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">News Blog</div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{url('/dashboard')}}">Dashboard</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('users.index')}}">Users</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('category.index')}}">Categories</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('tag.index')}}">Tags</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('post.index')}}">Posts</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Comments</a>
    </div>
</div>