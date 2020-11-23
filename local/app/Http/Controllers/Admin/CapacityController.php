<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;
use datatables_question;

class CapacityController extends Controller 
{
    // public function frontend(){
    //     $data['Admin_info'] = DB::table('Admin_info')->first();
    //     dd( $data['Admin_info']);
    //     $data['capacity_question'] = DB::table('capacity_question')->select('*')->orderBy('idQuestion','desc')->paginate();

    // }
    
    public function datatables() {
   
        // dd($data);
        $data = DB::table('capacity')->get();
       
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }

    public function index() {
        // dd(7);
        return view('backend.capacity.list');
    }
    public function create(){
        return view('backend.capacity.create');
    }
    public function store(Request $request){
//   dd($request);

        $data['name_th'] = $request->input('name_th');
        $data['name_en'] = $request->input('name_en');

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('capacity')->insert($data);

        echo '<script>
        
        alert("เพิ่มข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/capacity').'"

        </script>';
    }

    public function show($idCapacity){

        {
    
            $irnf = DB::table('capacity')->where('idCapacity',$idCapacity)->first();
            $data['capacity'] = $irnf;
            
            return view('backend.capacity.create',$data);
        }

    }

    public function update($idCapacity , Request $request)
    {
    
        $data['name_th'] = $request->input('name_th');
        $data['name_en'] = $request->input('name_en');

        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('capacity')->where('idCapacity',$idCapacity)->update($data);

        echo '<script>
        
        alert("แก้ไขข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/capacity').'"

        </script>';
    }

    public function destroy(Request $request)
    
    {

        DB::table('capacity')->where('idCapacity',$request->input('idCapacity'))->delete();
        return response()->json(['chk'=>1]);
    
    }


    /////////////// listquestion /////////////////

    


    // public function datatables_question(Request $request) {
   
    //     $data = DB::table('capacity_question')->where('idQuestion',$request->id)->get();
    //     // dd($data->get());
    //     return Datatables::of($data)->make(true);
        
    //     // return Datatables::of($dd)->make(true);

    // }

    // public function index_idQuestion($idQuestion) {
    //     $data['question'] = $idQuestion;
    //     return view('backend.capacity.list-question',$data);
    // }
    // public function create_question($idCapacity){
    //     // $data['cm'] = $idCapacity;
    //     // dd($data['cm']);
    //     return view('backend.capacity.create-question',$data);
    //     dd($data);
    // }
    // public function store_question($idCapacity,Request $request){
    // //  dd($request);
      
    //     $data['name'] = $request->input('name');

    //     $data['created_at'] = date('Y-m-d H:i:s');
    //     $data['updated_at'] = date('Y-m-d H:i:s');

    //     // $data['idCapacity'] = $request->input('');

    //     DB::table('capacity_question')->insert($data);
    //     // DB::table('capacity_question')->update($idCapacity)->where('idQuestion',$idQuestion);


    //     echo '<script>
        
    //     alert("เพิ่มข้อมูลเสร็จสิ้น");
    //     window.location.href = "'.url('manage/question/capacity/').'"

    //     </script>';
    // }

    // public function show_question($idQuestion){

    //     {
    //         //  dd($idQuestion);
    //         $data['capacity_question'] = DB::table('capacity_question')->select('*')->first();
    //         return view('backend.capacity.create-question',$data);
    //     }

    // }

    // public function update_question($idQuestion,Request $request)
    // {
    
       
    //     $data['name'] = $request->input('name');

    //     $data['updated_at'] = date('Y-m-d H:i:s');

    //     DB::table('capacity_question')->where('idQuestion',$idQuestion)->update($data);

    //     echo '<script>
        
    //     alert("แก้ไขข้อมูลเสร็จสิ้น");
    //     window.location.href = "'.url('manage/question/capacity/').'"
    //     </script>';
    // }

    // public function destroy_question(Request $request)
    
    // {

    //     DB::table('capacity_question')->where('idQuestion',$request->input('idQuestion'))->delete();
    //     return response()->json(['chk'=>1]);
    
    // }


}

?>