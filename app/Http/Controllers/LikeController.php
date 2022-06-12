<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store(Request $requset,Video $video)
    {
        $video->likes()->create([
            'user_id' => auth()->id(),
            'vote' => 1
        ]);

        return back();
    }
}
