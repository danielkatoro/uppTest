<?php

namespace App\Http\Controllers;

use App\Models\amazing_features_section;
use App\Models\App_config;
use Illuminate\Http\Request;

class amazing_features_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $amazing_features = amazing_features_section::all();
        return view('layouts.amazing_features_section',compact('app_config','amazing_features'));
    }
}
