<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Response;

class HelloController extends Controller
{
    // methodを追加
    public function index(){
        $data = [
            ['name'=>'山田たろう', 'mail'=>'taro@yamada.local'],
            ['name'=>'田中はなこ', 'mail'=>'hanako@flower.local'],
            ['name'=>'鈴木さちこ', 'mail'=>'sachiko@happy.local']
        ];
        return view('hello.index',['data'=>$data]);
    }
    
}
