<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'title' => 'Menu',
            'parent_id' => '0',
            'active' => '1',
            'route' => 'menu.index',
            'icon' => 'la-dashboard',
            'order' =>'0'
        ]);
        DB::table('menu')->insert([
            'title' => 'Admin',
            'parent_id' => '0',
            'active' => '1',
            'route' => 'admin.list',
            'icon' => 'la-dashboard',
            'order' => '0'
        ]);
    }
}
