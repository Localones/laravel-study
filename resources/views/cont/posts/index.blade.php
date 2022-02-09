<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<h2>Список постов</h2>

<ul>
    <li>
        <a href="{{route('posts.show',['post' => 1])}}">Пост 1</a>
        <a href="{{route('posts.edit',['post' => 1])}}">Редактировать пост 1</a>
        <form action="{{route('posts.destroy' ,['post' => 1])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить</button>
        </form>
    </li>
    <li>
        <a href="{{route('posts.show',['post' => 2])}}">Пост 2</a>
        <a href="{{route('posts.edit',['post' => 2])}}">Редактировать пост 2</a>
        <form action="{{route('posts.destroy' ,['post' => 2])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить</button>
        </form>
    </li>
    <li>
        <a href="{{route('posts.show',['post' => 3])}}">Пост 3</a>
        <a href="{{route('posts.edit',['post' => 3])}}">Редактировать пост 3</a>
        <form action="{{route('posts.destroy' ,['post' => 3])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить</button>
        </form>
    </li>
</ul>

</body>
</html>
