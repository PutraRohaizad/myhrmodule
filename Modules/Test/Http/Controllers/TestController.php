<?php

namespace Modules\Test\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Modules\Test\Entities\Test;

class TestController extends Controller
{

    public function list()
    {
        $name = 'Test';
        return view('test::list', compact('name'));
    }
       public function list_add()
    {

        return view('test::list_add');
    }
       public function list_update()
    {

        return view('test::list_update');
    }

    public function index()
    {
        $tests = Test::latest()->get();

        return response()->json($tests);
    }
  


    public function store(Request $request)
    {
        $test = Test::create($request->all());

        return response()->json($test, 201);
    }

    public function show($id)
    {
        $test = Test::findOrFail($id);

        return response()->json($test);
    }

    public function update(Request $request, $id)
    {
        $test = Test::findOrFail($id);
        $test->update($request->all());

        return response()->json($test, 200);
    }

    public function destroy($id)
    {
        Test::destroy($id);

        return response()->json(null, 204);
    }
}