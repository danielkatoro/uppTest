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

    public function store_buy_sell(Request $request){
        $titre = $request->titre;
        $text = $request->text;
        $logoimage = $request->file('file');
        $imageName = time().'.'.$logoimage->extension();
        $logoimage->move(public_path('images'),$imageName);

        $buy_and_sell = new buy_and_sell_section();
        $buy_and_sell->titre = $titre;
        $buy_and_sell->text = $text;
        $buy_and_sell->icon = $imageName;
        $buy_and_sell->save();
        return 'okey';
    }
}
