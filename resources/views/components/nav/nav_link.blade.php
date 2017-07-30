<li class="{{ ($active ? 'active' : (explode('.', Route::current()->getName())[$level_index] == explode('.', $route)[$level_index] ? 'active' : '')) }}">
    <a href="{{ route($route, $route_params) }}">{{ $name }}</a>
</li>