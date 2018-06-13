@extends('admin.dashboard')
@section('main')
</hr>

<h3 class="text-center text-success">{{Session::get('message')}}</h3>
</hr>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID</th>

                            <th>Category Name</th>
                            <th>Description</th>
                            
                            <th>Actions</th>

                        </tr> 
                    </thead>
                    <tbody>

                        @foreach ($categories as $category)  
                        <tr>


                            <td>{{$category->id}}</td>


                            <td>{{$category->category_name}}</td>
                            <td>{{$category->category_description}}</td>
                            
                            <td><a href="{{url('/edit/category/'.$category->id)}}" class="btn btn-success">
                                    <span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{url('/delete/category/'.$category->id)}}" class="btn btn-danger" onclick="return confirm('Are You sure to delete this');">

                                    <span class="glyphicon glyphicon-trash"></span></a>

                            </td>



                        </tr>


                        @endforeach

                    </tbody>
                </table>
                </hr>

            </div>
            <div class="panel-footer">
                <div class="row">


                </div>
            </div>
        </div>

    </div></div></div>
@endsection