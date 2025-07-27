<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{url('/assets/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/style.css')}}">
    <link rel="stylesheet" href="{{url('/assets/admin.css')}}">
    @yield('optional_css')
</head>
<body>
@include('layouts.include.topbar')
<div class="content">
    @include('layouts.include.sidebar')
    <div class="main">
        @yield('content')
    </div>
</div>
<footer>
    @include('layouts.include.footer')
</footer>
<script src="{{url('/assets/bootstrap.min.js')}}"></script>
@yield('optional_js')
</body>
</html>
