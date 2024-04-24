<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts</title>
</head>
<body>
    @foreach($post as $p)
    <h1><a href="/posts/{{$p->slug}}">{{ $p->title }}</a></h1>
    <h1>{{ $p->sub }}</h1>
    @endforeach
</body>
</html>