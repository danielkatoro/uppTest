<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use Illuminate\Http\Request;

class App_configController extends Controller
{
    public function index(){
        return view('layouts.app_config');
    }

    public function storeApp_config(Request $request){
        $name = $request->name;
        $description = $request->description;
        $logoimage = $request->file('file');
        $imageName = time().'.'.$logoimage->extension();
        $logoimage->move(public_path('images'),$imageName);

        $app_config = new App_config();
        $app_config->name = $name;
        $app_config->description = $description;
        $app_config->logoimage = $imageName;
        $app_config->save();
        return 'okey';
    }

    public function editApp_config($id){
        
    }
}
