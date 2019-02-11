<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class BlogController extends Controller
{
	// Blog index
    public function index ()
    {
    	$posts = Post::orderBy('id', 'desc')
                ->get();

    	$param = [
    		'posts'	=> $posts,
            'path'  => 'index'
    	];
    	return view('blog.home', compact('param'));
    }

    public function view ($id, Request $request)
    {
        $post = Post::find(intval($id));

        $param = [
            'post' => $post,
            'path'  => 'view'
        ];

        return view('blog.home', compact('param'));
    }
}
