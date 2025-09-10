@extends('templates.home')

@section('title')
    {{ $category->name }} - Actualités
@endsection

@section('content')
    <h1 class="text-3xl font-bold text-primary mb-8">Actualités</h1>

    <div class="mb-8 flex flex-wrap gap-4">
        <button class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 text-gray-800"><a href="{{route('articles.index')}}">Tout</a></button>
        @foreach ($categories as $cat)   
            <a href="{{ route('categories.show', ['slug' => $cat->slug]) }}">
                <button class="px-4 py-2 rounded 
                    {{ (isset($category) && $category->slug === $cat->slug) 
                        ? 'bg-accent text-white hover:bg-accent/90' 
                        : 'bg-gray-200 hover:bg-gray-300' }}">
                    {{ $cat->name }}
                </button>
            </a>     
        @endforeach
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($articles as $article)
            <article class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <a href="{{route('articles.show',['slug'=>$article->slug])}}" class="block">
                    <img src="{{$article->image}}" alt="Nekfeu nouvel album" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span>{{$article->created_at->format('d/m/y')}}</span>
                            <span class="mx-2">•</span>
                            <span>Par {{$article->author->name}}</span>
                        </div>
                        <h2 class="text-xl font-bold text-primary mb-2">{{$article->title}}</h2>
                        <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags(html_entity_decode($article->content)), 100) }}</p>
                        <span class="text-accent font-medium hover:text-accent/80">Lire la suite →</span>
                    </div>
                </a>
            </article>
        @endforeach
    </div>

    <div class="mt-8 flex flex-col md:flex-row md:items-center md:justify-center gap-4">
        <div class="text-sm text-gray-500">
            Affichage de {{ $articles->firstItem() }} à {{ $articles->lastItem() }} sur {{ $articles->total() }} résultats
        </div>
        <div>
            {{ $articles->links('pagination::simple-tailwind') }}
        </div>
    </div>

@endsection