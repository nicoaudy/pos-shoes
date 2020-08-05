@extends('laraboi.app')

@section('content')
	<div class="nk-block-head">
		<div class="nk-block-head-sub">
			<a class="back-to" href="{{ route('admin.roles.index') }}"><em class="icon ni ni-arrow-left"></em><span>Role Lists</span></a>
		</div>
	</div>
	<div class="nk-block nk-block-lg">
		<div class="card card-bordered">
			<div class="card-inner">
				@include('include.error-list')

				{{ Form::model($role, [
					'route' => [ 'admin.roles.update', $role->id ],
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
@endsection

@push('javascript')
<script>
	$('#select-all').click(function(event) {
		if(this.checked) {
			$(':checkbox').each(function() {
				this.checked = true;
			});
		} else {
			$(':checkbox').each(function() {
				this.checked = false;
			});
		}
	});
</script>
@endpush