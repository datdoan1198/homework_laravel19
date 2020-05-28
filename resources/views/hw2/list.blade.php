@extends('hw2.layouts.master')

@section('title')
	list
@endsection

@section('content')


	@foreach ($list as $key => $value)

		@if($value['status'] == 0 )

			<p>với status = {{ $value['status'] }} ( {{ $value['name'] }} ) -> Chưa làm </p>


		@elseif ($value['status'] == 1)

			<p>với status = {{ $value['status'] }} ( {{ $value['name'] }} ) -> Đã hoàn thành</p>

		@elseif($value['status'] == -1)

			<p>với status = {{ $value['status'] }} ( {{ $value['name'] }} ) -> Không thực hiện</p>

		@else

			<p>{{ $value['name'] }} -> ....</p>

		@endif

	@endforeach
@endsection