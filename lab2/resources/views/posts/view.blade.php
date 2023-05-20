@extends('layout.app')

@section('title')
    IIT Website
@endsection
@section('body')

<div class="container mt-5">
  <div class="row d-flex jusy=tify-content-center">
  <div class="card w-75" style="">
  <div class="card-body">
    <h5 class="card-title">CREATE BY : {{$post["created_by"]}}</h5>
    <h5 class="card-title">TITLE :  {{$post["title"]}}</h5>
    <p class="card-text">description : {{$post["description"]}}</p>
   <a class="" aria-current="page" href="/post/edit/{{$post['id']}}"><button class="btn btn-primary w-25">Edit</button></a>
   <a class="" aria-current="page" href="/posts/delete/{{$post['id']}}"><button class="btn btn-danger w-25">Delete</button></a>
   </div>                   
  </div>
</div>
</div>
<!--  
        <div class="card text-center">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
             <h5 class="card-title">TITLE :  {{$post["title"]}}</h5>
            <p class="card-text">CREATE BY : {{$post["createdBy"]}}</p>
            <p class="card-text">CREATE BY : {{$post["description"]}}</p> 

            <a href="#" class="btn btn-primary"> <a class="" aria-current="page" href="/posts/edit"><button class="btn btn-primary w-25">Edit</button></a>
            <a class="" aria-current="page" href="/posts/delete/{{$post['id']}"><button class="btn btn-primary w-25">Delete</button></a>
                          
                        </a>
        </div>
         </div>  -->

   
    
@endsection
