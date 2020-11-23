<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;

class CompanyinfoController extends Controller 
{
    
    public function frontend(){
        // $data['company_info'] = DB::table('company_info')->first();
        // // dd( $data['company_info']);
        // $data['corporate_jobdescription'] = DB::table('corporate_jobdescription')->select('*')->orderBy('idJob','desc')->paginate();

        
        if(Session::get('locale')){
            $data['locale'] = Session::get('locale');
        }else{
            $data['locale'] = 'th';
        }
        return view('frontend.corporate_profile',$data);

    }

 public function sert(Request $request) {
        //  dd($request->all());
     
        if(!empty($request->file('chooseFile2'))){
            $file = $request->file('chooseFile2');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/company/',$filename);

                $img = $filename; 
        }
        $data = array(
            
            // "chooseFile1" => $request->chooseFile1 ,
            // "chooseFile2" => $request->chooseFile2 ,
            "name_th" => $request->name,
            "business_th" =>  $request->business,
            "description_th" => $request->description,
            "nameweb" => $request->nameweb,
            "address_th" => $request->address,
            "map" => $img 

        
            
        );
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        
        DB::table('company_info')->insert($data);
        
        return view('frontend.corporate_company',$data);
 }

    public function show($idCompany){

        {
            $irnf = DB::table('company_info')->where('idCompany',$idCompany)->first();
            $data['company_info'] = $irnf;

            return view('backend.company.list',$data);
        }

    }

    public function update($idCompany , Request $request){

        {
            $data['name_th'] = $request->input('name');
            $data['business_th'] = $request->input('business');
            $data['description_th'] = $request->input('description');
            $data['nameweb'] = $request->input('nameweb');
            $data['address_th'] = $request->input('address');
            $data['map'] = $request->input('map');

            $data['updated_at'] = date('Y-m-d H:i:s');

            $irnf = DB::table('company_info')->where('idCompany',$idCompany)->fupdate($data);

            echo '<script> 
            alert("แก้ไขข้อมูลเสร็จสิ้น");
            window.location.href = "'.url('managejob/companyinfomation/{idCompany}').'"
            </script>';

        }

    }

    public function destroy(Request $request)
    {   

        DB::table('company_info')->where('idCompany',$request->input('idCompany'))->delete();
        return response()->json(['chk'=>1]);
    
    }
}
?>