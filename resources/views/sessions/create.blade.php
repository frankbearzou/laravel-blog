@extends('layouts.blog.master')

@section('content')
    <h1>Login</h1>
    @if(count($errors))
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/login" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email">Email: </label>
            <input id="email" name="email" type="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <button class="btn btn-primary">Login</button>
    </form>
@endsection