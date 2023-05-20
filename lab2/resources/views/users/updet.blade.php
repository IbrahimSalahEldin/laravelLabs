@extends('layout.app')
@section('title') Edit page @endsection
@section('body')


<div class="container d-flex justify-content-center">
    <div class="row w-50 pt-5">
    <h1 style="color:orange"> Edit user</h1>
<form method="post" action="/user/ {{$user->id}}">
    {{ csrf_field() }}
    {{ method_field('put') }}

    <input type="text" name="name"  class="form-control mt-3" value="{{ $user->name }}" />

    <input type="email" name="email"class="form-control mt-3"  value="{{ $user->email }}" />

    <input type="password" name="password" class="form-control mt-3" />

   

    <button type="submit" class="btn btn-primary mt-3">Edit</button>
</form>
</div>
</div>
@endsection