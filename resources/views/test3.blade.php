<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($videos as $video)
        <h1>{{$video->title}}</h1>
        <a href="{{route('test3', ['slug' => $video->slug])}}">
            <img src="{{ $video->thumb }}" alt="">
        </a>
    @endforeach
</body>
</html>