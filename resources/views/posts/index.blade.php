@extends('app')

@section('content')
       <div class="row">
           <div class="col-md-8 offset-md-2">
               <h1 class="text-center">Blog Posts</h1>
               @foreach($posts as $post) 
               <div class="jumbotron mt-5">
                <h4>{{$post->title}}</h4>
                   <p>{{$post->body}}</p>
               </div>
               @endforeach
           </div>
@endsection
        
