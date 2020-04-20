@extends('layouts.app')

@section('content')
	<h1>Edit Post</h1>
	{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
	    <div class="form-group">
	    	{{Form::label('title', 'Title')}}
	    	{{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
	    </div>
	    <div class="form-group">
	    	<label>Display Post:</label>
	    	<div class="form-check pl-0">
	    		{{Form::radio('display','yes', false, ['id' => 'yes'])}}
	    		{{Form::label('yes', 'Yes')}}
	    	</div>
	    	<div class="form-check pl-0">
	    		{{Form::radio('display','no', false, ['id' => 'no'])}}
	    		{{Form::label('no', 'No')}}
	    	</div>
	    </div>
	    <div class="form-group">
	    	{{Form::label('body', 'Body')}}
	    	{{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'rows'=>'5', 'placeholder' => 'Body'])}}
	    </div>
		{{Form::hidden('_method','PUT')}}
	    {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection

@section('footer')
	<!-- <script src="/vendor/ckeditor/ckeditor/ckeditor.js"></script> -->
    <!-- <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script> -->
@endsection('footer')