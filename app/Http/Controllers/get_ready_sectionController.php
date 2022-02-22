<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use App\Models\get_ready_section;
use Illuminate\Http\Request;

class get_ready_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $get_ready = get_ready_section::all();
        return view('layouts.get_ready_section',compact('app_config','get_ready'));
    }
}
