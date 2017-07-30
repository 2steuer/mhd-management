@extends('main')

@section('subnav')
<ul class="nav nav-tabs">
    {{ Html::appNavLink('users.index', 'Mitgliederübersicht', [], 1) }}
    {{ Html::appNavLink('users.create', 'Mitglied anlegen', [], 1) }}
</ul>
@endsection