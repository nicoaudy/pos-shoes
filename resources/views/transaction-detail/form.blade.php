<div class="form-group {{ $errors->has('transaction_id') ? 'has-error' : ''}}">
    {!! Form::label('transaction_id', 'Transaction Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('transaction_id', null, ['class' => ($errors->has('transaction_id')) ? 'form-control is-invalid' : 'form-control']) !!}

        {!! $errors->first('transaction_id', '<div class="invalid-feedback d-block">:message</div>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    {!! Form::label('category_id', 'Category Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('category_id', null, ['class' => ($errors->has('category_id')) ? 'form-control is-invalid' : 'form-control']) !!}

        {!! $errors->first('category_id', '<div class="invalid-feedback d-block">:message</div>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => ($errors->has('description')) ? 'form-control is-invalid' : 'form-control']) !!}

        {!! $errors->first('description', '<div class="invalid-feedback d-block">:message</div>') !!}
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
