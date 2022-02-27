<?php

namespace App\Http\Controllers;

use App\Models\App_config;
use App\Models\faq_section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class faq_sectionController extends Controller
{
    public function index(){
        $app_config = App_config::find(2);
        $faq = faq_section::all();
        return view('layouts.faq',compact('app_config','faq'));
    }

    public function store_faq(Request $request){

        DB::table('faq_sections')->insert([
            'titre' => $request->titre,
            'details' => $request->details
        ]);

        return 'Inserted faq successfully';
    }

    public function edit_faq($id){
        $data = DB::select("SELECT * FROM faq_sections WHERE id=?",[$id]);
        $faq = $data[0];
        return view('edit_faq', compact('faq'));
    }

    public function update_faq(Request $request){
        $id = $request->id;
        DB::table('faq_sections')->where('id', $id)->update([
            'titre' => $request->titre,
            'details' => $request->details
        ]);

        return 'Updated faq successfully';
    }

    public function destroy_faq($id){
        DB::table('faq_sections')->where('id', '=', $id)->delete();
        return 'faq deleted successfully';
    }

}
