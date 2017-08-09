<table class="table">
    <tr>
        <th>Bezeichnung</th>
        <th>Sortierung</th>
        <th>Aktionen</th>
    </tr>

    @foreach($models as $license)
        <tr>
            <td>{{ $license->name }}</td>
            <td>
                {!! Html::glyphLink(route('tactics.driver_licenses.moveUp', $license->id), 'arrow-up') !!}
                {!! Html::glyphLink(route('tactics.driver_licenses.moveDown', $license->id), 'arrow-down') !!}
            </td>
            <td>
                {!! Html::glyphLink(route('tactics.driver_licenses.edit', $license->id), 'edit') !!}
                {!! Html::glyphLink(route('tactics.driver_licenses.confirmdelete', $license->id), 'remove') !!}
            </td>
        </tr>
    @endforeach
</table>