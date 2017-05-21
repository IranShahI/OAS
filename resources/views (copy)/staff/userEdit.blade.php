@extends('staff.header')
@section('pageContent')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" >
                <h1 class="page-header" >User Modification</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <form method="post" action="{{url('/user/edit',$user->personalCode)}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <lable>Full Name :</lable>
                                <input name="name" type="text" class="form-control" value="{{$user->name}}" required>
                            </div>

                            <div class="form-group">
                                <lable>Personnel code :</lable>
                                <input name="personalCode" type="text" class="form-control" value="{{$user->personalCode}}" required>
                            </div>

                            <div class="form-group">
                                <lable>Post :</lable>
                                <select name="postLookups_postID" id="" class="form-control"  value="{{$user->postLookup->post}}" required>
                                    @foreach($posts as $post)
                                        <option value="{{$post->postID}}">{{$post->post}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <lable>Org Email :</lable>
                                <input name="email" type="text" class="form-control"  value="{{$user->email}}" required>
                            </div>

                            <div class="form-group">
                                <lable>New Password :</lable>
                                <input name="password" type="password" class="form-control">
                            </div>
                            {{--<div class="form-group">--}}
                            {{--<input type="submit" class="btn btn-primary" value="Save">--}}
                            {{--</div>--}}
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Save ">
                                <a type="button" class="btn btn-default" data-dismiss="modal" href="/staff/usersManager">انصراف</a>
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
