<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\additional_service_section;

class additiona_service_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $additional_service = additional_service_section::all();
        return view('layouts.additional_service_section',compact('app_config','additional_service'));
    }

    public function additional_service_store(Request $request){

        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        DB::table('additional_service_sections')->insert([
            'image' => $imageName,
            'titre' => $request->titre,
            'text' => $request->text
        ]);

        return 'store slide ok';
    }

    public function edit_additional_service($id){
        $app_config = App_config::find(2);
        $data = DB::select("SELECT * FROM additional_service_sections WHERE id=?",[$id]);
        $additional_service = $data[0];
        return view('layouts.edit_additional_service', compact('additional_service','app_config'));
    }

    public function update_additional_service(Request $request){

        $logoimage = $request->file('file');
        $imageName = time().'.'.$logoimage->extension();
        $logoimage->move(public_path('images'),$imageName);
        $id = $request->id;
        DB::table('additional_service_sections')->where('id', $id)->update([
            'image' => $imageName,
            'titre' => $request->titre,
            'text' => $request->text
        ]);

        return 'update crypto ok';
    }



    public function additional_service_destroy($id){
        DB::table('additional_service_sections')->where('id', '=', $id)->delete();
    }
}
