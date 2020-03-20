@extends('laraboi.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Create New Something
                        <div class="text-right">
                            <a href="{{ url('/something') }}" title="Back">
                                <button class="btn btn-warning">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">

                        {!! Form::open([
                            'url' => '/something',
                            'class' => 'form-horizontal',
                            'files' => true,
                            'onsubmit' => "submitButton.disabled = true"
                        ]) !!}

                        @include ('something.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
