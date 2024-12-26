<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class apinews extends Controller
{
    function index(){
        $show_news = news::paginate(3);
        $js = [
            'status' => 200,
            'msg' => 'Successfully',
            'data'=> $show_news
        ];
        return response()->json($js, 200);
    }
    function show($id){
        $detail_news = news::findOrFail($id);
        $js = [
            'status' => 200,
            'msg' => 'Successfully',
            'data'=> $detail_news
        ];
        return response()->json($js, 200);
    }
    function store(Request $rq){
        $news = new news();
        $news->avatar = $rq->myFile;
        $news->idcategory = $rq->chondanhmuc;
        $news->title = $rq->tieude_baiviet;
        $news->status = $rq->trangthai_baiviet;
        $news->hots = $rq->noibat_baiviet;
        $news->slug = Str::slug($rq->tieude_baiviet);
        $news->content = $rq->content_news;
        $news->save();


        $js = [
            'status' => 201,
            'msg' => 'Successfully',
            'data'=> $news
        ];

        return response()->json($js, 201);
    }
    function update(Request $rq, $id){
        $news = news::findOrFail($id);
        if(isset($rq->myFile)){
            $news->avatar = $rq->myFile;
        }
        $news->idcategory = $rq->chondanhmuc;
        $news->title = $rq->tieude_baiviet;
        $news->status = $rq->trangthai_baiviet;
        $news->hots = $rq->noibat_baiviet;
        $news->slug = Str::slug($rq->tieude_baiviet);
        $news->content = $rq->content_news;
        $news->save();

        $js = [
            'status' => 200,
            'msg' => 'Successfully',
            'data'=> $news
        ];
        
        return response()->json($js, 200);
    }
    function destroy($id){
        try {
            news::findOrFail($id)->delete();

            $js = [
                'status' => 204,
                'msg' => 'del thành công',
                'data'=> []
            ];

            return response()->json($js);
        } catch (\Throwable $th) {

            $js = [
                'status' => 404,
                'msg' => 'del thất bại',
                'data'=> []
            ];

            return response()->json($js);
        }
    }
    function news_in_category($id){
        $news = news::where('idcategory', $id)->get();
        $js = [
            'status' => 200,
            'msg' => 'Successfully',
            'data'=> $news
        ];
        return response()->json($js, 200);
    }
}
