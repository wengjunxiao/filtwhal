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
  <div style="padding-top:100px; padding-bottom:100px;padding-left: 500px;background-color: #D8D8D8;">
      <button type="button" class="btn btn-submit" ng-click="goToSubmitNeed()">Submit Your Needs</button>
      <button type="button" class="btn btn-submit" style="margin-left: 100px; color: #BC2525; background-color: white;" ng-click="">Designer Register</button>
  </div>

 
  <div style="clear: both; margin-top:50px; margin-bottom: 50px;margin-left: 10%; height:500px;width: 100%">
      <div style="float: left;">
        <img style="width: 300px;margin-left: 80px;" class="inner" ng-src="/img/tky.png">
        <p style="margin-top:10px;text-align:center;width: 300px;margin-left: 80px;font-weight: 700; font-size: x-large;">Tokyo</p>
      </div>    
      <div style="float: left;">
        <img style="width: 300px;margin-left: 80px;" class="inner" ng-src="/img/ny.jpg">
        <p style="margin-top:10px;text-align:center;width: 300px;margin-left: 80px;font-weight: 700; font-size: x-large;">New York</p>
      </div>    
      <div style="float: left;">
        <img style="width: 300px;margin-left: 80px;" class="inner" ng-src="/img/sh.jpg">
        <p style="margin-top:10px;text-align:center;width: 300px;margin-left: 80px;font-weight: 700; font-size: x-large;">ShangHai</p>
      </div>    
      <div style="float: left;">
        <img style="width: 300px;margin-left: 80px;" class="inner" ng-src="/img/pk.png">
        <p style="margin-top:10px;text-align:center;width: 300px;margin-left: 80px;font-weight: 700; font-size: x-large;">BeiJing</p>
      </div>    
  </div>

  <div name="Products"></div>
  <div style="clear:both;width:100%;height:800px;clear: both;padding-left: 15%;padding-top: 100px;background-color: #D8D8D8;"  >
    <div style="float: left;">
      <p style="font-weight: 700;font-size: x-large;">Client:Trump</p>
      <p style="font-weight: 700;font-size: larger;">HTTP://WWW.TRUMPVANCOUVER.COM/BUILDING.HTML</p>
      <p style="font-weight: 700;font-size: larger;">WEB DESIGIN & PHOTOS</p>
    </div>    
    <div style="float: left;margin-left: 50px;color: white;">
      <img style="width: 1000px;" class="inner" ng-src="/img/trump_design.jpg">
    </div>    
  </div>
  <div style="clear:both;width:100%;height:800px;clear: both;padding-left: 15%;padding-top: 100px;background-color: #D8D8D8;"  >
    <div style="float: left;color: white;">
      <img style="width: 1000px;" class="inner" ng-src="/img/concord.jpg">
    </div>    
    <div style="float: left;margin-left: 50px;">
      <p style="font-weight: 700;font-size: x-large;">Client:Concord</p>
      <p style="font-weight: 700;font-size: larger;">HTTP://WWW.CONCORDPACIFIC.COM</p>
      <p style="font-weight: 700;font-size: larger;">WEB DESIGIN & PROGRAM</p>
    </div>    
  </div>
  <div style="clear:both;width:100%;height:850px;clear: both;padding-left: 15%;padding-top: 100px;background-color: #D8D8D8;"  >
    <div style="float: left;">
      <p style="font-weight: 700;font-size: x-large;">Client:Thisopenspace</p>
      <p style="font-weight: 700;font-size: larger;">HTTP://THISOPENSPACE.COM</p>
      <p style="font-weight: 700;font-size: larger;">GRAPHICDEISGN</p>  
    </div>    
    <div style="float: left;margin-left: 250px;color: white;">
      <img style="width: 1000px;" class="inner" ng-src="/img/Thisopenspace.jpg">
    </div>    
  </div>
  <div style="margin-top: 60px">
    <p style="margin-bottom:20px; text-align:center;font-weight: 700; font-size: -webkit-xxx-large; color: #BC2525">1000+ </p>
    <p style="margin-bottom:50px;text-align:center;font-weight: 700; font-size: -webkit-xxx-large">Companies Choose Filtwhal</p>
    <img style="margin-left:20%;width: 60%;" class="inner" ng-src="/img/clients.png">
  </div>
  <div style="clear:both; margin-top: 60px">
     <p style="margin-bottom:20px; text-align:center;font-weight: 700; font-size: -webkit-xxx-large; ">Contact Us</p>
     <form name="Contact" style=" margin-left:38%; margin-top: 60px" class="form" role="form" method="POST" action="{{ url('/contact-us') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="submit-table">
                <div>
                <dl style="float:left; margin-right: 50px">
                    <dt><p class="form-box-text">お名前</p></dt>
                    <dd><input type="text" class="submit-text" style="width: 150px;" name="name"></dd>
                </dl>
                <dl>
                    <dt><p class="form-box-text">メールアドレス</p></dt>
                    <dd><input type="email" class="submit-text" style="width: 300px;" name="mail"></dd>
                </dl>
                </div>
                <dl>
                    <dt><p class="form-box-text">所属/会社</p></dt>
                    <dd><input type="text" class="submit-text" name="company" style="width: 500px;"></dd>
                </dl>
                <dl>
                    <dt><p class="form-box-text">お問い合せの種類</p></dt>
                    <dd><input type="text" class="submit-text" name="question_div" style="width: 500px;"></dd>
                </dl>
                <dl>
                    <dt style="vertical-align: top;"><p class="form-box-text">お問い合せ内容</p></dt>
                    <dd><textarea type="text" class="submit-text" style="height:150px;width: 500px" name="question"></textarea></dd>
                </dl>
                <dl>
                    <dd><button type="submit" class="btn btn-contact" name="submit" style="margin-left: 150px;"  value="submit">提出</button></dd>
                </dl>
            </div>
      </form>
  </div>
  <div style="clear: both;">
    <ul class ="nolist-ul">
        <li ><a style="color: black" href="{{ url('/about') }}" TARGET="_self">About</a></li>
        <li><a style="color: black" href="{{ url('/contact-us') }}" TARGET="_self">Contact Us</a></li>
        <li><a style="color: black" href="{{ url('/recruit') }}" TARGET="_self">Recruit</a></li>
    </ul>
   </div>
@endsection
