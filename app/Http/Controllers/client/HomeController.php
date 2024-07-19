<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


        public function index()
    {
        $categories = DB::table('categories')->get();
        $news = DB::table('news')
            ->join('categories', 'news.category_id','categories.id')
            ->select('news.*','categories.name as category_name','authors.name as author_name')
            ->join('authors','news.author_id','authors.id')
            ->get();

        return view('home',compact('categories', 'news') );
    }






    public function chiTiet($id=0){
        $categories = DB::table('categories')->get();
        $news = DB::table('news')->where('id',$id)->first();
        $data =['id'=> $id , 'news' =>$news];
        return view("chitiet",$data,compact('categories'));
    }



       public function tinTrongLoai($id=0){
        $categories = DB::table('categories')->get();
        $news = DB::table('news')->where('id',$id)->first();
        $data =['id'=> $id , 'news' =>$news];
        return view("tintrongloai",$data,compact('categories'));
    }





    public function  timKiem(Request $request , $id=0)  {
        $categories =  DB::table('news')->where('title','LIKE','%'.$request->input('key').'%')->get();
        $categories = DB::table('categories')->get();
        $news = DB::table('news')->where('id',$id)->first();
        $data =['id'=> $id , 'news' =>$news];
       return view('timkiem',$data,['categories'=>$categories,'name'=>'Kết quả tìm kiếm :']);
    }

}





