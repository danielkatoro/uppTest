<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use App\Models\faq_section;
use Illuminate\Http\Request;

class faq_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $faq = faq_section::all();
        return view('layouts.faq',compact('app_config','faq'));
    }
}
