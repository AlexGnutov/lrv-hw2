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

    <form method="POST" action="http://localhost:8000/todo/create">
        @csrf
        <label>
            <h2>ToDo Create</h2>
            <span>Title: </span>
            <input type="text" name="title">
        </label>
        <label>
            <span>Description: </span>
            <input type="text" name="description">
        </label>
        <button type="submit">Create</button>
    </form>
</body>
</html>
