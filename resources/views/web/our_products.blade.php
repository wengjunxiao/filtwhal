@extends('web.app')
@section('content')
<link href="{{asset('/css/index.css') }}" rel="stylesheet">
<div style="height: 600px" ng-controller="ViewHomeController">
    <div uib-carousel active="active" interval="myInterval">
      <div uib-slide ng-repeat="slide in slides track by slide.id" index="slide.id" style="height:800px;">
        <div class="block"> 
        <img style="width: 2500px;margin-left: -250px;margin-top: -350px"class="inner" ng-src="@{{slide.image}}">
        </div>
        <div class="carousel-caption">
        </div>
      </div>
    </div>
  </div>
   <br>

   <div >
      OutProducts
  </div>

@endsection
