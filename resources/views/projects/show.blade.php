@extends('layouts.app')

{{-- Define Page Title  --}}
@section('title', 'Show Application')

@section('content')
	<div class="container">

	    <div class="row justify-content-center">

	    	<div class="col-md-12 box"></li>

		        <div>Title: {{ link_to_route('projects.edit',$project->title ,['id' => $project->id]) }}</div>

		        <div>Description: {{ $project->description }}</div>

		        @if($project->tasks->count())
					
					<div>

						@foreach($project->tasks as $task)

							<div>

								<form method="POST" action="/tasks/{{ $task->id }}">

									@method('PATCH')
									@csrf

									<label for="completed">

										<input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>

										{{ $task->description }}

									</label>

								</form>

							</div>

						@endforeach

					</div>

		        @endif

		        {{-- add a new task --}}

		        @include('includes.errors')

		        <form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
					@csrf
		        	<label for="description" class="label">New Task</label>

		        	<div class="control">

		        		<input type="text" class="input" name="description" placeholder="New Task">

		        	</div>

		        	<button type="submit">Add Task</button>

		        </form>

			</div>

	    </div>

	</div>

@endsection
