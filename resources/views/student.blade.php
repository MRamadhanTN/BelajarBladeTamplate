<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model Students</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png">
</head>
<body>
    <h1>Laravel</h1>

    @foreach ($student as $data)
    <p>{{ $data->id . '. ' . $data->name}}</p>
    @endforeach
</body>
</html>
