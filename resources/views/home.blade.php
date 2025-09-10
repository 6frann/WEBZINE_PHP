@extends('templates.home')

@section('title', 'Accueil')

@section('content')
    @include('articles._top', ['articles' => $topArticles])
    @include('articles._recent', ['articles' => $articles])
    @include('videos._recent', ['videos' => $videos])
@endsection