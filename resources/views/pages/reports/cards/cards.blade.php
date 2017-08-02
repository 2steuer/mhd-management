<html>
<head>
        <title>Taktikkarten</title>
    <style type="text/css">
        @include('pages.reports.css.stylesheet')

        .card {
            width: 12.7cm;
            height: 5.2cm;
            border: 1px dashed black;
            font-family: Calibri;
            display: inline-block;
        }

        .name {
            height: calc(2cm - 0.1mm);
            width: 100%;
            border-bottom: 0.1mm solid black;
            text-align: center;
            font-size: 1.2cm;

        }
        .quali_row {
            height: calc(1.0cm - 1mm);
            width: 100%;
            border-bottom: 1mm solid black;
            font-size: 0.7cm;
        }

        .quali_row_headings {
            height: 0.3cm;
            width: 100%;
            border-bottom: 0.1mm solid black;
        }

        .heading {
            display: block;
            float:left;
            height: 100%;
            font-size: 0.3cm;
            text-align: left;
            padding-left: 2mm;
        }

        .heading-cell {
            width: 1.9cm;
            border-right: 0.1mm solid black;
        }

        .card-cell {
            width: 2.1cm;
            height: 100%;
            display: block;
            float: left;
            border: 0;
            padding: 0;
            margin: 0;
            border-right: 0.1mm solid black;
        }

        .comment {
            text-align: center;
            color: red;
            height: 100%;
        }

        .vehicle_row {
            height: 0.7cm;
            width: 100%;

            border-bottom: 1mm solid black;
            font-size: 0.4cm;
        }

        .vehicle-cell {
            width: {{ 100.0 / $vehicles->count() }}%;
            height: 100%;
            display: block;
            float: left;
            border: 0;
            padding: 0;
            margin: 0;
            text-align: center;
            font-weight:bold;
        }

        .number {
            height: 1cm;
            width: 100%;

            text-align: center;
            font-size: 0.8cm;
        }

        span.content {
            display: block;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>
<body>
@foreach($users as $user)
    <div class="card">
        <div class="name">
            <span class="content">{{ $user->first_name }} {{ $user->last_name }}</span>
        </div>
        <div class="quali_row_headings">
            <div class="heading heading-cell">
                <span class="content">Med. Qual.</span>
            </div>
            <div class="heading heading-cell">
                <span class="content">Takt. Qual.</span>
            </div>
            <div class="heading heading-cell">
                <span class="content">Führerschein</span>
            </div>
            <div class="heading">
                <span class="content">Bemerkungen</span>
            </div>
        </div>
        <div class="quali_row">
            <div class="card-cell quali quali-{{ $user->qualification->id }}">
                <span class="content">{{ $user->qualification->abbreviation }}</span>
            </div>
            <div class="card-cell tquali tquali-{{ $user->tactical_qualification->id }}">
                <span class="content">{{ $user->tactical_qualification->abbreviation }}</span>
            </div>
            <div class="card-cell license license-{{ $user->driver_license->id }}">
                <span class="content">{{ $user->driver_license->name }}</span>
            </div>
            <div class="comment">
                <span class="content">{{ $user->comment }}</span>
            </div>
        </div>
        <div class="vehicle_row">
            @foreach($vehicles as $vehicle)
                <div class="vehicle-cell {{ $user->has_vehicle($vehicle->id) ? 'yes' : 'no'}}">
                    <span class="content">{{ $vehicle->abbreviation }}</span>
                </div>
            @endforeach
        </div>
        <div class="number">
            <span class="content">{{ $user->default_phone()->number }}</span>
        </div>
    </div>
@endforeach
</body>
</html>