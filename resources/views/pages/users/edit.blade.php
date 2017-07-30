@extends('pages.users.main')

@section('title', 'Mitglied bearbeiten')
@section('page_title', 'Mitglied bearbeiten')

@section('content')

    {{ Form::appEditForm($user, ['users.update', $user->id], 'users.index', 'pages.users.form') }}

@endsection