@extends('app')

@section('content')
	<div class="text-center p-5">
		<a class="btn btn-info" href="{{ route('posts.create') }}">Create Post</a>
	</div>
@endsection