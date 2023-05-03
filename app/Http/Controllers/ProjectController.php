<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    //
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::all()
        ]);
    }

    public function store()
    {
        Project::create(request(['title', 'description']));
        return redirect('/projects');
    }
}
