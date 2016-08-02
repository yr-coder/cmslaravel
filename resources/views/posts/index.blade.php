@extends('layouts.app')

@section('content')


    <ul>
    @foreach($posts as $post)

       <li> <h3>{{$post->title}}</h3></li>

    @endforeach
    </ul>
@endsection

