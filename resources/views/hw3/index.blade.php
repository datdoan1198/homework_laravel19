@extends('layouts.master')

@section('content')
	<a class="btn btn-info" href="{{ route('Task.create') }}">add</a>
	<table class="table table-hover">
		<thead>
			<tr>
				
				<th>name</th>
				<th>deline</th>
				<th>content</th>
				<th>status</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $value)
			<tr>
				<td>{{ $value['name'] }}</td>
				<td>{{ $value['deadline'] }}</td>
				<td>{{ $value['content'] }}</td>
				<td>{{ $value['status'] }}</td>
				<td>
					<form action="{{ route('Task.destroy',['Task'=>$value['id']]) }}" method="post" >
						 @method('delete') 
						{{ csrf_field() }}
						<input class="btn btn-danger" type="submit" value="delete">
					</form>
					{{-- <a class="btn btn-info" href="{{ route('Task.complete',['id'=>1]) }}">Hoan Thanh</a>
					<a class="btn btn-success" href="{{ route('Task.reComplete',['id'=>1]) }}">Lam Lai</a> --}}
				</td>
				<td></td>
			</tr>
				
			@endforeach
		</tbody>
	</table>

	
	
@endsection