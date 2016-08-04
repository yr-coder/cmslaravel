@extends('layouts.app')

@section('content')


    <ul>
    @foreach($posts as $post)

       <li>
           <h3><a href='{{route('posts.show', $post->id)}}'>{{$post->title}}</a></h3>
           <a href='{{route('posts.edit', $post->id)}}'>Edit Post</a>
       </li>

    @endforeach
    </ul>
@endsection