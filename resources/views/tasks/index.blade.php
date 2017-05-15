@extends('layouts.master')

@section('content')
    <h1>Tasks</h1>
    <ul>
        @foreach($tasks as $task)
            <li><a href="{{$task->id}}">{{$task->body}}</a></li>
        @endforeach
    </ul>
@endsection