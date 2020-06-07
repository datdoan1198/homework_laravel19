@extends('layouts.master')

@section('content')
	<a class="btn btn-info" href="{{ route('Task.create') }}">add</a>
	<table class="table table-hover">
		<thead>
			<tr>
				
				<th>name</th>
				<th>deline</th>
				<th>sdsd</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $value)
			<tr>
				<td>{{ $value['name'] }}</td>
				<td>{{ $value['deadline'] }}</td>
				<td>{{ $value['status'] }}</td>
				<td style="width: 10%;">
					@if ($value['status'] == 1)

						<a class="btn btn-info" href="{{ route('Task.complete',['id'=>$value['id']]) }}">Hoàn Thành</a>
					@else
						<a class="btn btn-success" href="{{ route('Task.reComplete',['id'=>$value['id']]) }}">Làm lại</a>
					@endif
					
				</td>
				<td >
					<a class="btn btn-primary" href="{{ route('Task.edit',['Task'=>$value['id']]) }}">sửa</a>
				</td>
				<td>
					<form action="{{ route('Task.destroy',['Task'=>$value['id']]) }}" method="post" >
						 @method('delete') 
						{{ csrf_field() }}
						<input class="btn btn-danger" type="submit" value="delete">
					</form>
				</td>
				
			</tr>
				
			@endforeach
		</tbody>
	</table>

	
	
@endsection