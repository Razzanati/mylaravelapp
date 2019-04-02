<?php

namespace App\Http\Controllers;
use App\Post;

class BlogController extends Controller {
	//
	public function index() {
		$posts = Post::orderBy('created_at', 'desc')->paginate(5);
		return view(app()->getLocale() . '/blog')->withPosts($posts);
	}

	public function getSingle($slug) {
		$post = Post::where('slug', '=', $slug)->first();
		return view(app()->getLocale() . '/single')->withPost($post);
	}
}
