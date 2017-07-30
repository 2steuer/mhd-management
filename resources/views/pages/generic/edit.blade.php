@extends('pages.generic.main')

@section('title', $human_singular.' bearbeiten')
@section('page_title', $human_singular.' bearbeiten')

@section('content')

    {{ Form::appEditForm($model, [$model_plural.'.update', $model->id], $model_plural.'.index', 'pages.'.$model_plural.'.form') }}

@endsection