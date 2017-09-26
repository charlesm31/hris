<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Scripts -->
    <script>window.Laravel = <?= json_encode(['csrfToken' => csrf_token(),]); ?></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">                   
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <form method="post" action="/login" class="navbar-form navbar-right">
                                <div class="form-group">
                                    <input type="text" id="user" name="user" placeholder="Email or Username" class="form-control" value="{{ old('user') }}">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control" value="{{ old('password') }}">
                                </div>

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Sign in</button>
                                </div>
                            </form>
                        @else
                            <li><a href="{{ url('/dashboard') }}">Home</a></li>
                            @if(Auth::user()->type == 'admin')
                                 <li><a href="{{ url('/employees') }}">Employees</a></li>
                            @endif 
                            <li><a href="{{ url('/profile') }}">Profile</a></li>                                                      
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">    
                                    <li><a href="/"></a></li>                                
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="get" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div><!--/.navbar-collapse -->                
            </div>
        </nav>      

        <div id="page-content">
            @include('validation.errors')
            @include('validation.session')      
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
