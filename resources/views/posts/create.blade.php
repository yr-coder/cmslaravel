@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    {{--<form action="/posts" method="post">--}}
    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store']) !!}


    <div class="form-group">

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        <br>
        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content', null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
    {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>
    {{--<br>--}}
        {{--<input type="submit" name="submit">--}}
{{--        {{csrf_field()}}--}}

    

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

@endsection