@extends('layout')

@section('styles')
<link rel="stylesheet" href="/css/media-index.css">
@endsection

@section('content')
    <div class="page-container">
        <div class="header-container">
            <h1 class="page-title">Your Notes</h1>
            <a href="{{ route('media.create') }}" class="add-button">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                Add
            </a>
        </div>

        @if($media->isEmpty())
            <div class="empty-state">
                <p>No media registered yet.</p>
                <a href="{{ route('media.create') }}">
                    Be the first to add one!
                </a>
            </div>
        @else
            <div class="media-grid">
                @foreach ($media as $item)
                    <div class="media-card">
                        <div class="card-content">
                            <h3 class="media-title">{{ $item->title }}</h3>
                            
                            <div class="media-info">
                                <div class="info-item">
                                    <svg class="info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                    </svg>
                                    <span>{{ $item->category }}</span>
                                </div>
                                
                                <div class="info-item">
                                    <svg class="info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/>
                                    </svg>
                                    <span>{{ $item->genre }}</span>
                                </div>
                                
                                <div class="rating-container">
                                    <div class="stars-container">
                                        @for($i = 1; $i <= 10; $i++)
                                            <svg class="star {{ $i <= $item->rating ? 'filled' : 'empty' }}"
                                                 fill="currentColor" 
                                                 viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                        @endfor
                                    </div>
                                    <span class="rating-text">{{ $item->rating }}/10</span>
                                </div>

                                <div class="action-buttons">
                                    <a href="{{ route('media.edit', ['medium' => $item->id]) }}" 
                                       class="edit-button">
                                        <svg class="action-button-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </a>
                                    <form action="{{ route('media.destroy', ['medium' => $item->id]) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="delete-button"
                                                onclick="return confirm('¿Estás seguro de que quieres eliminar este medio?')">
                                            <svg class="action-button-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
