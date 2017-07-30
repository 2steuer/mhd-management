@extends('pages.generic.main')

@section('title', $human_singular.' anlegen')
@section('page_title', $human_singular.' anlegen')

@section('content')
    {{ Form::appNewForm($model_plural.'.store', $model_plural.'.index', 'pages.'.$model_plural.'.form') }}
@endsection