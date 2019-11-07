@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default my-4">Back</a>

    <h1>{{$post->title}}</h1>
    <div>
        <h5>{{$post->body}}</h5>
    </div>
    <hr>
    <small>Writen on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
@auth
    @if (Auth::user()->id == $post->user_id)
    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <!-- edit button -->
        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a>
        <!-- delete button -->
        <button type="submit" class="btn btn-danger float-right">Delete</button>
    </form>
    @endif
@endauth
@endsection