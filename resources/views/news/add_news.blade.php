@extends('layout.admin.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">TypeNewses
                        <small>Add</small>
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
                    <form action="admin/news/add" method="POST">
                        <input type="hidden" name="_token" value="{{@csrf_token()}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="txtName" placeholder="Please Enter TypeNews"/>
                        </div>


                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control custom-select" name="id_category" id="id_category">
                                @foreach($categories as $category)
                                    <option value="{{$category->id_cg}}" name="txtCategory">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>TypeNews</label>
                            <select class="form-control custom-select" name="id_type_news" id="id_type_news">
                                @foreach($typeNewses as $typeNews)
                                    <option value="{{$typeNews->id_tn}}" name="txtTypeNews">{{$typeNews->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Summary</label>
                            <textarea name="summary" id="summary" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="demo" class="form-control ckeditor" rows="5"></textarea>
                        </div>



                        {{--<div class="form-group">--}}
                        {{--<label>Unsigned Name</label>--}}
                        {{--<input class="form-control" name="txtUnsignedName" placeholder="Please Enter Password"/>--}}
                        {{--</div>--}}
                        <button type="submit" class="btn btn-default">TypeNews Add</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection

@section('script')

    <script>
        $(document).ready(function () {
            $("#id_category").change(function () {
                var idCategory = $(this).val();
                $.get("admin/ajax/typenews/"+idCategory, function (data) {
                    $("#id_type_news").html(data);
                })
            })
        })
    </script>
    @endsection