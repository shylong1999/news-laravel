@extends('layout.admin.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Categories
                        <small>Edit</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->

                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                    </div>
                    @endforeach
                @endif

                @if(session('notification'))
                    <div class="alert alert-success">
                        {{session('notification')}}
                    </div>
                @endif

                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/category/edit/{{$categories->id_cg}}" method="POST">
                        <input type="hidden" name="_token" value="{{@csrf_token()}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="txtEditName" placeholder="Please Enter Category" value="{{$categories->name}}"/>
                        </div>
                        {{--<div class="form-group">--}}
                        {{--<label>Unsigned Name</label>--}}
                        {{--<input class="form-control" name="txtUnsignedName" placeholder="Please Enter Password"/>--}}
                        {{--</div>--}}
                        <button type="submit" class="btn btn-default">Edit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection