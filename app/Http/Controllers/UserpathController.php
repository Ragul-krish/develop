<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class UserpathController extends Controller
{
   
    function list(Request $req){
        $data=employee::all();
        return view('list',['employees'=>$data]);
        
    
 }

     // function delete($id)
      //{
       //   $data=employee::find($id);
        //  $data->delete();
         // return redirect('list');
     // }
      function showData($id)
      {
         // return employee::find($id);
          $data=employee::find($id);
          return view('edit',['data'=>$data]);

          //$data->delete();
          //return redirect('list');
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
