@extends('layout')

    @section('content')
    <article>
    <h1>
    {{$post->title}}
    </h1>
   
    <br>
    <p>
    {{$post->body}}
    </p>
    </article>  
    <a href="/">
        <h4>Back</h4>
    </a>
    @endsection
    

    