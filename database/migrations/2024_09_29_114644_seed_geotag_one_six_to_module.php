<?php

use Illuminate\Database\Migrations\Migration;
use SDA\Module;

return new class extends Migration
{
    public function up()
	{
		$data = array(
			['name' => 'Geotags', 'is_active' => 1, 'display_name' => 'Geotags', 'table_name' => 'sd_geotags', 'controller_name' => 'GeotagsController', 'slug' => 'geotags', 'create_migration' => 1, 'list_view_columns' => 'tree_longitude,tree_lattitude,date_of_plantation,tree_status,is_approved,is_active,created_at', 'show' => 1, 'sequence_no' => 16, 'bg_color' => '#605ca8', 'icon' => 'fa fa-map-marker', 'icon_color' => '#70de1f', 'form_title' => 'id', 'sort_field' => 'id', 'sort_order' => 'desc', 'is_child_table' => 0, 'last_updated_by' => 'sysadmin', 'updated_at' => '2024-09-29 20:48:24', 'owner' => 'sysadmin', 'created_at' => '2024-09-29 20:48:24']
		);

		Module::insert($data);
	}

	public function down()
	{
		Module::where('name', 'Geotags')->delete();
	}
};
