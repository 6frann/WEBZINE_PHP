<?php

namespace App\Http\Controllers;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index() {
        $videos = Video::all();
        return view('test3', compact('videos'));
    }

    public function show($slug) {
        $video = Video::where('slug', $slug)->first();
        return view('test4', compact('video'));
    }
}
