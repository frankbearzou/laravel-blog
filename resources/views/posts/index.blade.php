@extends('layouts.blog.master')

@section('content')
    <a href="/posts/create" class="btn btn-primary">Create a New Blog</a>
    <hr>

    @foreach($posts as $post)
        @include('layouts.blog.blog')
    @endforeach

@endsection