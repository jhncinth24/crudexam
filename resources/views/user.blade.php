<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User {{ $name }} </title>
</head>
<body>
    <h1> {{ $name }} </h1>
    <h1> {{ $age }} </h1>
    <p> {{ $email }} </p>
    <p> {{ $id }} </p>
    <p> {{ print_r( $data )}} </p>
</body>
</html>
