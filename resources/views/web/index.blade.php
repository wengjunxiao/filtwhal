@extends('web.app')
@section('content')
<link href="{{ asset('/css/index.css') }}" rel="stylesheet">
<!-- <div style="height: 600px" ng-controller="ViewHomeController">
    <div uib-carousel active="active" interval="myInterval">
      <div uib-slide ng-repeat="slide in slides track by slide.id" index="slide.id" style="height:550px;">
        <div class="block"> 
        <img class="inner" ng-src="@{{slide.image}}">
        </div>
        <div class="carousel-caption">
        </div>
      </div>
    </div>
  </div> -->
   <br>

  <div class="">
      <button>Submit Your Needs</button>
  </div>
   <ul style="list-style:none;">
        <li><a href="{{ url('/about') }}" TARGET="_self">About</a></li>
        <li><a href="{{ url('/contact-us') }}" TARGET="_self">Contact Us</a></li>
        <li><a href="{{ url('/recruit') }}" TARGET="_self">Recruit</a></li>
    </ul>
@endsection
