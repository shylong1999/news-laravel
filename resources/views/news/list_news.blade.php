@extends('layout.admin.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">News
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
                        <th>Type News</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $Num = 1;
                    ?>
                    @foreach($newses as $value)

                        <tr class="odd gradeX" align="center">
                            <td>{{$Num}}</td>
                            <td>{{$value->content}}</td>
                            <td>{{$value->unsigned_content}}</td>
                            <td>{{$value->category}}</td>
                            <td>{{$value->type_news}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        href="admin/news/delete/{{$value->id_news}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                        href="admin/news/edit/{{$value->id_news}}">Edit</a></td>
                        </tr>
                        <?php $Num++; ?>
                    @endforeach
                    </tbody>
                </table>
                <div style="text-align: center">{{ $newses->links() }}</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection