<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Artisan;

class CrudGeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:generator {name : Class }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create CRUD operation.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $names = $this->argument('name');

        foreach($names as $name){
        // //Create Module Folder
        // if(!file_exists(base_path('Module'))){
        //     $process = new Process(['mkdir', base_path('Module')]);
        //     $process->run();
        // }

        // //create module name
        //  if(!file_exists(base_path("Module/{$name}"))){
        //     $process = new Process(['mkdir', base_path("/Module/{$name}")]);
        //     $process->run();
        //  }
        // //create Http file
        // if(!file_exists(base_path("Module/{$name}/Http"))){
        //     $process = new Process(['mkdir', base_path("/Module/{$name}/Http")]);
        //     $process->run();
        //  }
        // //create controllers file
        // if(!file_exists(base_path("Module/{$name}/Http/Controllers"))){
        //     $process = new Process(['mkdir', base_path("/Module/{$name}/Http/Controllers")]);
        //     $process->run();
        //  }
        // //create entities file
        //     $process = new Process(['mkdir', base_path("/Module/{$name}/Entities")]);
        //     $process->run();
         
        // //create routes file
        //     $process = new Process(['mkdir', base_path("/Module/{$name}/Routes")]);
        //     $process->run();
         
        // //create view file
        //     $process = new Process(['mkdir', base_path("/Modules/{$name}/Resources/views")]);
        //     $process->run();
         
        

        $this->controller($name);
        $this->model($name);
        $this->route($name);
        $this->list($name);
        $this->list_add($name);
        $this->list_update($name);
        }

    }

    public function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }

    public function model($name)
    {
        $modelTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
            ],
            [
                ucwords($name),
                strtolower(Str::plural($name)),
            ],
            $this->getStub('Model')
        );
       
        file_put_contents(base_path("Modules/{$name}/Entities/{$name}.php"), $modelTemplate);
    }

    public function controller($name)
    {
         $modelTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}',
             ],
            [
                ucwords($name),
                strtolower(Str::plural($name)),
                // str_replace(' ','', strtolower($name))
                strtolower($name)
            ],
            $this->getStub('Controller')

        );

           file_put_contents(base_path("Modules/{$name}/Http/Controllers/{$name}Controller.php"), $modelTemplate);

    }

    public function route($name)
    {
        $modelTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNameUpperCase}}',
               
             ],
            [
                strtolower($name),
                ucwords($name),
            ],
            $this->getStub('Route')
        );
            
           file_put_contents(base_path("Modules/{$name}/Routes/web.php"), $modelTemplate);
    }

    public function list($name)
    {
        $modelTemplate = str_replace(
            [
                '{{modelName}}',
             ],
            [
                $name,
            ],
            $this->getStub('List')
        );
            
           file_put_contents(base_path("Modules/{$name}/Resources/views/list.blade.php"), $modelTemplate);
           
    }

        public function list_add($name)
    {
        $modelTemplate = str_replace(
            [
                '{{modelName}}',
             ],
            [
                $name,
            ],
            $this->getStub('ListAdd')
        );
            
           file_put_contents(base_path("Modules/{$name}/Resources/views/list_add.blade.php"), $modelTemplate);
    }

    public function list_update($name)
    {
        $modelTemplate = str_replace(
            [
                '{{modelName}}',
             ],
            [
                $name,
            ],
            $this->getStub('ListUpdate')

        );
            
           file_put_contents(base_path("Modules/{$name}/Resources/views/list_update.blade.php"), $modelTemplate);
    }
}
