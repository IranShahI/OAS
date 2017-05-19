@extends('staff.header')
@section('pageContent')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" >
                <h1 class="page-header" >ویرایش شرایط فروش</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <form method="post" action="{{url('staff/termsOfSale/edit',$termOfSale->termOfSaleNo)}}">
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
                                <textarea required name="description" class="form-control">{{$termOfSale->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <lable>قیمت تمام شده :</lable>
                                <input number required name="cost" type="text" class="form-control" value="{{$termOfSale->cost}}">
                            </div>
                            <div class="form-group">
                                <lable>پرداخت اولیه :</lable>
                                <input number required name="initialPrice" type="text" class="form-control" value="{{$termOfSale->initialPrice}}">
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

                    <!-- Button trigger modal -->



                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>




@endsection

