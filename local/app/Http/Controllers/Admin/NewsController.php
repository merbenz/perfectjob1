<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use news;
use activity;
use DB;
use File;
use Image;
use DateTime;
use Session;
use DataTables;

class NewsController extends Controller
{
   
    public function frontend() {
        $data['news'] = DB::table('news')->select('*')->orderBy('id','desc')->paginate(9);
        $data['activity'] = DB::table('activity')->select('*')->orderBy('id','desc')->paginate(5);
        $data['banner'] = DB::table('banner')->select('*')->orderBy('id','desc')->paginate(9);

       
        $data['img'] = DB::table('news')->select('*')->orderBy('id','desc')->first();
        $data['imgb'] = DB::table('banner')->select('*')->orderBy('id','desc')->first();
         //dd($data['img']);

        if(Session::get('locale')){
            $data['locale'] = Session::get('locale');
        }else{
            $data['locale'] = 'th';
        }
        //  dd($data['activity']);

        return view('frontend.news_events',$data);
    }
    public function newsdetail($read,$id) {
       
       if($read == 'news')
       {
        $data['news'] = DB::table('news')->where('id',$id)->first();
        $data['act'] = 'news';

       }
       else if($read == 'activity') {
        $data['news'] = DB::table('activity')->where('id',$id)->first();
        $data['act']= 'activity';
       }
       else {
        $data['news'] = null;
       }


        // dd($data['news']);

       // $xx = DB::table('news')->where('id',$id)->first();
        return view('frontend.readmore_new',$data);
    }
    /////////////////หลังบ้าน/////////////////////
    public function datatables() {
   
        $data = DB::table('news')->get();
        return Datatables::of($data)->make(true);
        
        // return Datatables::of($dd)->make(true);

    }
    
    public function index() {
        return view('backend.news.list');
    }

    public function create(){
        return view('backend.news.create');
    }

    public function store(Request $request){

        //  dd($request);
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');

        if(!empty($request->file('img'))){
            $file = $request->file('img');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/news/',$filename);

                $data['img'] = $filename; 
        }

        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('news')->insert($data);

        echo '<script>
        
        alert("เพิ่มข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/news').'"

        </script>';
    }

    public function show($id){

        {
            $irnf = DB::table('news')->where('id',$id)->first();

            $data['news'] = $irnf;
          // dd( $data['news']);
            return view('backend.news.create',$data);
        }

    }

    public function update($id , Request $request)
    {
    
        $data['title_th'] = $request->input('title_th');
        $data['title_en'] = $request->input('title_en');
        $data['detail_th'] = $request->input('detail_th');
        $data['detail_en'] = $request->input('detail_en');
        
        if(!empty($request->file('img'))){
            $file = $request->file('img');

                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('images/news/',$filename);

                $data['img'] = $filename; 
        }
      

        $data['updated_at'] = date('Y-m-d H:i:s');

        DB::table('news')->where('id',$id)->update($data);
        // dd($data);

        echo '<script>
        
        alert("แก้ไขข้อมูลเสร็จสิ้น");
        window.location.href = "'.url('manage/news').'"

        </script>';
    }

    public function destroy(Request $request)
    {   

        DB::table('news')->where('id',$request->input('id'))->delete();
        return response()->json(['chk'=>1]);
    
    }


}

?>