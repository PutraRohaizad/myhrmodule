<?php

namespace Modules\Projects\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Modules\Projects\Entities\Projects;

class ProjectsController extends Controller
{

    public function list()
    {
        $name = 'Projects';
        return view('projects::list', compact('name'));
    }

    public function projectList()
    {
        $name = 'Projects';
        return view('projects::project_list', compact('name'));
    }

    public function create()
    {
        return view('projects::create');
    }
    public function list_add(Request $request)
    {
        $project              = new Projects();
        $project->name        = $request->input('name');
        $project->client      = $request->input('client');
        $project->start       = $request->input('start');
        $project->end         = $request->input('end');
        $project->rate        = $request->input('rate');
        $project->priority    = $request->input('priority');
        $project->leader      = $request->input('leader');
        $project->members     = $request->input('members');
        $project->description = $request->input('description');

        if ($file = $request->file('file')) {
            $filename = time() . '.' . $file->getClientOriginalName();
            $destinationPath = public_path('/uploads/images/');

            $file->move($destinationPath, $filename);
            $project->file = $filename;
        }

        $project->save();

        return redirect()->back();
    }
    public function list_update()
    {

        return view('projects::list_update');
    }

    public function index()
    {
        $projects = Projects::latest()->get();

        return response()->json($projects);
    }


    public function store(Request $request)
    {
        $projects = Projects::create($request->all());

        return response()->json($projects, 201);
    }

    public function show($id)
    {
        $projects = Projects::findOrFail($id);

        return response()->json($projects);
    }

    public function update(Request $request, $id)
    {
        $projects = Projects::findOrFail($id);
        $projects->update($request->all());

        return response()->json($projects, 200);
    }

    public function destroy($id)
    {
        Projects::destroy($id);

        return response()->json(null, 204);
    }
}
