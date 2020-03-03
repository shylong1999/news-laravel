@extends('layout.admin.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Categories
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>NO.</th>
                        <th>Name</th>
                        <th>Unsigned Name</th>
                        <th>Category</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $Num = 1;
                    ?>
                    @foreach($typeNewses as $value)

                        <tr class="odd gradeX" align="center">
                            <td>{{$Num}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->unsigned_name}}</td>
                            <td>{{$value->category}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        href="admin/typenews/delete/{{$value->id_tn}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                        href="admin/typenews/edit/{{$value->id_tn}}">Edit</a></td>
                        </tr>
                        <?php $Num++; ?>
                    @endforeach
                    </tbody>
                </table>
                <div style="text-align: center">
                    <a href="{{$typeNewses->previousPageUrl()}}">Back</a>
                    <a href="{{$typeNewses->nextPageUrl()}}">Next</a>
                </div>
                <div style="text-align: center">{{ $typeNewses->links() }}</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection