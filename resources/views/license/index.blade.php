@extends('layouts.app')

@section('title', 'Licenses')

@section('content')
<table>
	<thead>
		<tr>
		<th class='td-3'>Vendor</th>
		<th class='td-2'>Catalog Licensee</th>
		<th class='td-1'>Starts</th>
		<th class='td-1'>Expires</th>
		<th class='td-1'>Public</th>
		<th class='td-1'>Works</th>
		<th class='td-2'>Actions</th>
		</tr>
	</thead>
	<tbody>
	@foreach($licenses as $license)
		<tr>
			<td class='td-3'>{{ $license['vendor'] }}</td>
			<td class='td-2'>{{ $license['license-stub'] }}</td>
			<td class='td-1'>{{ $license['starts'] }}</td>
			<td class='td-1'>{{ $license['expires'] }}</td>
			<td class='td-1'>{{ $license['public'] }}</td>
			<td class='td-1'>-</td>
			<td class='td-2'><a href="{{ route('license.edit',['id' => $license['id']]) }}">Edit</a></td>
		</tr>
@endforeach
	</tbody>
</table>
<a href='{{ route('license.create') }}' class='btn'>Add License</a>
@endsection