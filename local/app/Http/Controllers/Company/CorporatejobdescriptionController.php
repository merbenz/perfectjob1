<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;

class CorporatejobdescriptionController extends Controller 
{
    

 public function sert(Request $request) {
        //  dd($request->all());

        $data = array(

            "position_th" => $request->position,
            "salary" =>  $request->salary,
            "Japanese" => $request->Japanese,
            "rate" => $request->rate,
            "detail_th" => $request->detail,
            "property_th" => $request->property,
            "welfare_th" =>  $request->welfare,
            
        );
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        
        DB::table('corporate_jobdescription')->insert($data);
        return view('frontend.corporate_jobdescription',$data);
 }

    public function show($idJob){ 

        {
            
            $irnf = DB::table('corporate_jobdescription')->where('idJob',$idJob)->first();
            $data['corporate_jobdescription'] = $irnf;

            dd($idJob);

            return view('backend.jobdescription.list',$data);
        }

    }

    public function destroy(Request $request)
    {   

        DB::table('corporate_jobdescription')->where('idJob',$request->input('idJob'))->delete();
        return response()->json(['chk'=>1]);
    
    }
}
?>