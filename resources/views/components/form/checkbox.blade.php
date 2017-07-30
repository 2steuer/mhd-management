<div class="form-group">
    {{ Form::label($name, $description, ['class' => 'form-label col-sm-2']) }}

    <div class="col-sm-10">
        {{ Form::hidden($name, '0') }}
        {{ Form::checkbox($name, '1') }}
    </div>
</div>