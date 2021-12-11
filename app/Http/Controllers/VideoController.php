<?php
namespace App\Http\Controllers;

use Illuminate\View\View;

class VideoController extends Controller{
    public function index(){
        $videos = ['A', 'B', 'C', 'D', 'E', 'F'];
        return View('videos',[
            'data' => $videos
        ]);
    }
}