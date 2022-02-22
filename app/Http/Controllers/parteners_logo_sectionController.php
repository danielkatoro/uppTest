<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use App\Models\parteners_logo_section;
use Illuminate\Http\Request;

class parteners_logo_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $parteners_logo = parteners_logo_section::all();
        return view('layouts.parteners_logo',compact('app_config','parteners_logo'));
    }
}
