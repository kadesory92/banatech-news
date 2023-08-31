<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'New Blog') }}</title>
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/styles.css')}}">
</head>
<body>
    @include('front.layouts.inc.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('front.layouts.inc.footer')

    <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/assets/js/scripts.js')}}"></script>
</body>
</html>