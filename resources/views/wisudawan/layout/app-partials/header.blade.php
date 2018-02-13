<div class="section">
    <div class="container">
        <nav id="navbar" class="navbar is-fixed-top ">
            <div id="specialShadow" class="bd-special-shadow"></div>
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{ url('/wisudawan/home') }}">
                        <img src="/logo-wisuda-app.png" alt="Bulma: a modern CSS framework based on Flexbox" height="28">
                    </a>
                </div>

                <div id="navMenuDocumentation" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="field is-grouped">
                                @if(Auth::guest())
                                    @if(Route::CurrentRouteName() == 'login')
                                        <p class="control">
                                            <a class="button is-info" href="{{ route('register') }}">
                                                <span>Registrasi</span>
                                                <span class="icon">
                                                    <i class="fa fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        </p>
                                    @elseif(Route::CurrentRouteName() == 'register')
                                        <p class="control">
                                            <a class="button is-info" href="{{ route('login') }}">
                                                <span>Login</span>
                                                <span class="icon">
                                                    <i class="fa fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        </p>
                                    @endif
                                @else
                                    <p class="control">
                                        <a class="button is-info" href="{{ url('/wisudawan/logout') }}"
                                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            <span>Logout</span>
                                            <span class="icon">
                                                    <i class="fa fa-sign-out"></i>
                                                </span>
                                        </a>
                                        <form id="logout-form" action="{{ url('/wisudawan/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

