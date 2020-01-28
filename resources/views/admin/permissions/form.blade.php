<div class="form-group">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', '', array('class' => 'form-control')) }}
</div>
@if(!$roles->isEmpty())
<h4>Assign Permission to Roles</h4>
@foreach ($roles as $role)
{{ Form::checkbox('roles[]',  $role->id ) }}
{{ Form::label($role->name, ucfirst($role->name)) }}
@endforeach
@endif
<br>
{{ Form::submit('Add', array('class' => 'btn btn-primary', 'name' => 'submitButton')) }}
