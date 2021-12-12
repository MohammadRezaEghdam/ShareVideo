<?php
namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\View\View;

class VideoController extends Controller{

    public function index(){
        $videos = Video::all();
        dd($videos);
    }

}