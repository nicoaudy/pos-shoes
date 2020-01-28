@extends('laraboi.app')

@section('content')
<div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="#">Impersonate</a>
                    </li>
                </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Impersonate</h4>
        </div>
    </div>
    @include('flash::message')
	<div class="card">
		<div class="card-header pd-y-20 d-md-flex align-items-center justify-content-between">
			<div class="table-responsive">
				{!! $dataTable->table(['class' => 'table table-bordered table-hover table-stripped']) !!}
			</div>
		</div>
	</div>
</div>
@endsection

@push('javascript')
	@include('shared.wrapperDatatable')
@endpush