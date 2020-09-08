@extends('laraboi.app')

@section('content')
    <div class="nk-block-head nk-block-head-lg">
        <div class="nk-block-head-sub"><a class="back-to" href="{{ url('/category') }}">
            <em class="icon ni ni-arrow-left"></em>
            <span>Category Lists</span></a>
        </div>
        <div class="nk-block-between-md g-4">
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">
                    Category {{ $category->id }}
                </h2>
                <div class="nk-block-des">
                    <p>
                        Category detail subtitle
                        <span class="text-primary"><em class="icon ni ni-info"></em></span>
                    </p>
                </div>
            </div>
            <div class="nk-block-head-content">
                <ul class="nk-block-tools justify-content-md-end g-4 flex-wrap">
                    <li>
                        <a href="{{ url('/category/' . $category->id . '/edit') }}" class="btn btn-auto btn-dim btn-info">
                            <em class="icon ni ni-cross"></em><span>Edit</span>
                        </a>
                    </li>
                    <li>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['category', $category->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<em class="icon ni ni-cross"></em><span>Remove</span>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-auto btn-dim btn-danger',
                                    'title' => 'Delete Category',
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
                                <th>ID</th><td>{{ $category->id }}</td>
                            </tr>
                            <tr><th> Name </th><td> {{ $category->name }} </td></tr><tr><th> Price </th><td> {{ $category->price }} </td></tr><tr><th> Description </th><td> {{ $category->description }} </td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
