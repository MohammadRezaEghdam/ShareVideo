<?php
namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VideoController extends Controller{

    public function index(){
        $videos = Video::all();
        dd($videos);
    }

    public function create(){
        return view('videos.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
            'length' => ['required', 'integer'],
            'slug' => ['required', 'unique:videos,slug'],
            'url' => ['required','url'],
            'description' => ['required'],
            'thumbnail' => ['required']
        ]);


        Video::create($request->all());

        return redirect()->route('index')->with('alert',__('message.success'));
    }
}