<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index(Request $req){

        //return Employee::all();
        
  
        
       
     


     $employee=new employee;
     $employee->id=$req->id;
     $employee->name=$req->name;
     $employee->lstname=$req->lstname;
     $employee->address=$req->address;
     $employee->save();  
     return redirect ('list');
    
    }
    public function getData(){
      $data=employee::all();
      return view('list',['employees'=>$data]);
      

    }

}
