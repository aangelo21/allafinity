@extends('layout')

@section('styles')
<link rel="stylesheet" href="/css/media-form.css">
@endsection

@section('content')
    <div class="form-container">
        <div class="form-card">
            <h1 class="form-title">Edit Media</h1>
            
            <form method="POST" action="{{ route('media.update', ['medium' => $media->id]) }}" class="form-content">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" 
                           name="title" 
                           id="title" 
                           value="{{ $media->title }}"
                           required
                           class="form-input">
                </div>

                <div class="form-group">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" 
                            id="category" 
                            required
                            class="form-select">
                        <option value="">Select a category</option>
                        <option value="TV Series" {{ $media->category === 'TV Series' ? 'selected' : '' }}>TV Series</option>
                        <option value="Movie" {{ $media->category === 'Movie' ? 'selected' : '' }}>Movie</option>
                        <option value="Book" {{ $media->category === 'Book' ? 'selected' : '' }}>Book</option>
                        <option value="Comic" {{ $media->category === 'Comic' ? 'selected' : '' }}>Comic</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" 
                           name="genre" 
                           id="genre" 
                           value="{{ $media->genre }}"
                           required
                           class="form-input">
                </div>

                <div class="form-group">
                    <label for="rating" class="form-label">Rating (1-10)</label>
                    <input type="number" 
                           name="rating" 
                           id="rating" 
                           value="{{ $media->rating }}"
                           min="1" 
                           max="10" 
                           required
                           class="form-input">
                </div>

                <div class="button-container">
                    <button type="submit" class="submit-button">
                        Save Changes
                    </button>
                    <a href="{{ route('media.index') }}" class="cancel-button">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection