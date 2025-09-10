<section class="mb-12">
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center flex-1">
            <h2 class="section-title text-primary mr-4">Dernières vidéos</h2>
            <div class="flex-grow h-px bg-gray-300"></div>
        </div>
        <a href="{{route('videos.index')}}" class="view-all-btn ml-6">
            <span class="text">Voir tout</span>
            <span class="arrow-container">
                <span class="arrow-line"></span>
                <span class="arrow-head"></span>
            </span>
        </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Video Card 1 -->
        @foreach ($videos as $video)
            <a href="{{route('videos.show',['slug'=>$video->slug])}}">
                <div class="bg-white rounded-lg overflow-hidden shadow-sm">
                    <div class="relative h-[180px] overflow-hidden">
                        <img src="{{$video->thumb}}" alt="Video 1" class="w-full h-full object-cover">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-12 h-12 bg-accent/80 rounded-full flex items-center justify-center text-white">▶</div>
                        </div>
                        <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">3:42</div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-text-dark font-semibold text-base mb-2">{{$video->title}}</h3>
                        <div class="flex justify-between text-gray-500 text-xs">
                            <span>{{$video->created_at->format('d/m/y')}}</span>
                            {{-- <span>3.4M vues</span> --}}
                        </div>
                    </div>
                </div>
            </a>
        @endforeach        
    </div>
</section>