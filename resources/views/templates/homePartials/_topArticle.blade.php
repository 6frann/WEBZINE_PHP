<section class="mb-16">
    @if(count($topArticles) >= 1)
        @php
            $mainArticle = $topArticles[0];
            $secondaryArticles = $topArticles->slice(1, 2);
        @endphp

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <div class="relative h-[500px] rounded-lg overflow-hidden group">
                    <a href="{{ route('pages.articleDetail', ['slug' => $mainArticle->slug]) }}">
                        <img src="{{ $mainArticle->image }}" alt="Article principal" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-8">
                            <span class="article-tag text-sm px-4 py-1.5 bg-accent text-white rounded-full mb-4 inline-block">
                                {{ $mainArticle->category->name }}
                            </span>
                            <h2 class="article-title text-5xl md:text-6xl xl:text-7xl text-white mb-4 leading-tight">{{ $mainArticle->title }}</h2>
                            <div class="article-meta text-white/90 text-base">
                                {{-- <span class="mr-6">{{ $mainArticle->created_at }}</span> --}}
                                {{-- <span>Par Paul Dubois</span> --}}
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-col lg:gap-6 md:flex-row lg:flex-col">
                @foreach($secondaryArticles as $key => $article)
                    <div class="relative h-[240px] md:flex-1 rounded-lg overflow-hidden group {{ $key == 1 ? 'mt-6 md:mt-0 lg:mt-0' : '' }}">
                        <a href="{{ route('pages.articleDetail', ['slug' => $article->slug]) }}">
                            <img src="{{ $article->image }}" alt="Article secondaire {{ $key+1 }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <span class="inline-block bg-accent text-white text-sm font-medium px-3 py-1.5 rounded-full mb-3 uppercase">
                                    {{ $article->category->name }}
                                </span>
                                <h3 class="text-xl font-bold text-white mb-2 leading-tight">{{ $article->title }}</h3>
                                {{-- <div class="text-white/90 text-sm">{{ $article->created_at->format('d M Y') }}</div> --}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</section>