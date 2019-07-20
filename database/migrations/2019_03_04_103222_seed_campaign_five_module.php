<?phpuse SDA\Module;use Illuminate\Database\Schema\Blueprint;use Illuminate\Database\Migrations\Migration;class SeedCampaignFiveModule extends Migration{	public function up()	{		$data = array(			['name' => 'Campaign', 'is_active' => 1, 'display_name' => 'Campaign', 'table_name' => 'sd_campaign', 'controller_name' => 'CampaignController', 'slug' => 'campaign', 'create_migration' => 1, 'list_view_columns' => 'name,is_active', 'show' => 1, 'sequence_no' => 4, 'bg_color' => '#f4645f', 'icon' => 'fa fa-star', 'icon_color' => '#ffffff', 'form_title' => 'name', 'is_child_table' => 0, 'sort_field' => 'id', 'sort_order' => 'desc', 'last_updated_by' => 'sysadmin', 'updated_at' => '2019-03-04 10:32:22', 'owner' => 'sysadmin', 'created_at' => '2019-03-04 10:32:22']		);		Module::insert($data);	}	public function down()	{		Module::where('name', 'Campaign')->delete();	}}