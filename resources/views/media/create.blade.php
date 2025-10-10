@extends('layout')

@section('content')
    <h1>Rate a piece of media</h1>
    <form method="POST" action="{{ route('media.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter the title">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" class="form-control" id="category" placeholder="Enter the category">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" class="form-control" id="genre" placeholder="Enter the genre">
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" name="rating" class="form-control" id="rating" placeholder="Enter the rating">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ route('media.index') }}">Back to the list</a>
@endsection
