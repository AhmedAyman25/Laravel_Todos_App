<?php

namespace App\Http\Controllers;

use App\Models\todos;
use Illuminate\Http\Request;

class todosController extends Controller
{
    function index(){
        $todos=todos::all();
        return view('todos', compact('todos'));
    }

    function show(Request $request, $todosId){

        $todo=todos::find($todosId);
        return view('show',compact('todo'));
    }
    function create(){
        return view('create');
    }
   function store(){
    $this->validate(request(),[
        'name'=>'required|unique:todos,name',
        'description'=>'required',
    ]);
    $data=request()->all();
    $todo=new todos();
    $todo->name = $data['name'];
    $todo->description = $data['description'];
    $todo->completed=false;
    $todo->save();
    return redirect('/');
   }
   
   function delete(Request $request, $todosId){
    $delete=todos::where('id','=',$todosId)->delete();
    return redirect()->back();
   }

   function updatePage(Request $request, $todosId){
    $show_data_in_input=todos::where('id','=',$todosId)->first();
    return view('updatepage',compact('show_data_in_input'));
   }

   function update(Request $request,$todosId){
        $update=todos::where('id','=',$todosId)->update([
            'name'=> $request->new_name,
            'description'=> $request->new_description
        ]);
        return redirect("/"); 
      }
}
