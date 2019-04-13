@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>
    <form action="{{action('TodosController@store')}}" method='POST'>
        <div class="form-group">
            <label for="text">Text:</label>
            <input type="text" class="form-control" id="text" name='text' required>
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" rows="5" id="body" name='body'></textarea>
        </div>
        <div class="form-group">
            <label for="due">Due:</label>
            <input type="text" class="form-control" id="due" name='due'>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection