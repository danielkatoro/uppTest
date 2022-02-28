<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\amazing_features_section;

class amazing_features_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $amazing_features = amazing_features_section::all();
        return view('layouts.amazing_features_section',compact('app_config','amazing_features'));
    }

    public function edit_amazing_features($id){
        $app_config = App_config::find(2);
        $data = DB::select("SELECT * FROM amazing_features_sections WHERE id=?",[$id]);
        $amazing_features = $data[0];
        return view('layouts.edit_amazing_features', compact('amazing_features','app_config'));
    }

    public function update_amazing_features(Request $request){

        $image1 = $request->file('file1');
        $imageName1 = time().'.'.$image1->extension();
        $image1->move(public_path('images'),$imageName1);

        $image2 = $request->file('file2');
        $imageName2 = time().'.'.$image2->extension();
        $image2->move(public_path('images'),$imageName2);

        $image3 = $request->file('file3');
        $imageName3 = time().'.'.$image3->extension();
        $image3->move(public_path('images'),$imageName3);
        $id = $request->id;
        DB::table('amazing_features_sections')->where('id', $id)->update([
            
            'titre1' => $request->titre1,
            'text1' => $request->text1,
            'image1' => $imageName1,
            'titre2' => $request->titre2,
            'text2' => $request->text2,
            'image2' => $imageName2,
            'titre3' => $request->titre3,
            'text3' => $request->text3,
            'image3' => $imageName3
        ]);

        return 'update crypto ok';
    }
}
