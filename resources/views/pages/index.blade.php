@extends('layouts.app')

@section('content')

	<h1>{{$title}}</h1>
	<h2><?php echo $title; ?></h2>
	<p>{{$content}}</p>

	<!-- loop -->
	@if(count($tools) > 0)
		<ul class="list-group">
			@foreach($tools as $tool)
				<li class="list-group-item">{{$tool}}</li>
			@endforeach
		</ul>
	@endif

@endsection