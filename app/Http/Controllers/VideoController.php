<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVideoRequest;
use App\Models\Comment;

class VideoController extends Controller
{

    public function index()
    {
        
    }

    public function create()
    {
        $categories = Category::all();
        return view('videos.create', compact('categories'));
    }

    public function store(StoreVideoRequest $request)
    {
        $request->user()->videos()->create($request->all());

        return redirect()->route('index')->with('alert', __('message.success'));
    }

    public function show(Request $request, Video $video)
    {
        $video->load('comments.user');
        return view('videos.show', compact('video'));
    }

    public function edit(Video $video)
    {
        $categories = Category::all();
        return view('videos.edit', compact('video', 'categories'));
    }

    public function update(Request $request, Video $video)
    {
        $video->update($request->all());
        return redirect()->route('videos.show', $video->slug)->with('alert', __('message.Video_updated'));
    }

    
}
