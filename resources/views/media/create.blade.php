<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>a l l a f i n i t y</title>
    <style>
        body {
            background-color: rgb(30, 30, 30);
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        #container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        hr {
            width: 100%;
        }

        .form-container {
            width: 90%;
            max-width: 600px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
        }

        input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #666;
            border-radius: 0.5rem;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
        }

        input:focus {
            outline: none;
            border-color: darkorchid;
            background-color: rgba(255, 255, 255, 0.2);
        }

        button {
            border: 0;
            background-color: darkorchid;
            color: white;
            padding: 0.4rem 0.8rem;
            border-radius: 1rem;
            cursor: pointer;
            transition-duration: 0.4s;
            margin: 0.5rem;
        }

        button:hover {
            background-color: black;
            transition-duration: 0.4s;
        }

        #button-container {
            margin-top: 1rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="container">
        <h1>Rate a Piece of Media</h1>
        <hr>
        <div class="form-container">
            <form method="POST" action="{{ route('media.store') }}">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Enter the title" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" name="category" id="category" placeholder="Enter the category" required>
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" name="genre" id="genre" placeholder="Enter the genre" required>
                </div>
                <div class="form-group">
                    <label for="rating">Rating (1-10)</label>
                    <input type="number" name="rating" id="rating" placeholder="Enter your rating" min="1" max="10" required>
                </div>
                <div id="button-container">
                    <button type="submit">Submit Rating</button>
                    <button type="button" onclick="window.location.href='{{ route('media.index') }}'">Back to List</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
