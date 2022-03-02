<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\testimonials_section;

class testimonials_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $testimonials = testimonials_section::all();
        return view('layouts.testimonials_section',compact('app_config','testimonials'));
    }

    public function testimonials_store(Request $request){

        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        DB::table('testimonials_sections')->insert([
            'image' => $imageName,
            'titre' => $request->titre,
            'detail' => $request->detail,
            'name' => $request->name
        ]);

        return 'store slide ok';
    }

    public function edit_testimonials($id){
        $app_config = App_config::find(2);
        $data = DB::select("SELECT * FROM testimonials_sections WHERE id=?",[$id]);
        $testimonials = $data[0];
        return view('layouts.edit_testimonials', compact('testimonials','app_config'));
    }

    public function update_testimonials(Request $request){

        $logoimage = $request->file('file');
        $imageName = time().'.'.$logoimage->extension();
        $logoimage->move(public_path('images'),$imageName);
        $id = $request->id;
        DB::table('testimonials_sections')->where('id', $id)->update([
            'image' => $imageName,
            'titre' => $request->titre,
            'detail' => $request->detail,
            'name' => $request->name
        ]);

        return 'update crypto ok';
    }



    public function testimonials_destroy($id){
        $deleted = DB::table('testimonials_sections')->where('id', '=', $id)->delete();
    }
}
