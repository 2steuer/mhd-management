@extends('main')

@section('title', 'Mitgliederübersicht')
@section('page_title', 'Alle Mitglieder')

@section('extra_styles')
<link rel="stylesheet" type="text/css" href="{{ route('reports.stylesheet') }}" />
@endsection

@section('content')
<table class="table">
    <tr>
        <th>Nachname</th>
        <th>Vorname</th>
        <th>Telefon</th>
        <th>Med. Qual.</th>
        <th>Takt. Qual.</th>
        <th>Führers.</th>
        <th>Bemerkung</th>

        @foreach($vehicles as $vehicle)
            <th>{{ $vehicle->abbreviation }}</th>
        @endforeach
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->last_name }}</td>
        <td>{{ $user->first_name }}</td>
        <td>{{ $user->default_phone()->number }}</td>
        <td class="quali quali-{{ $user->qualification->id }}">{{ $user->qualification->abbreviation }}</td>
        <td class="tquali tquali-{{ $user->tactical_qualification->id }}">{{ $user->tactical_qualification->abbreviation }}</td>
        <td class="license license-{{ $user->driver_license->id }}">{{ $user->driver_license->name }}</td>
        <td>{{ $user->comment }}</td>

        @foreach($vehicles as $vehicle)
            <td class="{{ $user->has_vehicle($vehicle->id) ? 'yes' : 'no' }}"></td>
        @endforeach
    </tr>
    @endforeach
</table>
@endsection