@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    <form action="/posts" method="post">

        <input type="text" name="title" placeholder="Enter title">
        <br>
        <br>
        <textarea placeholder="Content here" name="content" id="content" cols="30" rows="10"></textarea>

        <input type="submit" name="submit">
        {{csrf_field()}}
    </form>

@endsection