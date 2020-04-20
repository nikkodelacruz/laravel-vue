@extends('layouts.app')

@section('content')
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="well">
				<h5>{{$post->title}}</h5>
				<p>{{$post->body}}</p>
				<span>{{$post->created_at}}</span>
				<a href="/posts/{{$post->id}}" class="d-block">Read more</a>
			</div>
			<hr>
		@endforeach
		{{$posts->links()}}
	@else
		<p>No posts found</p>
	@endif
@endsection

@section('footer')
	<h1>footer</h1>
@endsection