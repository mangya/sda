<?php

namespace SDA\Http\Controllers;

use Auth;
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
        $blogs = Blog::where('is_active',1)->with('author')->orderBy('created_at','desc')->get();
        return view('website.blog_list',compact('blogs'));
    }

    public function showUserBlogs()
    {
        if (Auth::check()) {
            if(auth()->user()->role == "Author") {

                $blogs = Blog::where('user_id',auth()->user()->id)
                                ->with('author')
                                ->orderBy('created_at','desc')
                                ->get();
                return view('website.user_blogs',compact('blogs'));
            }
        }

        return redirect()->route('show.blog_list');
    }

    public function showBlogForm()
    {
        if (Auth::check()) {
            if(auth()->user()->role == "Author") {
                return view('website.blog_form');
            }
        }

        return redirect()->route('show.blog_list');
    }

    public function saveBlog(Request $request)
    {
        if(empty($request->get('code'))){
            $request->request->add(['code' => $this->generateCode()]);
        }
        if(empty($request->get('user_id'))){
            $request->request->add(['user_id' => auth()->user()->id]);
        }

        $blog = new Blog();
        $blog->title = $request->get('title');
        $blog->code = $request->get('code');
        $blog->user_id = $request->get('user_id');
        $blog->content = $request->get('content');
        $blog->is_approved = 0;
        $blog->owner = auth()->user()->login_id;
        $blog->last_updated_by = auth()->user()->login_id;
        $blog->created_at = date('Y-m-d H:i:s');
        $blog->updated_at = date('Y-m-d H:i:s');
        $blog->save();

        return redirect()->route('show.blog_list');
    }

    public function showBlogEditForm($code)
    {
        $blog = Blog::where('code',$code)->with('author')->first();
        if($blog->is_approved) {
            return redirect()->route('show.blog',['code' => $code]);
        }
        return view('website.blog_edit_form',compact('blog'));
    }

    public function updateBlog($code, Request $request)
    {
        $blog = Blog::where('code',$code)->with('author')->first();
        $blog->title = $request->get('title');
        $blog->content = $request->get('content');
        $blog->is_approved = 0;
        $blog->is_active = 0;
        $blog->last_updated_by = auth()->user()->login_id;
        $blog->updated_at = date('Y-m-d H:i:s');
        $blog->save();
        return redirect()->route('show.user_blogs');
    }

    public function showBlog($code)
    {
        $blog = Blog::where('code',$code)->with('author')->first();
        return view('website.blog',compact('blog'));
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
