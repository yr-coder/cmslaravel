@extends('layouts.app')

@section('content')

    <h1>Edit Post</h1>

    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}

    {{csrf_field()}}

    <div class="form-group">

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        <br>
        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content', null, ['class'=>'form-control']) !!}

    </div>
        <br>
    {!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}


    {!! Form::close() !!}

    @if(count($errors) > 0)

        <div class="alert alert-danger">
            <ul>

                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>


                @endforeach


            </ul>
        </div>

    @endif

    <h1>Delete Post</h1>

    {!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id]]) !!}

    {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}

        {{csrf_field()}}

    {!! Form::close() !!}

@endsection