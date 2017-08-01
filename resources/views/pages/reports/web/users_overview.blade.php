@extends('main')

@section('title', 'Mitgliederübersicht')
@section('page_title', 'Alle Mitglieder')

@section('extra_styles')
    <link rel="stylesheet" type="text/css" href="{{ route('reports.stylesheet') }}" />
@endsection

@section('content')
    <p>
        <a href="{{ route('reports.overview_full') }}" class="btn btn-default" target="_blank">In eigenem Fenster anzeigen</a>
    </p>
    @include('pages.reports.includes.table', ['users' => $users, 'vehicles' => $vehicles, 'checkboxes' => true])
@endsection