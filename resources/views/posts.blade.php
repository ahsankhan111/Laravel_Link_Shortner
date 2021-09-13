@extends('layout')

    @section('content')
    <!--Homepage where all the posts from 'post' table are displayed -->
      @foreach ($posts as $allmyposts)
      <h1>

         <a href="/posts/{{$allmyposts->id}}">
         {{$allmyposts->title}}
         </a>

      </h1>  
      
      <div>
            {{$allmyposts->excerpt}}
      </div>    


      @endforeach

     
      <br>
        <a href="/linkshrink">
          <h3>LinkShrink</h3>
          </a>

    @endsection