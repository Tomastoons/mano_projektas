@extends('layouts.app')
@section('content')
<h1>product</h1>
<h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update',$post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::label('group_id', 'Group id')}}
            {{Form::select('group_id',$groups)}}
        </div>
        <br>
        <div class="form-group">
                {{Form::label('price', 'Price')}}
                {{Form::text('price',  $post->price, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Price'])}}
            </div> 
            <div class="form-group">
                    {{Form::label('kiek', 'Kiek')}}
                    {{Form::text('kiek',  $post->kiek, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Kiek'])}}
                </div> 
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

