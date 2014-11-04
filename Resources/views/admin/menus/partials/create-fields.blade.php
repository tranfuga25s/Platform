<div class='form-group{{ $errors->has('name') ? ' has-error' : '' }}'>
    {!! Form::label('name', trans('menu::menu.form.name')) !!}
    {!! Form::text('name', Input::old('name'), ['class' => 'form-control', 'placeholder' => trans('menu::menu.form.name')]) !!}
    {!! $errors->first('Name', '<span class="help-block">:message</span>') !!}
</div>
<div class="checkbox">
    <label for="status">
        <input id="status"
                name="status"
                type="checkbox"
                class="flat-blue"

                value="1" />
        {{ trans('menu::menu.form.status') }}
    </label>
</div>
