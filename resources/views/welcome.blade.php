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
        }

        hr {
            width: 100%;
        }

        p {
            width: 70%;

            @media(min-width: 600px) {
                width: 40%;
            }
        }

        button {
            border: 0;
            background-color: darkorchid;
            color: white;
            padding: 0.4rem 0.8rem;
            border-radius: 1rem;
            cursor: pointer;
            transition-duration: 0.4s;
        }

        button:hover {
            background-color: black;
            transition-duration: 0.4s;
        }
    </style>
</head>

<body>
    <div id="container">
        <h1>Welcome to allafinity</h1>
        <hr>
        <p>Allafinity is an online platform designed to help users organize and track the different types of media they consume, such as television shows, movies, books, and more. Its main purpose is to provide a convenient way to record what you have watched or read over time, allowing you to easily revisit your favorite titles and see how your interests evolve. By completing a simple form, you can add any TV show, film, novel, comic, or other medium to your personal library and rate each item. Over time, Allafinity becomes a personalized catalogue that reflects your unique tastes and helps you discover new recommendations based on your preferences.</p>
        <div id="button-container">
            <button onclick="window.location.href='{{ route('media.index') }}'">Go to the list</button>
            <button onclick="window.location.href='{{ route('media.create') }}'">Add a piece of media</button>
        </div>
    </div>
</body>

</html>
