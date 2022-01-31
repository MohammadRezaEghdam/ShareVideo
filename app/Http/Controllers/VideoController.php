<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
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

    public function store(StoreVideoRequest $request){
        Video::create($request->all());

        return redirect()->route('index')->with('alert',__('message.success'));
    }

    public function show(Request $request,Video $videos){
        return view('videos.show',compact('videos'));
    }
}