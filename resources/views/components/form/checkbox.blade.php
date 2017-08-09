<div class="form-group">
    {{ Form::label($name, $description, ['class' => 'form-label col-sm-3']) }}

    <div class="col-sm-9">
        {{ Form::hidden($name, '0') }}
        {{ Form::checkbox($name, '1', null, ['class'=>'form-check-input']) }}
    </div>
</div>