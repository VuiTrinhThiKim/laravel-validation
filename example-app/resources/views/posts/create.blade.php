@extends('app')

@section('content')
	<div class="card">
		<div class="card-body">
			<h5 class="card-title fw-bolder">@lang('Create Post')</h5>
			<form class="form" action="{{ route('posts.store') }}" method="POST">
			@csrf
	  		<div class="mb-3">
			    <label for="title" class="form-label fw-normal">@lang('Title')<span class="text-danger">*</span></label>
			    <input type="text" name="title" class="form-control"
	                value="{{ old('title') }}" />
	            @if ($errors->has('title'))
	                <span class="text-danger">{{ $errors->first('title') }}</span>
	            @endif
	  		</div>
		    <div class="mb-3">
			    <label for="content" class="form-label fw-normal">@lang('Content')<span class="text-danger">*</span></label>
			    <textarea name="content" class="form-control">{{ old('content') }}</textarea>
	            @if ($errors->has('content'))
	                <span class="text-danger">{{ $errors->first('content') }}</span>
	            @endif
		  	</div>
	  		<div class="mb-3">
	    		<label class="form-check-label fw-normal" for="publish">@lang('Publish')<span class="text-danger">*</span></label>
	    		<select class="form-select w-120px" name="publish">
	            	<option value="0">@lang('No')</option>
	            	<option value="1">@lang('Yes')</option>
	            </select>
	            @if ($errors->has('publish'))
	                <span class="text-danger">{{ $errors->first('publish') }}</span>
	            @endif
	  		</div>
	  		<button type="submit" class="btn btn-primary">@lang('Submit')</button>
		</form>
		</div>
	</div>
@endsection