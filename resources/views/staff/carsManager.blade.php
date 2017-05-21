@extends('staff.header')
@section('pageContent')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" style="margin: 2em">
                <h1 class="page-header" style="display: inline;border-bottom: 0;margin: 1em">Cars managment</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newUser">Add a new car</button>
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
                                    <th>Car's' code</th>
                                    <th>Brand</th>
                                    <th>Car name</th>
                                    <th>Model</th>
                                    <th>Quantities</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cars as $car)
                                    <tr class="gradeX">
                                        <td>{{$car->carNo}}</td>
                                        <td>{{$car->carBrandLookups->brand}}</td>
                                        <td>{{$car->carNameLookups->name}}</td>
                                        <td>{{$car->carModel}}</td>
                                        <td>{{$car->carStock}}</td>
                                        <td style="text-align: center"><a  title="Edit" href="{{url('staff/carsManager/edit',$car->carNo)}}" class="user-edit-icon"><span class="fa fa-edit"></span></a></td>
                                        <td style="text-align: center"><a title="Delete" href="{{url('staff/carsManager/delete',$car->carNo)}}" class="user-edit-icon"><span class="fa fa-trash"></span></a></td>
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
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Add New Car</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{url('/staff/carsManager')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <lable>Brand :</lable>
                                            <select name="carBrandLookups_brandNo" class="form-control">
                                                @foreach($brands as $brand)
                                                    <option value="{{$brand->brandNo}}">{{$brand->brand}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <lable>Car's Name' :</lable>
                                            <input name="carName" type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <lable>Model Year :</lable>
                                            <input name="carModel" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <lable>Parking Stock :</lable>
                                            <input name="carStock" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <lable>Upload photo :</lable>
                                            <input name="carImage" type="file" class="form-control">
                                        </div>

                                        {{--<div class="form-group">--}}
                                            {{--<input type="submit" class="btn btn-primary" value="Save">--}}
                                        {{--</div>--}}
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-primary" value=" Save ">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Discard</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{--<div class="panel-body">--}}
                        {{--<div class="table-responsive">--}}
                            {{--<table class="table table-striped table-bordered table-hover datatable display nowrap" id="dataTables-example">--}}
                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th>Brand</th>--}}
                                    {{--<th>Car's Name</th>--}}
                                    {{--<th>Stock</th>--}}
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
