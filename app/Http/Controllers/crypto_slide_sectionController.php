<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use App\Models\crypto_slide_section;
use Illuminate\Http\Request;

class crypto_slide_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $crypto_slide = crypto_slide_section::all();
        return view('layouts.principal_banner',compact('principal_banner','app_config'));
    }
}
