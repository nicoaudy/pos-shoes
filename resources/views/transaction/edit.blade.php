@extends('laraboi.app')

@section('content')
	<div class="nk-block-head">
		<div class="nk-block-head-sub">
			<a class="back-to" href="{{ url('/transaction') }}">
                <em class="icon ni ni-arrow-left"></em><span>Transaction Lists</span>
            </a>
		</div>
	</div>
	<div class="nk-block nk-block-lg">
		<div class="card card-bordered">
			<div class="card-inner">
                {!! Form::model($transaction, [
                    'method' => 'PATCH',
                    'url' => ['/transaction', $transaction->id],
                    'class' => 'form-horizontal',
                    'files' => true,
                    'onsubmit' => "submitButton.disabled = true"
                ]) !!}

                @include ('transaction.form', ['submitButtonText' => 'Update'])

                {!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
