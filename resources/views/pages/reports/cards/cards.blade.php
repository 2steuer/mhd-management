<html>
<head>
        <title>Taktikkarten</title>
    <style type="text/css">
        @include('pages.reports.css.stylesheet')

        .card {
            width: 15cm;
            height: 8cm;
            border: 1px dashed black;
            font-family: Calibri;
            display: inline-block;
        }

        .name {
            height: 2.5cm;
            width: 100%;
            border-bottom: 0.5mm solid black;
            text-align: center;
            font-size: 1.5cm;

        }
        .quali_row {
            height: 2cm;
            width: 100%;
            border-bottom: 1mm solid black;
        }

        .card-cell {
            width: 2.5cm;
            height: 100%;
            display: block;
            float: left;
            border: 0;
            padding: 0;
            margin: 0;
            border-right: 0.5mm solid black;
            font-size: 1.2cm;
        }

        .comment {
            text-align: center;
            color: red;
            font-size: 1.2cm;
            height: 100%;
        }

        .vehicle_row {
            height: 1cm;
            width: 100%;

            border-bottom: 1mm solid black;
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
            height: 2cm;
            width: 100%;

            text-align: center;
            font-size: 1.2cm;
        }

        span {
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
            <span>{{ $user->first_name }} {{ $user->last_name }}</span>
        </div>
        <div class="quali_row">
            <div class="card-cell quali quali-{{ $user->qualification->id }}">
                <span>{{ $user->qualification->abbreviation }}</span>
            </div>
            <div class="card-cell tquali tquali-{{ $user->tactical_qualification->id }}">
                <span>{{ $user->tactical_qualification->abbreviation }}</span>
            </div>
            <div class="card-cell license license-{{ $user->driver_license->id }}">
                <span>{{ $user->driver_license->name }}</span>
            </div>
            <div class="comment">
                <span>{{ $user->comment }}</span>
            </div>
        </div>
        <div class="vehicle_row">
            @foreach($vehicles as $vehicle)
                <div class="vehicle-cell {{ $user->has_vehicle($vehicle->id) ? 'yes' : 'no'}}">
                    <span>{{ $vehicle->abbreviation }}</span>
                </div>
            @endforeach
        </div>
        <div class="number">
            <span>{{ $user->default_phone()->number }}</span>
        </div>
    </div>
@endforeach
</body>
</html>