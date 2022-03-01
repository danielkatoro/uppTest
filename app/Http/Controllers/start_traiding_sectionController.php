<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\start_traiding_section;

class start_traiding_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $start_training = start_traiding_section::all();
        return view('layouts.start_traiding_section',compact('app_config','start_training'));
    }

    public function start_traiding_store(Request $request){

        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        DB::table('start_traiding_sections')->insert([
            'logo' => $imageName,
            'name' => $request->name,
            'code' => $request->code,
            'status' => $request->status,
            'price' => $request->price,
            'evolution' => $request->evolution
        ]);

        return 'store slide ok';
    }

    public function edit_start_traiding($id){
        $app_config = App_config::find(2);
        $data = DB::select("SELECT * FROM start_traiding_sections WHERE id=?",[$id]);
        $start_training = $data[0];
        return view('layouts.edit_start_training', compact('start_training','app_config'));
    }

    public function update_start_traiding(Request $request){

        $logoimage = $request->file('file');
        $imageName = time().'.'.$logoimage->extension();
        $logoimage->move(public_path('images'),$imageName);
        $id = $request->id;
        DB::table('start_traiding_sections')->where('id', $id)->update([
            'logo' => $imageName,
            'name' => $request->name,
            'code' => $request->code,
            'status' => $request->status,
            'price' => $request->price,
            'evolution' => $request->evolution
        ]);

        return 'update crypto ok';
    }



    public function start_traiding_destroy($id){
        $deleted = DB::table('start_traiding_sections')->where('id', '=', $id)->delete();
    }
}
