<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/todo">Home</a>
    <h1>Todo # {{ $todo->id }}</h1>
    <h3>Title: {{ $todo->title }}</h3>
    <p>Description: {{ $todo->description }} </p>
    <span>created: {{ $todo->created_at }}</span><br>
    <span>updated: {{ $todo->updated_at }}</span>
    <a href="/todo/delete/{{ $todo->id }}">Delete</a>
</body>
</html>
