<div class="form-group">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', null, array('class' => 'form-control')) }}
</div>
<h4>Assign Permissions</h4>
<div class='form-group'>
	@foreach ($permissions as $permission)
	{{Form::checkbox('permissions[]', $permission->id, $role->permissions ?? null ) }}
	{{ Form::label($permission->name, ucfirst($permission->name)) }}<br>
	@endforeach
</div>
{{ Form::submit('Submit', array('class' => 'btn btn-primary', 'name' => 'submitButton')) }}
