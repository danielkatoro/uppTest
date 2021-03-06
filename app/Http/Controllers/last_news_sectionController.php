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
        $data = DB::select("SELECT * FROM last_news_sections WHERE id=?",[$id]);
        $last_news = $data[0];
        return view('layouts.edit_last_news', compact('last_news','app_config'));
    }

    public function update_last_news(Request $request){

        $logoimage = $request->file('file');
        $imageName = time().'.'.$logoimage->extension();
        $logoimage->move(public_path('images'),$imageName);
        $id = $request->id;
        DB::table('last_news_sections')->where('id', $id)->update([
            'image' => $imageName,
            'titre' => $request->titre,
            'text' => $request->text,
            'date' => $request->date
        ]);

        return 'update crypto ok';
    }



    public function destroy_last_news($id){
        $deleted = DB::table('crypto_slide_sections')->where('id', '=', $id)->delete();
    }
}
