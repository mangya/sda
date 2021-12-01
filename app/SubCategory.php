<?php

namespace SDA;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sd_sub_category';

    public function beforeSave($request)
    {
    	if(empty($request->get('slug'))){
            $request->request->add(['slug' => Str::slug($request->get('name'))]);
        }
    }
}
