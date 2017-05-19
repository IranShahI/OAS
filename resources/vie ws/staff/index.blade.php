@extends('staff.header')
@section('pageContent')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">داشبورد</h1>
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
                            <i class="fa fa-newspaper-o"></i> پیام های عمومی
                            <div style="margin-top: 1em">
                                <div class="row">
                                    <div class="alert alert-info" style="margin:0 2em 0 2em">
                                        <p>یه مشت راهنمایی در مورد این سیستم باید خدمتتون تقدیم کنیم اینجا !!</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row" style="background: rgba(255, 255, 255, 0.51);margin: 1em;padding: 2em;border-radius: .5em;">
                                    <div class="col-md-6" style="border-radius: .3em;overflow: hidden">
                                        <img style="border-radius: .3em" class="img-responsive" src="/img/ramadan.jpg" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h3>فرارسیدن ماه مبارک رمضان</h3>
                                        <h4>ضمن عرض تبریک، توصیه ای به همکاران عزیز</h4>
                                        <p.جون مادرتون ناهار نخورین، بازرس میاد پلم میکنه بدبخت میشیم حالا کلی متن باید اینجا بزارم دیگه حال ندارم لورم ایپسوم تولید میکنم با اجازتون،</p>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                    </div>
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
