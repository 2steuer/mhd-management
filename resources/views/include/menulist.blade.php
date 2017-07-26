<ul class="{{ $nav_classes }}">
    @if(Auth::guest())
        <li class="active"><a href="{{ route('login') }}">Login</a></li>
    @else
        <li><a href="#">Ausloggen</a></li>
    @endif
</ul>