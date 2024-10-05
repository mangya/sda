<?php

namespace SDA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use HasFactory;

    protected $table = 'sd_trees';

    public static function getDropdownList($treeName = null){
        $list = static::where('is_active',1)
                ->where('is_approved',1);
                
        return is_null($treeName) ? $list->pluck('name','id') : $list->where('name',$treeName)->pluck('name','id');        
    }

    public static function getTreeName($id){
        return Tree::find($id)->name;
    }
}
