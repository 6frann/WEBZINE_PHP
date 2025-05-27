@extends('templates.home')

@section('title', $video->title)

@section('content')
            <!-- Video Content -->
            <article class="max-w-4xl mx-auto">
                <header class="mb-8">
                    {{-- <span class="article-tag text-sm px-4 py-1.5 bg-accent text-white rounded-full mb-4 inline-block transform hover:scale-105 transition-transform">clip Officiel</span> --}}
                    <h1 class="text-4xl font-bold text-primary mb-4">{{$video->title}}</h1>
                    <div class="flex items-center text-gray-600 mb-6">
                        <span class="mr-4">{{$video->created_at->format('d M Y')}}</span>
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
                        {{-- <div class="absolute inset-0 flex items-center justify-center"> --}}
                            {{-- <button class="w-20 h-20 bg-accent/80 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </button> --}}
                        {{-- </div> --}}
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
                        <a href="#" class="text-gray-600 hover:text-accent">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-accent">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-accent">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
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