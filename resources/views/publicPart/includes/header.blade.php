<!-- Header -->
<section class="header">
    <div class="logo">
        {!! Html::image('images/logo.png') !!}
    </div>

    <!-- Navbar in header -->
    <div id="nav" class="navbare">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Companies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Excursions</a>
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
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} {{ Auth::user()->last_name }}<span class="caret"></span>
                    </a>
                    @if(Auth::user()->role==1)
                        <span><h6>Admin</h6></span>
                    @endif
                    @if(Auth::user()->role==2)
                        <span><h6>User</h6></span>
                    @endif
                    @if(Auth::user()->role==3)
                        <span><h6>Manager</h6></span>
                    @endif
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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