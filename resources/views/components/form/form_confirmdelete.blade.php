{{ Form::open(['route' => $route, 'method' => 'delete', 'class'=>'form-horizontal']) }}

<div class="form-group">
    <div class="col-sm-6">
        {{ Form::submit('Ja, löschen!', ['class' => 'btn btn-default form-control']) }}
    </div>

    <div class="col-sm-6">
        <a href="{{ route($back_route) }}" class="btn btn-primary form-control">Nein, zurück</a>
    </div>
</div>

{{ Form::close() }}