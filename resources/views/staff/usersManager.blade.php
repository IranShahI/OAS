@extends('staff.header')
@section('pageContent')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" style="margin: 2em">
                <h1 class="page-header" style="display: inline;border-bottom: 0;margin: 1em">مدیریت کاربران</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newUser">ثبت کاربر جدید</button>
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
                                    <th>نام و نام خانوادگی</th>
                                    <th>کد پرسنلی</th>
                                    <th>سمت</th>
                                    <th>ایمیل</th>
                                    <th>ویرایش</th>
                                    <th>حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr class="gradeX">
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->personalCode}}</td>
                                        <td>{{$user->postLookup->post}}</td>
                                        <td>{{$user->email}}</td>
                                        <td style="text-align: center"><a  title="ویرایش" href="{{url('user/edit',$user->personalCode)}}" class="user-edit-icon"><span class="fa fa-edit"></span></a></td>
                                        <td style="text-align: center"><a title="حدف" href="{{url('user/delete',$user->personalCode)}}" class="user-edit-icon"><span class="fa fa-trash"></span></a></td>

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
                                    <button type="button" class="close" data-dismiss="modal" aria-label="بستن"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">ثبت کاربر جدید</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{url('staff/usersManager')}}">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <lable>نام و نام خانوادگی :</lable>
                                            <input name="name" type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <lable>کد پرسنلی :</lable>
                                            <input name="personalCode" type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <lable>سمت :</lable>
                                            <select name="postLookups_postID" id="" class="form-control">
                                                @foreach($posts as $post)
                                                    <option value="{{$post->postID}}">{{$post->post}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <lable>ایمیل سازمانی :</lable>
                                            <input name="email" type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <lable>گذرواژه :</lable>
                                            <input name="password" type="password" class="form-control">
                                        </div>
                                        {{--<div class="form-group">--}}
                                            {{--<input type="submit" class="btn btn-primary" value="ثبت">--}}
                                        {{--</div>--}}
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-primary" value=" ثبت ">
                                            <a type="button" class="btn btn-default" data-dismiss="modal" href="/staff/usersManager">انصراف</a>
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
            </div>
            <!-- /.col-lg-12 -->
        </div>
        </div>




@endsection
