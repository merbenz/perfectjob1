<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;

class ContactController extends Controller 
{
    
    public function index() {
        return view('backend.contact.list');
    }
    public function datatables() {
   
        //$dd = DB::table('contact');
        $data = DB::table('contact')->get();
        // dd($data->get());
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }

    public function sert(Request $request) {
        // dd($request->all());
        $data = array(
            "name" => $request->name ,
            "tel" =>  $request->tel ,
            "contact" => $request->contact,
            "email" => $request->email 
            
        );
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        
        DB::table('contact')->insert($data);
        
        return view('frontend.index',$data);

    }


    public function show($id){
        {
            $irnf = DB::table('contact')->where('id',$id)->first();
            $data['contact'] = $irnf;

            return view('backend.contact.create',$data);
        }

    }

    public function destroy(Request $request)
    {

        DB::table('contact')->where('id',$request->input('id'))->delete();
        return response()->json(['chk'=>1]);
    }

}

?>