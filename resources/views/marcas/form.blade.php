<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_mar') }}
            {{ Form::text('nombre_mar', $marcas->nombre_mar, ['class' => 'form-control' . ($errors->has('nombre_mar') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Mar']) }}
            {!! $errors->first('nombre_mar', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>