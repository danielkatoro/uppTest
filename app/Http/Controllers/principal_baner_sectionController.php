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

        $principal_banner = principal_banner::find($request->id);
        $principal_banner->titre = $$titre;
        $principal_banner->text = $text;
        $principal_banner->image = $imageName;
        $principal_banner->save();

        DB::update("UPDATE principal_banners SET titre=:titre, text=:text, image=:image WHERE id=:id",[$titre, $text, $image, $id]);


        return 'updateting okey';
    }

}
