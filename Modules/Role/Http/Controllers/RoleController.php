<?php

namespace Modules\Role\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Modules\Role\Entities\Role;

class RoleController extends Controller
{

    public function list()
    {
        $name = 'Role';
        return view('role::list', compact('name'));
    }
       public function list_add()
    {

        return view('role::list_add');
    }
       public function list_update()
    {

        return view('role::list_update');
    }

    public function index()
    {
        $roles = Role::latest()->get();

        return response()->json($roles);
    }
  


    public function store(Request $request)
    {
        $role = Role::create($request->all());

        return response()->json($role, 201);
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);

        return response()->json($role);
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update($request->all());

        return response()->json($role, 200);
    }

    public function destroy($id)
    {
        Role::destroy($id);

        return response()->json(null, 204);
    }
}