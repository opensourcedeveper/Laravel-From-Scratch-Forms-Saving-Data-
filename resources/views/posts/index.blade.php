@extends('layouts.app');

@section('content');
        <h3>Posts</h3>
        @if(count($posts) > 0)

        @foreach($posts as $post)

        <div class="well">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3> 
            <small>{{$post->created_at}}</small>
            <hr>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>&nbsp;
            {!!Form::open(['action'])}
        </diV>
        @endforeach
        {{$posts->links()}}

        @else
        <p> No Post Found </p>
        @endif
@endsection;