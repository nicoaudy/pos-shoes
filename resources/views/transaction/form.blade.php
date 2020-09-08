<div class="form-group {{ $errors->has('customer_id') ? 'has-error' : ''}}">
    {!! Form::label('customer_id', 'Customer Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('customer_id', null, ['class' => ($errors->has('customer_id')) ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}

        {!! $errors->first('customer_id', '<div class="invalid-feedback d-block">:message</div>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('code_number') ? 'has-error' : ''}}">
    {!! Form::label('code_number', 'Code Number', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('code_number', null, ['class' => ($errors->has('code_number')) ? 'form-control is-invalid' : 'form-control']) !!}

        {!! $errors->first('code_number', '<div class="invalid-feedback d-block">:message</div>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('discount') ? 'has-error' : ''}}">
    {!! Form::label('discount', 'Discount', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('discount', null, ['class' => ($errors->has('discount')) ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}

        {!! $errors->first('discount', '<div class="invalid-feedback d-block">:message</div>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('sub_total') ? 'has-error' : ''}}">
    {!! Form::label('sub_total', 'Sub Total', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('sub_total', null, ['class' => ($errors->has('sub_total')) ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}

        {!! $errors->first('sub_total', '<div class="invalid-feedback d-block">:message</div>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    {!! Form::label('total', 'Total', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('total', null, ['class' => ($errors->has('total')) ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}

        {!! $errors->first('total', '<div class="invalid-feedback d-block">:message</div>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('paid') ? 'has-error' : ''}}">
    {!! Form::label('paid', 'Paid', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('paid', '1') !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('paid', '0', true) !!} No</label>
</div>
        {!! $errors->first('paid', '<div class="invalid-feedback d-block">:message</div>') !!}
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
