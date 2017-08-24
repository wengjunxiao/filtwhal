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
       <form class="form" role="form" method="POST" action="{{ url('/submit-need/submit') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="submit-table">
                  <dl>
                      <dt>お名前</dt>
                      <dd><input type="text" name="name"></dd>
                  </dl>
                  <dl>
                      <dt>メールアドレス</dt>
                      <dd><input type="email" name="mail"></dd>
                  </dl>
                  <dl>
                      <dt>所属/会社</dt>
                      <dd><input type="text" name="company"></dd>
                  </dl>
                  <dl>
                      <dt>お問い合せの種類</dt>
                      <dd><input type="text" name="question_div"></dd>
                  </dl>
                  <dl>
                      <dt style="vertical-align: top;">お問い合せ内容</dt>
                      <dd><textarea type="text" style="height:150px;width: 250px" name="question"></textarea></dd>
                  </dl>
                  <dl>
                      <dd><button type="submit" name="submit" value="buy">Submit</button></dd>
                  </dl>
              </div>
            
      </form>
  </div>

@endsection
