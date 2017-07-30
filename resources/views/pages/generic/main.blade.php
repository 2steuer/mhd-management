@extends('main')

@section('subnav')
<ul class="nav nav-tabs">
    {{ Html::appNavLink('users.index', $human_plural, [], 1) }}
    {{ Html::appNavLink('users.create', $human_singular.' anlegen', [], 1) }}
</ul>
@endsection