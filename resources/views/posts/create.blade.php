@extends('layouts.app')

@section('content')

    <form action="/posts" method="post">

        <input type="text" name="title" placeholder="Enter title">

        <input type="submit" name="submit">
        {{csrf_field()}}
    </form>





    
    @yield('footer')