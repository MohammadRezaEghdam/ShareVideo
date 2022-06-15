<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store(Request $requset,string $likeable_type,string $likeable_id)
    {
        $model_name = 'App\\Models\\' . ucfirst($likeable_type);
        $routKey = (new $model_name)->getRouteKeyName();
        $likeable = $model_name::where($routKey, $likeable_id)->firstOrfail();
        $likeable->likes()->create([
            'user_id' => auth()->id(),
            'vote' => 1
        ]);

        return back();
    }
}
