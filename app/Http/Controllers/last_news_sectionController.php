<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use App\Models\last_news_section;
use Illuminate\Http\Request;

class last_news_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $last_news = last_news_section::all();
        return view('layouts.last_news_section',compact('app_config','last_news'));
    }
}
