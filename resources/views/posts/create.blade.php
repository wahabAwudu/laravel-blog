@extends('app')

@section('content')
       <div class="row">
           <div class="col-md-8 offset-md-2 mt-5">
               <h1 class="text-center">Create Post</h1>
               <form method="post" action="/posts" enctype="multipart/form-data">
                @csrf   
                <div class="form-group">
                       <label for="title">Title</label>
                       <input type="text" name="title" class="form-control">
                   </div>

                   <div class="form-group">
                        <label for="body">Body</label>
                        <input type="text" name="body" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary" />
                
               </form>
           </div>
@endsection
        
