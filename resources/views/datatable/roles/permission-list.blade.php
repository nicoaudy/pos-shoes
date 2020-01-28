<ul>
@foreach ($row->permissions()->pluck('name') as $item)
	<li>{{ $item }}</li>
@endforeach
</ul>
