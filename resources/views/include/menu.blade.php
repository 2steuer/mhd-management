<div class="{{ $nav_classes }}">
    @foreach($menu as $item)
        {{ Html::appNavLink($item->route, $item->name, [], $level) }}

        @if($item->is_active($level) && count($item->children) > 0)
            @include('include.menu', ['nav_classes' => $nav_classes, 'menu' => $item->children, 'level' => ($level + 1)])
        @endif
    @endforeach
</div>