@extends('hw2.layouts.master')

@section('content')
	<p>first and last name : {{ $name }}</p>
	<p>year of birth : {{ $year }}</p>
	<p>Schools : {{ $schools }}</p>
	<p>address: {{ $address }}</p>
	<p>Introduce Yourself : {!! $introduce_yourself !!}</p>
	<p>Taget : {{ $target }}</p>
@endsection