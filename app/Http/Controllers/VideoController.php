<?php

namespace App\Http\Controllers;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index() {
        $videos = Video::all();
        return view('pages.videos.index', compact('videos'));
    }

    public function show($slug) {
        $video = Video::where('slug', $slug)->first();
        return view('pages.videos.show', compact('video'));
    }
}
