<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // список
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    // форма створення
    public function create()
    {
        return view('projects.create');
    }

    // збереження
    public function store(Request $request)
    {
        Project::create($request->all());

        return redirect('/projects');
    }

    // один проект
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }
}