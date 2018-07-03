@extends('layouts.app')
@section('content')<br></br>
<a href="/group" class="btn btn-outline-secondary">Go back</a>
<hr>
<h1>{{$group->title}}</h1>

@if(count($mas2)>0)
	<ul class="list-group">
		@foreach($mas2 as $masyv)
		<li class="list-group-item">{{$masyv->title}}</li>
	</ul>
		@endforeach
	@endif
    <hr>
    <a href="/group/{{$group->id}}/edit">Edit</a>
    {!!Form::open(['action' => ['GroupsController@destroy', $group->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
@endsection