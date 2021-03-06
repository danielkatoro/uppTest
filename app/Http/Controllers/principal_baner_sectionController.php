<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use Illuminate\Http\Request;
use App\Models\principal_banner;
use Illuminate\Support\Facades\DB;

class principal_baner_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $principal_banner = principal_banner::all();
        return view('layouts.principal_banner',compact('principal_banner','app_config'));
    }

    public function Update_principal_banner(Request $request){
        $id = $request->id;
        $titre = $request->titre;
        $text = $request->text;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        DB::table('principal_banners')->where('id', $id)->update([
            'titre' => $titre,
            'text' => $text,
            'image' => $imageName
        ]);

        return redirect()->route('principal_banner')->with('message','Modification effectuée');
    }

}
