<?php

namespace Modules\Admininistarion\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Modules\Admininistarion\Entities\Admininistarion;

class AdmininistarionController extends Controller
{

    public function list()
    {
        $name = 'Admininistarion';
        return view('admininistarion::list', compact('name'));
    }
       public function list_add()
    {

        return view('admininistarion::list_add');
    }
       public function list_update()
    {

        return view('admininistarion::list_update');
    }

    public function index()
    {
        $admininistarions = Admininistarion::latest()->get();

        return response()->json($admininistarions);
    }
  


    public function store(Request $request)
    {
        $admininistarion = Admininistarion::create($request->all());

        return response()->json($admininistarion, 201);
    }

    public function show($id)
    {
        $admininistarion = Admininistarion::findOrFail($id);

        return response()->json($admininistarion);
    }

    public function update(Request $request, $id)
    {
        $admininistarion = Admininistarion::findOrFail($id);
        $admininistarion->update($request->all());

        return response()->json($admininistarion, 200);
    }

    public function destroy($id)
    {
        Admininistarion::destroy($id);

        return response()->json(null, 204);
    }
}