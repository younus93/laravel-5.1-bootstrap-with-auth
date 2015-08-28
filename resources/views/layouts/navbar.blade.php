<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"sud></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <a class="navbar-brand" href="#">Younus</a>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ url('/') }}">Home</a></li>
            </ul>

            @if(!\Illuminate\Support\Facades\Auth::user())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('auth/login') }}">Login</a></li>
                    <li><a href="{{ url('auth/register') }}">Register</a></li>
                </ul>
            @else
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('auth/logout') }} ">Logout</a></li>
                </ul>
            @endif

        </div>
    </div>
</nav>