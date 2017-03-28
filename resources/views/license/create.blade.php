@extends('layouts.app')

@section('title', 'Add a License')

@section('content')

{{ Form::open(array('route' => 'license.store')) }}

{{ Form::label('vendor', 'Vendor Name') }}
{{ Form::text('vendor') }}
{{ Form::label('license_slug', 'License Slug') }}
{{ Form::text('license_slug') }}
{{ Form::label('starts', 'License Starts') }}
{{ Form::date('starts', \Carbon\Carbon::now()) }}
{{ Form::label('ends', 'License Expires') }}
{{ Form::date('ends', \Carbon\Carbon::now()) }}
{{ Form::label('public', 'Public Access') }}
{{ Form::checkbox('public', 'public') }}
{{ Form::submit('Add License') }}

{{ Form::close() }}

@endsection