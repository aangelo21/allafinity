@extends('layout')

@section('styles')
<link rel="stylesheet" href="/css/media-form.css">
@endsection

@section('content')
    <div class="form-container">
        <div class="form-card">
            <h1 class="form-title">Add a Note</h1>
            
            <form method="POST" action="{{ route('media.store') }}" class="form-content">
                @csrf
                
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" 
                           name="title" 
                           id="title" 
                           placeholder="Enter the title" 
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
                        <option value="TV Series">TV Series</option>
                        <option value="Movie">Movie</option>
                        <option value="Book">Book</option>
                        <option value="Comic">Comic</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" 
                           name="genre" 
                           id="genre" 
                           placeholder="Enter the genre" 
                           required
                           class="form-input">
                </div>

                <div class="form-group">
                    <label for="rating" class="form-label">Rating (1-10)</label>
                    <input type="number" 
                           name="rating" 
                           id="rating" 
                           placeholder="Enter your rating" 
                           min="1" 
                           max="10" 
                           required
                           class="form-input">
                </div>

                <div class="button-container">
                    <button type="submit" class="submit-button">
                        Save Rating
                    </button>
                    <a href="{{ route('media.index') }}" class="cancel-button">
                        Back to List
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
