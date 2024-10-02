<?php

use Illuminate\Database\Migrations\Migration;
use SDA\Module;

return new class extends Migration
{
    public function up()
	{
		$data = array(
			['name' => 'Tree Plantation Drives', 'is_active' => 1, 'display_name' => 'Tree Plantation Drives', 'table_name' => 'sd_tree_plantation_drives', 'controller_name' => 'TreePlantationDrivesController', 'slug' => 'tree-plantation-drives', 'create_migration' => 1, 'list_view_columns' => 'name,is_approved,is_active,created_at', 'show' => 1, 'sequence_no' => 17, 'bg_color' => '#605ca8', 'icon' => 'fa fa-pagelines', 'icon_color' => '#70de1f', 'form_title' => 'name', 'sort_field' => 'id', 'sort_order' => 'desc', 'is_child_table' => 0, 'last_updated_by' => 'sysadmin', 'updated_at' => '2024-09-29 20:48:24', 'owner' => 'sysadmin', 'created_at' => '2024-09-29 20:48:24']
		);

		Module::insert($data);
	}

	public function down()
	{
		Module::where('name', 'Tree Plantation Drives')->delete();
	}
};
