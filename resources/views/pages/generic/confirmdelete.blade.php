@extends('pages.generic.main')

@section('title', $human_singular . ' löschen')
@section('page_title', $name. ' löschen?')

@section('content')
    <p class="text-danger">
        {{ $human_singular }} <b>{{ $name }}</b> wirklich endgültig aus dem System löschen?
    </p>
    {{ Form::appDeleteForm([$model_plural.'.destroy', $model->id], $model_plural.'.index') }}
@endsection