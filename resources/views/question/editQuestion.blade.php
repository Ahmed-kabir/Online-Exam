@extends('admin.dashboard')
@section('main')
</hr>
<div class="row">
<div class="col-lg-12">

</hr>
<div class="well">
<!--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->

  <h3 class="text-center text-success">{{Session::get('message')}}</h3>
{!!Form::open(['url'=>'/update/question','method'=>'POST','class'=>'form-horizontal','name'=>'edittagForm'])!!}
  <div class="form-group">
<label for="" class="col-sm-2 control-label">Question</label>
<div class="col-sm-10">
<input type="text" value="{{$question->question}}" class="form-control" name="question">
<input type="hidden" value="{{$question->id}}" class="form-control" name="questionId">
</div>

<label for="" class="col-sm-2 control-label">Option A</label>
<div class="col-sm-10">
<input type="text" value="{{$question->option_a}}" class="form-control" name="option_a">
</div>

<label for="" class="col-sm-2 control-label">Option B</label>
<div class="col-sm-10">
<input type="text" value="{{$question->option_b}}" class="form-control" name="option_b">
</div>

<label for="" class="col-sm-2 control-label">Option C</label>
<div class="col-sm-10">
<input type="text" value="{{$question->option_c}}" class="form-control" name="option_c">
</div>

<label for="" class="col-sm-2 control-label">Option D</label>
<div class="col-sm-10">
<input type="text" value="{{$question->option_d}}" class="form-control" name="option_d">
</div>


  <label for="" class="col-sm-2 control-label" >Answer</label>
 <div class="col-sm-10">
  <select class="form-control" name="answer">
    <option>Select Answer</option>
    <option value="1">Option A</option>
    <option value="2">Option B</option>
    <option value="3">Option C</option>
    <option value="4">Option D</option>
  </select>
</div>




<button type="submit" name="btn" class="btn btn-success btn-block">Update</button>
</div>
</div>
{!!Form::close()!!}

  
</div>

<script>
 
 document.forms['edittagForm'].elements['answer'].value={{$question->answer}}

</script>
@endsection