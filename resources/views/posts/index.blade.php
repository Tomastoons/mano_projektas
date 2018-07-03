@extends('layouts.app')
@section('content')
<h1>Products</h1>
@if(count($posts)>0)
    @foreach($posts as $post)
        <div class="card">
                <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>
            <div class="col-md-8 col-sm-8">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3> <p>{{$post->body}}</p><hr><p>Kaina: {{$post->price}}<br>Kiekis: {{$post->kiek}}</p><!-- calling show($id) function in PostsController -->      
            </div>
            </div>
        </div>
    @endforeach
    {{$posts->links()}}
@endif
@endsection
