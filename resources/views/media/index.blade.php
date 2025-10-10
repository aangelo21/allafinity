<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>allafinity</title>
</head>

<body>
    <h1>Community ratings</h1>
    <ul>
        @foreach ($media as $i)
            <li>{{ $i->title }}{{ $i->category }}{{ $i->genre }}{{ $i->rating }}</li>
        @endforeach
    </ul>
</body>

</html>
