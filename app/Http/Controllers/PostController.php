<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Image;
use Purifier;
use Storage;

class PostController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		$posts = Post::orderBy('id', 'desc')->paginate(5);
		return view('posts.index')->withPosts($posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
		return view('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		$this->validate($request, array(
			'title' => 'required|min:5',
			'title_ar' => 'required|min:5',
			'body' => 'required|min:10',
			'body_ar' => 'required|min:10',
			'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
			'image' => 'sometimes|image',
		));
		$post = new Post;

		$post->title = $request->title;
		$post->title_ar = $request->title_ar;
		$post->body = Purifier::clean($request->body);
		$post->body_ar = Purifier::clean($request->body_ar);
		$post->slug = $request->slug;

		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$filename = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('images/' . $filename);
			Image::make($image)->resize(1080, 380)->save($location);
			$post->image = $filename;
		}

		$post->save();

		return redirect()->route('posts.show', $post->id)->with('status', 'Votre Post a été ajouté avec succès !!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
		$post = Post::find($id);
		return view('posts.show')->withPost($post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
		$post = Post::find($id);
		return view('posts.edit')->withPost($post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {

		$post = Post::find($id);

		$this->validate($request, array(
			'title' => 'required|min:5',
			'title_ar' => 'required|min:5',
			'body' => 'required|min:10',
			'body_ar' => 'required|min:10',
			'slug' => "required|alpha_dash|min:5|max:255|unique:posts,slug,$id",
			'image' => 'image',
		));

		$post = Post::find($id);

		if ($request->hasFile('image')) {
			// Add the new photo
			$image = $request->file('image');
			$filename = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('images/' . $filename);
			Image::make($image)->resize(1080, 380)->save($location);
			$oldFilename = $post->image;
			// Update the database
			$post->image = $filename;
			// Delete the old photo
			Storage::delete($oldFilename);
		}

		$post->title = $request->input('title');
		$post->title_ar = $request->input('title_ar');
		$post->body = Purifier::clean($request->input('body'));
		$post->body_ar = Purifier::clean($request->input('body_ar'));
		$post->slug = $request->input('slug');

		$post->save();

		return redirect()->route('posts.show', $post->id)->with('status', 'Votre Post a été modifié avec succès !!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
		$post = Post::find($id);

		Storage::delete($post->image);

		$post->delete();

		return redirect()->route('posts.index')->with('status', 'Votre Post a été supprimé avec succès !!');
	}
}
