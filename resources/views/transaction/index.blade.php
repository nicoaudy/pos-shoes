@extends('laraboi.app')

@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Transactions Lists</h3>
                <div class="nk-block-des text-soft">
					<p>List all Transactions</p>
                </div>
            </div>
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li>
                                <a href="{{ url('/transaction/create') }}" class="btn btn-primary">
                                    <em class="icon ni ni-plus"></em>
                                    <span>Create New Transaction</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner-group">
                <div class="card-inner position-relative card-tools-toggle">
                    <div class="card-title-group">
                        <div class="card-tools">
                            <div class="form-inline flex-nowrap gx-3">
                                <div class="form-wrap w-150px"></div>
                                <div class="btn-wrap"></div>
                            </div>
                        </div>
                        <div class="card-tools mr-n1">
                            <ul class="btn-toolbar gx-1">
                                <li>
                                    <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-search search-wrap" data-search="search">
                        <div class="card-body">
                            <div class="search-content">
                                <a href="#" class="search-back btn btn-icon toggle-search" data-target="search">
                                    <em class="icon ni ni-arrow-left"></em>
                                </a>
                                {!! Form::open(['method' => 'GET', 'url' => '/transaction'])  !!}
                                    <input type="text" name="search" class="form-control border-transparent form-focus-none" placeholder="Search...">
                                    <button type="submit" class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-inner p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th><th>Customer</th><th>Code Number</th><th>Discount</th><th>Sub Total</th><th>Total</th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($transaction as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
										<td>{{ $item->customer->name ?? null }}</td><td>{{ $item->code_number }}</td><td>{{ $item->discount }}</td><td>{{ $item->sub_total }}</td><td>{{ $item->total }}</td>
                                        <td>
                                            <a href="{{ url('/transaction/' . $item->id) }}" title="View Transaction"><button class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/transaction/' . $item->id . '/edit') }}" title="Edit Transaction"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/transaction', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger',
                                                        'title' => 'Delete Transaction',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ config('laravelmanthra.view_columns_number') + 2 }}">
                                            Data not found, <a href="{{ url('/transaction/create') }}"> create new </a>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-inner">
                    <div class="pagination-wrapper"> {!! $transaction->appends(['search' => Request::get('search')])->render() !!} </div>
                </div>
            </div>
        </div>
    </div>

    @include('manthra::include.flash_message')
@endsection
