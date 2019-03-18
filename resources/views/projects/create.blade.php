@extends('layouts.app')

{{-- Define Page Title  --}}
@section('title', 'Show Application')

@section('content')
	<div class="container">
	    <div class="row justify-content-center">
	    	
	    	@include('includes.errors')

	    	<div class="col-md-12">
		        
		        {{ Form::open(['route' => 'projects.store']) }}
					<div class="form-group">
						<label for="title">Title</label>
						{{ Form::text('title', null, ['class'=>'form-control','id'=>'title','aria-describedby'=>'Title Help', 'placeholder'=>'Enter Title']) }}
						<small id="emailHelp" class="form-text text-muted">Title</small>
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						{{ Form::textarea('description', null, ['class'=>'form-control','id'=>'description','aria-describedby'=>'Description Help', 'placeholder'=>'Enter Description','rows'=>"3"]) }}
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				{{ Form::close() }}

			</div>
	    </div>
	</div>
@endsection
