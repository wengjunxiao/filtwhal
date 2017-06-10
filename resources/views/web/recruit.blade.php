@extends('web.app')
@section('content')
<link href="{{ asset('/css/comp_intro.css') }}" rel="stylesheet">
  <div style="overflow: hidden;">
    <div class = "left_menu">
      <div style="position: fixed;">
        <ul>
          <li style="color: grey"><a href="{{ url('/about') }}" TARGET="_self">About</a></li>
          <li style="color: grey"><a href="{{ url('/contact-us') }}" TARGET="_self">Contact Us</a></li>
          <li style="color: black"><a href="{{ url('/recruit') }}" TARGET="_self">Recruit</a></li>
       </ul>
      </div>
    </div>
    <div style="float: left;margin-top: 100px">
    <p>
    
    </p>
    </div> 
  </div>
@endsection
