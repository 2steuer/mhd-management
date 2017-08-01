<table class="table">
    <tr>
        @if($checkboxes)
        <th></th>
        @endif
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
        @if($checkboxes)
        <td>{{ Form::checkbox('users[]', $user->id, false, ['class'=>'form-check-input']) }}</td>
        @endif
        <td>{{ $user->last_name }}</td>
        <td>{{ $user->first_name }}</td>
        <td>{{ $user->default_phone()->number }}</td>
        <td class="quali quali-{{ $user->qualification->id }}">{{ $user->qualification->abbreviation }}</td>
        <td class="tquali tquali-{{ $user->tactical_qualification->id }}">{{ $user->tactical_qualification->abbreviation }}</td>
        <td class="license license-{{ $user->driver_license->id }}">{{ $user->driver_license->name }}</td>
        <td>{{ $user->comment }}</td>

        @foreach($vehicles as $vehicle)
            @if($user->has_vehicle($vehicle->id))
                <td class="centered yes"><span class="glyphicon glyphicon-ok"></span></td>
            @else
                <td class="centered no"><span class="glyphicon glyphicon-remove"></span></td>
            @endif

        @endforeach
    </tr>
    @endforeach
</table>