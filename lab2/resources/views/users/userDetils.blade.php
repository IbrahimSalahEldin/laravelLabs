@extends('layout.app')
@section('title') users page @endsection
@section('body')

   <h2 class="pt-5"> users {{$user['name']}} </h2>
 

   
<table class="table bg-white" style="color:black;">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">age</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$user['name']}}</th>
      <td>{{$user['email']}}</td>
     
      <td>
      <a href='/users/edit/{{$user["id"]}}'><input class="btn btn-primary" type="button" value="Edit"></a>
      <a href='/users/delete/{{$user["id"]}}'><input class="btn btn-danger" type="button" value="Delete"></a></td>
    </tr>
   
  </tbody>
</table>
@endsection