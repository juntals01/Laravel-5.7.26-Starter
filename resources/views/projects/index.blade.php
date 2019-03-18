@extends('layouts.app')

{{-- Define Page Title  --}}
@section('title', 'Show Application')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <a class="btn btn-primary" href="{{ route('projects.create') }}">Add new</a>
        <ul>
            @foreach( $projects as $project)
            <li>{{ link_to_route('projects.show',$project->title ,['id' => $project->id]) }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
