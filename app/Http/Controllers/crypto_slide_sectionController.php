<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\crypto_slide_section;

class crypto_slide_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $crypto_slide = crypto_slide_section::all();
        return view('layouts.crypto_slide',compact('crypto_slide','app_config'));
    }

    public function crypto_slide_store(Request $request){

        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        DB::table('crypto_slide_sections')->insert([
            'logo' => $imageName,
            'name' => $request->name,
            'prix' => $request->prix,
            'pourcentage' => $request->pourcentage
        ]);

        return 'store slide ok';
    }

    public function edit_crypto_slide($id){
        $app_config = App_config::find(2);
        $data = DB::select("SELECT * FROM crypto_slide_sections WHERE id=?",[$id]);
        $crypto_slide = $data[0];
        return view('layouts.edit_crypto_slide', compact('crypto_slide','app_config'));
    }

    public function update_crypto_slide(Request $request){

        $logoimage = $request->file('file');
        $imageName = time().'.'.$logoimage->extension();
        $logoimage->move(public_path('images'),$imageName);
        $id = $request->id;
        DB::table('crypto_slide_sections')->where('id', $id)->update([
            'logo' => $imageName,
            'name' => $request->name,
            'prix' => $request->prix,
            'pourcentage' => $request->pourcentage
        ]);

        return 'update crypto ok';
    }



    public function crypto_slide_destroy($id){
        $deleted = DB::table('crypto_slide_sections')->where('id', '=', $id)->delete();
    }
}
