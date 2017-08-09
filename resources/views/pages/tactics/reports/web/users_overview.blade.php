@extends('main')

@section('title', 'Mitgliederübersicht')
@section('page_title', 'Alle Mitglieder')

@section('extra_styles')
    <link rel="stylesheet" type="text/css" href="{{ route('tactics.reports.stylesheet') }}" />
@endsection

@section('content')
    {{ Form::open(['route' => 'tactics.reports.cards', 'method' => 'post', 'target' => '_blank']) }}

    <div class="btn-toolbar">
        <div class="btn-group">
            <a href="{{ route('tactics.reports.overview_full') }}" class="btn btn-default" target="_blank">In eigenem Fenster anzeigen</a>
        </div>

        <div class="btn-group">
            <a href="{{ route('tactics.reports.cards.all') }}" class="btn btn-default">Alle Karten drucken</a>
            <input type="submit" class="btn btn-primary" value="Ausgewählte Karten drucken" />
        </div>
    </div>

    @include('pages.tactics.reports.includes.table', ['users' => $users, 'vehicles' => $vehicles, 'checkboxes' => true])

    {{ Form::close() }}
@endsection