@extends('layout.app')
@section('title') add page @endsection
@section('body')


<h1> add user</h1>

  <form method="POST" action="/user">
@csrf
 @method('post')

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" name="name" class="form-control" />
        <label class="form-label" for="form6Example1"> name</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" name="email" class="form-control" />
    <label class="form-label" for="form6Example3">Email</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" name="password" class="form-control" />
    <label class="form-label" for="form6Example4">password</label>
  </div>



  <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
</form>
@endsection