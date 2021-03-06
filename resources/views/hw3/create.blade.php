@extends('layouts.master')

@section('content')
		
<div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thêm công việc mới
            </div>
            <div class="panel-body">
                <!-- New Task Form -->
                <form action="{{ route('Task.store')  }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Mô tả</label>

                        <div class="col-sm-6">
                            <textarea name="content" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Thời hạn hoàn thành</label>

                        <div class="col-sm-6">
                            <input type="datetime-local" name="deline" id="task-deadline" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Mức Độ Ưu Tiên</label>

                        <div class="col-sm-6">
                            <select name="priority" class="form-control">
							  <option value="0">Normal</option>
							  <option value="1">Important</option>
							  <option value="2">Emergency</option>
							</select>
                        </div>
                    </div>
                    <input type="hidden" name="status" value="1">

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Thêm công việc
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


