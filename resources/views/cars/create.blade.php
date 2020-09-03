@extends('layout')

@section('title')
Create Car
@endsection

@section('mainContent')




<div class="container">

  <h2 align="center">Create Car</h2>
  <form class="form-horizontal" method="post" action="http://localhost:8000/cars">
   
@csrf
@method('post')
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Car Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Car Name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Car Color:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="color" placeholder="Enter Car Color" name="color">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Car Company:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="company" placeholder="Enter Car Company" name="company">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
<div align="right" class="container">
<button  class="btn btn-primary "> Show Cars</button>
</div>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

@endsection


