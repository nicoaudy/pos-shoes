@extends('laraboi.app')

@section('content')
	<div class="nk-block-head">
		<div class="nk-block-head-sub">
			<a class="back-to" href="{{ route('admin.permissions.index') }}"><em class="icon ni ni-arrow-left"></em><span>Permission Lists</span></a>
		</div>
	</div>
	<div class="nk-block nk-block-lg">
		<div class="card card-bordered">
			<div class="card-inner">
				@include('include.error-list')

				{!! Form::open([
					'route' => 'admin.permissions.store',
					'class' => 'form-horizontal',
					'files' => true,
					'onsubmit' => "submitButton.disabled = true"
				]) !!}

				@include('admin.permissions.form')

				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection