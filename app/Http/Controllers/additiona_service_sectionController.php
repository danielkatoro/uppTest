<?php

namespace App\Http\Controllers;

use App\Models\additional_service_section;
use App\Models\App_config;
use Illuminate\Http\Request;

class additiona_service_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $additional_service = additional_service_section::all();
        return view('layouts.additional_service_section',compact('app_config','additional_service'));
    }
}
