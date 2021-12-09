<?php

namespace Modules\Menu\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
   protected $table = 'menu';

    protected $fillable = [];

     public function childs() {
        return $this->hasMany('Modules\Menu\Entities\Menu','parent_id','id') ;
    }
   
}
