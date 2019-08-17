@extends('app');
@section('content')
<div class="container">
    <div class="row mt-5 mb-5">
            <h1 class="text-center">Todos</h1>
        <div class="col-md-8 offset-md-2">
            @foreach ($todos as $todo)
            <div class="jumbotron mt-2">
                    <h3 class="text-primary">
                        <a href="/todos/{{$todo->id}}">
                        {{$todo->name}}
                        </a>
                    </h3>
                    <p class="text-secondary">{{$todo->description}}</p>
                </div>
            @endforeach
            <a href="/todos/create" class="btn btn-outline-primary">New Todo</a>
        </div>
    </div>
</div>
        

@endsection