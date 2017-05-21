@extends('staff.header')
@section('pageContent')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" >
                <h1 class="page-header" >Car Modification</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <form method="post" action="{{url('staff/carsManager/edit',$car->carNo)}}"  enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <lable>برند :</lable>
                                <select name="carBrandLookups_brandNo" class="form-control">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->brandNo}}">{{$brand->brand}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <lable>Car's Name' :</lable>
                                <input name="carName" type="text" class="form-control" value="{{$car->carNameLookups->name}}">
                            </div>

                            <div class="form-group">
                                <lable>Model Year :</lable>
                                <input name="carModel" type="text" class="form-control" value="{{$car->carModel}}">
                            </div>
                            <div class="form-group">
                                <lable>Parking Stock :</lable>
                                <input name="carStock" type="text" class="form-control" value="{{$car->carStock}}">
                            </div>
                            <div class="form-group">
                                <lable>Ulpoad photo :</lable>
                                <input name="carImage" type="file" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value=" save ">
                                <a type="button" class="btn btn-default" data-dismiss="modal" href="/staff/carsManager">Discard</a>
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
