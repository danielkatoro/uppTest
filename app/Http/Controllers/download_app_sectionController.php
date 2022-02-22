<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use App\Models\download_app_section;
use Illuminate\Http\Request;

class download_app_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $download_app = download_app_section::all();
        return view('layouts.download_app_section',compact('app_config','download_app'));
    }
}
