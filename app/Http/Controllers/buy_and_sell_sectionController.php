<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use App\Models\buy_and_sell_section;
use Illuminate\Http\Request;

class buy_and_sell_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $buy_and_sell = buy_and_sell_section::all();
        return view('layouts.buy_and_sell_section',compact('app_config','buy_and_sell'));
    }
}
