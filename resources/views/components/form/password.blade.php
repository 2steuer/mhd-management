<div class="form-group">
    {{ Form::label($name, $description, ['class' => 'form-label col-sm-2']) }}

    <div class="col-sm-10">
        {{ Form::password($name, array_merge(['class' => 'form-control'], $attributes)) }}
    </div>
</div>