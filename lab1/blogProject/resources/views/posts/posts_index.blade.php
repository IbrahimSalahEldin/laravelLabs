@extends('layouts.app')

@section('title')
    IIT Website
@endsection
@section('body')


    <table class="table mt-5 bg-black" style="color:white;">
        <tr>
            <th> title</th> <th> createdBy</th> <th> Description </th>
            <th>Actions</th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td> {{$post["title"]}}</td>
                <td> {{$post["createdBy"]}}</td>
                <td> {{$post["description"]}}</td>
                <td>
                    <a class="" aria-current="page"href="/posts/view"><button class="btn btn-success w-25">View</button></a> 
                    <a class="" aria-current="page" href="/posts/edit"><button class="btn btn-primary w-25">Edit</button></a>
                    <button class="btn btn-danger w-25">Delete</button>
                </td>
            </tr>
        @endforeach


    </table>
    
@endsection
@section('footer')
<a class="" aria-current="page" href="/posts/add"><button class="btn btn-primary w-25">Add Post</button></a>
@endsection