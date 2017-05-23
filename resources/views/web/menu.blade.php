<br />
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">@{{ 'SITENAME' | translate }}</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}" TARGET="_self">@{{ 'HOME' | translate }}</a></li>
                <li><a>|</a></li>
                <li><a href="{{ url('/search') }}" TARGET="_self">@{{ 'SEARCH' | translate }}</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}" TARGET="_self">@{{ 'LOGIN' | translate }}</a></li>
                    <li><a href="{{ url('/auth/register') }}" TARGET="_self">@{{ 'REGISTER' | translate }}</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}" TARGET="_self">@{{ 'LOGOUT' | translate }}</a></li>
                            <li><a href="{{ url('/my-list') }}" TARGET="_self">我的订单</a></li>
                        </ul>
                    </li>
                @endif
                <li><a style="cursor: pointer" ng-click="changeLanguage('ch')">中文</a></li>
                <li><a style="cursor: pointer" ng-click="changeLanguage('en')">English</a></li>
            </ul>
        </div>
    </div>
</nav>