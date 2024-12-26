<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\news;
use Illuminate\Http\Request;
// use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class c_admin extends Controller
{
    function list_category(){
        $show_category = category::all();
        return view('admin.fc_categories', compact('show_category'));
    }
    function formadd_category(){
        return view('admin.fc_formadd_category');
    }
    function add_category(Request $rq){
        $category = new category();
        $category->ten = $rq->ten;
        $category->trang_thai = $rq->trangthai;
        $category->slug = Str::slug($rq->ten);
        $category->save();

        return redirect()->route('admin.list_category');
    }
    function formedit_category($id){
        return view('admin.fc_formadd_category', ['category' => category::where('id', $id)->first()]);
    }
    function edit_category(Request $rq){
        $category = category::findOrFail($rq->id);
        $category->ten = $rq->ten;
        $category->trang_thai = $rq->trangthai;
        $category->slug = Str::slug($rq->ten);
        $category->save();

        return redirect()->route('admin.list_category');
    }
    function del_category($id){
        try {
            $category = category::findOrFail($id)->delete();
            return redirect()->route('admin.list_category', ['thongbao' => 'đã xóa thành công']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.list_category', ['thongbao' => 'xóa thất bại']);
        }
    }
    function dashboard_default(){
        return view('dashboard');
    }


    function list_news(){
        $show_news = news::all();
        return view('admin.fc_news', compact('show_news'));
    }
    function formadd_news(){
        $show_category = category::all();
        return view('admin.fc_formadd_news', compact('show_category'));
    }
    function add_news(Request $rq){
        $news = new news();

        $this->validate($rq, [
            'myFile' => 'required',
        ]);

        if(!$rq->hasfile('myFile'))
        {
            echo false;
            return false;
        }

        $fileImg = $rq->file('myFile');
        $path = 'assets/img';
        $nameimg = Str::random(30).'.'.$fileImg->extension();
        $pathFromImg = public_path($path);
        $fileImg->move($pathFromImg, $nameimg);
        $filePath = $path.'/'.$nameimg;
        $news->avatar = $filePath;
        
        $news->idcategory = $rq->chondanhmuc;
        $news->title = $rq->tieude_baiviet;
        $news->status = $rq->trangthai_baiviet;
        $news->hots = $rq->noibat_baiviet;
        $news->slug = Str::slug($rq->tieude_baiviet);
        $news->content = $rq->content_news;
        $news->save();

        return redirect()->route('admin.list_news');

       

    }
    function formedit_news($id){
        $show_category = category::all();
        $detail_news = news::where('id', $id)->first();
        return view('admin.fc_edit_news', compact('show_category', 'detail_news'));
    }




    function edit_news(Request $rq){
        $news = news::findOrFail($rq->id);

        // echo app_path().$rq->anhcu;
        if(!$rq->hasfile('myFile'))
        {
            
        }else{
            if(File::exists(public_path($rq->anhcu))){
                File::delete(public_path($rq->anhcu));
            }

            $this->validate($rq, [
                'myFile' => 'required',
            ]);
    
            $fileImg = $rq->file('myFile');
            $path = 'assets/img';
            $nameimg = Str::random(30).'.'.$fileImg->extension();
            $pathFromImg = public_path($path);
            $fileImg->move($pathFromImg, $nameimg);
            $filePath = $path.'/'.$nameimg;
            $news->avatar = $filePath;

            
        }

        $news->idcategory = $rq->chondanhmuc;
        $news->title = $rq->tieude_baiviet;
        $news->status = $rq->trangthai_baiviet;
        $news->hots = $rq->noibat_baiviet;
        $news->slug = Str::slug($rq->tieude_baiviet);
        $news->content = $rq->content_news;
        $news->save();

        return redirect()->route('admin.list_news');
    }
    function del_news($id){
        try {
            $news = news::findOrFail($id)->delete();
            return redirect()->route('admin.list_news', ['thongbao' => 'đã xóa thành công']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.list_news', ['thongbao' => 'xóa thất bại']);
        }
    }
    
}
