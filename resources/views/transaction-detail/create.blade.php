@extends('laraboi.app')

@section('content')
	<div class="nk-block-head">
		<div class="nk-block-head-sub">
			<a class="back-to" href="{{ url('/transaction-detail') }}">
                <em class="icon ni ni-arrow-left"></em><span>TransactionDetail Lists</span>
            </a>
		</div>
	</div>
	<div class="nk-block nk-block-lg">
		<div class="card card-bordered">
			<div class="card-inner">

				{!! Form::open([
					'url' => '/transaction-detail',
					'class' => 'form-horizontal',
					'files' => true,
					'onsubmit' => "submitButton.disabled = true"
				]) !!}

				@include('transaction-detail.form')

				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
