@extends('layouts.app')
@section('content')
<h1>Group</h1>
<h1>Create Group</h1>
{!! Form::open(['action' => ['GroupsController@update',$group->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $group->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection



