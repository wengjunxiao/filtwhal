@extends('web.app')
@section('content')
<link href="{{ asset('/css/submit-need.css') }}" rel="stylesheet">
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

   <div >
       <form  class="form" role="form" method="POST" action="{{ url('/submit-need/submit') }}">
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

@endsection
