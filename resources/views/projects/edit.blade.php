@extends('layouts.app')

{{-- Define Page Title  --}}
@section('title', 'Show Application')

@section('content')
	<div class="container">
	    <div class="row justify-content-center">
		    	<div class="col-md-12">
		        
		        {{ Form::open(['route' => ['projects.update', $project->id]]) }}
		        @method('PATCH')
					<div class="form-group">
						<label for="title">Title</label>
						{{ Form::text('title', $project->title, ['class'=>'form-control','id'=>'title','aria-describedby'=>'Title Help', 'placeholder'=>'Enter Title']) }}
						<small id="emailHelp" class="form-text text-muted">Title</small>
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						{{ Form::textarea('description', $project->description, ['class'=>'form-control','id'=>'description','aria-describedby'=>'Description Help', 'placeholder'=>'Enter Description','rows'=>"3"]) }}
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				{{ Form::close() }}

				{{ Form::open(['route' => ['projects.destroy', $project->id]]) }}
		        @method('DELETE')
					{{ Form::hidden('id', $project->id) }}
					<button type="submit" class="btn btn-danger">delete</button>
		        {{ Form::close() }}
			</div>
	    </div>
	</div>
@endsection
