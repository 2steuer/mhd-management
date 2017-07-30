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
                {!! Html::glyphLink(route('qualifications.moveUp', $quali->id), 'arrow-up') !!}
                {!! Html::glyphLink(route('qualifications.moveDown', $quali->id), 'arrow-down') !!}
            </td>
            <td>
                {!! Html::glyphLink(route('qualifications.edit', $quali->id), 'edit') !!}
                {!! Html::glyphLink(route('qualifications.confirmdelete', $quali->id), 'remove') !!}
            </td>
        </tr>
    @endforeach
</table>