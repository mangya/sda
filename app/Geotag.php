<?php

namespace SDA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Geotag extends Model
{
    use HasFactory;

    protected $table = 'sd_geotags';

    public static function getGeotagDetails($id){
        $data = DB::table('sd_geotags as geo')
            ->join('sd_trees as tree', 'geo.tree_id', '=', 'tree.id')
            ->join('sd_tree_plantation_drives as drive', 'tree_plantaton_drive_id', '=', 'drive.id')
            ->join('sd_tree_plantation_sites as site', 'tree_plantaton_site_id', '=', 'site.id')
            ->where('geo.id', '=', '1')
            ->select('geo.*',
            'tree.name as treeName',
            'tree.scientific_name',
            'tree.info as treeInfo',
            'tree.image as treeImage',
            'drive.name as driveName',
            'drive.summary',
            'site.name as siteName',
            'site.address') // Select columns from all joined tables
            ->get();
        return $data;    
    }

}
