@extends('layouts.master')

@section('content')
	<a class="btn btn-info" href="{{ route('Task.create') }}">add</a>
	<table class="table table-hover">
		<thead>
			<tr>
				
				<th>name</th>
				<th>deline</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>dat</td>
				<td>12121</td>
				<td>
					<form action="{{ route('Task.destroy',['Task'=>1]) }}" method="post" >
						 @method('delete') 
						{{ csrf_field() }}
						<input class="btn btn-danger" type="submit" value="delete">
					</form>
					<a class="btn btn-info" href="{{ route('Task.complete',['id'=>1]) }}">Hoan Thanh</a>
					<a class="btn btn-success" href="{{ route('Task.reComplete',['id'=>1]) }}">Lam Lai</a>
				</td>
				<td></td>
			</tr>
			<tr>	
				<td>minh</td>
				<td>sdsd</td>
				<td>
					<form action="{{ route('Task.destroy',['Task'=>2]) }}" method="post" >
						 @method('delete') 
						{{ csrf_field() }}
						<input class="btn btn-danger"  type="submit" value="delete">
					</form>
					<a class="btn btn-info" href="{{ route('Task.complete',['id'=>2]) }}">Hoan Thanh</a>
					<a class="btn btn-success" href="{{ route('Task.reComplete',['id'=>2]) }}">Lam Lai</a>
				</td>
			</tr>
		</tbody>
	</table>
@endsection