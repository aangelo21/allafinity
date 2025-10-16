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

        .media-list {
            list-style: none;
            padding: 0;
            width: 90%;
            max-width: 800px;
        }

        .media-item {
            background-color: rgba(255, 255, 255, 0.1);
            margin: 1rem 0;
            padding: 1rem;
            border-radius: 0.5rem;
            display: grid;
            grid-template-columns: 1fr;
            gap: 0.5rem;
        }

        @media(min-width: 600px) {
            .media-item {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .media-item span {
            padding: 0.25rem;
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
    </style>
</head>

<body>
    <div id="container">
        <h1>Community Ratings</h1>
        <hr>
        <ul class="media-list">
            @foreach ($media as $i)
                <li class="media-item">
                    <span><strong>{{ $i->title }}</strong></span>
                    <span>Category: {{ $i->category }}</span>
                    <span>Genre: {{ $i->genre }}</span>
                    <span>Rating: {{ $i->rating }}/10</span>
                </li>
            @endforeach
        </ul>
        <div id="button-container">
            <button onclick="window.location.href='{{ route('media.create') }}'">Add New Media</button>
            <button onclick="window.location.href='/'">Back to Home</button>
        </div>
    </div>
</body>

</html>
