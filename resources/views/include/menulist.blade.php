<ul class="{{ $nav_classes }}">
    @if(Auth::guest())
        @include('include.menu', ['nav_classes' => $nav_classes, 'level' => 0, 'menu' => \App\Menu\AppMenu::getGuestMenu()])
    @else
        @include('include.menu', ['nav_classes' => $nav_classes, 'level' => 0, 'menu' => \App\Menu\AppMenu::getMenu()])
    @endif
</ul>