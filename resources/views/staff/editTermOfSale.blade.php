@extends('staff.header')
@section('pageContent')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" >
                <h1 class="page-header" >Offers Modification</h1>
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
                                <lable>Type of sale :</lable>
                                <select name="saleTypeLookups_saleTypeNo" class="form-control">
                                    @foreach($saleTypes as $saleType)
                                        <option value="{{$saleType->saleTypeNo}}">{{$saleType->saleType}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <lable>Car :</lable>
                                <select name="car_carNo" class="form-control">
                                    @foreach($cars as $car)
                                        <option value="{{$car->carNo}}">{{$car->carNameLookups->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <lable>Detail :</lable>
                                <textarea required name="description" class="form-control">{{$termOfSale->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <lable>Overall Price :</lable>
                                <input number required name="cost" type="text" class="form-control" value="{{$termOfSale->cost}}">
                            </div>
                            <div class="form-group">
                                <lable>Initial Price :</lable>
                                <input number required name="initialPrice" type="text" class="form-control" value="{{$termOfSale->initialPrice}}">
                            </div>

                            {{--<div class="form-group">--}}
                            {{--<input type="submit" class="btn btn-primary" value="save">--}}
                            {{--</div>--}}
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value=" save ">
                                <a type="button" class="btn btn-default" data-dismiss="modal"href="/staff/termsOfSale">Discard</a>
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

