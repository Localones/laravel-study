<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Телефонная книга</a>
                <a href="{{route('home')}}" class="btn btn-primary">Вернуться</a>
            </div>
        </nav>
    </div>
</div>

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
@elseif(session()->has('info'))
    <div class="alert alert-primary" role="alert">
        {{session('info')}}
    </div>
@elseif(session()->has('warning'))
    <div class="alert alert-warning" role="alert">
        {{session('warning')}}
    </div>
@endif

<div class="container">

    <form action="{{route('search')}}" method="post">
        <div class="mb-3">
            <label for="search" class="form-label">Search</label>
            <input type="text" class="form-control" id="search" name="s" aria-describedby="search">
        </div>
        <button type="submit" class="btn btn-primary">Искать</button>
    </form>

    <a href="{{route('posts.create')}}">
        <button type="button" class="btn btn-primary" style="margin: 30px">Создать запись</button>
    </a>

    <div class="row">

        <table class="table">

            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->name}}</td>
                    <td>{{$post->email}}</td>
                    <td>{{$post->phone}}</td>
                    <td style="display: flex;">
                        <span><a href="{{route('posts.edit', ['post' => $post->id])}}"><i
                                    class="far fa-edit"></i></a></span>
                        <form action="{{route('posts.destroy', ['post' => $post->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: transparent; border: none">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$posts->links('vendor.pagination.bootstrap-4')}}

    </div>


</div>


</body>
</html>
