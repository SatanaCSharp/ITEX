<!-- Header -->
<section class="header">
    <!-- Navbar in header -->
    <div id="nav" class="navbare">
        <div class="logo">
            {!! Html::image('images/logo.png') !!}
        </div>
        <ul class="nav nav-pills menu">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Companies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
            </li>
        </ul>
        <div class="nav authorization">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li id="dropdown" class="nav-item dropdown row">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {!! Html::image('images/user-image.png') !!}
                        {{ Auth::user()->name }} {{ Auth::user()->last_name }}
                        <span class="caret"></span>
                    </a>
                    @if(Auth::user()->role==1)
                        <span class="role">Admin</span>
                    @endif
                    @if(Auth::user()->role==2)
                        <span class="role">User</span>
                    @endif
                    @if(Auth::user()->role==3)
                        <span class="role">Manager</span>
                    @endif
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

        </div>
    </div>

    <div class="title">
        {!! Html::image('images/title.jpg') !!}
    </div>
</section>