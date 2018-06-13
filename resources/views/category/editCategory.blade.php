@extends('admin.dashboard')
@section('main')
</hr>
<div class="row">
<div class="col-lg-12">

</hr>
<div class="well">
<!--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->

  <h3 class="text-center text-success">{{Session::get('message')}}</h3>
{!!Form::open(['url'=>'/update/category','method'=>'POST','class'=>'form-horizontal','name'=>'edittagForm'])!!}
  <div class="form-group">
<label for="" class="col-sm-2 control-label">category Name</label>
<div class="col-sm-10">
<input type="text" value="{{$categories->category_name}}" class="form-control" name="category_name">
<input type="hidden" value="{{$categories->id}}" class="form-control" name="categoryId">


</div>
</div>

<div class="form-group">
<label for="" class="col-sm-2 control-label">Description</label>
<div class="col-sm-10">
<input type="text" value="{{$categories->category_description}}" class="form-control" name="category_description">
 <span class="text-danger">{{$errors->has('category_description')? $errors->first('category_description'):''}}</span>
</div>
</div>




<div class="form-group">

<div class="col-sm-offset-2 col-sm-10">
<button type="submit" name="btn" class="btn btn-success btn-block">Update</button>
</div>
</div>
{!!Form::close()!!}

  
</div>
</div>
</div>
<script>
 


</script>
@endsection