<div class="form-group">
    {{ Form::label($name, $description, ['class' => 'form-label col-sm-2']) }}

    <div class="col-sm-10">
        @foreach($values as $id => $val_name)
            <label class="form-control">
            {{ Form::checkbox($name.'[]', $id, in_array($id, $selected), ['class'=>'form-check-input']) }}
            {{ $val_name }}
            </label>
        @endforeach
    </div>
</div>