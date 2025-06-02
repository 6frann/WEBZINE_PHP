<section class="mb-12">
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center flex-1">
            <h2 class="section-title text-primary mr-4">Dernières actualités</h2>
            <div class="flex-grow h-px bg-gray-300"></div>
        </div>
        <a href="#" class="view-all-btn ml-6">
            {{-- <span class="text">Voir tout</span> --}}
            <span class="arrow-container">
                <span class="arrow-line"></span>
                <span class="arrow-head"></span>
            </span>
        </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- News Card 1 -->
        @foreach ($articles as $article)
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:-translate-y-1 transition-transform duration-300 w-full">
                <a href="{{route('pages.articleDetail',['slug'=>$article->slug])}}" class="block">
                    <div class="aspect-[16/9] overflow-hidden">
                        <img src="{{ $article->image }}" alt="News 1" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <span class="text-accent text-xs font-medium uppercase">{{$article->category->name}}</span>
                        <h3 class="text-text-dark font-semibold text-base mt-2 mb-3">{{$article->title}}</h3>
                        <div class="flex justify-between text-gray-500 text-xs">
                            <span>{{$article->created_at->format('d M Y')}}</span>
                            <span>{{$article->author->name}}</span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>