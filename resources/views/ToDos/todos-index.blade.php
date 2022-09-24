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
    <h1>ToDos index page</h1>

    <a href="/todo/create">Create new</a>

    @foreach ($todos as $todo)
        <div>
            <h3>{{ $todo->id }} {{ $todo->title }}</h3>
            <p>{{ $todo->description }} </p>
            <span>created: {{ $todo->created_at }}</span><br>
            <span>updated: {{ $todo->updated_at }}</span>
            <a href="/todo/{{ $todo->id }}">Details</a>
            <a href="/todo/edit/{{ $todo->id }}">Edit</a>
        </div>
    @endforeach

</body>
</html>
<?php
