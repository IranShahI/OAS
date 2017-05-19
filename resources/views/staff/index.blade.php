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
                                        <p>زندگی یعنی: زنگ فرصت های طلایی و نگاه آرمانی به هدف های بلند !!</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row" style="background: rgba(255, 255, 255, 0.51);margin: 1em;padding: 2em;border-radius: .5em;">
                                    <div class="col-md-6" style="border-radius: .3em;overflow: hidden">
                                        <img style="border-radius: .3em" class="img-responsive" src="/img/news.jpg" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>تولید خودروهای هیوندای در کرمان موتور</h4>
                                        {{--<h4>ضمن عرض تبریک، توصیه ای به همکاران عزیز</h4>--}}
                                        <p>  مديرعامل كرمان موتور از امضاي قرارداد با شركت هيونداي موتور كره جنوبي به منظور توليد خودروهاي اين شركت كره اي در منطقه ويژه اقتصادي ارگ جديد بم خبر داد.
                                            سامان فيروزي با اعلام اين خبر اظهار داشت: به دنبال امضاي قرارداد با شركت هيونداي موتور كره جنوبي مقرر شد، تا از دی ماه امسال شاهد توليد محصولات اين خودروساز كره اي در ايران باشيم. به گفته وي، در گام اول  و از ابتدای فصل زمستان، توليد دو محصول هيونداي i10 و i20 در كارخانه كرمان موتور آغاز خواهد شد و تمام توان خود را براي توليد و عرضه محصولات به روز و با كيفيت به كار خواهيم بست.

                                            فيروزي با تاكيد بر اينكه لغو تحريم ها به واسطه برجام، فصل تازه اي در اقتصاد ايران و به ويژه صنعت خودروسازي كشور گشوده است، تصريح كرد: خودروسازان بخش خصوصي با قراردادهايي كه با شرکای جدید خود به امضا مي رسانند، از يك سو به إيجاد اشتغال بيشتر كمك كرده و از سوي ديگر حق انتخاب بيشتري را در اختيار مشتريان قرار مي  دهند.

                                            مديرعامل كرمان موتور متذكر شد: شركت هاي إيراني، بايد با قراردادهاي مشاركت انتفاعي يا جوينت ونچر از مزاياي مالي و همچنين دانش و تكنولوژي شركاي خارجي خود بهره مند شوند. وي در پايان اولويت اصلي كرمان موتور را گسترش همكاري با شركاي فعلي و آغاز همکاری جدید با خودروسازان معتبر جهانی، افزايش كيفيت محصولات توليدي و توسعه سبد محصولات دانست، كه در همين راستا قرارداد هيونداي موتور كره جنوبي به امضا رسيده است.</p>
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
