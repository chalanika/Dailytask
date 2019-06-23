<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskContr extends Controller
{
    public function store(Request $request){
        //dd($request->all());
        $task = new Task;
        $this->validate($request,[
            'task'=>'required|max:100|min:5'
        ]);
        $task->task = $request->task;
        $task->save();
        $data = Task::all();
        //dd($data);
        //return redirect()->back();
        return view('task')->with('tasks',$data);
     }

     public function updateiscompleted($id){
         $task = Task :: find($id);
         $task->iscompleted = 1;
         $task->save();
         return redirect()->back();
     }

     public function updatenot($id){
         $tasks = Task::find($id);
         $tasks->iscompleted = 0;
         $tasks->save();
         return redirect()->back();
     }

     public function delete($id){
         $t = Task ::find($id);
         $t->delete();
         return redirect()->back();
     }

     public function updateview($id){
        $t = Task ::find($id);
        return view('updatetask')->with('result',$t);
     }

     public function updatetask(Request $request){
        
         $data = Task ::find($request->id);
         $data->task = $request->task;
         $data->save();
         $t = Task::all();
         return view('task')->with('tasks',$t);
     }
}
