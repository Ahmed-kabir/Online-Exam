@extends('admin.dashboard')
@section('main')
{!!Form::open(['url'=>'/store/question','method'=>'POST'])  !!}
<h3 class="text-success text-center">{{Session::get('message')}}</h3>

<div class="form-group">
    <label for="category">Select Category</label>
    <select class="form-control" name="categoryId">
    <option>Select Category</option>
    @foreach($categories as $category)
    <option value="{{$category->id}}">{{$category->category_name}}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
    <label for="question">Question</label>
    <input id="question" name="question" class="form-control" type="text">
</div>

Option A:<br>
<input type="text" name="option_a">
<br>

Option B:<br>
<input type="text" name="option_b">
<br>

Option C:<br>
<input type="text" name="option_c">
<br>

Option D:<br>
<input type="text" name="option_d">
<br>

Answer:<br>
<select id="answer" name="answer" class="form-control">
    <option value="">Select one option</option>
    <option value="1">Option A</option>
    <option value="2">Option B</option>
    <option value="3">Option C</option>
    <option value="4">Option D</option>
</select>
<br><br>


<button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close()!!}
@endsection