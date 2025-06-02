@extends('templates.home')

@section('title', 'Actualités')

@section('content')
    <h1 class="text-3xl font-bold text-primary mb-8">Actualités</h1>
    
    <!-- Filtres -->
    <!-- <div class="mb-8 flex flex-wrap gap-4">
        <button class="px-4 py-2 bg-accent text-white rounded hover:bg-accent/90">Tout</button>
        <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">News</button>
        <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Découvertes</button>
        <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Culture</button>
        <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Instant Boul</button>
    </div> -->

    <!-- Grille d'articles -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Article 1 -->
        @foreach ($articles as $article)
            <article class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <a href="{{route('pages.articleDetail',['slug'=>$article->slug])}}" class="block">
                    <img src="{{$article->image}}" alt="Nekfeu nouvel album" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span>{{$article->created_at->format('d M Y')}}</span>
                            <span class="mx-2">•</span>
                            <span>{{$article->author->name}}</span>
                        </div>
                        <h2 class="text-xl font-bold text-primary mb-2">{{$article->title}}</h2>
                        <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags(html_entity_decode($article->content)), 100) }}</p>
                        <span class="text-accent font-medium hover:text-accent/80">Lire la suite →</span>
                    </div>
                </a>
            </article>
        @endforeach
    </div>

    <!-- Pagination -->
    <!-- <div class="mt-12 flex justify-center">
        <nav class="flex items-center space-x-2">
            <a href="#" class="px-4 py-2 bg-accent text-white rounded hover:bg-accent/90">1</a>
            <a href="#" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">2</a>
            <a href="#" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">3</a>
            <a href="#" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Suivant →</a>
        </nav>
    </div> -->
@endsection