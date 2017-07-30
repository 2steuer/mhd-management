@extends('main')

@section('subnav')
<ul class="nav nav-tabs">
    {{ Html::appNavLink($model_plural.'.index', $human_plural, [], 1) }}
    {{ Html::appNavLink($model_plural.'.create', $human_singular.' anlegen', [], 1) }}
</ul>
@endsection