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
<form action="{{route('posts.update', ['post' => $id])}}" method="post">
    <div class="mb-3">
        @csrf
        @method('PUT')
        <label for="text" class="form-label">Сообщение</label>
        <input type="text" class="form-control" id="text" name="title">
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
</body>
</html>
