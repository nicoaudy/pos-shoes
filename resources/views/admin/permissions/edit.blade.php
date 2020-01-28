@extends('laraboi.app')

@section('content')
<div class="container">
	@include('include.error-list')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Edit Permission
					<div class="text-right">
						<a href="{{ route('admin.permissions.index') }}" title="Back">
							<button class="btn btn-warning">
								<i class="fa fa-arrow-left" aria-hidden="true"></i> Back
							</button>
						</a>
					</div>
				</div>
				<div class="card-body">
					{{ Form::model($permission, [
						'route' => [ 'admin.permissions.update', $permission->id ],
						'method' => 'PUT',
						'files' => true ,
						'class' => 'form-horizontal',
						'onsubmit' => "submitButton.disabled = true"
					]) }}

					@include('admin.roles.form')

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection