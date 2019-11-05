@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default my-4">Back</a>

    <h1>{{$post->title}}</h1>
    <div>
        <h5>{{$post->body}}</h5>
    </div>
    <hr>
    <small>{{$post->created_at}}</small>
    <hr>
    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <!-- edit button -->
                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a>
            <!-- delete button -->
            <button type="submit" class="btn btn-danger float-right">Delete</button>
    </form>
@endsection