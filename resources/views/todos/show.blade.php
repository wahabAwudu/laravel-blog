@extends('app');
@section('content')
<div class="container">
    <div class="row mt-5">
            <h1 class="text-center">Todo Detail</h1>
        <div class="col-md-8 offset-md-2">
            <div class="jumbotron mt-2">
                    <h3 class="text-primary">{{$todo->name}}</h3>
                    <p class="text-secondary">{{$todo->description}}</p>
                    <a href="/todos" class="btn btn-outline-primary">All Todos</a>
            </div>
        </div>
    </div>
</div>
        

@endsection