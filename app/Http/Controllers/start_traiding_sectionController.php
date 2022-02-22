<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use App\Models\start_traiding_section;
use Illuminate\Http\Request;

class start_traiding_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $start_training = start_traiding_section::all();
        return view('layouts.start_traiding_section',compact('app_config','start_training'));
    }
}
