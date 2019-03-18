<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    
    public function index()
    {
        $projects = new Project();
        return view('projects.index', ['projects' => $projects->all()]);
    }


    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required'
        ]);

        Project::create($attributes);

        return redirect()->route('projects.index');
    }

    public function show(Project $project)
    {
        return view('projects.show', ['project' => $project]);
    }

    public function edit(Project $project)
    {
        return view('projects.edit', ['project' => $project]);
    }

    public function update(Request $request, Project $project)
    {
        $attributes = request()->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required'
        ]);

        $project->fill($attributes);
        $project->save();

        return redirect()->route('projects.show',['id' => $project]);
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
