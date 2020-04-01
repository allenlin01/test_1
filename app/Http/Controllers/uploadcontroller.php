<?php

namespace App\Http\Controllers;

use App\project_data;
use Illuminate\Http\Request;
use App\user_project;

class uploadcontroller extends Controller
{
   public  function upload(){
    $project = user_project::get();

       return view('upload')->with('project',$project);
   }

   public function data_upload($id){
      $project_data = project_data::where('project_id',$id)->get();


        return view('upload_data')->with('project_data',$project_data);

   }//


   public function del_file(){

   }

   public function upload_file(){
       $input = $request->all();
       $fileCount = count($_FILES['file']['name']);
       $move_dir="$_COOKIE["key"];
   }
}
