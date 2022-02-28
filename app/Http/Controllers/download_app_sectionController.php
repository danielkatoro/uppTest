<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\download_app_section;

class download_app_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $download_app = download_app_section::all();
        return view('layouts.download_app_section',compact('app_config','download_app'));
    }

    public function edit_download_section($id){
        $app_config = App_config::find(2);
        $data = DB::select("SELECT * FROM download_app_sections WHERE id=?",[$id]);
        $download_app = $data[0];
        return view('layouts.edit_download_app', compact('download_app','app_config'));
    }

    public function update_download_app(Request $request){

        $video = $request->file('file');
        $videoName = time().'.'.$video->extension();
        $video->move(public_path('images'),$videoName);
        $id = $request->id;
        DB::table('download_app_sections')->where('id', $id)->update([
            'video' => $videoName,
            'titre1' => $request->titre1,
            'text1' => $request->text1,
            'titre2' => $request->titre2,
            'text2' => $request->text2,
            'titre3' => $request->titre3,
            'text3' => $request->text3,
            'titre4' => $request->titre4,
            'text4' => $request->text3,
        ]);

        return 'update crypto ok';
    }
}
