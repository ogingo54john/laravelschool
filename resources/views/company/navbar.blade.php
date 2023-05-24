<div class="main-navbar shadow-sm sticky-lg-top">

    <nav class="navbar navbar-expand-lg pt-1">
        <div class="container-fluid">
            <a class="navbar-brand px-3 d-block d-sm-block d-md-none d-lg-none" href="{{ url('/') }}">
               Kadesea Agency
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                {{-- <span class="navbar-toggler-icon"></span> --}}
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}"> <i class="fa fa-home text-primary"></i>Home</a>
                    </li>

                     @guest
                            @if (Route::has('login'))

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <i class="fa fa-sign-in"></i> {{ __('Login') }}
                                </a>
                            </li>
                            @endif
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user"></i>
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            {{-- <li><a class="dropdown-item" href="{{ route("profile") }}"><i class="fa fa-user"></i> Profile</a></li> --}}
                            <li><a class="dropdown-item" href="{{ url("cart") }}"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                            {{-- <li><a class="dropdown-item" href="{{url("changePassword")}}"><i class="fa fa-lock"></i> Account Password</a></li> --}}
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>  {{ __('Logout') }}</a></li>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>


                            </ul>
                        </li>

                        @endguest


                    {{-- <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Manage Posts</a>
                        <a class="dropdown-item" href="#">Our  Blog</a>

                        </div>
                        </li> --}}

                </ul>
            </div>
        </div>
    </nav>
</div>
