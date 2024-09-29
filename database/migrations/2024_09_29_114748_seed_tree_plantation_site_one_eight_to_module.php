<?php

use Illuminate\Database\Migrations\Migration;
use SDA\Module;

return new class extends Migration
{
    public function up()
	{
		$data = array(
			['name' => 'Tree Plantation Sites', 'is_active' => 1, 'display_name' => 'Tree Plantation Sites', 'table_name' => 'sd_tree_plantation_sites', 'controller_name' => 'TreePlantationSitesController', 'slug' => 'tree-plantation-sites', 'create_migration' => 1, 'list_view_columns' => 'name,address,created_at', 'show' => 1, 'sequence_no' => 18, 'bg_color' => '#605ca8', 'icon' => 'fa fa-map-signs', 'icon_color' => '#70de1f', 'form_title' => 'name', 'sort_field' => 'id', 'sort_order' => 'desc', 'is_child_table' => 0, 'last_updated_by' => 'sysadmin', 'updated_at' => '2024-09-29 20:48:24', 'owner' => 'sysadmin', 'created_at' => '2024-09-29 20:48:24']
		);

		Module::insert($data);
	}

	public function down()
	{
		Module::where('name', 'Tree Plantation Sites')->delete();
	}
};
