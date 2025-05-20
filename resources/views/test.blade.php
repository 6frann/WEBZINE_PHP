<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        @foreach ($articles as $article)
        <div>
            <h2> <a href="{{ route('test2', ['slug' => $article->slug]) }}">{{ $article->title }}</a> </h2>
        </div>
    @endforeach
    </body>
</html>