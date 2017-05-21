@extends('staff.header')
@section('pageContent')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" style="margin: 2em">
                <h1 class="page-header" style="display: inline;border-bottom: 0;margin: 1em">sales report</h1>
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
                                    <th>Customer Name</th>
                                    <th>Customer Familly</th>
                                    <th>National ID</th>
                                    <th>Type</th>
                                    <th>Tracking Code</th>
                                    <th>Brand</th>
                                    <th>Car Name</th>
                                    <th>Model</th>
                                    <th>Buy Date</th>
                                    <th>Status</th>
                                    <th>Confirm</th>
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
                                        <td style="text-align: center">
                                        @if($report->isConfirmed === 1)
                                                <span class="fa fa-check-circle-o" style="color:green;text-align: center">Confirmed</span>
                                            @else
                                                <span class="fa fa-close" style="color:red;text-align: center">Unconfirmed</span>
                                            @endif

                                        </td>
                                        <td style="text-align: center">@if($report->isConfirmed === 1)
                                                <a href="/staff/unConfirm/{{$report->id}}" class="btn btn-danger" value="shit">unconfirm</a>
                                            @else
                                                <a href="/staff/confirm/{{$report->id}}" class="btn btn-success">confirm</a>
                                                @endif

                                        </td>
                                        <td style="text-align: center"><a title="detail" href="/staff/confirmation/edit/{{$report->customer->customerCode}}" class="user-edit-icon"><span class="fa fa-trash"></span></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
        <!-- /.panel -->




@endsection
