@extends('staff.header')
@section('pageContent')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" style="margin: 2em">
                <h1 class="page-header" style="display: inline;border-bottom: 0;margin: 1em">مدیریت شرایط فروش</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newUser">ثبت شرایط فروش جدید</button>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                @if(Session::has('success_message'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p class="al">{{Session::get('success_message')}}</p>
                    </div>
                    @endif
                <div class="panel panel-default">

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>کد شرایط فروش</th>
                                    <th>نوع فروش</th>
                                    <th>خودرو</th>
                                    <th>توضیحات</th>
                                    <th>قیمت تمام شده</th>
                                    <th>پرداخت اولیه</th>
                                    <th>ویرایش</th>
                                    <th>حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($termsOfSale as $termOfSale)
                                    <tr class="gradeX">
                                        <td>{{$termOfSale->termOfSaleNo}}</td>
                                        <td>{{$termOfSale->saleTypeLookup->saleType}}</td>
                                        <td>{{$termOfSale->car->carNameLookups->name}}</td>
                                        <td>{{$termOfSale->description}}</td>
                                        <td class="number">{{$termOfSale->cost}}</td>
                                        <td class="number">{{$termOfSale->initialPrice}}</td>
                                        <td style="text-align: center"><a  title="ویرایش" href="{{url('staff/termsOfSale/edit',$termOfSale->termOfSaleNo)}}" class="user-edit-icon"><span class="fa fa-edit"></span></a></td>
                                        <td style="text-align: center"><a title="حدف" href="{{url('staff/termsOfSale/delete',$termOfSale->termOfSaleNo)}}" class="user-edit-icon"><span class="fa fa-trash"></span></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Button trigger modal -->


                    <!-- Modal -->
                    <div class="modal fade" id="newUser" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="بستن"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">ثبت شرایط فروش جدید</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{url('staff/termsOfSale')}}">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <lable>نوع فروش :</lable>
                                            <select name="saleTypeLookups_saleTypeNo" class="form-control">
                                                @foreach($saleTypes as $saleType)
                                                    <option value="{{$saleType->saleTypeNo}}">{{$saleType->saleType}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <lable>خودرو :</lable>
                                            <select name="car_carNo" class="form-control">
                                                @foreach($cars as $car)
                                                    <option value="{{$car->carNo}}">{{$car->carNameLookups->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <lable>توضیحات :</lable>
                                            <textarea name="description" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <lable>قیمت تمام شده :</lable>
                                            <input name="cost" type="text" class="form-control number">
                                        </div>
                                        <div class="form-group">
                                            <lable>پرداخت اولیه :</lable>
                                            <input name="initialPrice" type="text" class="form-control number">
                                        </div>

                                        {{--<div class="form-group">--}}
                                            {{--<input type="submit" class="btn btn-primary" value="ثبت">--}}
                                        {{--</div>--}}
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-primary" value=" ثبت ">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{--<div class="panel-body">--}}
                        {{--<div class="table-responsive">--}}
                            {{--<table class="table table-striped table-bordered table-hover" id="dataTables-example">--}}
                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th>برند</th>--}}
                                    {{--<th>نام خودرو</th>--}}
                                    {{--<th>موجودی</th>--}}
                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody>--}}
                                {{--@foreach($cars as $car)--}}
                                    {{--<tr class="odd gradeX">--}}
                                        {{--<td>{{$car->carBrandLookups->brand}}</td>--}}
                                        {{--<td>{{$car->carNameLookups->name}}</td>--}}
                                        {{--<td>{{$car->carStock}}</td>--}}

                                    {{--</tr>--}}
                                {{--@endforeach--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        </div>




@endsection
