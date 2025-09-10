@extends('templates.home')

@section('title', $video->title)

@section('content')
    <!-- Video Content -->
    <article class="max-w-4xl mx-auto">
        <header class="mb-8">
            {{-- <span class="article-tag text-sm px-4 py-1.5 bg-accent text-white rounded-full mb-4 inline-block transform hover:scale-105 transition-transform">clip Officiel</span> --}}
            <h1 class="text-4xl font-bold text-primary mb-4">{{$video->title}}</h1>
            <div class="flex items-center text-gray-600 mb-6">
                <span class="mr-4">{{$video->created_at->format('d/m/y')}}</span>
                {{-- <span class="mr-4">Par Jean Dupont</span> --}}
            </div>
            {{-- <div class="flex flex-wrap gap-2 mb-6">
                <span class="px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium">#Clips</span>
                <span class="px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium">#Nekfeu</span>
                <span class="px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium">#RapFrançais</span>
                <span class="px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium">#Musique</span>
            </div> --}}
            <div class="relative aspect-video rounded-lg overflow-hidden mb-8">
                <iframe 
                    src="{{ $video->video_url }}" 
                    class="w-full h-full" 
                    allowfullscreen>
                </iframe>
            </div>
        </header>
        <div class="prose prose-lg max-w-none">
            <p class="lead text-xl text-gray-700 mb-6">
                {{strip_tags(html_entity_decode($video->content))}}                    
            </p>
        </div>

        <div class="mt-12 border-t border-gray-200 pt-8">
            <h3 class="text-xl font-bold text-primary mb-4">Partager cette vidéo</h3>
            <div class="flex space-x-4">
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($video->title) }}" target="_blank" rel="noopener" title="Partager sur X" class="w-9 h-9 bg-gray-300 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                <!-- Icône X -->
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
            </a>
            <!-- Partager sur Facebook -->
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" rel="noopener" title="Partager sur Facebook" class="w-9 h-9 bg-gray-300 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                <!-- Icône Facebook minimaliste -->
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M16 8.5h-2a1 1 0 0 0-1 1V12h3l-.5 3H13v7h-3v-7H7v-3h3v-2.5A3.5 3.5 0 0 1 13.5 6H16v2.5z"/>
                </svg>
            </a>
            </div>
        </div>
    </article>

    <!-- Related Videos -->
    {{-- <section class="mt-16">
        <h2 class="text-2xl font-bold text-primary mb-8">Vidéos similaires</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:-translate-y-1 transition-transform duration-300">
                <div class="relative h-[200px] overflow-hidden">
                    <img src="/api/placeholder/300/200" alt="Vidéo similaire 1" class="w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-12 h-12 bg-accent/80 rounded-full flex items-center justify-center text-white">▶</div>
                    </div>
                </div>
                <div class="p-4">
                    <span class="text-accent text-xs font-medium uppercase">Clips</span>
                    <h3 class="text-text-dark font-semibold text-base mt-2 mb-3">SCH - "Nouveau Monde" (Clip Officiel)</h3>
                    <div class="flex justify-between text-gray-500 text-xs">
                        <span>12 mars 2024</span>
                        <span>2.1M vues</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:-translate-y-1 transition-transform duration-300">
                <div class="relative h-[200px] overflow-hidden">
                    <img src="/api/placeholder/300/200" alt="Vidéo similaire 2" class="w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-12 h-12 bg-accent/80 rounded-full flex items-center justify-center text-white">▶</div>
                    </div>
                </div>
                <div class="p-4">
                    <span class="text-accent text-xs font-medium uppercase">Clips</span>
                    <h3 class="text-text-dark font-semibold text-base mt-2 mb-3">Laylow - "Performance live au Zenith"</h3>
                    <div class="flex justify-between text-gray-500 text-xs">
                        <span>10 mars 2024</span>
                        <span>1.8M vues</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:-translate-y-1 transition-transform duration-300">
                <div class="relative h-[200px] overflow-hidden">
                    <img src="/api/placeholder/300/200" alt="Vidéo similaire 3" class="w-full h-full object-cover">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-12 h-12 bg-accent/80 rounded-full flex items-center justify-center text-white">▶</div>
                    </div>
                </div>
                <div class="p-4">
                    <span class="text-accent text-xs font-medium uppercase">Clips</span>
                    <h3 class="text-text-dark font-semibold text-base mt-2 mb-3">Booba - "Backstage de son dernier concert"</h3>
                    <div class="flex justify-between text-gray-500 text-xs">
                        <span>8 mars 2024</span>
                        <span>1.5M vues</span>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}
@endsection