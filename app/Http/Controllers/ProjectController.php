<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:100',
            'description' => 'nullable|string',
            'cost'        => 'required|numeric|min:0',
            'start_date'  => 'required|date',
            'end_date'    => 'nullable|date|after:start_date',
        ]);

        Project::create($request->all());

        return redirect('/projects')->with('success', 'Проект успішно додано!');
    }

    public function show($id)
    {
        $project = Project::with('tasks')->findOrFail($id);
        return view('projects.show', compact('project'));
    }
}