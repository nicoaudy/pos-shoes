<div class="form-group">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', null, array('class' => 'form-control')) }}
</div>
{{ Form::submit('Add', array('class' => 'btn btn-primary', 'name' => 'submitButton')) }}
