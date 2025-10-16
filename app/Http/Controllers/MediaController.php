<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Media;

class MediaController extends Controller
{
    public function index(){
        $media = Media::all();
        return view('media.index', compact('media'));
    }

    public function create(){
        return view('media.create');
    }

    public function store(Request $request){
        $media = new Media;
        $media->title = $request->input('title');
        $media->category = $request->input('category');
        $media->genre = $request->input('genre');
        $media->rating = $request->input('rating');
        $media->save();

        return redirect()->route('media.index');
    }
}
