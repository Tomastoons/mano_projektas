@extends('layouts.app')
@section('content')
<h1>Groups</h1>
@if(count($groups)>0)
    @foreach($groups as $group)
        <div class="card">
        <h3><a href="/group/{{$group->id}}">{{$group->title}}</a></h3><!-- calling show($id) function in PostsController -->      
        </div>
    @endforeach
    {{$groups->links()}}
@endif
@endsection

