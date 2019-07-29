<?php

namespace SDA\Http\Controllers;

use Illuminate\Http\Request;

class CampaignController extends Controller
{
	// define common variables
    public $module_config;

    public function __construct()
    {
        $this->module_config = [
            'parent_foreign_map' => [
                'sd_category' => [
                    'foreign_key' => 'category_id',
                    'fetch_field' => 'sd_category.name as category'
                ],
                'sd_sub_category' => [
                    'foreign_key' => 'sub_category_id',
                    'fetch_field' => 'sd_sub_category.name as sub_category'
                ],
            ],
        ];
    }
    
	public function beforeSave($request)
    {
    	if(empty($request->get('slug'))){
            $request->request->add(['slug' => str_slug($request->get('name'))]);
        }
    }
}
