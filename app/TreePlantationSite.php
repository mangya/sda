<?php

namespace SDA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreePlantationSite extends Model
{
    use HasFactory;

    protected $table = 'sd_tree_plantation_sites';

    public static function getDropdownList($siteName = null){
        $list = static::where('is_active',1)
                ->where('is_approved',1);
                
        return is_null($siteName) ? $list->pluck('name','id') : $list->where('name',$siteName)->pluck('name','id');        
    }
}
