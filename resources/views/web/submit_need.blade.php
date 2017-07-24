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

   <div >
       <form class="form" role="form" method="POST" action="{{ url('/submit-need/submit') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>お名前<input name="name" ></div>           
                <div>メールアドレス<input name="mail"></div>
                <div>所属/会社<input name="company"></div>
                <div>お問い合せの種類<input name="question_div" ></div>
                <div>お問い合せ内容<input name="question" ></div>
            <button type="submit" name="submit" value="buy">Submit</button>
      </form>
  </div>

@endsection
