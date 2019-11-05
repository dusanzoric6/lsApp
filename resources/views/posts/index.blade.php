@extends('layouts.app')

@section('content')

    @if(count($posts) > 0)
        @foreach ($posts as $post)

        <div class="card card-body bg-light">
            <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Writen on {{$post->created_at}}</small>
        </div>   
        
        @endforeach
    @else
        <h1>No posts found</h1>
    @endif
@endsection