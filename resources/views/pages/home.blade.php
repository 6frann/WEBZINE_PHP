@extends('templates.home')

@section('title', 'home')

@section('content')
    @include('templates.homePartials._topArticle', ['articles' => $topArticles])
    @include('templates.homePartials._articles', ['articles' => $articles])
    @include('templates.homePartials._videos', ['videos' => $videos])
@endsection