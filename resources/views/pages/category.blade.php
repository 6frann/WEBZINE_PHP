@extends('templates.home')

@section('title', 'category->name')

@section('content')
    <h1 class="text-3xl font-bold mb-6">
        Articles dans la catégorie : {{ $category->name }}
    </h1>

    <div class="mb-8 flex flex-wrap gap-4">
        <button class="px-4 py-2 bg-accent text-white rounded hover:bg-accent/90"><a href="{{route('pages.actuality')}}">Tout</a></button>
        @foreach ($categories as $cat)
            <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300"><a href="{{route('pages.category',['slug'=>$cat->slug]) }}">{{$cat->name}}</a></button>
        @endforeach
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($articles as $article)
            <div class="bg-white rounded shadow p-4">
                <h3 class="font-semibold text-lg mb-2">{{ $article->title }}</h3>
                <p class="text-sm text-gray-600 mb-1">Par {{ $article->author->name }}</p>
                <p class="text-sm text-gray-500">{{ $article->created_at->format('d/m/y') }}</p>
                <a href="{{ route('pages.articleDetail', ['slug' => $article->slug]) }}" class="text-blue-500 hover:underline">Lire</a>
            </div>
        @endforeach
    </div>

@endsection