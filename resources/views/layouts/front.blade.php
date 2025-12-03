<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    <link  href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <!-- kalau session -->
                @if(session()->has('user_id'))
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Dashboard <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Profile</a>
                    </li>
                @endif
                @if(!session()->has('user_id'))
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('demo.login')}}">Login <span class="sr-only"></span></a>
                    </li>
                    
                @endif
                <li class="nav-item">
                    @if(session()->has('user_id'))
                        <form action="{{route('demo.logout')}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    @endif
                </li>
            </ul>
        </div>

    </nav>
    <main>
        @yield('content')
    </main>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
