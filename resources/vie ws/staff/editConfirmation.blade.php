@extends('staff.header')
@section('pageContent')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" >
                <h1 class="page-header">مشخصات مشتری<h1>
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
                                <lable>نام  :</lable>
                                <input type="text" name="name" class="form-control" value="{{$cust->name}}">
                            </div>
                            <div class="form-group">
                                <lable>نام خانوادگی :</lable>
                                <input name="family" type="text" class="form-control" value="{{$cust->family}}">
                            </div>
                            <div class="form-group">
                                <lable>شماره شناسنامه  :</lable>
                                <input type="text" name="name" class="form-control" value="{{$cust->id}}">
                            </div>

                            <div class="form-group">
                                <lable>شماره ملی :</lable>
                                <input name="family" type="text" class="form-control" value="{{$cust->nationalCode}}">
                            </div>


                            <div class="form-group">
                                <lable>شماره تلفن :</lable>
                                <input name="phoneNo" type="text" class="form-control" value="{{$cust->phoneNo}}">
                            </div>
                            <div class="form-group">
                                <lable>شماره همراه :</lable>
                                <input name="mobileNo" type="text" class="form-control" value="{{$cust->mobileNo}}">
                            </div>
                            <div class="form-group">
                                <lable>شهر :</lable>
                                <input name="city" type="text" class="form-control" value="{{$cust->city}}">
                            </div>
                            <div class="form-group">
                                <lable>ادرس :</lable>
                                <textarea name="address" type="text" class="form-control" value="{{$cust->address}}"></textarea>
                            </div>
                            <div class="form-group">
                                <img src="/img/nationalCard/{{$cust->nationalCode}}.jpg" alt="">
                            </div>
                            <div class="form-group">
                                <lable>بارگذاری تصویر خودرو :</lable>
                                <input name="custImage" type="file" class="form-control">
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

