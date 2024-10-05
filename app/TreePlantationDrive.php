<?php

namespace SDA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreePlantationDrive extends Model
{
    use HasFactory;
    protected $table = 'sd_tree_plantation_drives';

    public static function getDropdownList($driveName = null){
        $list = static::where('is_active',1)
                ->where('is_approved',1);
                
        return is_null($driveName) ? $list->pluck('name','id') : $list->where('name',$driveName)->pluck('name','id');        
    }
}
