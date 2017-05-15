@extends('layouts.blog.master')

@section('content')
    <h1>Register</h1>
    @if(count($errors))
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/register" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name: </label>
            <input id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Password Confirmation: </label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Register</button>
        </div>
    </form>
@endsection