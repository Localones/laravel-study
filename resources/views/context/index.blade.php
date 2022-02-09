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
                <a class="navbar-brand" href="#">Посты</a>
                <a href="{{route('home')}}" class="btn btn-primary">Вернуться</a>
            </div>
        </nav>
    </div>
</div>


<div class="content" style="margin-top: 20px">
    <div class="content__container container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{\Illuminate\Support\Facades\URL::asset($post->photo)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->name}}</h5>
                            <p class="card-text">{{$post->desc}}</p>
                            <a href="{{route('context_id', ['id' => $post->id])}}" class="btn btn-primary">Preview</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


</body>
</html>
