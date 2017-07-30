@extends('pages.generic.main')

@section('title', $human_plural)
@section('page_title', $human_plural.' verwalten')

@section('content')
    @include('pages.'.$model_plural.'.table', ['models' => $models])
@endsection
