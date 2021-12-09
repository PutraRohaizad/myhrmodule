<?php

namespace Modules\Table\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Contracts\Support\Renderable;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $types = $this->get_field_type();

        return view('table::index', compact('types'));
    }

 
    public function create_table(Request $request)
    {
        try{
                $name         = $request->input('tablename');
                $column_names = $request->input('columnname');
                $column_types  = $request->input('columntype');
                $column_lengths = $request->input('length');
                $column_defaults = $request->input('columndefault');
                $column_nullables = $request->input('columnnull');
                $column_primarys = $request->input('columnprimary');
                $arrayCount = $request->input('arrayCount');
                
            /** TODO 
             * fix INT column length and 
             * default type to NULL
             */

                Schema::create($name, function (Blueprint $table) use ($column_names, $column_types, $column_lengths,  $column_defaults, $column_nullables,  $column_primarys, $arrayCount, $request) {
                    for($i=0; $i<$arrayCount; $i++)
                    {
                        //     $table->addColumn('string', 'name',
                        //     ['lenght'   => 2,
                        //    'default'  => '2',
                        //    'autoIncrement' => false,
                        //    'unsigned' => false,
                        //     ]);

                        if($column_types[$i] == 'INT') {
                            $data = $table->unsignedInteger($column_names[$i])->autoIncrement();

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }
                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data = $data;
                        }

                        if($column_types[$i] == 'VARCHAR') {
                            $data = $table->string($column_names[$i] , (int)$column_lengths[$i] );

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }
                            
                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data = $data->primary();
                        }

                        if($column_types[$i] == 'TEXT') {
                            $data = $table->string($column_names[$i] , (int)$column_lengths[$i] );
                            
                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'DATE') {
                            $data = $table->date($column_names[$i]);
                            
                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'DECIMAL') {
                            $data = $table->date($column_names[$i]);
                            
                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'FLOAT') {
                            $data = $table->float($column_names[$i], $column_lengths[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'DOUBLE') {
                            $data = $table->float($column_names[$i], $column_lengths[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'BIGINT') {
                            $data = $table->bigInteger($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'SMALLINT') {
                            $data = $table->smallInteger($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'MEDIUMINT') {
                            $data = $table->mediumInteger($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'TINYINT') {
                            $data = $table->tinyInteger($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        //TODO
                        if($column_types[$i] == 'BIT') {
                            $data = $table->smallInteger($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'BOOLEAN') {
                            $data = $table->boolean($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        //SERIAL - an alias for BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE
                        if($column_types[$i] == 'SERIAL') {
                            $data = $table->unsignedBigInteger($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'CHAR') {
                            $data = $table->unsignedBigInteger($column_names[$i], $column_lengths[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }


                        if($column_types[$i] == 'LONGTEXT') {
                            $data = $table->longText($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'MEDIUMTEXT') {
                            $data = $table->mediumText($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'TINYTEXT') {
                            $data = $table->string($column_names[$i], $column_lengths[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'DATETIME') {
                            $data = $table->dateTime($column_names[$i], $column_lengths[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'TIMESTAMP') {
                            $data = $table->timestamps($column_names[$i]);
                        }

                        if($column_types[$i] == 'TIME') {
                            $data = $table->time($column_names[$i], $column_lengths[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                        }

                        if($column_types[$i] == 'YEAR') {
                            $data = $table->year($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'GEOMETRY') {
                            $data = $table->geometry($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'LINESTRING') {
                            $data = $table->lineString($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'POLYGON') {
                            $data = $table->polygon($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        if($column_types[$i] == 'MULTIPOINT') {
                            $data = $table->multiPoint($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }

                        // if($column_types[$i] == 'ENUM') {
                        //     $data = $table->enum($column_names[$i], );

                        //     //Default
                        //     if($column_defaults[$i] == '')
                        //     {
                        //         $data = $data;
                        //     }
                        //     elseif($column_defaults[$i] == 'null')
                        //     {
                        //         $data = $data->default(NULL);
                        //     }
                        //     elseif($column_defaults[$i] == 'as_defined')
                        //     {
                        //         $data = $request->input('specified');
                        //     }

                        //     //Nullable
                        //     if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                        //     //Auto increment
                        //     if($column_primarys[$i]  == 'yes') $data ;
                        // }

                        if($column_types[$i] == 'JSON') {
                            $data = $table->json($column_names[$i]);

                            //Default
                            if($column_defaults[$i] == '')
                            {
                                $data = $data;
                            }
                            elseif($column_defaults[$i] == 'null')
                            {
                                $data = $data->default(NULL);
                            }
                            elseif($column_defaults[$i] == 'as_defined')
                            {
                                $data = $request->input('specified');
                            }

                            //Nullable
                            if($column_nullables[$i]  == 'yes')$data = $data->nullable();
                            
                            //Auto increment
                            if($column_primarys[$i]  == 'yes') $data ;
                        }
                    
                    }
                });

            
                return redirect()->back()->with('success', 'Table' . ' ' . $name  . ' ' . 'successfully create');

           }
        
           catch(Exception $e){
            //    dd($e);
                return back()->with('error', 'Table' . ' ' . $name . ' ' . 'already exists');        
                // return back()->with('error', $e->message);        
        }
    }

    public function get_field_type()
    {
         
        return  [
				'INT',
				'VARCHAR',
				'TEXT',
				'DATE',
				'DECIMAL',
				'FLOAT',
				'DOUBLE',
				'BIGINT',
				'SMALLINT',
				'MEDIUMINT',
				'TINYINT',
				'BIT',
				'BOOLEAN',
				'SERIAL',
				'TEXT',
				'VARCHAR',
				'CHAR',
				'LONGTEXT',
				'MEDIUMTEXT',
				'TINYTEXT',
				'DATE',
				'DATETIME',
				'TIMESTAMP',
				'TIME',
				'YEAR',
				'GEOMETRY',
				'LINESTRING',
				'POLYGON',
				'MULTIPOINT',
				'ENUM',
				'JSON',
			
			
		];
    }
}
