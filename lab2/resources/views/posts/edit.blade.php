@extends('layout.app')

{{--<h1> Welcome contact us </h1>--}}

@section('title') Contactus page  @endsection


@section('body')

<div class="container d-flex justify-content-center">
    <div class="row w-50 pt-5">
    <h1 style="color:orange"> Edit post</h1>
<form method="post" action="{{ route('posts.update', ['id' => $post->id]) }}">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <div class="form-group mt-3">
    <label for="">Title</label>
    <input type="text" name="title"  class="form-control " value="{{ $post->title }}" />
     </div>
     <div class="form-group mt-3">
     <label for="">creator</label>
    <input type="text" name="created_by" class="form-control " value="{{$post->created_by}}"/>
     </div>
     <div class="form-group mt-3">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" name="description"  class="form-control" value="{{ $post->description }}" />
     </div>
    <button type="submit" class="btn btn-primary mt-3">Edit</button>
</form>

    </div>
</div>

@endsection

