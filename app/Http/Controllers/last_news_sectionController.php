<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use Illuminate\Http\Request;
use App\Models\last_news_section;
use Illuminate\Support\Facades\DB;

class last_news_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $last_news = last_news_section::all();
        return view('layouts.last_news_section',compact('app_config','last_news'));
    }

    public function last_news_store(Request $request){

        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        DB::table('last_news_sections')->insert([
            'image' => $imageName,
            'titre' => $request->titre,
            'text' => $request->text,
            'date' => $request->date
        ]);

        return 'store slide ok';
    }

    public function edit_last_news($id){
        $app_config = App_config::find(2);
        $data = DB::select("SELECT * FROM crypto_slide_sections WHERE id=?",[$id]);
        $crypto_slide = $data[0];
        return view('layouts.edit_crypto_slide', compact('crypto_slide','app_config'));
    }

    public function update_last_news(Request $request){

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



    public function crypto_last_news($id){
        $deleted = DB::table('crypto_slide_sections')->where('id', '=', $id)->delete();
    }
}
