<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Response;

class HelloController extends Controller
{
    // methodを追加
    public function index(){
        return view('hello.index');
    }
}
