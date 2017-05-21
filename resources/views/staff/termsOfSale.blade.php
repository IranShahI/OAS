@extends('staff.header')
@section('pageContent')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" style="margin: 2em">
                <h1 class="page-header" style="display: inline;border-bottom: 0;margin: 1em">Sale Offers Managment</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newUser">Add new offer</button>
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
                            <table class="table table-striped table-bordered table-hover datatable display nowrap" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Sale Type</th>
                                    <th>Car</th>
                                    <th>Detail</th>
                                    <th>Overall Price</th>
                                    <th>Initial Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
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
                                        <td style="text-align: center"><a  title="Edit" href="{{url('staff/termsOfSale/edit',$termOfSale->termOfSaleNo)}}" class="user-edit-icon"><span class="fa fa-edit"></span></a></td>
                                        <td style="text-align: center"><a title="Delete" href="{{url('staff/termsOfSale/delete',$termOfSale->termOfSaleNo)}}" class="user-edit-icon"><span class="fa fa-trash"></span></a></td>
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
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Add a new sale offer</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{url('staff/termsOfSale')}}">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <lable>Sale Type :</lable>
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
                                            <textarea name="description" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <lable>Overall Price :</lable>
                                            <input name="cost" type="text" class="form-control number">
                                        </div>
                                        <div class="form-group">
                                            <lable>Initial Price :</lable>
                                            <input name="initialPrice" type="text" class="form-control number">
                                        </div>

                                        {{--<div class="form-group">--}}
                                            {{--<input type="submit" class="btn btn-primary" value="save">--}}
                                        {{--</div>--}}
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-primary" value=" save ">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Discard</button>
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
