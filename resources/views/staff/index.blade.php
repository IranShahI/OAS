@extends('staff.header')
@section('pageContent')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                {{--<div class="col-lg-3 col-md-6">--}}
                    {{--<div class="panel panel-primary">--}}
                        {{--<div class="panel-heading">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-3">--}}
                                    {{--<i class="fa fa-comments fa-5x"></i>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-9 text-right">--}}
                                    {{--<div class="huge">26</div>--}}
                                    {{--<div>New Comments!</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<a href="#">--}}
                            {{--<div class="panel-footer">--}}
                                {{--<span class="pull-left">View Details</span>--}}
                                {{--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6">--}}
                    {{--<div class="panel panel-green">--}}
                        {{--<div class="panel-heading">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-3">--}}
                                    {{--<i class="fa fa-tasks fa-5x"></i>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-9 text-right">--}}
                                    {{--<div class="huge">12</div>--}}
                                    {{--<div>New Tasks!</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<a href="#">--}}
                            {{--<div class="panel-footer">--}}
                                {{--<span class="pull-left">View Details</span>--}}
                                {{--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6">--}}
                    {{--<div class="panel panel-yellow">--}}
                        {{--<div class="panel-heading">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-3">--}}
                                    {{--<i class="fa fa-shopping-cart fa-5x"></i>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-9 text-right">--}}
                                    {{--<div class="huge">124</div>--}}
                                    {{--<div>New Orders!</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<a href="#">--}}
                            {{--<div class="panel-footer">--}}
                                {{--<span class="pull-left">View Details</span>--}}
                                {{--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6">--}}
                    {{--<div class="panel panel-red">--}}
                        {{--<div class="panel-heading">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-3">--}}
                                    {{--<i class="fa fa-support fa-5x"></i>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-9 text-right">--}}
                                    {{--<div class="huge">13</div>--}}
                                    {{--<div>Support Tickets!</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<a href="#">--}}
                            {{--<div class="panel-footer">--}}
                                {{--<span class="pull-left">View Details</span>--}}
                                {{--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-newspaper-o"></i> Public Notifications
                            <div style="margin-top: 1em">
                                <div class="row">
                                    <div class="alert alert-info" style="margin:0 2em 0 2em">
                                        <p>“The Group will continue to invest in the business but given that our strategy is focused on organic growth, the Board’s intention is to use the majority of surplus cash, after taking account of dividends, to fund a rolling programme of share buy-backs, starting imminently. The expectation is that some surplus cash will be used to further reduce indebtedness.”</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="animatedBlock row clearfix">

		<div class="col-sm-6 block-large">

			<div class="percentBlock" style="background-color: rgb(38, 127, 200); height: 204px;">
				<h3><span class="counter">100</span>%</h3>
				<p>of our business is focused on digital services</p>
			</div>
												
		</div><!-- col -->



		<div class="col-sm-6 block-large">

			<div class="percentBlock" style="background-color: rgb(0, 165, 3); height: 204px;">
				<h3><span class="counter">4</span>x</h3>
				<p>larger consumer audience compared to our nearest competitor</p>
			</div>
												
		</div><!-- col -->



		<div class="col-sm-6 col-md-4 block-medium">

			<div class="percentBlock" style="background-color: rgb(194, 119, 205); height: 204px;">
				<h3><span class="counter">88</span>%</h3>
				<p>of people are familiar with the Auto Trader brand as somewhere to research/buy/sell cars</p>
			</div>
												
		</div><!-- col -->



		<div class="col-sm-6 col-md-4 block-medium">

			<div class="percentBlock" style="background-color: rgb(255, 171, 25); height: 204px;">
				<h3><span class="counter">250</span>million</h3>
				<p>average number of advert views per month on Auto Trader</p>
			</div>
												
		</div><!-- col -->



		<div class="col-sm-6 col-md-4 block-medium">

			<div class="percentBlock" style="background-color: rgb(232, 91, 48); height: 204px;">
				<h3><span class="counter">67</span>%</h3>
				<p>of consumers rated Auto Trader as the most influencial classified site</p>
			</div>
												
		</div><!-- col -->



		<div class="col-sm-6 col-md-4 block-medium">

			<div class="percentBlock" style="background-color: rgb(200, 47, 108); height: 204px;">
				<h3><span class="counter">1.5</span>million</h3>
				<p>valuations conducted on Auto Trader by consumers each month</p>
			</div>
												
		</div><!-- col -->



		<div class="col-sm-6 col-md-4 block-medium">

			<div class="percentBlock" style="background-color: rgb(87, 106, 115); height: 204px;">
				<h3><span class="counter">430000</span></h3>
				<p>average numbers of cars listed on Auto Trader per day</p>
			</div>
												
		</div><!-- col -->



		<div class="col-sm-6 col-md-4 block-medium">

			<div class="percentBlock" style="background-color: rgb(104, 159, 56); height: 204px;">
				<h3><span class="counter">80</span>%</h3>
				<p>of UK automotive retailers advertise on Auto Trader</p>
			</div>
												
		</div><!-- col -->

</div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                    </div>

                        <!-- /.panel-body -->

                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->


@endsection
