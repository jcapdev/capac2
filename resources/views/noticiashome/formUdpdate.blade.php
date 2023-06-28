<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::label($noticiashome->imagen) }}
            {{ Form::file('imagen', ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $noticiashome->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::text('autor', $noticiashome->autor, ['class' => 'form-control' . ($errors->has('autor') ? ' is-invalid' : ''), 'placeholder' => 'Autor']) }}
            {!! $errors->first('autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::date('date', $noticiashome->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time') }}
            {{ Form::text('time', $noticiashome->time, ['class' => 'form-control' . ($errors->has('time') ? ' is-invalid' : ''), 'placeholder' => 'Time']) }}
            {!! $errors->first('time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('place') }}
            {{ Form::text('place', $noticiashome->place, ['class' => 'form-control' . ($errors->has('place') ? ' is-invalid' : ''), 'placeholder' => 'Place']) }}
            {!! $errors->first('place', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $noticiashome->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>