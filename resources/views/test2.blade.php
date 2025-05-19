<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>article detail</title>
</head>
<body>
    <h1>{{$article->title}}</h1>
    <p>{{ strip_tags(html_entity_decode($article->content)) }}</p>
    <p>{{$article->category->name}}</p>
    <p>{{$article->author->name}}</p>

    @foreach ($article->tags as $tag)
    <span>{{ $tag->name }}</span>
    @endforeach
    <img src="{{ $article->image }}" alt="Capture-d-e-cran-2025-05-15-a-19-49-09" border="0">
</body>
</html>