<table class="table">
    <tr>
        <th>Name</th>
        <th>Kennzeichen</th>
        <th>Sortierung</th>
        <th>Aktionen</th>
    </tr>

    @foreach($models as $vehicle)
        <tr>
            <td>{{ $vehicle->name }}</td>
            <td>{{ $vehicle->license }}</td>
            <td>
                {!! Html::glyphLink(route('vehicles.moveUp', $vehicle->id), 'arrow-up') !!}
                {!! Html::glyphLink(route('vehicles.moveDown', $vehicle->id), 'arrow-down') !!}
            </td>
            <td>
                {!! Html::glyphLink(route('vehicles.edit', $vehicle->id), 'edit') !!}
                {!! Html::glyphLink(route('vehicles.confirmdelete', $vehicle->id), 'remove') !!}
            </td>
        </tr>
    @endforeach
</table>