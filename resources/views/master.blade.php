<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{asset('/')}}css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('/')}}css/all.css" rel="stylesheet">
    <link href="{{asset('/')}}css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-md" id="main-navbar">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog.add') }}" class="nav-link">Add Blog</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog.manage') }}" class="nav-link">Manage Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


@yield('body')

<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
<script src="{{asset('/')}}js/all.js"></script>
<script src="{{asset('/')}}js/custom.js"></script>
</body>
</html>
