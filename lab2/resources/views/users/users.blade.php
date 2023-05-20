@extends('layout.app')
@section('title') users page @endsection
@section('body')

 <a href='/users/add'><input class="btn btn-primary mt-5" type="button" value="Add User"></a>
<table class="table bg-white" style="color:black;   align-items: center;">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">email</th>
     
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
   
@foreach($users as $user)
   



    <tr>
      <th scope="row">{{$user['name']}}</th>
      <td>{{$user['email']}}</td>
      <td></td>
     
      <td><a href='/users/view/{{$user["id"]}}'><input class="btn btn-success" type="button" value="view"></a>
      <a href='/users/edit/{{$user["id"]}}'><input class="btn btn-primary" type="button" value="Edit"></a>
      <a href='/users/delete/{{$user["id"]}}'><input class="btn btn-danger" type="button" value="Delete"></a></td>
    </tr>
    @endforeach

  </tbody>
</table>
<!-- pagination  -->
{{$users->links()}}
@endsection