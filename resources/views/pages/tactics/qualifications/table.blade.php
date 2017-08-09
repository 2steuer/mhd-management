<table class="table">
    <tr>
        <th>Bezeichnung</th>
        <th>Kürzel</th>
        <th>Sortierung</th>
        <th>Aktionen</th>
    </tr>

    @foreach($models as $quali)
        <tr>
            <td>{{ $quali->name }}</td>
            <td>{{ $quali->abbreviation }}</td>
            <td>
                {!! Html::glyphLink(route('tactics.qualifications.moveUp', $quali->id), 'arrow-up') !!}
                {!! Html::glyphLink(route('tactics.qualifications.moveDown', $quali->id), 'arrow-down') !!}
            </td>
            <td>
                {!! Html::glyphLink(route('tactics.qualifications.edit', $quali->id), 'edit') !!}
                {!! Html::glyphLink(route('tactics.qualifications.confirmdelete', $quali->id), 'remove') !!}
            </td>
        </tr>
    @endforeach
</table>