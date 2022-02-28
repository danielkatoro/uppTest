<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\parteners_logo_section;

class parteners_logo_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $parteners_logo = parteners_logo_section::all();
        return view('layouts.parteners_logo',compact('app_config','parteners_logo'));
    }

    public function parteners_logo_store(Request $request){

        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        DB::table('parteners_logo_sections')->insert([
            'logo' => $imageName,
            'name' => $request->name
        ]);

        return 'store slide ok';
    }

    public function parteners_logo_slide($id){
        $app_config = App_config::find(2);
        $data = DB::select("SELECT * FROM parteners_logo_sections WHERE id=?",[$id]);
        $parteners_logo = $data[0];
        return view('layouts.edit_parteners_logo', compact('parteners_logo','app_config'));
    }

    public function update_parteners_logo(Request $request){

        $logoimage = $request->file('file');
        $imageName = time().'.'.$logoimage->extension();
        $logoimage->move(public_path('images'),$imageName);
        $id = $request->id;
        DB::table('parteners_logo_sections')->where('id', $id)->update([
            'logo' => $imageName,
            'name' => $request->name
        ]);

        return 'update crypto ok';
    }



    public function parteners_logo_destroy($id){
        $deleted = DB::table('parteners_logo_sections')->where('id', '=', $id)->delete();
    }
}
