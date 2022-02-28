<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\buy_and_sell_section;

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

    public function edit_buy_sell($id){
        $app_config = App_config::find(2);
        $data = DB::select("SELECT * FROM buy_and_sell_sections WHERE id=?",[$id]);
        $edit_buy_sell = $data[0];
        return view('layouts.edit_buy_sell', compact('edit_buy_sell','app_config'));
    }

    public function update_buy_sell(Request $request){

        $titre = $request->titre;
        $text = $request->text;
        $logoimage = $request->file('file');
        $imageName = time().'.'.$logoimage->extension();
        $logoimage->move(public_path('images'),$imageName);

        $id = $request->id;
        DB::table('buy_and_sell_sections')->where('id', $id)->update([
            'titre' => $titre,
            'text' => $text,
            'icon' => $imageName
        ]);

        return 'update crypto ok';
    }



    public function buy_sell_destroy($id){
        $deleted = DB::table('buy_and_sell_sections')->where('id', '=', $id)->delete();
    }
}
