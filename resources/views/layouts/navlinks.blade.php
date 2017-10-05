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
