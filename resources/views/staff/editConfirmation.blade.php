@extends('staff.header')
@section('pageContent')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" >
                <h1 class="page-header">Customer Details</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <form method="post" action="{{url('/staff/salesConfirmation')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <lable>Name :</lable>
                                <input type="text" name="name" class="form-control" value="{{$cust->name}}">
                            </div>
                            <div class="form-group">
                                <lable>Familly :</lable>
                                <input name="family" type="text" class="form-control" value="{{$cust->family}}">
                            </div>
                            <div class="form-group">
                                <lable>ID :</lable>
                                <input type="text" name="name" class="form-control" value="{{$cust->id}}">
                            </div>

                            <div class="form-group">
                                <lable>National ID :</lable>
                                <input name="family" type="text" class="form-control" value="{{$cust->nationalCode}}">
                            </div>


                            <div class="form-group">
                                <lable>LandLine Phone :</lable>
                                <input name="phoneNo" type="text" class="form-control" value="{{$cust->phoneNo}}">
                            </div>
                            <div class="form-group">
                                <lable>Mobile Phone:</lable>
                                <input name="mobileNo" type="text" class="form-control" value="{{$cust->mobileNo}}">
                            </div>
                            <div class="form-group">
                                <lable>City :</lable>
                                <input name="city" type="text" class="form-control" value="{{$cust->city}}">
                            </div>
                            <div class="form-group">
                                <lable>Address :</lable>
                                <textarea name="address" type="text" class="form-control" value="{{$cust->address}}"></textarea>
                            </div>
                            <div class="form-group">
                                <img src="/img/nationalCard/{{$cust->nationalCode}}.jpg" alt="">
                            </div>
                            <div class="form-group">
                                <lable>upload car photo :</lable>
                                <input name="custImage" type="file" class="form-control">
                            </div>

                            {{--<div class="form-group">--}}
                            {{--<input type="submit" class="btn btn-primary" value="save">--}}
                            {{--</div>--}}
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="register ">
                                <button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
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
