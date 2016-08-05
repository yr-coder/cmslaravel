@extends('layouts.app')

@section('content')

    <h2>{{$post->title}}</h2>

    <h3>{{$post->content}}</h3>

    <img src='{{$post->path}}' alt="" width="400">


@endsection