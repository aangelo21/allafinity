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
        try {
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

            if ($request->ajax()) {
                return response()->json(['success' => true]);
            }

            return redirect()->route('media.index');
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please check the form for errors',
                    'errors' => $e->errors()
                ], 422);
            }
            throw $e;
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred while saving'
                ], 500);
            }
            throw $e;
        }
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
        try {
            $medium->delete();
            
            if (request()->ajax()) {
                return response()->json(['success' => true]);
            }
            
            return redirect()->route('media.index');
        } catch (\Exception $e) {
            if (request()->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error deleting the item'
                ], 500);
            }
            throw $e;
        }
    }
}
