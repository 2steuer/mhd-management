{{ Form::open(['route' => $form_route, 'method' => 'post', 'class' => 'form-horizontal']) }}

@include($form_partial, ['model' => null])

<div class="form-group">
    <div class="col-sm-6">
        <a href="{{ route($back_route) }}" class="btn btn-default form-control">Zurück</a>
    </div>

    <div class="col-sm-6">
        {{ Form::submit('Erstellen', ['class' => 'btn btn-primary form-control']) }}
    </div>
</div>


{{ Form::close() }}