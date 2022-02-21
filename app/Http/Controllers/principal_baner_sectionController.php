<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use Illuminate\Http\Request;
use App\Models\principal_banner;

class principal_baner_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $principal_banner = principal_banner::all();
        return view('layouts.principal_banner',compact('principal_banner','app_config'));
    }

}
