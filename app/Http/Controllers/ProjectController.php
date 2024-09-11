<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at','desc')->get();
        return view('project.index', compact('projects'));
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:100',
            'client'=>'required|string|max:999',
            'customer'=>'required|string|max:999',
            'is_actual'=>'nullable|bool'
          ]);
       $project = new Project();
    //    dd($project);
       $project->name = $request->name;
       $project->client = $request->client;
       $project->customer = $request->customer;
       $project->is_actual = (bool)$request->is_actual;
       $project->save();
       return redirect()->route('project.index');
        //dd($category);//return view('admin.category.store');
    }

    public function show($id)
    {
        $project = Project::find($id);
        return view('project.show',[
            'project'=> $project,
            'developers' => Developer::all()]);
    }

    public function edit($id)
    {
        $project = Project::find($id);

        if (! $project) {
            abort(404);
        }

        return view('project.edit', [
            'project' => $project
        ]);

    }

    public function update(Request $request, $id) {

        $project = Project::find($id);

        $project->name = $request->name;
        $project->client = $request->client;
        $project->customer = $request->customer;
        $project->is_actual = (bool)$request->is_actual;

        $project->save();
        return redirect()->route('project.index');;

        // return redirect()->route('admin.article.index');
    }
    public function delete($id)
    {
        $project = Project::find($id);

        if (! $project) {
            abort(404);
        }
        $project->delete();

        return redirect()->back();
    }






}
