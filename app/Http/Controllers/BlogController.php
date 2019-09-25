<?php

namespace SDA\Http\Controllers;

use SDA\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // define common variables
    public $module_config;

    public function __construct()
    {
        $this->module_config = [
            'parent_foreign_map' => [
                'oc_users' => [
                    'foreign_key' => 'user_id',
                    'fetch_field' => 'oc_users.full_name as user'
                ],
            ],
        ];
    }

	public function beforeSave($request)
    {
    	if(empty($request->get('code'))){
            $request->request->add(['code' => $this->generateCode()]);
        }
        if(empty($request->get('user_id'))){
            $request->request->add(['user_id' => auth()->user()->id]);
        }
    }

    public function showBlogList()
    {
        $blogs = Blog::where('is_active',1)->with('author')->get();
        return view('website.blog_list',compact('blogs'));
    }

    public function generateCode()
	{
		$code = '';
		while(empty($code)) {
		    $code = generate_password(8, true);
		    $code_exists = Blog::where('code','=',$code)->pluck('code')->first();
		    if(!empty($code_exists)) {
		    	$code = '';
		    }
		}
		return $code;
	}
}
