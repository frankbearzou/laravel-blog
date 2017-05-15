@extends('layouts.blog.master')

@section('content')
    <h1>Publish a Post</h1>
    <hr>
    @if(count($errors))
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/posts">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
@endsection