@extends('laraboi.app')

@section('content')
	<div class="nk-block-head nk-block-head-lg">
		<div class="nk-block-between-md g-4">
			<div class="nk-block-head-content">
				<h2 class="nk-block-title fw-normal">Permissions</h2>
				<div class="nk-block-des">
					<p>List all permissions</p>
				</div>
			</div>
			<div class="nk-block-head-content">
				<ul class="nk-block-tools gx-3">
					<li>
						<a href="{{ route('admin.permissions.create') }}" class="btn btn-white btn-dim btn-outline-primary">
							<em class="icon ni ni-plus-circle"></em>
							<span><span class="d-none d-sm-inline-block">Create New</span> Permission</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="nk-block">
		<div class="card">
			@include('flash::message')
			<div class="table-responsive">
				<table class="table table-orders">
					{!! $dataTable->table(['class' => 'table table-bordered table-hover table-stripped']) !!}
				</table>
			</div>
		</div>
	</div>
@endsection

@push('javascript')
	@include('shared.wrapperDatatable')
@endpush