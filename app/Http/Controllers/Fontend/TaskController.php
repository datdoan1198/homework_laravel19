<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;
use Carbon\Carbon;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Task = Task::all();
       
        return view('hw3.index',[
            'data'=>$Task
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('hw3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $task = new task();

        $task->name = $data['name'];
        $task->content = $data['content'];
        $task->deadline = $data['deline'];
        $task->status = $data['status'];
        $task->priority = $data['priority'];
        $task->save();  

        return redirect('/Task');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo 'day la show '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Task::find($id);
        $dt = str_replace(' ', 'T', $data['deadline']);
       return view('hw3.edit',[
            'data'=>$data,
            'dt' =>$dt,
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $data_new = $request->all();
       $data = Task::find($id);

       $data->name = $data_new['name'];
       $data->content = $data_new['content'];
       $data->deadline = str_replace('T', ' ', $data_new['deline']);
       $data->priority = $data_new['priority']; 
       $data->save();
       return redirect()->route('Task.index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Task = new Task();
        $Task->destroy($id);
        return redirect('/Task');
    }

    public function complete($id)
    {
        $finish = Task::find($id);
        $finish->status = '2';
        $finish->save();
        return redirect()->route('Task.index');
    }

    public function reComplete($id)
    {
        $finish = Task::find($id);
        $finish->status = '1';
        $finish->save();
        return redirect()->route('Task.index');
    }
}
