<?php

namespace Modules\Boards\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Modules\Boards\Entities\Boards;

class BoardsController extends Controller
{

    public function list()
    {
        $name = 'Boards';
        return view('boards::list', compact('name'));
    }
       public function list_add()
    {

        return view('boards::list_add');
    }
       public function list_update()
    {

        return view('boards::list_update');
    }

    public function index()
    {
        $boards = Boards::latest()->get();

        return response()->json($boards);
    }
  


    public function store(Request $request)
    {
        $boards = Boards::create($request->all());

        return response()->json($boards, 201);
    }

    public function show($id)
    {
        $boards = Boards::findOrFail($id);

        return response()->json($boards);
    }

    public function update(Request $request, $id)
    {
        $boards = Boards::findOrFail($id);
        $boards->update($request->all());

        return response()->json($boards, 200);
    }

    public function destroy($id)
    {
        Boards::destroy($id);

        return response()->json(null, 204);
    }
}