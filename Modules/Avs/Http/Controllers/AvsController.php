<?php

namespace Modules\Avs\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Modules\Avs\Entities\Avs;

class AvsController extends Controller
{

    public function list()
    {
        $name = 'Avs';
        return view('avs::list', compact('name'));
    }
       public function list_add()
    {

        return view('avs::list_add');
    }
       public function list_update()
    {

        return view('avs::list_update');
    }

    public function index()
    {
        $avs = Avs::latest()->get();

        return response()->json($avs);
    }
  


    public function store(Request $request)
    {
        $avs = Avs::create($request->all());

        return response()->json($avs, 201);
    }

    public function show($id)
    {
        $avs = Avs::findOrFail($id);

        return response()->json($avs);
    }

    public function update(Request $request, $id)
    {
        $avs = Avs::findOrFail($id);
        $avs->update($request->all());

        return response()->json($avs, 200);
    }

    public function destroy($id)
    {
        Avs::destroy($id);

        return response()->json(null, 204);
    }
}