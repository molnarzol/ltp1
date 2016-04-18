<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
    <a class="navbar-brand" href="#">Ltp1</a>
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
    </ul>

    @if (Auth::guest())
        <div class="login-menu">
            <ul class="user-links">
                <li id="n-show-login">
                    <a href="{{ url('/login') }}" class="login"><span class="fa fa-user ul-icon"></span>Login</a>
                </li>
                <li>
                    <a href="{{ url('/register') }}"><span class="fa fa-sign-in ul-icon"></span>Register</a>
                </li>
            </ul>

            <div class="login-box">
                <form role="form" method="POST" id="login-form">
                    {!! csrf_field() !!}
                    <div>
                        <input type="email" name="email" placeholder="Email" class="login-input">
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Password" class="login-input">
                    </div>
                    <div class="login-buttons">
                        <div class="forgot-psw"><a href="{{ url('/password/reset') }}">Forgot your password?</a></div>
                        <input type="submit" value="Login" class="login-submit">
                    </div>
                </form>
            </div>
        </div>
    @else
        <div class="profil-menu">
            <ul class="user-links">
                <li id="show-login">
                    <a href="{{ url('/my-profil') }}" class="login"><span class="fa fa-user ul-icon"></span>My profil</a>
                </li>
                <li>
                    <a href="{{ url('/logout') }}"><span class="fa fa-sign-out ul-icon"></span>Log out</a>
                </li>
            </ul>
        </div>
    @endif
</nav>