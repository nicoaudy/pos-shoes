@extends('laraboi.app')

@section('content')
<div class="container">
	@include('include.error-list')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Create New User
					<div class="text-right">
						<a href="{{ route('admin.users.index') }}" title="Back">
							<button class="btn btn-warning">
								<i class="fa fa-arrow-left" aria-hidden="true"></i> Back
							</button>
						</a>
					</div>
				</div>
				<div class="card-body">
					{!! Form::open([
						'route' => 'admin.users.store',
						'class' => 'form-horizontal',
						'files' => true,
						'onsubmit' => "submitButton.disabled = true"
					]) !!}

					@include('admin.users.form')

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
