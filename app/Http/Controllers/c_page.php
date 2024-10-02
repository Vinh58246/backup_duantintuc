<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\news;
use App\Models\category;

class c_page extends Controller
{
    function home_client(){
        // lấy 1 tin  hot
        $hot = news::firstWhere('hots', 1);
        // lấy 6 tin tức hot từ sản phẩm thứ 2
        $hots = news::where('hots', 1)->offset(1)->limit(6)->get();
        // lấy 5 tin tức mới nhất
        $dates = news::orderBy('date', 'desc')->limit(5)->get();
        // lấy 6 tin tức nhiều lượt xem nhất
        $views = news::orderBy('views')->limit(6)->get();
        // đưa dữ liệu về view
        return view('client.fc_home', compact('hot', 'hots', 'dates', 'views'));
    }
    function detail_client($slug){
        // lấy chi tiết 1 tin tức theo slug
        $detail = news::where('slug', $slug)->first();
        $hots = news::where('hots', 1)->limit(3)->get();
        return view('client.fc_detail', compact('detail', 'hots'));
    }

    function filter_news(Request $rq){
        // redirect()->route('filter');
        // echo $rq->slug;
        // echo $rq->search;
        // var_export($rq);
        // echo "<br><br>";
        // var_export($rq->query());
        // echo "<br><br>";
        // var_export($rq->has('slug'));

        // dd($rq->query());
        // echo $rq->query()['category'];
        // echo $rq->category;
        // dd(news::query()->from());
        
        $news = news::query();
        
        $news->when($rq->has('category') && !empty($rq->category), function($sql) use ($rq){
            $sql->whereHas('category_foreign', function($sql) use ($rq){
                $sql->where('slug', $rq->category);
            });
        });
        
        $news->when($rq->has('search'), function($sql) use ($rq){
            $sql->where(function($sql) use ($rq){
                $sql->where('title', 'like', '%'. $rq->search . '%')
                    ->orWhere('content', 'like', '%'. $rq->search . '%');
            })->orWhereHas('category_foreign', function($sql) use ($rq){
                $sql->where('ten', 'like', '%'. $rq->search . '%');
            });
        });

        $news = $news->get();

        $hots = news::where('hots', 1)->limit(3)->get();

        $ctrgsl = category::all();
        return view('client.fc_filter', compact('ctrgsl', 'news', 'hots'));
    }
    function test(){
        // echo 'ch';
        $kq = news::where('idcategory', 1)->get();
        foreach($kq as $tintuc){
            echo $tintuc->title."<br>";
        }
    }
}
