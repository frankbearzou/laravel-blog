@extends('layouts.blog.master')

@section('content')
    <h1>Post</h1>
    <h3>{{$post->title}}</h3>
    <small>{{$post->created_at->diffForHumans()}}</small>
    @if($tags = $post->tags)
        <div>
            @foreach($tags as $tag)
                <span class="badge badge-info"><a href="/posts/tags/{{$tag->name}}">{{$tag->name}}</a></span>
            @endforeach
        </div>
    @endif
    <p>{{$post->body}}</p>
    <hr>
    <div class="list-group">
    @foreach($post->comments as $comment)
            <div href="#" class="list-group-item">
                <p>{{$comment->created_at->diffForHumans()}} by {{$comment->user->name}}</p>&nbsp;&nbsp;&nbsp;
                <p>{{$comment->body}}</p>
            </div>
        @endforeach
    </div>

    @if(count($errors))
        <div class="card">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <form action="/posts/{{$post->id}}/comment" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="Please leave your comment"></textarea>
        </div>

        <button class="btn btn-primary">Comment</button>
    </form>
@endsection