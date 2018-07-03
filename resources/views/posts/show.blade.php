@extends('layouts.app')
@section('content')<br></br>
<a href="/posts" class="btn btn-outline-secondary">Go back</a>
<hr>
<h1>{{$post->title}}</h1>
<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <p>{{$post->body}}</p>
    <br>
    <h5>Product Group</h5>
    <h1>{{$post->group['title']}}</h1>
    <small>date : {{$post->created_at}}</small>
    <hr>
    <br>
    <a href="/posts/{{$post->id}}/edit">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
@endsection