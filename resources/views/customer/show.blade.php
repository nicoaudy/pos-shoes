@extends('laraboi.app')

@section('content')
    <div class="nk-block-head nk-block-head-lg">
        <div class="nk-block-head-sub"><a class="back-to" href="{{ url('/customer') }}">
            <em class="icon ni ni-arrow-left"></em>
            <span>Customer Lists</span></a>
        </div>
        <div class="nk-block-between-md g-4">
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">
                    Customer {{ $customer->id }}
                </h2>
                <div class="nk-block-des">
                    <p>
                        Customer detail subtitle
                        <span class="text-primary"><em class="icon ni ni-info"></em></span>
                    </p>
                </div>
            </div>
            <div class="nk-block-head-content">
                <ul class="nk-block-tools justify-content-md-end g-4 flex-wrap">
                    <li>
                        <a href="{{ url('/customer/' . $customer->id . '/edit') }}" class="btn btn-auto btn-dim btn-info">
                            <em class="icon ni ni-cross"></em><span>Edit</span>
                        </a>
                    </li>
                    <li>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['customer', $customer->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<em class="icon ni ni-cross"></em><span>Remove</span>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-auto btn-dim btn-danger',
                                    'title' => 'Delete Customer',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nk-block nk-block-lg">
		<div class="card card-bordered">
			<div class="card-inner">
                <div class="table-responsive py-4">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th>ID</th><td>{{ $customer->id }}</td>
                            </tr>
                            <tr><th> Name </th><td> {{ $customer->name }} </td></tr><tr><th> Email </th><td> {{ $customer->email }} </td></tr><tr><th> Address </th><td> {{ $customer->address }} </td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
