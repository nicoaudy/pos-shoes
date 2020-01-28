<div class="form-group pb-1">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', null, array('class' => 'form-control r-0 light s-12')) }}
</div>
<div class="form-group pb-1">
	{{ Form::label('username', 'Username') }}
	{{ Form::text('username', null, array('class' => 'form-control r-0 light s-12')) }}
</div>
<div class="form-group pb-1">
	{{ Form::label('email', 'Email') }}
	{{ Form::email('email', null, array('class' => 'form-control r-0 light s-12')) }}
</div>
<h4>Roles</h4>
<div class="form-group pb-1">
	@foreach ($roles as $role)
	{{ Form::checkbox('roles[]',  $role->id, $user->roles ?? null ) }}
	{{ Form::label($role->name, ucfirst($role->name)) }}<br>
	@endforeach
</div>
<div class="form-group pb-1">
	{{ Form::label('password', 'Password') }}<br>
	{{ Form::password('password', array('class' => 'form-control r-0 light s-12')) }}
</div>
<div class="form-group pb-1">
	{{ Form::label('password', 'Confirm Password') }}<br>
	{{ Form::password('password_confirmation', array('class' => 'form-control r-0 light s-12')) }}
</div>

<div class="form-group pb-1">
	{{ Form::submit('Submit', array('class' => 'btn btn-primary btn-lg', 'name' => 'submitButton')) }}
</div>
