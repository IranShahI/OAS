<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kerman MoToR Administration System| سیستم مدیریت</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/css/plugins/metisMenu/metisMenu.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/sb-admin-2.css" rel="stylesheet">
    <link href="/css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/css/iransans/iransans.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
        <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background:#393185;border-top: 1em solid #e31e24;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color: white" href="index.html">سیستم مدیریت فروش اینترنتی کرمان موتور</a>
            </div>

            <!-- /.navbar-header -->

            <div class="container">
                <div class="pull-left">
                    <a style="color: white; display: inline-block" class="navbar-text">{{Auth::user()->name}} عزیز، خوش آمدید!</a>
                    <a style="color: #e31e24 ;display: inline-block" class="navbar-text" href="/logout">خروج <span class="fa fa-sign-out"></span></a>
                </div>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <div class="admin-logo"><img class="img-responsive" src="/img/logo.png" alt=""></div>
                    <ul class="nav" id="side-menu">
                        <li>
                            <a class="active" href="{{url('/staff')}}"><i class="fa fa-dashboard fa-fw"></i> داشبورد</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>گزارش ها<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                @if(in_array('1',$accessArray))
                                <li>
                                    <a href="{{url('/staff/salesReport')}}">فروش ها</a>
                                </li>
                                @endif
                                @if(in_array('2',$accessArray))

                                    <li>
                                    <a href="{{url('/staff/summary')}}">خلاصه فروش ها</a>
                                </li>
                                    @endif
                                    @if(in_array('7',$accessArray))
                                <li>
                                    <a href="#">تراکنش های اینترنتی</a>
                                </li>
                                    @endif
                                    @if(in_array('6',$accessArray))
                                <li>
                                    <a href="{{url('/staff/parkingRemains')}}">موجودی پارکینگ</a>
                                </li>
                                        @endif
                            </ul>
                        </li>

                        @if(in_array('5',$accessArray))
                        <li>
                            <a href="{{url('/staff/confirmation')}}"><i class="fa fa-table fa-fw"></i>تایید فروش ها</a>
                        </li>
                        @endif
                        @if(in_array('4',$accessArray))
                        <li>
                            <a href=""><i class="fa fa-wrench fa-fw"></i> نظرسنجی<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li>
                                    <a href="{{url('/staff/pollsManagement')}}">مدیریت نظرسنجی ها</a>
                                </li>
                                <li>
                                    <a href="{{url('/staff/pollsReport')}}">گزارش نظرسنجی</a>
                                </li>

                            </ul>
                        </li>
                        @endif
                        @if(in_array('8',$accessArray))
                        <li>
                            <a href="{{url('/staff/usersManager')}}"><i class="fa fa-sitemap fa-fw"></i> مدیریت کاربران</a>
                        </li>
                            @endif
                        @if(in_array('9',$accessArray))

                            <li>
                                <a href="{{url('/staff/termsOfSale')}}"><i class="fa fa-sitemap fa-fw"></i>مدیریت شرایط فروش</a>
                            </li>
                            @endif
                        @if(in_array('10',$accessArray))

                            <li>
                                <a href="{{url('/staff/carsManager')}}"><i class="fa fa-car fa-fw"></i>مدیریت خودرو</a>
                            </li>
                        @endif
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        @yield('pageContent')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/persianumber.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/js/plugins/metisMenu/metisMenu.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.js"></script>
    <script src="/js/jquery.number.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>

    <script>
        $(function () {
            $('#menu').metisMenu();
        });
//        jQuery(function($) {
//            $("input[number]").autoNumeric('init', {aSign:' ریال', pSign:'s' });
//        });
        $('.number').number( true, 0 );

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("body").persiaNumber();
        });
    </script>
</body>

</html>
