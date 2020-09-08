<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => ($errors->has('name')) ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}

        {!! $errors->first('name', '<div class="invalid-feedback d-block">:message</div>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => ($errors->has('email')) ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}

        {!! $errors->first('email', '<div class="invalid-feedback d-block">:message</div>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    {!! Form::label('phone', 'Phone', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('phone', null, ['class' => ($errors->has('phone')) ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}

        {!! $errors->first('phone', '<div class="invalid-feedback d-block">:message</div>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', 'Address', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('address', null, ['class' => ($errors->has('address')) ? 'form-control is-invalid' : 'form-control']) !!}

        {!! $errors->first('address', '<div class="invalid-feedback d-block">:message</div>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', [
            'class' => 'btn btn-primary',
            'name' => 'submitButton'
        ]) !!}
    </div>
</div>
