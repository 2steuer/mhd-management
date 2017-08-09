@extends('pages.generic.main')

@section('title', $human_singular.' bearbeiten')
@section('page_title', $human_singular.' bearbeiten')

@section('content')
    <a href="{{ route($model_plural . '.index') }}" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Zurück zur Übersicht</a>

    {{ Form::appEditForm($model, [$model_plural.'.update', $model->id], $model_plural.'.index', 'pages.'.$model_plural.'.form') }}

@endsection