@extends('laraboi.app')

@section('content')
	<div class="nk-block-head">
		<div class="nk-block-head-sub">
			<a class="back-to" href="{{ url('/customer') }}">
                <em class="icon ni ni-arrow-left"></em><span>Customer Lists</span>
            </a>
		</div>
	</div>
	<div class="nk-block nk-block-lg">
		<div class="card card-bordered">
			<div class="card-inner">

				{!! Form::open([
					'url' => '/customer',
					'class' => 'form-horizontal',
					'files' => true,
					'onsubmit' => "submitButton.disabled = true"
				]) !!}

				@include('customer.form')

				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
