<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AutoTrader | Staff Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <!--<link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">-->
        <!--<link rel="stylesheet" href="{{asset('css/iransans/iransans.css')}}">-->
        <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/form-login.css')}}">
        <link rel="stylesheet" href="{{asset('css/login.css')}}">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="icon" href="/img/favicons/favicon.png"/>
        <link rel="apple-touch-icon" href="/img/favicons/touch-icon-iphone.png"/>
        <link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/touch-icon-ipad.png"/>
        <link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/touch-icon-iphone-retina.png"/>
        <link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/touch-icon-ipad-retina.png"/>

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                                <div class="form-top-right">
                        			<img src="/img/autotrader.svg">
                        		</div>
                        		<div class="form-top-left">
                        			<h3>Staff Enterance</h3>
                            		<p>Central Birmingham Office</p>
                        		</div>
                            </div>
                            <div class="form-bottom">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('personalCode') ? ' has-error' : '' }}">
                                        <label for="personalCode" class="col-md-4 control-label">Personnel Code</label>

                                        <div class="col-md-6">
                                            <input id="personalCode" type="text" class="form-control" name="personalCode" value="{{ old('personalCode') }}">

                                            @if ($errors->has('personalCode'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('personalCode') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">Login
                                                <i class="fa fa-btn fa-sign-in"></i>
                                            </button>

                                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgotten your password?</a>
                                        </div>  
                                    </div>
                                </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.backstretch.min.js"></script>
        <script src="/js/login-scripts.js"></script>

        
        <!--[if lt IE 10]>
            <script src="/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>