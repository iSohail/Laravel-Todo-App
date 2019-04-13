@extends('layouts.app')

@section('content')
    <a href="/todo/{{$todo->id}}" class="btn btn-default">Go back</a>
    <h1>Edit Todo</h1>
    <form action="{{action('TodosController@update', $todo->id)}}" method='POST'>
        <div class="form-group">
            <label for="text">Text:</label>
            <input type="text" class="form-control" id="text" name='text' value="{{$todo->text}}" required>
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" rows="5" id="body" name='body'>{{$todo->body}}</textarea>
        </div>
        <div class="form-group">
            <label for="due">Due:</label>
            <input type="text" class="form-control" id="due" name='due' value="{{$todo->due}}">
        </div>
        <!-- This token is necessary for csrf clearance -->
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <!-- This method is necessary to make put request as post, because update is not accepting post directly -->
        <input type="hidden" name="_method" value="PUT">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection