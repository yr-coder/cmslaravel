@extends('layouts.app')

@section('content')

    <h1>Edit Post</h1>

    <form action="/posts/{{$post->id}}" method="post">

        <input type="hidden" name="_method" value="PUT">

        <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">
        <br><br>
        <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
        <br>
        <input type="submit" name="submit" value="Update">
        {{csrf_field()}}
    </form>

    <h1>Delete Post</h1>

    <form action="/posts/{{$post->id}}" method="post">

        <input type="hidden" name="_method" value="DELETE">

        <input type="submit" name="submit" value="Delete">
        {{csrf_field()}}
    </form>

@endsection