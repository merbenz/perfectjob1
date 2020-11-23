<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;

class Servicesrequestquote extends Controller 
{
    
    public function index() {
        return view('backend.services-requestquote.list');
    }
    public function datatables() {
   
        //$dd = DB::table('contact');
        $data = DB::table('services_requestquote')->get();
        // dd($data->get());
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }

    public function sert(Request $request) {
        // dd($request->all());
        $data = array(
            "namecompany" => $request->namecompany ,
            "namecontact" =>  $request->namecontact ,
            "extphone" => $request->extphone,
            "mobilephone" => $request->mobilephone,
            "email" => $request->email,
            "message" => $request->message  
            
        );
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        
        DB::table('services_requestquote')->insert($data);
        
        return view('frontend.services',$data);

    }


    public function show($idQuote){
        {
            $irnf = DB::table('services_requestquote')->where('idQuote',$idQuote)->first();
            $data['services_requestquote'] = $irnf;

            return view('backend.services-requestquote.create',$data);
        }

    }

    public function destroy(Request $request)
    {

        DB::table('services_requestquote')->where('idQuote',$request->input('idQuote'))->delete();
        return response()->json(['chk'=>1]);
    }

}

?>