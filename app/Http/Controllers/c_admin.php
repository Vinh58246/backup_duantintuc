<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_admin extends Controller
{
    function tintuc_admin(){
        return view('admin.fc_news');
    }
}
