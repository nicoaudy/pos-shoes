@extends('laraboi.app')

@section('content')
	<div class="nk-block-head">
		<div class="nk-block-head-sub">
			<a class="back-to" href="{{ url('/category') }}">
                <em class="icon ni ni-arrow-left"></em><span>Category Lists</span>
            </a>
		</div>
	</div>
	<div class="nk-block nk-block-lg">
		<div class="card card-bordered">
			<div class="card-inner">
                {!! Form::model($category, [
                    'method' => 'PATCH',
                    'url' => ['/category', $category->id],
                    'class' => 'form-horizontal',
                    'files' => true,
                    'onsubmit' => "submitButton.disabled = true"
                ]) !!}

                @include ('category.form', ['submitButtonText' => 'Update'])

                {!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
