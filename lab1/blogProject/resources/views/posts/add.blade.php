@extends('layouts.app')


@section('body')
<div class="container d-flex mt-5 justify-content-center bg-white" style="color:black;"> 
    <div class="row w-75">
    <form>
  <div class="form-group mt-3">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
  </div>
  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
  </div>
  <div class="form-group mt-3">
    <label for="exampleInputPassword1">creator</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="creator name">
  </div>
  <button type="submit" class="btn btn-primary mt-3">Create</button>
</form>
    </div>
</div>

@endsection