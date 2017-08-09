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
                {!! Html::glyphLink(route('tactics.vehicles.moveUp', $vehicle->id), 'arrow-up') !!}
                {!! Html::glyphLink(route('tactics.vehicles.moveDown', $vehicle->id), 'arrow-down') !!}
            </td>
            <td>
                {!! Html::glyphLink(route('tactics.vehicles.edit', $vehicle->id), 'edit') !!}
                {!! Html::glyphLink(route('tactics.vehicles.confirmdelete', $vehicle->id), 'remove') !!}
            </td>
        </tr>
    @endforeach
</table>