@extends('pages.users.main')

@section('title', 'Mitglied anlegen')
@section('page_title', 'Mitglied anlegen')

@section('content')
    {{ Form::appNewForm('users.store', 'users.index', 'pages.users.form') }}
@endsection