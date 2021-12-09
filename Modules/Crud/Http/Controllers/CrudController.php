<?php

namespace Modules\Crud\Http\Controllers;

use Exception;
use ZanySoft\Zip\Zip;
use Illuminate\Http\Request;
use Modules\Crud\Entities\Crud;
use Modules\Menu\Entities\Menu;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Contracts\Support\Renderable;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $menus = Menu::query()->where('route', '')->get();
        return view('crud::index', compact('menus'));
    }

    public function add_crud(Request $request)
    {
        try{
            $nameModule = $request->input('nameModule');

            $module = Crud::query()->where('title', $nameModule)->exists();
            // dd($module);

            // if(strcasecmp(implode($nameModule), $module->title) == 0)
            if($module == true)
            {
                return back()->with('error', 'Module' . ' ' . implode($nameModule) . ' ' . 'already exixts');
            }
            else
            {
                $nameModule = $request->input('nameModule');

                $params = [
                    'name' => $nameModule,
                ];

                //Run artisan command make module
                Artisan::call("module:make", $params);
                //Run artisan special command
                Artisan::call("crud:generator", $params);

                $crud               = new Crud();
                $crud->title        = implode($nameModule);
                $crud->subject      = implode($nameModule);
                $crud->table_name   = strtolower(implode($nameModule));
                $crud->primary_key  = 'id';
                $crud->page_read    = 'yes';
                $crud->page_create  = 'yes';
                $crud->page_update  = 'yes';
                
                $crud->save();

                $menu            = new Menu();
                $menu->title     = $crud->title;
                $menu->route     = strtolower($crud->title) . '.list';
                $menu->icon      = $request->input('icon');
                $menu->parent_id = $request->input('parentModule') ? $request->input('parentModule') : '0'; //itenary operator
                $menu->active    = '1';
                // $menu->route     = strtolower(trim($crud->title));
                // $menu->menu_status = '1';

                $menu->save();

                return back()->with('success', 'Successfully create' . ' ' . $menu->title . ' ' . 'module');
            }
         }
         catch(Exception $e){
            throw $e;
        }
    }

      public function add_crud_child(Request $request)
    {
        try{
            $nameModule = $request->input('subname');

            $module = Crud::query()->where('title', $nameModule)->exists();

            if($module == true)
            {
                return back()->with('error', 'Module' . ' ' . implode($nameModule) . ' ' . 'already exixts');
            }
            else
            {

                //Menu
                $menu            = new Menu();
                $menu->title     = $request->input('nameModule');
                $menu->route     = '';
                $menu->icon      = $request->input('icon');
                $menu->parent_id = 0; 
                $menu->active    = 1;
        
                $menu->save();

                //Submenu
                $nameModule = $request->input('subname');

                $params = [
                    'name' => $nameModule,
                ];

                //Run artisan command make module
                Artisan::call("module:make", $params);
                //Run artisan special command
                Artisan::call("crud:generator", $params);
                // dd(12);

                foreach($nameModule as $name){
        
                    $crud               = new Crud();
                    $crud->title        = $name;
                    $crud->subject      = $name;
                    $crud->table_name   = strtolower($name);
                    $crud->primary_key  = 'id';
                    $crud->page_read    = 'yes';
                    $crud->page_create  = 'yes';
                    $crud->page_update  = 'yes';
                    
                    $crud->save();
                    
                    
                    $submenu            = new Menu();
                    $submenu->title     = $crud->title;
                    $submenu->route     = strtolower($crud->title) . '.list';
                    $submenu->icon      = $request->input('icon');
                    $submenu->parent_id = $menu->id;
                    $submenu->active    = '1';
                    
                    $submenu->save();
                }

                return back()->with('success', 'Successfully create' . ' ' . $menu->title . ' ' . 'module');
            }
         }
         catch(Exception $e){
            throw $e;
        }
    }

    public function upload_module(Request $request)
    {
        $menu            = new Menu();
        $menu->title     = $request->input('title');
        // $menu->route     = strtolower($request->input('title')) . '.list';  //TODO
        $menu->icon      = $request->input('icon');
        $menu->parent_id = '0';
        $menu->active    = '1';


        //upload file
        if($file = $request->file('file'))
        {
            $name = $file->getClientOriginalName();

            $path = base_path('Modules/' . $name);

            $newPath = str_replace('.zip', '', $path);

            if(File::glob($newPath ))
            {
                return back()->with('error', 'File already exists');

            }else{
                try{
                    $zip = Zip::open($file);
                    $zip->extract(base_path('/Modules'));
                    $menu->save();

                    return back()->with('success', 'Modules successfully uploaded');
                }
                catch(Exception $e){
                    throw $e;
                }
            }
        }
    }
}
