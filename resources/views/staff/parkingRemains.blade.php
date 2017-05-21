@extends('staff.header')
@section('pageContent')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Parking Stocks</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Brand</th>
                                    <th>نام Car's Name</th>
                                    <th>Stock</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cars as $car)
                                <tr class="odd gradeX">
                                    <td>{{$car->carBrandLookups->brand}}</td>
                                    <td>{{$car->carNameLookups->name}}</td>
                                    <td>{{$car->carStock}}</td>

                                </tr>
                                 @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                        {{--<div class="well">--}}
                            {{--<h4>DataTables Usage Information</h4>--}}
                            {{--<p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>--}}
                            {{--<a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>--}}
                        {{--</div>--}}
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        </div>



@endsection
