@extends('layout')

@section('styles')
<link rel="stylesheet" href="/css/media-form.css">
@endsection

@section('content')
    <!-- Error Modal -->
    <div id="errorModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Error</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <p id="errorMessage"></p>
            </div>
            <div class="modal-footer">
                <button class="modal-button modal-button-primary" onclick="closeModal('errorModal')">OK</button>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Success</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <p>The item has been successfully added!</p>
            </div>
            <div class="modal-footer">
                <button class="modal-button modal-button-primary" onclick="redirectToList()">Go to List</button>
            </div>
        </div>
    </div>

    <div class="form-container">
        <div class="form-card">
            <h1 class="form-title">Add a Note</h1>
            
            <form id="mediaForm" method="POST" action="{{ route('media.store') }}" class="form-content" onsubmit="return validateForm(event)">
                @csrf
                
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" 
                           name="title" 
                           id="title" 
                           placeholder="Enter the title" 
                           class="form-input">
                    <span id="titleError" class="error-message"></span>
                </div>

                <div class="form-group">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" 
                            id="category" 
                            class="form-select">
                        <option value="">Select a category</option>
                        <option value="TV Series">TV Series</option>
                        <option value="Movie">Movie</option>
                        <option value="Book">Book</option>
                        <option value="Comic">Comic</option>
                    </select>
                    <span id="categoryError" class="error-message"></span>
                </div>

                <div class="form-group">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" 
                           name="genre" 
                           id="genre" 
                           placeholder="Enter the genre" 
                           class="form-input">
                    <span id="genreError" class="error-message"></span>
                </div>

                <div class="form-group">
                    <label for="rating" class="form-label">Rating (1-10)</label>
                    <input type="number" 
                           name="rating" 
                           id="rating" 
                           placeholder="Enter your rating" 
                           min="1" 
                           max="10" 
                           class="form-input">
                    <span id="ratingError" class="error-message"></span>
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

    <script>
        function validateForm(event) {
            event.preventDefault();
            
            // Reset error messages
            document.querySelectorAll('.error-message').forEach(el => {
                el.style.display = 'none';
                el.textContent = '';
            });

            let isValid = true;
            const title = document.getElementById('title').value.trim();
            const category = document.getElementById('category').value;
            const genre = document.getElementById('genre').value.trim();
            const rating = document.getElementById('rating').value;

            // Validate Title
            if (!title) {
                document.getElementById('titleError').textContent = 'Title is required';
                document.getElementById('titleError').style.display = 'block';
                isValid = false;
            }

            // Validate Category
            if (!category) {
                document.getElementById('categoryError').textContent = 'Please select a category';
                document.getElementById('categoryError').style.display = 'block';
                isValid = false;
            }

            // Validate Genre
            if (!genre) {
                document.getElementById('genreError').textContent = 'Genre is required';
                document.getElementById('genreError').style.display = 'block';
                isValid = false;
            }

            // Validate Rating
            if (!rating) {
                document.getElementById('ratingError').textContent = 'Rating is required';
                document.getElementById('ratingError').style.display = 'block';
                isValid = false;
            } else if (rating < 1 || rating > 10) {
                document.getElementById('ratingError').textContent = 'Rating must be between 1 and 10';
                document.getElementById('ratingError').style.display = 'block';
                isValid = false;
            }

            if (!isValid) {
                showModal('errorModal', 'Please fix the errors in the form');
                return false;
            }

            // If validation passes, submit form via AJAX
            const form = document.getElementById('mediaForm');
            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showModal('successModal');
                } else {
                    showModal('errorModal', data.message || 'An error occurred while saving');
                }
            })
            .catch(error => {
                showModal('errorModal', 'An error occurred while saving');
            });

            return false;
        }

        function showModal(modalId, message = '') {
            const modal = document.getElementById(modalId);
            if (message && modalId === 'errorModal') {
                document.getElementById('errorMessage').textContent = message;
            }
            modal.style.display = 'block';

            // Add click events for closing
            const closeBtn = modal.querySelector('.modal-close');
            closeBtn.onclick = () => closeModal(modalId);
            
            window.onclick = (event) => {
                if (event.target === modal) {
                    closeModal(modalId);
                }
            };
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        function redirectToList() {
            window.location.href = "{{ route('media.index') }}";
        }

        // Close modal with Escape key
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                document.querySelectorAll('.modal').forEach(modal => {
                    if (modal.style.display === 'block') {
                        modal.style.display = 'none';
                    }
                });
            }
        });
    </script>
@endsection
