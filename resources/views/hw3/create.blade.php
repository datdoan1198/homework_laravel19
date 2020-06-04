@extends('layouts.master')

@section('content')
		<form action="{{ route('Task.store') }}" method="post">
			
			{{ csrf_field() }}

			<p>name</p>
			<input class="form-control" type="text" name="name">
			<p>Content</p>
			<input class="form-control" type="text" name="content">
			<p>deline</p>
			<input class="form-control" type="text" name="deline">
			<input class="form-control" type="hidden" name="status" value="1">
			<input class="btn btn-danger" type="submit"> 		
		</form>
@endsection