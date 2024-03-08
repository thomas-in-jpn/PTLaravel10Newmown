<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Response;

class HelloController extends Controller
{
    // methodを追加
    public function index(){
        $data = [
            'msg'=>'これはBladeを利用したサンプルメッセージです。',
        ];
        return view('hello.index', $data);
    }
}
