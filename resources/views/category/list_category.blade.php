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
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $Num = 1;
                    ?>
                    @foreach($categories as $value)

                        <tr class="odd gradeX" align="center">
                            <td>{{$Num}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->unsigned_name}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        href="admin/category/delete/{{$value->id_cg}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                        href="admin/category/edit/{{$value->id_cg}}">Edit</a></td>
                        </tr>
                        <?php $Num++; ?>
                    @endforeach
                    </tbody>
                </table>
                <div style="text-align: center">{{ $categories->links() }}</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection