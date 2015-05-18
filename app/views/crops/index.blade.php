<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seeds</title>
</head>
<body>
    <div class="welcome">
        @foreach ($crops as $crop)
            <p>Crop: {{ $crop->description }}</p>
        @endforeach
    </div>
</body>
</html>