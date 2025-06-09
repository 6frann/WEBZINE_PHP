@extends('templates.home')

@section('title', 'videos')

@section('content')
    <h1 class="text-3xl font-bold text-primary mb-8">Vidéos</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($videos as $video)
            <a href="{{route('pages.videoDetail',['slug'=> $video->slug])}}" class="block">
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:-translate-y-1 transition-transform duration-300">
                    <div class="relative h-[200px] overflow-hidden">
                        <img src="{{$video->thumb}}" alt="Video 1" class="w-full h-full object-cover">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-12 h-12 bg-accent/80 rounded-full flex items-center justify-center text-white">▶</div>
                        </div>
                        {{-- <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">3:42</div> --}}
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
@endsection
        
    