<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
  public function fileUpload(){
    return view('fileupload');
  }

  public function prosesUpload(Request $request){
    $request->validate([
      'berkas' => 'required|file|image|max:20000'
    ]);
    
    return view('prosesupload', ['data' => $request]);
  }
}

