@extends('layouts.app')

@section('content')

	@if(!empty($post))
		<h1>{{$post->title}}</h1>
		<p>{{$post->body}}</p>
		<small>Posted on: {{$post->created_at}}</small>
		<div class="btn-group-justified">
			<a href="/posts/{{$post->id}}/edit" class="btn btn-link">Edit</a>
			{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
				{{Form::hidden('_method','DELETE')}}	
				{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
			{!!Form::close()!!}
		</div>
	@else
		<p>No post found</p>
	@endif

@endsection