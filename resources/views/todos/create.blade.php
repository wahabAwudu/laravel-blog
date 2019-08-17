@extends('app');
@section('content')
<div class="container">
    <div class="row mt-5 mb-5">
            <h1 class="text-center">Add New Todo</h1>
        <div class="col-md-8 offset-md-2">
            <form method="POST" accept="TodosController@store" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="enter name"/>
                </div>

                <div class="form-group">
                        <label for="description">Name</label>
                        <textarea name="description" class="form-control" placeholder="enter description"></textarea>
                </div>
                <input type="submit" value="Submit" class="btn btn-outline-success" />
            </form>
            <a href="/todos" class="btn btn-outline-primary mt-5">All Todos</a>
        </div>
        
    </div>
</div>
        

@endsection