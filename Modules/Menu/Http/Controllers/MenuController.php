<?php

namespace Modules\Menu\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Menu\Entities\Menu;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $menus = Menu::all();
        
        return view('menu::index', compact('menus'));
    }

    public function updateStatus(Request $request , Menu $menu)
    {
        $status = $request->status;

        if($status == 1){
            $menu->active = '1';
        }else{
            $menu->active = '0';
        }
        $menu->save();
        
        return response()->json([
            'menu' => $menu,
            'success' => $menu->title . ' ' . 'status successfully updated'
        ], 201);

    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('menu::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('menu::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('menu::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
