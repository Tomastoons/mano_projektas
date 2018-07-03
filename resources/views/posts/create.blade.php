@extends('layouts.app')
@section('content')
<h1>product</h1>
<h1>Create Product</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::label('group_id', 'Group id')}}
            {{Form::select('group_id',$groups)}}
        </div>

        <div class="form-group">
                {{Form::label('price', 'Price')}}
                {{Form::text('price', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Price'])}}
            </div> 
            <div class="form-group">
                    {{Form::label('kiek', 'Kiek')}}
                    {{Form::text('kiek', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Kiek'])}}
                </div> 
          
        <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    @endsection

