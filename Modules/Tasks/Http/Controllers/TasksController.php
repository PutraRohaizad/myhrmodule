<?php

namespace Modules\Tasks\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Modules\Tasks\Entities\Tasks;

class TasksController extends Controller
{

    public function list()
    {
        $name = 'Tasks';
        return view('tasks::list', compact('name'));
    }
       public function list_add()
    {

        return view('tasks::list_add');
    }
       public function list_update()
    {

        return view('tasks::list_update');
    }

    public function index()
    {
        $tasks = Tasks::latest()->get();

        return response()->json($tasks);
    }
  


    public function store(Request $request)
    {
        $tasks = Tasks::create($request->all());

        return response()->json($tasks, 201);
    }

    public function show($id)
    {
        $tasks = Tasks::findOrFail($id);

        return response()->json($tasks);
    }

    public function update(Request $request, $id)
    {
        $tasks = Tasks::findOrFail($id);
        $tasks->update($request->all());

        return response()->json($tasks, 200);
    }

    public function destroy($id)
    {
        Tasks::destroy($id);

        return response()->json(null, 204);
    }
}