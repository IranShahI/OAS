<!DOCTYPE html>
<html lang="en">

<head>


<link rel="icon" href="/img/favicons/favicon.png"/>
<link rel="apple-touch-icon" href="/img/favicons/touch-icon-iphone.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/touch-icon-ipad.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/touch-icon-iphone-retina.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/touch-icon-ipad-retina.png"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AutoTrader | Administration Panel</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="/css/bootstrap.min.css" rel="stylesheet">-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- MetisMenu CSS -->
    <link href="/css/plugins/metisMenu/metisMenu.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/sb-admin-2.css" rel="stylesheet">
    <!--<link href="/css/plugins/dataTables.bootstrap.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <link rel="stylesheet" type="text/css" href="/staff-asset/DataTables-1.10.15/css/dataTables.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/staff-asset/Buttons-1.3.1/css/buttons.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/staff-asset/FixedHeader-3.1.2/css/fixedHeader.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/staff-asset/Responsive-2.1.1/css/responsive.bootstrap.min.css"/>
    

        <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
        <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background:#313c53;border-bottom: 0.6em solid #e31e24;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color: white" href="index.html">Operator Panel of Sale Managment</a>
            </div>

            <!-- /.navbar-header -->

            <div class="container">
                <div class="pull-right">
                    <a style="color: white; display: inline-block" class="navbar-text">Welcome, dear {{Auth::user()->name}} !</a>
                    <a style="color: #e31e24 ;display: inline-block" class="navbar-text" href="/logout">Logout <span class="fa fa-sign-out"></span></a>
                </div>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <div class="admin-logo"><img class="img-responsive" src="/img/autotrader.svg" alt=""></div>
                    <ul class="nav" id="side-menu">
                        <li>
                            <a class="active" href="{{url('/staff')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                @if(in_array('1',$accessArray))
                                <li>
                                    <a href="{{url('/staff/salesReport')}}">Sales</a>
                                </li>
                                @endif
                                @if(in_array('2',$accessArray))

                                    <li>
                                    <a href="{{url('/staff/summary')}}">Sales Summary</a>
                                </li>
                                    @endif
                                    @if(in_array('7',$accessArray))
                                <li>
                                    <a href="#">Peyments Transitions</a>
                                </li>
                                    @endif
                                    @if(in_array('6',$accessArray))
                                <li>
                                    <a href="{{url('/staff/parkingRemains')}}">Left in parking</a>
                                </li>
                                        @endif
                            </ul>
                        </li>

                        @if(in_array('5',$accessArray))
                        <li>
                            <a href="{{url('/staff/confirmation')}}"><i class="fa fa-table fa-fw"></i>Sales Confirmation</a>
                        </li>
                        @endif
                        @if(in_array('4',$accessArray))
                        <li>
                            <a href=""><i class="fa fa-wrench fa-fw"></i> Poll<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li>
                                    <a href="{{url('/staff/pollsManagement')}}">Manage Polls</a>
                                </li>
                                <li>
                                    <a href="{{url('/staff/pollsReport')}}">Polls Report</a>
                                </li>

                            </ul>
                        </li>
                        @endif
                        @if(in_array('8',$accessArray))
                        <li>
                            <a href="{{url('/staff/usersManager')}}"><i class="fa fa-sitemap fa-fw"></i>Users Managment</a>
                        </li>
                            @endif
                        @if(in_array('9',$accessArray))

                            <li>
                                <a href="{{url('/staff/termsOfSale')}}"><i class="fa fa-sitemap fa-fw"></i>Manage Sale Offers</a>
                            </li>
                            @endif
                        @if(in_array('10',$accessArray))

                            <li>
                                <a href="{{url('/staff/carsManager')}}"><i class="fa fa-car fa-fw"></i>Manage Cars</a>
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
    <!--<script type="text/javascript" src="jQuery-2.2.4/jquery-2.2.4.min.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <!--<script src="/js/bootstrap.min.js"></script>-->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <!-- Metis Menu Plugin JavaScript -->
    <script src="/js/plugins/metisMenu/metisMenu.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.js"></script>
    <script src="/js/jquery.number.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="/staff-asset/DataTables-1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/staff-asset/pdfmake-0.1.27/build/vfs_fonts.js"></script>
<script type="text/javascript" src="/staff-asset/pdfmake-0.1.27/build/pdfmake.min.js"></script>
<script type="text/javascript" src="/staff-asset/DataTables-1.10.15/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/staff-asset/Buttons-1.3.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="/staff-asset/Buttons-1.3.1/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="/staff-asset/Buttons-1.3.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="/staff-asset/Buttons-1.3.1/js/buttons.print.min.js"></script>
<script type="text/javascript" src="/staff-asset/FixedHeader-3.1.2/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" src="/staff-asset/Responsive-2.1.1/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="/staff-asset/Responsive-2.1.1/js/responsive.bootstrap.min.js"></script>


    <script>
        $(function () {
            $('#menu').metisMenu();
        });
//        jQuery(function($) {
//            $("input[number]").autoNumeric('init', {aSign:' ریال', pSign:'s' });
//        });
        $('.number').number( true, 0 );

    </script>
    <!--<script type="text/javascript">
        $(document).ready(function(){
            $("body").persiaNumber();
        });
    </script>-->
    <script>
        $(document).ready(function() {
    $('.datatable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv', 'print'
        ]
    } );
} );
    </script>
</body>

</html>
