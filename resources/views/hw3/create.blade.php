@extends('layouts.master')


@section('content')
		<form action="{{ route('Task.store') }}" method="post">
			
			{{ csrf_field() }}

			<p>name</p>
			<input class="form-control" type="text" name="name">
			<p>deline</p>
			<input class="form-control" type="text" name="deline">
			<input class="btn btn-danger" type="submit"> 		
		</form>
@endsection