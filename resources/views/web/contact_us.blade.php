@extends('web.app')
@section('content')
<link href="{{ asset('/css/comp_intro.css') }}" rel="stylesheet">
<br>
 <!--  <div style="overflow: hidden;">
    <div class = "left_menu">
      <div style="position: fixed;">
        <ul class="nolist-ul">
          <li><a style="color: grey" href="{{ url('/about') }}" TARGET="_self">About</a></li>
          <li><a style="color: black" href="{{ url('/contact-us') }}" TARGET="_self">Contact Us</a></li>
          <li \><a style="color: grey"href="{{ url('/recruit') }}" TARGET="_self">Recruit</a></li>
       </ul>
      </div>
    </div> -->
     <div style="float: left;margin-top: 100px">
       <p style="margin-bottom:20px; text-align:center;font-weight: 700; font-size: large; ">
        お問い合わせいただきまして誠にありがとうございました。<br>
        後日、改めて担当者よりメール、またはお電話にてご連絡させていただきます。</p>
    </div> 

@endsection
