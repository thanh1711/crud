<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class thanhcontroller extends Controller
{

function thanh(){
    $data = DB::table('users')->select('id','name','email')->get();
    return view('hung',['user'=>$data]);
    
}
}
