<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello world</title>
</head>

<body>
    <h1>hola mundo</h1>

    <h2>{{$edad}}</h2>

    <ul>
        @foreach ($hobbies as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
    <h2>El curso es: {{$curso}}</h2>
    <h2>{{$centro}}</h2>
</body>

</html>