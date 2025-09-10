@extends('templates.home')

@section('title', 'Résultats de la recherche')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Résultats de la recherche</h1>
    {{-- @if($articles->isEmpty())
        <p class="text-gray-600">Aucun résultat trouvé pour "{{ request('query') }}".</p>
    @else --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Article 1 -->
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
    {{-- @endif --}}
@endsection