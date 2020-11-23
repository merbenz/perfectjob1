<?php

namespace App\Http\Controllers\AdCompany;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;

class CompanyprofileController extends Controller 
{
    
    public function frontend(){
        $data['company_info'] = DB::table('company_info')->first();
        $data['corporate_jobdescription'] = DB::table('corporate_jobdescription')->select('*')->orderBy('idJob','desc')->paginate();
        
        if(Session::get('locale')){
            $data['locale'] = Session::get('locale');
        }else{
            $data['locale'] = 'th';
        }
        return view('frontend.corporate_profile',$data);

    }
    

    public function datatables() {
   
        //$dd = DB::table('news');
        $data = DB::table('company_info')->get();
        // dd($data->get());
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }
    public function index() {
        return view('company.company.list');
    }
    public function create(){
        return view('company.company.create');
    }
//     public function store(Request $request){
// //   dd($request);
//         $data['title_th'] = $request->input('title_th');
//         $data['title_en'] = $request->input('title_en');
//         $data['detail_th'] = $request->input('detail_th');

//         if(!empty($request->file('icon'))){
//             $file = $request->file('icon');

//                 $extension=$file->getClientOriginalExtension();
//                 $filename=time().'.'.$extension;
//                 $file->move('images/companyprofile/',$filename);

//                 $data['icon'] = $filename; 
//         }

//         $data['created_at'] = date('Y-m-d H:i:s');
//         $data['updated_at'] = date('Y-m-d H:i:s');

//         DB::table('company_info')->insert($data);

//         echo '<script>
        
//         alert("เพิ่มข้อมูลเสร็จสิ้น");
//         window.location.href = "'.url('manage/companyprofile').'"

//         </script>';
//     }

    public function show($id){

        {
            $irnf = DB::table('company_info')->where('id',$id)->first();
            $data['company_info'] = $irnf;

            return view('company.company.create',$data);
        }

    }

    public function update($id , Request $request)
    {
    
        $data['name_th'] = $request->input('name_th');
        $data['name_en'] = $request->input('name_en');
        $data['business_th'] = $request->input('business_th');
        $data['business_en'] = $request->input('business_en');
        $data['description_th'] = $request->input('description_th');
        $data['description_en'] = $request->input('description_en');
        $data['nameweb'] = $request->input('nameweb');
        $data['address_th'] = $request->input('address_th');
        $data['address_en'] = $request->input('address_en');
        
        if(!empty($request->file('map'))){
            $file = $request->file('map');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/company/',$filename);

                $data['map'] = $filename; 
        }
      

        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('company_info')->where('id',$id)->update($data);

        echo '<script>
        
        alert("แก้ไขข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/companyprofile').'"

        </script>';
    }

    public function destroy(Request $request)
    {   

        DB::table('company_info')->where('id',$request->input('id'))->delete();
        return response()->json(['chk'=>1]);
    
    }


}

?>