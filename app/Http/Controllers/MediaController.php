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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:TV Series,Movie,Book,Comic',
            'genre' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:10'
        ]);

        $media = new Media;
        $media->title = $validated['title'];
        $media->category = $validated['category'];
        $media->genre = $validated['genre'];
        $media->rating = $validated['rating'];
        $media->save();

        return redirect()->route('media.index');
    }

    public function edit(Media $medium) {
        return view('media.edit', ['media' => $medium]);
    }

    public function update(Request $request, Media $medium) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:TV Series,Movie,Book,Comic',
            'genre' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:10'
        ]);

        $medium->title = $validated['title'];
        $medium->category = $validated['category'];
        $medium->genre = $validated['genre'];
        $medium->rating = $validated['rating'];
        $medium->save();

        return redirect()->route('media.index');
    }

    public function destroy(Media $medium) {
        $medium->delete();
        return redirect()->route('media.index');
    }
}
