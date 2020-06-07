@extends('layouts.master')

@section('content')
		
<div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Update công việc mới
            </div>
            <div class="panel-body">
                <!-- New Task Form -->
                <form action="{{ route('Task.update',['Task'=>$data->id])  }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="{{ $data->name }}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Mô tả</label>

                        <div class="col-sm-6">
                            <textarea name="content" class="form-control"  >{{ $data->content }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Thời hạn hoàn thành</label>

                        <div class="col-sm-6">
                            <input type="datetime-local" name="deline" id="task-deadline" class="form-control" value="{{  $dt  }}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Mức Độ Ưu Tiên</label>

                        <div class="col-sm-6">
                            <select name="priority" class="form-control">
                                
    							<option value="0" @if ($data->priority == 0)
                                    {{ "selected" }}
                                @endif >Normal</option>
    							<option value="1"  @if ($data->priority == 1)
                                    {{ "selected" }}
                                @endif >Important</option>
    							<option value="2"  @if ($data->priority == 2)
                                    {{ "selected" }}
                                @endif>Emergency</option>
							</select>
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Update công việc
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


