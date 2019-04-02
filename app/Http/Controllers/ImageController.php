<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use App\File;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Purifier;
use Storage;

class ImageController extends Controller {

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
        $files = File::orderBy('id', 'desc')->paginate(5);
        return view('images.index')->withFiles($files);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('images.create');
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
            'section_id' => 'required',
            'image' => 'sometimes|image',
        ));

        $file = new File;

        $file->type = "image";
        $file->section_id = $request->section_id;
        $file->fichier = $request->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1080, 380)->save($location);
            $file->fichier = $filename;
        }

        $file->save();

        return redirect()->route('images.show', $file->id)->with('status', 'Votre Image a été ajoutée avec succès !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
        $file = File::find($id);
        return view('images.show')->withFile($file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
        $sectionData = DB::table('sections')
        ->select('*')
        ->where('id', '<', 5)
        ->where('id', '<>', 2)
        ->get(); 

        $file = File::find($id);
        return view('images.edit')->withFile($file)->with('sectionData', $sectionData);
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
            'section_id' => 'nullable',
            'image' => 'sometimes|image',
        ));

        $file = File::find($id);

        if ($request->hasFile('image')) {
            // Add the new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1080, 380)->save($location);
            $oldFilename = $file->fichier;
            // Update the database
            $file->fichier = $filename;
            // Delete the old photo
            Storage::delete($oldFilename);
        }

        $file->section_id = $request->input('section_id');

        $file->save();

        return redirect()->route('images.show', $file->id)->with('status', 'Votre Image a été modifiée avec succès !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        $file = File::find($id);

        Storage::delete($file->fichier);

        $file->delete();

        return redirect()->route('images.index')->with('status', 'Votre Image a été supprimée avec succès !!');
    }
}
