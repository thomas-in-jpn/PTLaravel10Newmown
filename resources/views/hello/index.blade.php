@extends('layouts.helloapp')

@section('title','Index')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
@endsection

@section('footer')
coryright 2020 tuyano.
@endsection
