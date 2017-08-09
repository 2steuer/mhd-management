@extends('pages.generic.main')

@section('title', $human_singular.' anlegen')
@section('page_title', $human_singular.' anlegen')

@section('content')
    <a href="{{ route($model_plural . '.index') }}" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Zurück zur Übersicht</a>
    {{ Form::appNewForm($model_plural.'.store', $model_plural.'.index', 'pages.'.$model_plural.'.form') }}
@endsection