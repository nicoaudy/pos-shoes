@extends('laraboi.app')

@section('content')
	<div class="nk-block-head nk-block-head-lg">
		<div class="nk-block-between-md g-4">
			<div class="nk-block-head-content">
				<h2 class="nk-block-title fw-normal">Impersonate</h2>
				<div class="nk-block-des">
					<p>You can acting as other user</p>
				</div>
			</div>
			<div class="nk-block-head-content">
				<ul class="nk-block-tools gx-3">
					<li>
						<a href="#" class="btn btn-white btn-dim btn-outline-primary">
							<em class="icon ni ni-download-cloud"></em><span><span class="d-none d-sm-inline-block">Get</span> Statement</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="nk-block">
		<div class="card">
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