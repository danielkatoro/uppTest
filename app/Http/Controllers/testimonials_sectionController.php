<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use App\Models\testimonials_section;
use Illuminate\Http\Request;

class testimonials_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $testimonials = testimonials_section::all();
        return view('layouts.testimonials_section',compact('app_config','testimonials'));
    }
}
