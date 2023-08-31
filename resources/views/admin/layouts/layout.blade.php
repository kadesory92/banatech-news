<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Blog</title>
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/styles.css')}}">
</head>
<body>
    <div class="d-flex" id="wrapper">
        @include('admin.layouts.inc.sidebar')
        <div id="page-content-wrapper">
            @include('admin.layouts.inc.navbar')
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/scripts.js')}}"></script>
</body>
</html>