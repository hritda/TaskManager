<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class TaskController extends Controller
{   public function index(){
    return view('welcome',['tasks'=>Task::where('status','!=','Completed')->get()]);
}
public function updateStatus($id,Request $request){
   
    $task = Task::find($id);
    $status = $request->query('status');
    $task->status = $status;
    $task->save();
    return redirect('/');
}
    public function store(Request $request){
        
        $newTask = new Task;
        $newTask->title = $request->taskTitle;
        $newTask->description = $request->taskDescription;
        $newTask->status = "Pending";
        $newTask->save();
        return redirect('/');
    }
    public function create(){
        return view('createtask');
    }
    public function edit($id){
        return view('edittask',['task'=>Task::where('id',$id)->first()]);
    }
    public function update(Request $request,$id){
        
        return "hello $id";
    }
    public function login(){
        return view('login');
    }
    public function userAuthentication(Request $request){
        // $validator = Validator::make($request->all([
        //     'email'=>'required|email',
        //     'password'=>'required',
        // ]));
        //return "Helloooo00";
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->get('remember'))){
           $admin = Auth::guard('admin')->user();
            
            return view('welcome',['tasks'=>Task::where('status','!=','Completed')->get(),'role'=>$admin->role]);
            
        }
        // if($validator->passes()){
        //   return view('welcome');
        // }else{
        //    // return redirect()->route('login')->withErrors($validator)->withInput($request->only($email));
        // }
    }



}
