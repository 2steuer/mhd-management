<div class="form-group">
    {{ Form::label($name, $description, ['class' => 'form-label col-sm-3']) }}

    <div class="col-sm-9">
        {{ Form::textarea($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    </div>
</div>