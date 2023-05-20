@extends('layout.app')

@section('title')
    IIT Website
@endsection
@section('body')


    <table class="table mt-5 bg-white" style="color:black;">
  
        <tr>
            <th> title</th> <th> createdBy</th> <th> Description </th>
            <th>Actions</th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td> {{$post["title"]}}</td>
                <td> {{$post["created_by"]}}</td>
                <td> {{$post["description"]}}</td>
                <td>
                    <a class="" aria-current="page"href="/posts/view/{{$post['id']}}"><button class="btn btn-success w-25">View</button></a> 
                    <a class="" aria-current="page" href="/post/edit/{{$post['id']}}"><button class="btn btn-primary w-25">Edit</button></a>
                    <a class="" aria-current="page" href="/posts/delete/{{$post['id']}}"><button class="btn btn-danger w-25">Delete</button></a>
                   
                </td>
            </tr>
        @endforeach


    </table>
    {{ $posts->links() }}

   
<a class="" aria-current="page" href="/posts/create"><button class="btn btn-primary w-25">Add Post</button></a>


@endsection