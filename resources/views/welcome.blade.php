@extends('layout')

@section('styles')
<link rel="stylesheet" href="/css/welcome.css">
@endsection

@section('content')
    <div class="welcome-container">
        <h1 class="welcome-title">Welcome to Allafinity</h1>
        
        <div class="welcome-card">
            <p class="welcome-description">
                Allafinity is an online platform designed to help you organize and track different types of media you consume, such as TV shows, movies, books, and more. Its main purpose is to provide a convenient way to record what you have watched or read over time, allowing you to easily review your favorite titles and see how your interests evolve.
            </p>
            
            <div class="button-container">
                <a href="{{ route('media.index') }}" class="primary-button">
                    View Media List
                </a>
                <a href="{{ route('media.create') }}" class="secondary-button">
                    Add New Media
                </a>
            </div>
        </div>

        <!-- Features Section -->
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="feature-title">Organize</h3>
                <p class="feature-description">Keep an organized record of all your favorite media in one place.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                </div>
                <h3 class="feature-title">Rate</h3>
                <p class="feature-description">Rate and review each title to create your personalized library.</p>
            </div>
        </div>
    </div>
@endsection
