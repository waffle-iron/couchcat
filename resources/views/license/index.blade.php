@extends('layouts.app')

@section('title', 'Licenses')

@section('content')
<ul>
@foreach($licenses as $license)

<li>{{ $license }}</li>

@endforeach
</ul>
@endsection