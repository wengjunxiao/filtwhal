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
<!--    <br> -->

<div style="height: 700px" ng-controller="ViewHomeController">
    <div uib-carousel active="active" interval="myInterval">
      <div uib-slide ng-repeat="slide in slides track by slide.id" index="slide.id" style="height:700px;">
        <div class="block"> 
        <img style="width: 2000px;margin-left: 0px;margin-top: 0px"class="inner" ng-src="@{{slide.image}}">
        </div>
        <div class="carousel-caption">
        </div>
      </div>
    </div>
  </div>

<!--   <div style="margin-left: 200px">
      <img style="width: 700px" class="home-main" src="/img/home_main.png">
  </div> -->
  <div style="padding-top:100px; padding-bottom:100px;padding-left: 500px;background-color: #D8D8D8">
      <button type="button" class="btn btn-submit" ng-click="goToSubmitNeed()">Submit Your Needs</button>
      <button type="button" class="btn btn-submit" style="padding-left: 100px; color: #BC2525; background-color: white" ng-click="">Designer Register</button>
  </div>
  
   <ul class ="nolist-ul">
        <li ><a style="color: black" href="{{ url('/about') }}" TARGET="_self">About</a></li>
        <li><a style="color: black" href="{{ url('/contact-us') }}" TARGET="_self">Contact Us</a></li>
        <li><a style="color: black" href="{{ url('/recruit') }}" TARGET="_self">Recruit</a></li>
    </ul>
@endsection
