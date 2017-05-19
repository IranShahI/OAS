@extends('staff.header')
@section('pageContent')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">خلاصه فروش ها</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-spin fa-3x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$salesCount}}</div>
                            <div>تعداد فروش ها</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-credit-card fa-spin fa-3x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$incomes}}</div>
                            <div>جمع مبالغ واریزی</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-list-alt fa-spin fa-3x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$termsOfSale}}</div>
                            <div>تعداد شرایط فروش </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-car fa-spin fa-3x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$remains}}</div>
                            <div>تعداد خودروهای پارکینگ</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

@endsection