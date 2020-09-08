<div>
	<div class="form-row">
		<div class="form-group col-md-6 {{ $errors->has('customer_id') ? 'has-error' : ''}}">
			{!! Form::label('customer_id', 'Customer', ['class' => 'control-label']) !!}
			<select wire:model="customer_id" class="form-control {{ $errors->has('customer_id') ? 'is-invalid' : null }}">
				<option value="">Please Select</option>
				@foreach($customers as $c)
					<option value="{{ $c->id }}">{{ $c->name }} - {{ $c->email }}</option>
				@endforeach
			</select>
			{!! $errors->first('customer_id', '<div class="invalid-feedback d-block">:message</div>') !!}
		</div>
		<div class="form-group col-md-6 {{ $errors->has('discount') ? 'has-error' : ''}}">
			{!! Form::label('discount', 'Discount', ['class' => 'control-label']) !!}
			<input type="number" wire:model.lazy="discount" class="form-control {{ $errors->has('discount') ? 'is-invalid' : null }}">
			{!! $errors->first('discount', '<div class="invalid-feedback d-block">:message</div>') !!}
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6 {{ $errors->has('paid') ? 'has-error' : ''}}">
			{!! Form::label('paid', 'Paid', ['class' => 'control-label']) !!}
			<select wire:model="paid" class="form-control {{ $errors->has('paid') ? 'is-invalid' : null }}">
				<option value="">Please Select</option>
				<option value="1">Paid</option>
				<option value="0">Waiting</option>
			</select>
			{!! $errors->first('paid', '<div class="invalid-feedback d-block">:message</div>') !!}
		</div>
	</div>

	<hr>

	<form>
		<div class=" add-input">
			<div class="row">
				<div class="col-md-5">
					<div class="form-group">
						<select wire:model="transactionCategory.0" class="form-control">
							<option value="">Please Select</option>
							@foreach($categories as $cat)
								<option value="{{ $cat->id }}">{{ $cat->name }} - {{ $cat->price }}</option>
							@endforeach
						</select>
						@error('transactionCategory.0') <span class="text-danger error">{{ $message }}</span>@enderror
					</div>
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<input type="text" class="form-control" wire:model="transactionDescription.0" placeholder="Enter Description">
						@error('transactionDescription.0') <span class="text-danger error">{{ $message }}</span>@enderror
					</div>
				</div>
				<div class="col-md-2">
					<button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Add</button>
				</div>
			</div>
		</div>

		@foreach($inputs as $key => $value)
			<div class="mt-2">
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
							<select wire:model="transactionCategory.{{ $value }}" class="form-control" required>
								<option value="">Please Select</option>
								@foreach($categories as $cat)
									<option value="{{ $cat->id }}">{{ $cat->name }} - {{ $cat->price }}</option>
								@endforeach
							</select>
							@error('transactionCategory.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<input type="text" class="form-control" wire:model="transactionDescription.{{ $value }}" placeholder="Enter Description" required>
							@error('transactionDescription.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
						</div>
					</div>
					<div class="col-md-2">
						<button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">remove</button>
					</div>
				</div>
			</div>
		@endforeach

		<hr>
		<div class="form-row">
			<div class="form-group col-md-6">
				{!! Form::label('Sub Total:', '', ['class' => 'control-label']) !!}
				{{ $sub_total }} <br>
			</div>
		</div>

		<div class="form-row mt-4">
			<div class="form-group">
				<button wire:click.prevent="handleSubmit()" class="btn btn-primary">Create</button>
			</div>
		</div>
	</form>
</div>
