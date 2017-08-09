@extends('pages.generic.main')

@section('title', $human_plural)
@section('page_title', $human_plural.' verwalten')

@section('content')
    <a href="{{ route($model_plural . '.create') }}" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> {{ $human_singular }} anlegen</a>
    @include('pages.'.$model_plural.'.table', ['models' => $models])
@endsection
