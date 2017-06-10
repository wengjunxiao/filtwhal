@extends('web.app')
@section('content')
<link href="{{ asset('/css/comp_intro.css') }}" rel="stylesheet">
  <div style="overflow: hidden;">
    <div class = "left_menu">
      <div style="position: fixed;">
        <ul>
          <li><a style="color: grey" href="{{ url('/about') }}" TARGET="_self">About</a></li>
          <li><a style="color: black" href="{{ url('/contact-us') }}" TARGET="_self">Contact Us</a></li>
          <li \><a style="color: grey"href="{{ url('/recruit') }}" TARGET="_self">Recruit</a></li>
       </ul>
      </div>
    </div>
    <div style="float: left;margin-top: 100px">
    <p>
      ドメイン:www.filtwhal.co.jp<br>
      住所：東京都港区赤坂7-3-38  カナダ大使館　1F<br>
      電話：03-6894-7676<br>
      Email:info@filtwhal.cojp<br>
    </p>
    </div> 
  </div>

@endsection
