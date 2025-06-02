<section class="mb-16">   
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        @foreach ($topArticles as $article)
            <div class="lg:col-span-2">
                <div class="relative h-[500px] rounded-xl overflow-hidden group">                   
                        <a href="{{route('pages.articleDetail', ['slug' => $article->slug]) }}">
                            <img src="{{$article->image}}" alt="Article principal" class="w-full h-full object-cover object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8">
                                <span class="article-tag text-sm px-4 py-1.5 bg-accent text-white rounded-full mb-4 inline-block transform hover:scale-105 transition-transform">{{$article->category->name}}</span>
                                <h2 class="article-title text-5xl md:text-6xl xl:text-7xl text-white mb-4 leading-tight">{{$article->title}}</h2>
                            <div class="article-meta text-white/90 text-base">
                                {{-- <span class="mr-6">{{$article->created_at}}</span> --}}
                                {{-- <span>Par Paul Dubois</span> --}}
                            </div>
                        </a>                   
                </div>               
            </div>
        @endforeach
    </div>
    
        {{-- <div class="flex flex-col lg:gap-6 md:flex-row lg:flex-col">
            <div class="relative h-[240px] md:flex-1 rounded-xl overflow-hidden group">
                <img src="article/images/sch-album.jpg" alt="Article secondaire 1" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <span class="inline-block bg-accent text-white text-sm font-medium px-3 py-1.5 rounded-full mb-3 uppercase transform hover:scale-105 transition-transform">Albums</span>
                    <h3 class="text-xl font-bold text-white mb-2 leading-tight">SCH annonce la date de sortie de son prochain album</h3>
                    <div class="text-white/90 text-sm">31 mars 2025</div>
                </div>
            </div>
            <div class="relative h-[240px] md:flex-1 rounded-xl overflow-hidden group mt-6 md:mt-0 lg:mt-0">
                <img src="article/images/damso-concert.jpg" alt="Article secondaire 2" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <span class="inline-block bg-accent text-white text-sm font-medium px-3 py-1.5 rounded-full mb-3 uppercase transform hover:scale-105 transition-transform">Concert</span>
                    <h3 class="text-xl font-bold text-white mb-2 leading-tight">Damso : la tournée des stades affiche déjà complet</h3>
                    <div class="text-white/90 text-sm">30 mars 2025</div>
                </div>
            </div>
        </div> --}}
    </div>
</section>