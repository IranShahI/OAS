@extends('staff.header')
@section('pageContent')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" style="margin: 2em">
                <h1 class="page-header" style="display: inline;border-bottom: 0;margin: 1em">sales reports</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newUser">Export</button>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover datatable display nowrap" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>National ID</th>
                                    <th>Type</th>
                                    <th>Tracking Code</th>
                                    <th>Brand</th>
                                    <th>Car's Name</th>
                                    <th>Model</th>
                                    <th>Date of buy</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($reports as $report)
                                    <tr class="gradeX">
                                        <td>{{$report->customer->name}}</td>
                                        <td>{{$report->customer->family}}</td>
                                        <td>{{$report->customer->nationalCode}}</td>
                                        <td>{{$report->termOfSale->saleTypeLookup->saleType}}</td>
                                        <td>{{$report->saleTrackingCode}}</td>
                                        <td>{{$report->car->carBrandLookups->brand}}</td>
                                        <td>{{$report->car->carNameLookups->name}}</td>
                                        <td>{{$report->car->carModel}}</td>
                                        <td>{{$report->date}}</td>
                                        <td style="text-align: center">@if($report->isConfirmed === 1)
                                                <span class="fa fa-check-circle-o" style="color:green;text-align: center"></span>
                                            @else
                                                        <span class="fa fa-close" style="color:red;text-align: center"></span>
                                                @endif

                                        </td>
                                        <td style="text-align: center"><a title="حدف" href="{{url('/staff/saleReport/delete',$report->id)}}" class="user-edit-icon"><span class="fa fa-trash"></span></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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




@endsection
