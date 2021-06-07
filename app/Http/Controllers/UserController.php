<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function add(Request $req){

      //return Employee::all();
      $employee=new employee;
     $employee->id=$req->id;
     $employee->name=$req->name;
     $employee->lstname=$req->lstname;
     $employee->address=$req->address;
     $employee->save();  
     return redirect ('list');
    
    }
    public function listData(){
      $data=employee::all();
      return view('list',['employees'=>$data]);
      
      

    }
    function deleteData($id)
      {
          $data=employee::find($id);
          $data->delete();
          return redirect('list');
      }
      function showData($id)
      {
         // return employee::find($id);
          $data=employee::find($id);
          return view('edit',['data'=>$data]);
      }
      function update(Request $req)
      {
          $data=employee::find($req->id);
         
          $data->id=$req->id;
          $data->name=$req->name;
          $data->lstname=$req->lstname;
       $data->address=$req->address;
       $data->save();
       return redirect('list');
      }


}
