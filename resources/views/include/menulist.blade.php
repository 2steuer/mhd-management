<ul class="{{ $nav_classes }}">
    @if(Auth::guest())
        <li class="active"><a href="{{ route('login') }}">Login</a></li>
    @else
        <li class="{{ starts_with(Route::current()->getName(), 'home') ? 'active' : '' }}"><a href="{{ route('home') }}">Startseite</a></li>
        <li><a href="{{ route('login.logout') }}">Ausloggen</a></li>
    @endif
</ul>