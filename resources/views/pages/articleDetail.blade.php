@extends('templates.home')

@section('title', $article->title)

@section('content')
    <!-- Article Content -->
    <article class="max-w-4xl mx-auto">
        <header class="mb-8">
            <span class="article-tag text-sm px-4 py-1.5 bg-accent text-white rounded-full mb-4 inline-block transform hover:scale-105 transition-transform">{{$article->category->name}}</span>
            <h1 class="text-4xl font-bold text-primary mb-4">{{$article->title}}</h1>
            <div class="flex items-center text-gray-600 mb-6">
                <span class="mr-4">{{$article->created_at->format('d/m/y')}}</span>
                <span class="mr-4">Par {{$article->author->name}}</span>
            </div>
            <div class="flex flex-wrap gap-2 mb-6">
                @foreach ($article->tags as $tag)
                    <span class="px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium">#{{$tag->name}}</span>
                @endforeach
            </div>
            <div class="relative h-[500px] rounded-lg overflow-hidden mb-8">
                <img src="{{$article->image}}" alt="Nekfeu nouvel album" class="w-full h-full object-cover">
            </div>
        </header>

        <div class="prose prose-lg max-w-none">
            <div class="text-gray-700 mb-6">
                {!! $article->content !!}
            </div>
        </div>

        <div class="mt-12 border-t border-gray-200 pt-8">
            <h3 class="text-xl font-bold text-primary mb-4">Partager cet article</h3>
            <div class="flex space-x-4">
            <!-- Partager sur X/Twitter -->
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($article->title) }}" target="_blank" rel="noopener" title="Partager sur X" class="w-9 h-9 bg-gray-300 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                <!-- Icône X -->
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
            </a>
            <!-- Partager sur Facebook -->
            {{-- <a href="https://www.instagram.com/boul1peu?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-accent hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a> --}}
            <!-- Copier le lien (pour TikTok ou Instagram) -->
            <button onclick="navigator.clipboard.writeText('{{ request()->fullUrl() }}')" title="Copier le lien" class="w-9 h-9 bg-gray-300 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                <!-- Icône lien ou TikTok -->
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298-.002.595.042.88.13V9.4a6.33 6.33 0 0 0-1-.08A6.34 6.34 0 0 0 3.35 15.6a6.34 6.34 0 0 0 10.63 4.65c.046-.04.091-.082.135-.126V15.6v-9h2.02a4.82 4.82 0 0 0 3.45 3.45v-3.37z"/>
                </svg>
            </button>
        </div>
        </div>
    </article>

    <!-- Related Articles -->
    {{-- <a href="{{route('pages.category',['slug'=>$article->category->slug])}}" class="view-all-btn ml-6">
        <span class="text">Voir tout</span>
        <span class="arrow-container">
            <span class="arrow-line"></span>
            <span class="arrow-head"></span>
        </span>
    </a> --}}
    <section class="mt-16">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center flex-1">
                <h2 class="section-title text-primary mr-4">Articles Similaire</h2>
                <div class="flex-grow h-px bg-gray-300"></div>
            </div>
            <a href="{{route('pages.category',['slug'=>$article->category->slug])}}" class="view-all-btn ml-6">
                <span class="text">Voir tout</span>
                <span class="arrow-container">
                    <span class="arrow-line"></span>
                    <span class="arrow-head"></span>
                </span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($relatedArticles as $relatedArticle)
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:-translate-y-1 transition-transform duration-300">
                    <a href="{{ route('pages.articleDetail', ['slug' => $relatedArticle->slug]) }}">
                        <div class="h-[200px] overflow-hidden">
                        <img src="{{$relatedArticle->image}}" alt="{{$relatedArticle->title}}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <span class="text-accent text-xs font-medium uppercase">{{$relatedArticle->category->name}}</span>
                        <h3 class="text-text-dark font-semibold text-base mt-2 mb-3">{{$relatedArticle->title}}</h3>
                        <div class="flex justify-between text-gray-500 text-xs">
                            <span>{{$relatedArticle->created_at->format('d/m/y')}}</span>
                            <span>{{$relatedArticle->author->name}}</span>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
            
        </div>
    </section>
@endsection