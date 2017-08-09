@extends('main')

@section('title', 'Nummern bearbeiten')
@section('page_title', 'Nummern von ' . $user->get_name() . ' bearbeiten')

@section('content')
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-default">
        <span class="glyphicon glyphicon-arrow-left"></span> Zurück
    </a>
    {{ Form::open(['route' => ['users.numbers.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal']) }}

    <h3>Nummern</h3>
    <p>Bitte die Hauptnummer vorn auswählen.</p>
        @foreach($user->numbers()->get() as $number)
            <div class="form-group">
            <div class="col-sm-1 text-center">
                {{ Form::radio('default_number', $number->id, $number->id == $user->default_phone()->id) }}
            </div>
            <div class="col-sm-2">
                {{ Form::text('descriptions['.$number->id.']', $number->description, ['class' => 'form-control']) }}
            </div>
            <div class="col-sm-8">
                {{ Form::text('numbers['.$number->id.']', $number->number, ['class' => 'form-control']) }}
            </div>
            <div class="col-sm-1">
                <a href="{{ route('users.numbers.delete', [$user->id, $number->id]) }}" class="btn btn-default form-control">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
            </div>
            </div>
        @endforeach

        <div class="form-group">
            <div class="col-sm-12">
                {{ Form::submit('Speichern', ['class' => 'form-control btn-primary']) }}
            </div>
        </div>
    {{ Form::close() }}

    {{ Form::open(['route' => ['users.numbers.create', $user->id], 'method' => 'post', 'class' => 'form-horizontal']) }}
    <h3>Neue Nummer</h3>
    <div class="form-group">
        <div class="col-sm-2">
            {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Beschreibung']) }}
        </div>
        <div class="col-sm-8">
            {{ Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Nummer']) }}
        </div>
        <div class="col-sm-2">
            {{ Form::submit('Speichern', ['class' => 'form-control']) }}
        </div>
    </div>
    {{ Form::close() }}
@endsection