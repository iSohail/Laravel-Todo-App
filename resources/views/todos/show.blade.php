@extends('layouts.app')

@section('content')
    <a href="/" class='btn btn-primary'>Go back</a>
    <h1>{{$todo->text}} <a href="/todo/{{$todo->id}}/edit" class="btn btn-warning">Edit</a></h1>
    <div class="badge badge-danger">{{$todo->due}}</div>
    <hr>
    <div>
        <p>
            {{$todo->body}}
        </p>
    </div>
    <form action="{{action('TodosController@destroy', $todo->id)}}" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection